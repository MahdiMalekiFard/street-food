<x-admin.layout.master
    :stack="[trans('general.page.index.title',['model'=>trans('base.model')])=>route('admin.base.index')]"
    :title="trans('general.page.edit.page_title',['model'=>trans('base.model')])">
    <x-admin.widget.form-card
        :title="trans('general.page.edit.title',['model'=>trans('base.model'),'name'=>$base->title])"
        :action="route('admin.base.update',$base->id)"
        method="PATCH">

        <x-admin.element.input
            parent-class="col-lg-12"
            :label="trans('validation.attributes.title')"
            name="title"
            required="1"
            :value="$base->title"
        />

        <x-admin.element.input
            parent-class="col-lg-12"
            :label="trans('validation.attributes.description')"
            name="description"
            required="1"
            :value="$base->description"
        />

        <x-admin.element.dropify
            parent-class="col-md-12"
            :label="trans('validation.attributes.image')"
            name="image"
            helper-label="1280*720"
            default="{{$base->getFirstMediaUrl('image','720')}}"/>

        @slot('footer')
            <x-admin.widget.form-sumbit :back-route="route('admin.base.index')"/>
        @endslot
    </x-admin.widget.form-card>
</x-admin.layout.master>
