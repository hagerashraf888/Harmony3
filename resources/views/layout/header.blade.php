<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
        <link rel="stylesheet" href="{{ asset('fonts/fonts/css/all.css')}}">
         @yield('css') 
    </head>
    <body>

        <!-- scroll -->
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>

        <!-- header -->
        <header>
            <div class="banner">
                @yield('banner')
                
            </div>
            <div class="harmony" id="navbar">
                <div class="logo">
                    <a href="{{ route('index')}}">
                    <img src="{{asset('images/harmony-logo.jpg')}}"  id="logo">
                </a>
                </div>
                <nav>
                    @if(url()->current() == route('homes'))
                        <a href="#" id="active"> HOME </a>
                    @else
                        <a href="{{ route('homes')}}"> HOME </a>
                    @endif
                    @if(url()->current() == route('about'))
                        <a href="#" id="active"> ABOUT </a>
                    @else
                        <a href="{{ route('about')}}"> ABOUT </a>
                    @endif
                    @if(url()->current() == route('service'))
                        <a href="#" id="active"> SERVICE </a>
                    @else
                        <a href="{{ route('service')}}"> SERVICE </a>
                    @endif
                    @if(url()->current() == route('projects'))
                        <a href="#" id="active"> PROJECTS </a>
                    @else
                        <a href="{{ route('projects')}}"> PROJECTS </a>
                    @endif
                    @if(url()->current() == route('contacts'))
                        <a href="#" id="active"> CONTACTS </a>
                    @else
                        <a href="{{ route('contacts')}}"> CONTACTS </a>
                    @endif
                    
                </nav>
            </div>
        </header>

        

        