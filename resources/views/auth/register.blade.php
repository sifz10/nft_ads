<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>NFT Ads - Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('assets') !!}/images/favicon.png">
    <link href="{!! asset('assets') !!}/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $key => $error)
                                        <small>{{ $error }}</small> <br>
                                        @endforeach
                                    </div>
                                    @endif
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <label class="mb-1"><strong>Account Type (Select one)</strong></label>
                                        <div class="form-group">
                                          <a href="#">
                                            <div class="custom-control custom-checkbox ml-1 mt-2">
                                                <input type="radio" class="custom-control-input" name="account_type" id="account_type1" value="Project Owner">
                                                <label class="custom-control-label" for="account_type1">Project Owner</label>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox ml-1">
                                                <input type="radio" class="custom-control-input" name="account_type" id="account_type2" value="Website Owner">
                                                <label class="custom-control-label" for="account_type2">Website Owner</label>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{!! route('login') !!}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{!! asset('assets') !!}/vendor/global/global.min.js"></script>
    <script src="{!! asset('assets') !!}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{!! asset('assets') !!}/js/custom.min.js"></script>
    <script src="{!! asset('assets') !!}/js/deznav-init.js"></script>

</body>

</html>



{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />

    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />

    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-auth-card>
</x-guest-layout> --}}
