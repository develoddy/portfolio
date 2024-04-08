{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.guest')

@section('content')
<!-- Body main wrapper start -->
<main>

    <!-- login area start -->
    <section class="bd-login__area section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="login__wrapper">
                        <div class="login__top mb-30 text-center">
                            <h3 class="login__title">Bienvenido a Lujandev</h3>
                            <p>Ingrese sus credenciales para acceder a su cuenta.</p>
                        </div>
                        <div class="login__form">
                            <form id="contact-form" action="{{ route('home') }}" method="POST">
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input name="email" id="email" type="email" placeholder="Correo electrónico o username">
                                        <div class="form__icon"><span><i class="fa-light fa-user"></i></span></div>
                                    </div>
                                </div>
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input name="password" id="password" type="password" placeholder="Contraseña">
                                        <i class="fa fa-eye pass-icon"></i>
                                        <div class="form__icon"><span><i class="fa-light fa-lock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="login__option mb-30 d-sm-flex justify-content-between">
                                    <div class="login__remember">
                                        <input type="checkbox" id="bd-remember">
                                        <label for="bd-remember">Recordar</label>
                                    </div>
                                    <div class="login__forgot">
                                        <a href="forgot.html">¿Has olvidado tu contraseña?</a>
                                    </div>
                                </div>
                                <div class="login__btn">
                                    <button class="bd-btn w-100" type="submit">Iniciar sesión</button>
                                </div>
                            </form>
                            <div class="login__social text-center">
                                <h6 class="login__social-header">O inicia sesión con</h6>
                                <div class="login__social-item d-flex flex-wrap justify-content-sm-center">
                                    <a href="#">
                                        <span class="login__social-icon">
                                        <img src="{{ Vite::asset('resources/imgs/icons/google.png') }}" alt="image"></span>
                                        <span>Google</span>
                                    </a>
                                    <a href="#">
                                        <span class="login__social-icon">
                                            <img src="{{ Vite::asset('resources/imgs/icons/facebook.png') }}" alt="image">                        
                                        </span>
                                        <span>Facebook</span>
                                    </a>
                                    <a href="#">
                                        <span class="login__social-icon">
                                            <img src="{{ Vite::asset('resources/imgs/icons/twiter.png') }}" alt="image">
                                        </span>
                                        <span>Twitter</span>
                                    </a>
                                </div>
                            </div>
                            <div class="login__register-now">
                                <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate ahora</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->

</main>
<!-- Body main wrapper end -->
@endsection