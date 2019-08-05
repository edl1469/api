@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">API TOKEN INFORMATION:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You have successfully registered. Use the following API Token to access the authentication resource:


                                               <div class="jumbotron">API TOKEN: {{ $user->api_token }}</div>
                    <div>
                        <p>
                            You will need to provide 3 parameters in order to use the authentication API.
                        <ul>
                            <li>
                                Beach ID: Labeled - "beachid";
                            </li>
                            <li>Password: Labeled - "pwd"</li>
                            <li>API TOken: Labeled - "api_token" (60 character alpha numeric token highlighted above)</li>
                        </ul>

                        </p>

                        <p>Authentication URL: <a href="http://ca.localhost/api/ldap">http://ca.localhost/api/ldap</a></p>

                        <p> Sample Query: http://ca.localhost/api/ldap?beachid=000111222&pwd=password&api_token=6b2f3t9g...</p>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
