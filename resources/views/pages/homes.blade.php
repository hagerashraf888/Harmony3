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
      
       <!-- text -->
        <section id="text" data-aos="fade-down">
            <img src="{{ asset('images/logo2.png')}}">
            <p class="text2"> 
                "Imagine if you could hire someone to scour your 
                Pinterest boards and translate your pins into a 
                perfectly decorated room in your home."
            </p>
        </section>

        <!-- simpler -->
        <section id="simpler">
            <h1> Even Simpler Than You Think </h1>
            <img src="{{ asset('images/simpler.png')}}" data-aos="zoom-in">
            <div class="simpler">
                <div class="div1" data-aos="fade-up-right"> 
                    <h4> 1.Tell us what you need </h4>
                    <p> 
                        Pick a room, set your budget and tell us 
                        about your Pinterest worthy dreams – whether 
                        a full overhaul, or just some ideas to pull it 
                        together.
                    </p>
                </div>
                <div class="div1" data-aos="fade-down"> 
                    <h4> 2.Collaborate online </h4>
                    <p> 
                        Put on the stretchy pants, grab a glass of wine, 
                        and hop online. Select your Havenly designer and 
                        work one-on-one throughout the entire process to 
                        find stylish solutions that fit your style and budget.
                    </p>
                </div>
                <div class="div1" data-aos="fade-up"> 
                    <h4> 3.Get the V.I.P. treatment </h4>
                    <p> 
                        Our concierge team works directly with you to provide 
                        instant access to hundreds of brands. We take care of 
                        ordering and shipping too, so you can focus on important 
                        things, like binge watching 20 episodes of The Great 
                        British Baking Show. 
                    </p>
                </div>
            </div>
        </section>

        <!-- product card -->
        <section class="product">
            
              <div class="full" data-aos="flip-down">
                <h3> Full Harmony <small class="small"><sub> Most Popular </sub></small> </h3>
                <img src="{{ asset('images/full.jpg')}}">
                <p class="price"><del> 22000 </del></p>
                <p class="price"> 18000 </p>
                <p> 
                    Collaborate with Harmony to transform a blank 
                    canvas or redesign an entire room. 
                </p>
                <a href="{{ route('projects')}}">
                    <p><button> Get Started </button></p>
                </a>
              </div> 

              <div class="mini" data-aos="flip-up">
                <h3> Mini Harmony </h3>
                <img src="{{ asset('images/mini.jpg')}}">
                <p class="price"><del> 2000 </del></p>
                <p class="price"> 1800 </p>
                <p> 
                    Get design inspiration and custom solutions to spice 
                    up your space or refresh a room. 
                </p>
                <a href="{{ route('projects')}}">
                    <p><button> Get Started </button></p>
                </a>
              </div> 
        </section>

         @endsection
