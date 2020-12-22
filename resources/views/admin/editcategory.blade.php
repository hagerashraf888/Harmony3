<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
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
            <h3><a href="{{ asset('admin.html')}}"> Admin </a></h3>
            <a href="#"> Control Projects </a>
            <a href="#"> Control Categories </a>
        </div>
        
        <!-- Page content -->
        <div class="content">
            <div class="topnav">
                
                <div class=title>
                    <h2> Edit Category </h2>
                </div>
                
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

            <section id="form">
                <form action="{{route('update_category',$category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value=""
                            class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Category Name </label>
                        <div class="col-sm-12">
                        <input type="text"name="category_name" class="form-control"
                            placeholder="type the name of category"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Category Image </label>
                        <div class="col-sm-12">
                        <input type="file"  class="form-control" name="image">
                        <input type="hidden" name="oldimage" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Type </label>
                        <div class="col-sm-12">
                            <select name="type_id" class="form-control">
                                <option value=""> Choose Type </option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="submit"  value="save changes" class="mx-auto d-block" id="btn">
                </form>
            </section>
        </div>
        
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 
