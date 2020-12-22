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
        <a href="#"> Control Projects </a>
        <a href="{{ route('get_categories')}}"> Control Categories </a>
    
    </div>
        
        <!-- Page content -->
        <div class="content">
            <div class="topnav">
                
                <div class=title>
                    <h2> Projects </h2>
                </div>
            
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <i class="fas fa-user"></i> 
                        Hager Ashraf 
                        <i class="fas fa-sort-down"></i>
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
            </div> 

            <!-- Projects -->
            <section id="rooms-table">
                <table id="master">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>image</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>type</th>
                        <th>category</th>
                    </tr>
                @foreach($projects as $project)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$project->name}}</td>
                    <td><img src="{{ asset($project->image)}}" width="100" height="100" ></td>
                    <td>{{$project->price}}</td>
                    <td>{{$project->quantity}}</td>
                    <td>{{$project->type->name}}</td>
                    <td>{{$project->category->name}}</td>
                    <td>
                        <a href="{{route('delete_project',$project->id)}}" id="dd" class="d-inline-block control-button delete mb-2 m-lg-0">
                            <i class="fas fa-trash-alt"></i> 
                            Delete
                        </a>
                    </td>
                    <td>    
                        <a href="{{route('edit_project_page',$project->id)}}" id="dd" class="d-inline-block control-button edit ">
                            <i class="fa fa-edit"></i> 
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach
                </table>
                <a href="{{route('add_project_page')}}" class="r-btn">
                    <i class="fa fa-plus mr-2"></i> 
                    Add New Project 
                </a>
            </section>
        </div>
        
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
