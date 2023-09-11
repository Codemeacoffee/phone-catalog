@extends('main.layouts.base')

@section('title', 'Bienvenido')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                <div class="container-fluid">
                    @foreach ($phones as $phone)
                        <div class="row mb-5">
                            <div class="col-12">
                                <phone-card-component
                                    :name="'{{$phone['name']}}'"
                                    :photo="'{{$phone['photoUrl']}}'"
                                    :description="'{{$phone['description']}}'"
                                    :link="'{{url('phone/'.$phone['id'])}}'"
                                ></phone-card-component>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
