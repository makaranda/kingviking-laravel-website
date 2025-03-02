@extends('layouts.login')

@section('content')
{{-- {{ route('admin.authenticate') }} --}}
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ url('assets/login/images/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="" method="POST">
                <span class="login100-form-title p-b-10">
                    <img src="{{ url('assets/images/king-viking-logo.jpg') }}" alt="King Viking Icon" class="img-fluid login-logo">
                </span>
                <span class="login100-form-title billing-title p-b-10">
                    Admin Login
                </span>
                @if (Session::has('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div><i class="fa fa-ban mr-2"></i>Error</div>
                            </div>
                            <div class="col-12 col-md-12">
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @csrf
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="user_name" placeholder="Type your username">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="user_password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                {{-- <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                        Forgot password?
                    </a>
                </div> --}}

                <div class="container-login100-form-btn mt-5">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                        <a href="{{ route('home.index') }}" class="btn btn-outline-secondary">Bck to Main</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

@endsection

@push('css')
    <style>
        img.img-fluid.login-logo{
            width: 120px !important;
        }
        .billing-title {
            color: rgb(81 72 17);
            text-transform: uppercase;
        }
    </style>
@endpush

@push('css')
    <style>

    </style>
@endpush
