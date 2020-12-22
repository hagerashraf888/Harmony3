<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/fonts/css/all.css')}}"> 
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
    </head>
    <body>
        <!-- The sidebar -->
        <div class="sidebar">
                <div class="logo">
                    <img src="{{ asset('images/harmony-logo.jpg')}}">
                </div>

            <!-- admin -->
            <h3> Admin </h3>
            <a href="{{ route('get_projects')}}"> Control Projects </a>
            <a href="{{ route('get_categories')}}"> Control Categories </a>
                
        </div>
        
        <!-- Page content -->
        <div class="content">
            <div class="topnav">
                <!--<div class="search">
                    <input id="search" type="text" placeholder="Search..">
                    <button class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>-->
                <div class=title>
                    <h2> Harmony </h2>
                </div>
                <!--
                    <div class="notify">
                    <button class="btn">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="btn">
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
                -->
                
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <i class="fas fa-user"></i> 
                        Hager Ashraf 
                        <i class="fas fa-sort-down"></i>
                    </button>
                        <div id="myDropdown" class="dropdown-content">
                        <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out </a>
                    </div>
                </div> 
            </div> 

            <!-- user -->
            <h3> User </h3>
            <div class="user">
                <div class="one">
                    <a href="{{ route('harmony')}}"> Harmony </a>
                    <a href="{{ route('home')}}"> Home </a>
                    <a href="{{ route('about')}}"> About </a>
                    <a href="{{ route('service')}}"> Service </a>
                    <a href="{{ route('projects')}}"> Projects </a>
                    <a href="{{ route('contacts')}}"> Contacts </a>
                </div>
                <div class="two">
                    <a href="#" class="open-ro">
                        <i class="far fa-window-maximize"></i> 
                        Rooms
                        <i class="fas fa-sort-down"></i> 
                    </a>
                    <div class="room">
                        <a href="{{ route('master')}}"> Master Room </a>
                        <a href="{{ route('single')}}"> Single Room </a>
                        <a href="{{ route('living')}}"> Living Room </a>
                        <a href="{{ route('dinning')}}"> Dinning Room </a>
                        <a href="{{ route('kitchen')}}"> Kitchen </a>
                    </div>
                </div>
                <div class="three">
                    <a href="#" class="open-pro">
                        <i class="far fa-window-maximize"></i> 
                        Products
                        <i class="fas fa-sort-down"></i> 
                    </a>
                    <div class="product">
                        <a href="{{ route('master-bed')}}"> Master Bed </a>
                        <a href="{{ route('single-bed')}}"> Single Bed </a>
                        <a href="{{ route('closet')}}"> Closet </a>
                        <a href="{{ route('mirror')}}"> Mirror </a>
                        <a href="{{ route('sofa')}}"> Sofa </a>
                        <a href="{{ route('chair')}}"> Chair </a>
                        <a href="{{ route('table')}}"> Table </a>
                        <a href="{{ route('cupboard')}}"> Cupboard </a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
