@extends('admin.layouts.base')

@section('title', 'Añadir un nuevo teléfono')

@section('active', 'createPhone')

@section('content')
    <create-phone-component
        :action="'{{url('admin/phone/create')}}'"
        :csrf="'{{csrf_token()}}'"
    ></create-phone-component>
@endsection
