@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>CAMPUS API REPOSITORY (CAR)</h1></div>

                    <div class="card-body"><div class="alert alert-light"> In order to gain access to any API available, please click the Register button below to request an Invitation Token.</div>

                    @if (Route::has('login'))
                            <div class="align-content-lg-center">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-primary">Auth API</a>
                                @else


                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-dark" style="margin-left: 1.25em;">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif




                </div>
            </div>
        </div>
    </div>
@endsection
