<!-- rooms -->
        <h5 data-aos="fade-down-right"> ROOMS </h5>
        <hr data-aos="fade-right">
        <div class="rooms" data-aos="fade-up">
                @foreach($category_rooms as $category)
                <span>
                    
                    <a href="{{ route($category->name,$category->id)}}" class="room">
                        <img src="{{ asset($category->image)}}" width="200vw" height="200vw">
                        <h2> {{$category->name}} </h2>
                    </a>    
                </span>
                @endforeach

                
        </div>