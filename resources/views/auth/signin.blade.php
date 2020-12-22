@extends('layout.all')
      @section('css')   
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('css/log.css')}}">
       @endsection
     
    @section('content') 
    <section id="sign-in">
      <div class="container">

        <div class="w-100 color2">

        <h2 class="text-center">SIGN IN</h2>
        </div>
      <form action="{{route('homes')}}" method="post">
        @csrf
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@domain-name.com" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('email')
              <span class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="type your password" pattern="^.{8,}$" required>
          @error('password')
              <span class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group row">
              <div class="col-md-6">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>


        <button id="btn" type="submit" class="btn btn-primary">Sign in</button>

      </form>
      <div class="w-100 color2">

      </div>

      </div>

    </section>
  @endsection
