@extends('admin.layouts.base')

@section('title', 'Añadir un nuevo teléfono')

@section('active', 'createPhone')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <create-phone-component
                    :action="'{{url('admin/phone/create')}}'"
                    :csrf="'{{csrf_token()}}'"
                ></create-phone-component>
            </div>
        </div>
    </div>
@endsection
