<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/harmony.css')}}">
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
    </head>
    <body>
        <!-- home -->
        <header>
            <div class="banner">
                <img src="{{ asset('images/harmony-banner.jpg')}}">
            </div>
            <div class="harmony">
                <div class="logo">
                    <img src="{{ asset('images/harmony-logo.jpg')}}">
                </div>
                <nav>
                    <a href="{{ route('homes')}}"> HOME </a>
                    <a href="{{ route('about')}}"> ABOUT </a>
                    <a href="{{ route('service')}}"> SERVICE </a>
                    <a href="{{ route('projects')}}"> PROJECTS </a>
                    <a href="{{ route('contacts')}}"> CONTACTS </a>
                </nav>
            </div>
            <section id="para">
            <p> Welcome to Harmony </p>
            <p> Modern interior design </p>
            </section>

            <div class="log">
                <button id="log" onclick="location.href='{{route('register')}}'"  >{{ __('Sign Up') }}</button>
                <button id="log" onclick="location.href='{{route('login')}}'"  >{{ __('Sign In') }}</button>
            </div>

            <a href="{{ route('homes')}}">
                <button class="button"><span> Get Started </span></button>
            </a>

        </header>
        
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>
    </body>
</html>