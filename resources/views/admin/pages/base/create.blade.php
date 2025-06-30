<x-admin.layout.master
    :stack="[trans('general.page.index.title',['model'=>trans('base.model')])=>route('admin.base.index')]"
    :title="trans('general.page.create.page_title',['model'=>trans('base.model')])">
    <x-admin.widget.form-card
        :title="trans('general.page.create.title',['model'=>trans('base.model')])"
        :action="route('admin.base.store')"
        :multipart="1"
    >
        <input hidden name="locale" value="{{app()->getLocale()}}"/>

        <x-admin.element.input
            parent-class="col-lg-12"
            :label="trans('validation.attributes.title')"
            name="title"
            required="1"
        />

        <x-admin.element.input
            parent-class="col-lg-12"
            :label="trans('validation.attributes.description')"
            name="description"
            required="1"
        />

        <x-admin.element.dropify
            parent-class="col-md-12"
            :label="trans('validation.attributes.image')"
            helper-label="1280*720"
            name="image"/>

        @slot('footer')
            <x-admin.widget.form-sumbit :back-route="route('admin.base.index')"/>
        @endslot
    </x-admin.widget.form-card>
</x-admin.layout.master>
