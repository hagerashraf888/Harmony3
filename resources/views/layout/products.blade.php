 <!-- products -->
        <h5 data-aos="fade-down-right"> PRODUCTS </h5>
        <hr data-aos="fade-right">
        <div class="products" data-aos="fade-down">
             @foreach($category_types as $category)
                <span>
                    <a href="{{  route($category->name,$category->id)}}" class="room">
                        <img src="{{ asset($category->image)}}" width="200vw" height="200vw">
                        <h2> {{$category->name}} </h2>
                    </a>    
                </span>
                @endforeach
            
        </div>
