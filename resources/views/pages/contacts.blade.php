@extends('layout.all')
      @section('css')   
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/contact.css')}}">

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
  
        <!-- contacts -->
        <div class="contacts">
            <div class="contact1" data-aos="zoom-in">
                <img src="{{ asset('images/contacts.jpg')}}">
            </div>

            <!-- form -->
            <div class="contact2">
                <form data-aos="fade-down-right">
                    <h3 id="contact" data-aos="fade-left"> Get In Touch With Us </h3>
                    <div class="form-group" data-aos="fade-right">
                      <label for="formGroupExampleInput" class="lbl"> Name </label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name" pattern="^[a-zA-Z ]+$" title="Your name must be in characters only" autocomplete="on">
                    </div>
                    <div class="form-group" data-aos="fade-down">
                        <label for="formGroupExampleInput2" class="lbl"> Phone </label>
                        <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" pattern="^\+?\d{10,}$" title="Your phone must be at least 11 digits" autocomplete="on">
                      </div>
                    <div class="form-group" data-aos="fade-right">
                      <label for="exampleInputEmail1" class="lbl"> Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="Your email must be like that name@domain-name.com" autocomplete="on">
                    </div>
                    <div class="form-group" data-aos="fade-down">
                        <label for="exampleFormControlTextarea1" class="lbl"> Message </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Leave your message" title="Please leave your message" autocomplete="on" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-aos="fade-right">Submit</button>
                  </form>
            </div>
        </div>

        @endsection

        @section('js')
            <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        @endsection

