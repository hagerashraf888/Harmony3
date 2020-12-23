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
    
            @include('layout.rooms')

            @include('layout.products')

        
        @endsection
