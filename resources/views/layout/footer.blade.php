
        <!-- footer -->
        <footer>
            <div class="foot1">
                <img src="{{ asset('images/harmony-logo.jpg')}}">
            </div>
            <div class="foot2">
                <h3> Happiness Guarantee </h3>
                <p>
                    If you’re not happy, we’re not happy. We work 
                    tirelessly to make sure your Harmony experience is 
                    delightful. That’s why we offer the Harmony Happiness 
                    Guarantee.
                </p>
                <p> ©2020 Harmony. All rights reserved. </p>
            </div>
            <div class="foot3">
                <h3> Contact Us </h3>
                <p><strong> call </strong> 040 222 22 22 </p>
                <p><strong> email </strong> harmony@gmail.com </p>
                <div class="links">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook"></i>                
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram"></i> 
                    </a>
                    <a href="https://www.pinterest.com/" target="_blank">
                        <i class="fab fa-pinterest"></i>   
                    </a>
                </div>
            </div>
        </footer>

        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/slick.min.js')}}" ></script>
        <script src="{{ asset('js/slick.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>
        @yield('js') 

    </body>
</html>