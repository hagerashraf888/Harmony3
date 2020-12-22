@extends('layout.all')
      @section('css')   
        <link rel="stylesheet" href="{{ asset('css/rooms.css')}}">
       @endsection
     
       @section('banner')
            <img src="{{ asset($image)}}">
            <h1 data-aos="fade-down-right"> {{strtoupper($category->name) }} </h1>
        @endsection

       @section('content')    

       <div class="out">
            
        <a id="out" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }} </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

       <!-- cart -->
    <div class="cart">
        <a href="{{ route('cart')}}">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
    

    @include('layout.rooms')

    <!-- gallery -->
    <div class="gallery">
        <h5 data-aos="fade-down-right">{{strtoupper($category->name) }} </h5>
        <hr data-aos="fade-right">
        <div class="all">
            @foreach($dinning_rooms as $room)
            <div class="card" data-aos="@if($loop->iteration%2 == 1) flip-down @elseif($loop->iteration%2 == 0)flip-up @endif">
                <img src="{{ asset($room->image)}}">
                <p class="name"> {{$room->name}} </p>
                <p class="price"> {{$room->price}} </p>
                <!--
                    <a href="">
                        <p><button>Add to Cart</button></p>
                    </a>
                -->
            </div>
            @endforeach
            
           
        </div>
    </div>
    
    @include('layout.products')

    @endsection
    @section('js')
        <script src="{{ asset('js/rooms.js')}}"></script>
    @endsection
    