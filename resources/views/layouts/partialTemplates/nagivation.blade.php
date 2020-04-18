<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/e-shop.css')}}">

    </head>
    <body>
<div class="navigation-container">


        <ul class="nav-cont">
            <li>
                <a href="{{ url('/') }}">home</a>
            </li>
            <li>
                <a href="all_products">products</a>
            </li>
            <li>
                <a href="/contact">contact</a>
            </li>
        </ul>



            <div class="login-register">

                    @if (Route::has('login'))


                        <div class="">
                            <a href="/cart" class="cart" ><span class="cart-items">120</span></a>
                            {{-- <a href="#" class="cart"><span class="cart-items">1</span></a> --}}

                            <a class="login-register-margin" href="{{ url('/account') }}">account</a>
                            @auth

                                    <a style="float: left; margin-top: -8px" class="login-register-margin" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                            @else
                                <a class="login-register-margin" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="login-register-margin" href="{{ route('register') }}">Register</a>
                                @endif


                            @endauth
                        </div>
                    @endif

                </div>
