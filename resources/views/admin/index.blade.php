@extends('admin.layouts.base')

@section('title', 'Panel de Control')

@section('content')
    @foreach ($phones as $phone)
        <phone-admin-card-component
            :name="'{{$phone['name']}}'"
            :photo="'{{$phone['photoUrl']}}'"
            :price="'{{$phone['price']}} €'"
            :description="'{{$phone['description']}}'"
            :delete_link="'{{url('/admin/phone/delete/'.$phone['id'])}}'"
        ></phone-admin-card-component>
    @endforeach
@endsection
