@extends('web.layout.main')

@section('content')
    <div class="p-contact">
        @php
            $base = \App\Models\Base::find(session('base_id'));
        @endphp
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-main">
                            <h2 class="title">{{ trans('page.pages.contact.page_title') }}</h2>

                            <ul class="breacrumd">
                                @if($base)
                                    <li><a href="{{ route('home-by-base', ['locale' => app()->getLocale(), 'base' => $base?->slug]) }}">{{ trans('home.header.home') }} </a></li>
                                @else
                                    <li><a href="/">{{ trans('home.header.home') }} </a></li>
                                @endif
                                <li>/</li>
                                <li>{{ trans('page.pages.contact.breadcrumb') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-main">
                            <div class="top-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.4502886549985!2d9.959066777059126!3d53.54972885948595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f0002b2ee23%3A0x951287e09d4e307a!2sSt.Pauli%20Street%20Food!5e0!3m2!1sen!2s!4v1751972825670!5m2!1sen!2s"
                                    width="100%" height="533px" style="border:0;" allowfullscreen="" loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                            </div>

                            <div class="contact-info">
                                <div class="item" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="icon"><i class="fa fa-phone-volume"></i></div>
                                    <h5>{{ trans('page.pages.contact.info.text-1') }}</h5>
                                    <p>+(49) 40 36036080</p>
                                    <p>info@pauli-streetfood.de</p>

                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="icon"><i class="fa fa-map"></i></div>
                                    <h5>{{ trans('page.pages.contact.info.text-2') }}</h5>
                                    <p>St.Pauli Street Food, Reeperbahn 96, </p>
                                    <p>20359 Hamburg, Tyskland</p>
                                </div>

                                <div class="item" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="icon"><i class="fa fa-clock"></i></div>
                                    <h5>{{ trans('page.pages.contact.info.text-3') }}</h5>
                                    <p>{{ trans('home.sidebar.opening_hours.Monday') }} - {{ trans('home.sidebar.opening_hours.Friday') }}: 11.00 - 01:00 (nächster Tag) </p>
                                    <p>{{ trans('home.sidebar.opening_hours.Saturday') }}, {{ trans('home.sidebar.opening_hours.Sunday') }}: 11.00 - 07:00 (nächster Tag) </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">{{ trans('page.pages.contact.form.title') }}</h3>
                            <p class="text" data-aos-duration="1000" data-aos="fade-up">{{ trans('page.pages.contact.form.subtitle') }}</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="location-main">
                            <div class="image left" data-aos-duration="1000" data-aos="zoom-in-right">
                                <img src="/img/map/contact-01.jpg" alt="">
                            </div>
                            <div class="content">
                                <form id="contactForm1" method="POST" action="{{ route('store-contact-from-web', ['locale' => app()->getLocale()]) }}" class="s2">
                                    @csrf
                                    <div class="form-group">
                                        <input data-aos-duration="1000" value="{{ old('name') }}" data-aos="fade-up" type="text" class="form-control" id="name" name="name" placeholder="{{ trans('page.pages.contact.form.placeholders.name') }}*">
                                        <p class="error" id="error-name"></p>

                                        <input data-aos-duration="1000" value="{{ old('phone') }}" data-aos="fade-up" type="text" class="form-control" id="phone" name="phone" placeholder="{{ trans('page.pages.contact.form.placeholders.phone') }}*">
                                        <p class="error" id="error-phone"></p>

                                        <input data-aos-duration="1000" value="{{ old('email') }}" data-aos="fade-up" type="email" class="form-control" id="mail" name="email" placeholder="{{ trans('page.pages.contact.form.placeholders.email') }}">
                                        <p class="error" id="error-email"></p>

                                        <textarea data-aos-duration="1000" value="{{ old('Message') }}" data-aos="fade-up" name="message" id="message" cols="30" rows="10"
                                                  placeholder="{{ trans('page.pages.contact.form.placeholders.message') }}*"></textarea>
                                        <p class="error" id="error-message"></p>
                                    </div>
                                    <div class="send-wrap">
                                        <button type="submit" class="tf-button style3" data-aos-duration="1000" data-aos="fade-up">{{ trans('page.pages.contact.form.button') }}</button>
                                    </div>
                                    <div id="success-message" style="color: green; margin-top: 1rem;"></div>
                                </form>
                            </div>
                            <div class="image right" data-aos-duration="1000" data-aos="zoom-in-left">
                                <img src="/img/map/contact-02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        document.getElementById('contactForm1').addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear old messages
            document.querySelectorAll('.error').forEach(el => el.innerText = '');
            const successMessage = document.getElementById('success-message');
            successMessage.innerText = '';
            successMessage.style.opacity = '1'; // Reset opacity

            let form = e.target;
            let data = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: data
            })
                .then(response => {
                    if (response.status === 422) {
                        return response.json().then(data => {
                            let errors = data.errors;
                            for (let field in errors) {
                                document.getElementById(`error-${field}`).innerText = errors[field][0];
                            }
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data?.success) {
                        successMessage.innerText = data.success;
                        form.reset();

                        // Start fade-out after 5 seconds
                        setTimeout(() => {
                            successMessage.style.transition = 'opacity 0.5s ease';
                            successMessage.style.opacity = '0';

                            // Remove after fade
                            setTimeout(() => {
                                successMessage.innerText = '';
                                successMessage.style.opacity = '1'; // Reset for next time
                            }, 500);
                        }, 3000);
                    }
                })
                .catch(err => {
                    console.error('Something went wrong:', err);
                });
        });
    </script>
@endpush
