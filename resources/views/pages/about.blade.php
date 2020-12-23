@extends('layout.all')
        @section('css')
            <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        @endsection

        @section('banner')
            <img src="{{asset('images/harmony-banner.jpg')}}">
            <div class="text"> HARMONY </div>
        @endsection
        
        @section('content')

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
                <i id="down" class="fas fa-sort-down"></i>
            </button>
            <div id="myDropdown" class="dropdown-content">
                <a id="out" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>                    
            </div>
        </div>
        
        <!-- cart -->
    <div class="cart">
        <a href="{{ route('cart')}}">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
        
        <!-- about -->
        <div class="about" data-aos="fade-down">
            <div class="vision" data-aos="fade-up">
                <h1> Our Vision </h1>
                <p>
                    To Be The Global Leader Of Smart Furnishing Solutions.
                </p>
            </div>
            <div class="Mission" data-aos="fade-down">
                <h1> Our Mission </h1>
                <p>
                    We Timely Furnish Your Place With Innovative, Trendy And 
                    Well Designed Solutions Achieving The Highest Quality Yet 
                    Affordable.
                </p>
            </div>
        </div>

        <!-- who -->
        <div class="who">
            <div class="who1" data-aos="zoom-in">
                <img src="{{ asset('images/about.jpg')}}">
            </div>
            <div class="who2" data-aos="zoom-out-right">
                <h1> Who we are </h1>
                <p>
                    We are Specialized In Indoor Modern Furniture And 
                    Provides A Wide Range Of Furnishing Solutions For 
                    Hotels Resorts Industry As Well As Stylish Modern 
                    Residential Furniture.
                </p>
            </div>
        </div>

        <!-- everyone -->
        <section id="everyone">
            <h1 class="every"> Interior design is for everyone. </h1>

            <div class="place" data-aos="zoom-in-right">
                <i class="fas fa-home" id="every"></i>
                <h3> Find your happy place </h3>
                <p> 
                    You deserve a home that is functional and stylish, today. 
                    Don’t put it off until the kids are older or you have more 
                    time. We can create a beautiful space that fits your needs 
                    so you don’t have to be embarrassed to host book club next 
                    month. 
                </p>
            </div>

            <div class="affordable" data-aos="zoom-in-right">
                <i class="fas fa-money-bill" id="every"></i>                
                <h3> Delightfully affordable </h3>
                <p> 
                    We believe that interior design should be accessible to 
                    everyone. That’s why Harmony packages are designed to be 
                    affordable, and our designers are trained to work within 
                    your budget. 
                </p>
            </div>

            <div class="relationship" data-aos="zoom-in-right">
                <i class="fas fa-handshake" id="every"></i>
                <h3> Create a lasting relationship </h3>
                <p> 
                    Your Harmony pro is your friend, your guide, and your 
                    partner in home design. They’ll take care of your needs, 
                    help you create a custom space that grows with you, and 
                    they’re only a message away. 
                </p>
            </div>
        </section>
        @endsection