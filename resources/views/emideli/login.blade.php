@extends('app')

@section('title')
Login
@endsection

@section('content')

    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 15px;">
                        <div class="card-body d-flex flex-column align-items-center" >
                            <form class="text-center" method="post">
                                <div><img src="{{ asset('img/Logo.png') }}" alt="EmiDeli_Logo" style="height: 150px; width: 200px;"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="border: 2px solid #FFBBBB;"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="border: 2px solid #FFBBBB;"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection