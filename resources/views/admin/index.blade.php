@extends('admin.layouts.base')

@section('title', 'Panel de Control')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                <div class="container-fluid">
                    @foreach ($phones as $phone)
                        <div class="row">
                            <div class="col-6">
                                <phone-admin-card-component
                                    :name="'{{$phone['name']}}'"
                                    :photo="'{{$phone['photoUrl']}}'"
                                    :price="'{{$phone['price']}} €'"
                                    :description="'{{$phone['description']}}'"
                                    :delete_link="'{{url('/admin/phone/delete/'.$phone['id'])}}'"
                                ></phone-admin-card-component>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
