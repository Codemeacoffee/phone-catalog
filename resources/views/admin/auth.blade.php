@extends('admin.layouts.base')

@section('title', 'Acceso')

@section('content')
    <admin-auth-component
        :action="'{{url('admin')}}'"
        :csrf="'{{csrf_token()}}'"
    ></admin-auth-component>
@endsection
