@extends('main.layouts.base')

@section('title', 'Bienvenido')

@section('content')
    @foreach ($phones as $phone)
        <phone-card-component
            :name="'{{$phone['name']}}'"
            :photo="'{{$phone['photoUrl']}}'"
            :link="'{{url('phone/'.$phone['id'])}}'"
        ></phone-card-component>
    @endforeach
@endsection
