@extends('admin.layouts.base')

@section('title', 'Compras')

@section('content')
    @foreach ($purchases as $purchase)
       <purchase-card-component
           :name="'{{$purchase['phone']['name']}}'"
           :photo="'{{$purchase['phone']['photoUrl']}}'"
           :price="'{{$purchase['phone']['price']}} €'"
           :description="'{{$purchase['phone']['description']}}'"
           :username="'{{$purchase['username']}}'"
       ></purchase-card-component>
    @endforeach
@endsection
