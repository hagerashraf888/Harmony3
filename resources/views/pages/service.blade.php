@extends('layout.all')
      @section('css')   
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
       @endsection
     
       @section('banner')
            <img src="{{asset('images/harmony-banner.jpg')}}">
            <div class="text"> HARMONY </div>
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
      
        <!-- service -->
        <section id="service">
            <div class="service1" data-aos="zoom-in">
                <img src="{{ asset('images/service.jpg')}}" class="sticky">
            </div>
            <div class="service2">
                <div class="design" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> DESIGNING </h3>
                        <img src="{{ asset('images/design.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            Harmony provides tailored interior design solutions
                            & renovation services for residential, commercial & 
                            office projects. The well-defined design process 
                            ensures a blueprint customized to your preferences. 
                            Our scope of work includes but not limited to interior 
                            design, furniture design, landscape design & product design. 
                            Part of the design process includes procurement services.
                        </p>
                    </div>
                    
                </div>

                <div class="contract" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> CONTRACTING  </h3>
                        <img src="{{ asset('images/contract.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            We deliver turn-key project in accordance with high 
                            quality standards. Our certified sppliers and skilled 
                            subcontractors are devoted to deliver premium quality 
                            finishes. Our scope of work includes but not limited 
                            to Architectural remodeling, HVAC, MEP, tiling works 
                            suspended ceilings, cladding, painting works and wood 
                            works.
                        </p>
                    </div>
                    
                </div>

                <div class="manage" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> PROJECT MANAGGEMENT</h3>
                        <img src="{{ asset('images/manage.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            We manage projects from commmencement to completion 
                            providing an exceptional planning service. We are strongly 
                            committed to delivering projects within time plan and budget 
                            constraints. As an award-winning design practice, quality is 
                            a matter of dedication. Our scope of work includes but not 
                            limited to: Resources planning, developing schedules, time/
                            cost planning, monitoring/reporting and quality control.
                        </p>
                    </div>
        
                </div>
            </div>
        </section>
         @endsection