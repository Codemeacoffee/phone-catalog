@extends('main.layouts.base')

@section('title', 'Detalles de '.$phone['name'])

@section('content')
    <phone-details-component
        :name="'{{$phone['name']}}'"
        :photo="'{{$phone['photoUrl']}}'"
        :price="'{{$phone['price']}} €'"
        :description="'{{$phone['description']}}'"
        :purchase_link="'{{url('purchase/'.$phone['id'])}}'"
    ></phone-details-component>
@endsection
