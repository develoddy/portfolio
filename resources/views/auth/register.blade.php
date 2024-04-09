{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
                            <h3 class="login__title">¡Regístrate ahora!</h3>
                            <p>Puedes registrarte con tu cuenta social a continuación</p>
                        </div>
                        <div class="login__form">
                            {{-- <form method="POST" action="{{ route('auth-register') }}"> --}}
                            <form method="POST" action="#">
                                @csrf
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input type="text" name="name" id="name" placeholder="Username">
                                        <div class="form__icon"><span><i class="fa-light fa-user"></i></span></div>
                                    </div>
                                </div>
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input type="email" id="email" name="email"  placeholder="Enter your email">
                                        <div class="form__icon"><span><i class="fa-light fa-envelope"></i></span></div>
                                    </div>
                                </div>
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input type="password" id="password" name="password" placeholder="Password">
                                        <i class="fa fa-eye pass-icon"></i>
                                        <div class="form__icon"><span><i class="fa-light fa-lock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__input-box">
                                    <div class="form__input style-two">
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
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
                                </div>
                                <div class="login__btn">
                                    <button class="bd-btn w-100" type="submit">Registrarse</button>
                                </div>
                            </form>
                            <div class="login__social text-center">
                                <h6 class="login__social-header">O inicia sesión con</h6>
                                <div class="login__social-item d-flex flex-wrap justify-content-sm-center">
                                    <a href="#">
                                        <span class="login__social-icon">
                                            <img src="{{ Vite::asset('resources/imgs/icons/google.png') }}" alt="image">
                                        </span>
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
                                <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
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