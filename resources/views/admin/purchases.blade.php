@extends('admin.layouts.base')

@section('title', 'Compras')

@section('active', 'purchases')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                <div class="container-fluid">
                    @foreach ($purchases as $purchase)
                        <div class="row mb-5">
                            <div class="col-12">
                                <purchase-card-component
                                    :name="'{{$purchase['phone']['name']}}'"
                                    :photo="'{{$purchase['phone']['photoUrl']}}'"
                                    :price="'{{$purchase['phone']['price']}}'"
                                    :description="'{{$purchase['phone']['description']}}'"
                                    :username="'{{$purchase['username']}}'"
                                ></purchase-card-component>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
