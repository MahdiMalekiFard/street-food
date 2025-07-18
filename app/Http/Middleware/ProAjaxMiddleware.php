<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class ProAjaxMiddleware
{
    public string $flash_name = 'flash_message';
    
    /**
     * After the request has been made, determine if an alert should be shown,
     * or if the user should be redirected to another page.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // return  $response = $next($request);
        $response = $next($request);

        // If the response is a successful response or,
        // If the request is not an ajax request or,
        // If there is already a JSON response,
        // We do not need to do anything, just skip and continue

        // if ($response instanceof JsonResponse || !$this->isAjaxRequest($request) || $response->isSuccessful()) {
        if (
            $response instanceof JsonResponse ||
            ! $this->isAjaxRequest($request) ||
            $response->isServerError() ||
            $response->isSuccessful()
        ) {
            return $response;
        }

        // Should the user be redirected?
        // For example, if from the controller, this is returned:
        // return redirect('/contact')
        // then the user should be redirected
        if ($this->shouldRedirectRequest($request, $response)) {
            return response()->json(['redirect' => $response->getTargetUrl()]);
        }

        // If we've gotten this far, it looks like its an ajax request
        // That means that it must have some sort of flash message.
        // Let's see if we actually have flash message.
        if ($this->sessionHasFlashData($request)) {
            // Since we actually do have flash data/message in the session,
            // Lets get the flash message and display it to the user
            $flash_message = $this->getFlashMessage($request);

            // Lets forget the flash message because we already have it stored in the $flash_message variable
            // to show it to the user
            $request->session()->forget($this->flash_name);

            // Finally, let's return a json with the flash message
            return response()->json([
                'type'    => $flash_message['type'],
                'message' => $flash_message['message'],
                // 'redirect' => $flash_message['redirect'], // Returns false if no redirect request
            ]);
        }

        // So... if the request wants json, return json
        return $request->wantsJson() ? response()->json() : $response;
        // return $response;
    }
    
    /** Determine if the request is an ajax request */
    public function isAjaxRequest(Request $request): bool
    {
        return $request->ajax() && $request->wantsJson();
    }
    
    /** Check if the user should be redirected */
    public function shouldRedirectRequest(Request $request, Response|JsonResponse|RedirectResponse $response): bool
    {
        // If there is no target URL, we know that it is not a redirect request
        if ( ! method_exists($response, 'getTargetUrl')) {
            return false;
        }

        // Does the referrer URI NOT match the target URI?
        // Does the flash message or session have any errors caused by redirect()->withError('error')?
        // If any of those are true, it is a redirect request

        return ($response->getStatusCode() === 302 &&
                $request->server('HTTP_REFERER') != $response->getTargetUrl()) ||
            $request->session()->has('errors');
    }
    
    /** Check if the session has flash data */
    public function sessionHasFlashData(Request $request): bool
    {
        return $request->session()->has($this->flash_name);
    }
    
    /** Get the flash message itself. */
    public function getFlashMessage(Request $request): array
    {
        $session = $request->session();

        $flash_message['type']    = $session->get("{$this->flash_name}.type");
        $flash_message['message'] = $session->get(
            "{$this->flash_name}.message"
        );

        return $flash_message;
    }
}
