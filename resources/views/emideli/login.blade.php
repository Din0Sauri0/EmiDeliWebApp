@extends('app')

@section('title')
Login
@endsection

@section('content')

<section class="screen-height content-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 15px;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="mb-3"><img class="login-img" src="{{ asset('img/Logo.png') }}" alt="EmiDeli_Logo"></div>
                        @livewire('login-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection