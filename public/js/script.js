

// scroll height
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
} 



// fixed navbar
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

// hide/show logo
$(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('#logo').hide();
    $('.dropdown-content').hide();

  } else {
    $('#logo').show();
    $('.dropdown-content').toggle();

  }
});




/* rooms */
$('.rooms').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  infinite: true,
  responsive: 
  [
  {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
  }
  ]
  
});


/* products */
$('.products').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  infinite: true,
  responsive: 
  [
  {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
  }
  ]
  
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 