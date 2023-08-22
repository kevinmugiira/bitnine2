<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>bitnine</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


      <style>
          body {
              font-family: Arial, Helvetica, sans-serif;
          }

          .flip-box {
              background-color: transparent;
              width: 500px;
              height: 300px;
              border: 1px solid #f1f1f1;
              perspective: 1000px;
          }

          .flip-box-inner {
              position: relative;
              width: 100%;
              height: 100%;
              text-align: center;
              transition: transform 0.8s;
              transform-style: preserve-3d;

          }

          .flip-box:hover .flip-box-inner {
              transform: rotateX(180deg);
          }

          .flip-box-front, .flip-box-back {
              position: absolute;
              width: 100%;
              height: 100%;
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
          }

          .flip-box-front {
              background-color: #bbb;
              color: black;
          }

          .flip-box-back {
              background-color: dodgerblue;
              color: white;
              transform: rotateX(180deg);
          }

      /*    drop down menu in the services page*/
          .navbar {
              overflow: hidden;
              background-color: black ;
              display: flex;
              justify-content: space-around;
              align-items: center;
              padding: 20px;
              width: 100%; /* Set the width to 100% to stretch across the page */
              position: fixed; /* Fix the navbar position */
              top: 0; /* Position the navbar at the top of the page */
              left: 0; /* Align the navbar to the left */
              z-index: 1000; /* Set a higher z-index to make sure it's on top of other elements */
              transition: background-color 0.3s;
          }

          .navbar a {
              float: left;
              font-size: 16px;
              color: black;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
          }

          .small-navbar {
              background-color: rgba(51, 51, 51, 0.9);
              display: none;
              justify-content: space-around;
              align-items: center;
              padding: 10px;
              width: 100%;
              position: fixed;
              top: 0;
              left: 0;
              z-index: 1000;
          }

          .dropdown {
              float: left;
              overflow: hidden;
          }

          .dropdown .dropbtn {
              font-size: 16px;
              border: none;
              outline: none;
              color: black;
              padding: 14px 16px;
              background-color: inherit;
              font-family: inherit;
              margin: 0;
          }

          .navbar a:hover, .dropdown:hover .dropbtn {
              background-color: mediumaquamarine;
          }

          .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
          }

          .dropdown-content a {
              float: none;
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
          }

          .dropdown-content a:hover {
              background-color: #ddd;
          }

          .dropdown:hover .dropdown-content {
              display: block;
          }
          .flex-container {
              display: flex;
          }
          .navbarr {
              /* Add your styling for the navbar here */
              /* For example, background-color, padding, etc. */
              margin: 10px; /* Optional margin for spacing */
          }
          .vbar {
              background-color: dodgerblue; /* Background color for the navbar */
              color: white; /* Text color for the navbar */
              height: 40px; /* Adjust the height as needed */
              display: flex;
              align-items: center;
              padding: 0 20px; /* Add padding to the navbar content */
          }
          .enclosed-box {
              border: 1px solid #ccc; /* Add a 1px solid border with a gray color */
              padding: 20px; /* Add padding around the content */
          }
          .servicee ul {
              list-style: disc; /* Use disc bullets */
              padding-left: 20px; /* Adjust the padding as needed */
          }
          .w3l-services {
              background-color: #e9ecef;
          }
          .w3l-services1 {
              background-color: mediumblue;
              font-family: 'Monda', sans-serif;

          }
          .header-section1 {
              float: left;
          }
          .header-section2 {
              float: right;
          }
          .containercol {
              background-image: url('https://bitnine.net/wp-content/uploads/2020/11/join1.jpg'); /* Replace with the image URL */
              background-size: cover; /* Adjust the image size behavior */
              background-position: left; /* Adjust the image position */
          }
          .circle-icon {
              position: relative;
              width: 50px;
              height: 50px;
              display: flex;
              justify-content: center;
              align-items: center;
              background-attachment: fixed;
              /*background-color: #3498db;*/
              border-radius: 50%;
          }

          .inner-icon {
              position: absolute;
              font-size: 24px; /* Adjust the size of the inner icon */
              color: white; /* Adjust the color of the inner icon */
          }
          .connector {
              display: flex;
              align-items: center;
          }

          .line {
              width: 1px;
              height: 50px;
              background-color: #333;
              margin: 0 10px;
          }
          .icon_description {
              display: flex;
              margin-right: 2px;
          }
          .color1 {
              color: #e9ecef;
          }

          .fsize {
              font-size: 52px;
              font-family: Monda,'Noto Sans KR', sans-serif;;
              font-weight: bold;
          }
          .card-container {
              display: flex;
              align-items: center;
          }
          .card {
              flex: 1;
              min-width: 200px; /* Set the width of each card */
              /*height: 150px; !* Set the height of each card *!*/
              background-color: #f0f0f0;
              margin: 10px; /* Add some margin between cards */
              padding: 10px;
              border: 1px solid #ccc;
              box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
          }
          .card-button {
              background-color: transparent;
              color: #1b1e21;
              text-align: left;
              border: 1px solid #0b0b0b;
              padding: 8px 12px;
              cursor: pointer;
              transition: background-color 0.3s;
          }
          .caret-right {
              text-align: right;
          }

          .card-button:hover {
              /*background-color: #f8bf14;*/
              border-color: #f8bf14;
          }
          .download-box-section__card-button {
              color: black; /* Set the color of the text to black */
          }
          .social {
              color: #c7d2fe;
          }
          .dropbtn {
              background-color: #3498DB;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
              cursor: pointer;
          }

          .dropbtn:hover, .dropbtn:focus {
              background-color: #2980B9;
          }

          .dropdown {
              position: relative;
              display: inline-block;
          }

          .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f1f1f1;
              min-width: 160px;
              overflow: auto;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
          }

          .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
          }

          .dropdown a:hover {background-color: #ddd;}

          .show {display: block;}

          .containerd {
              display: flex;
          }

          .nav-item.dropdown {
              position: relative; /* Ensure it's positioned */
              z-index: 100; /* Adjust the value as needed */
          }
          .btn.btn-sm {
              padding: 0.25rem 0.5rem; /* Adjust the padding values as needed */
              font-size: 0.875rem; /* Adjust the font size as needed */
          }





      </style>

  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <div id="wpfront-notification-bar" class="wpfront-fixed " style="top: 0px; height: 45px; position: fixed; visibility: visible;">
          <table border="0" cellspacing="0" cellpadding="0" role="presentation" style="height: 100%;">
              <tbody style="height: 100%;"><tr style="height: 100%;">
                  <td>
                      <div class="wpfront-message">
                          <a href="http://agcloud.bitnine.net/" target="_blank" class="top_b">AgensSQL로 보안 기능들을 강화시키세요.</a>                    </div>
                      <div>
                      </div>
                  </td>
              </tr>
              </tbody></table>
      </div>
    <nav class="navbar navbar-expand-lg ">

{{--      <h1>--}}
{{--        <a class="navbar-brand" href="{{url('index')}}">--}}
{{--          <span class="fa fa-industry"></span> bitnine <span class="logo"></span></a>--}}
{{--      </h1>--}}

      <!-- if logo is image enable this -->
      <a class="navbar-brand" href="{{url('index')}}">
          <img src="https://bitnine.net/wp-content/uploads/2023/08/bitnine-logo_.png" alt="Your logo" title="Your logo" style="height:55px;" />
      </a>
      <button class="navbar-toggler  collapsed bg-gradient" type="button"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

        <div class="columns-2 mt-lg-0 mt-3">
            <ul class="social">
                <li><a href="https://github.com/bitnine-oss/agensgraph"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UCBJNYamALEqrfxiOCgYyP2g/featured?view_as=subscriber"><span class="fa fa-youtube-square" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.linkedin.com/company/bitnineglobal/"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://www.facebook.com/bitninesns/"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                </li>
                <li><a href="https://blog.naver.com/bitnine9"><span class="fa fa-medium" aria-hidden="true"></span></a> </li>
            </ul>
        </div>




      <div class=" navbar-collapse" id="navbarTogglerDemo02">


        <ul class="navbar-nav mx-lg-auto mb-5">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('index')}}">PRODUCTS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="{{url('usecases')}}">USE CASES</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="{{url('services')}}">SERVICES</a>
          </li>
          <li class="nav-item @@resources__active mb-5">
            <a class="nav-link nav-item.dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RESOURCES</a>
              <div class="dropdown-menu mb-2" aria-labelledby="navbarDropdown">
                  <a class="btn btn-sm dropdown-item" href="https://bitnine.net/documentation/">Documentation</a>
                  <a class="btn btn-sm dropdown-item" href="https://bitnine.net/learn/">Learn</a>
              </div>
          </li>
            <li class="nav-item @@blog__active">
                <a class="nav-link" href="https://bitnine.net/blog/">BLOG</a>
            </li>
            <li class="nav-item @@company__active">
                <a class="nav-link nav-item.dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COMPANY</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="btn btn-sm dropdown-item" href="{{url('about')}}">About us</a>
                    <a class="btn btn-sm dropdown-item" href="{{url('contact')}}">Contact</a>
                    <!-- Add more dropdown items as needed -->
                </div>
            </li>
            <li class="nav-item @@ir__active">
                <a class="nav-link nav-item.dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IR</a>
                <div class="dropdown-menu mb-2" aria-labelledby="navbarDropdown">
                    <a class="btn btn-sm dropdown-item" href="https://bitnine.net/ir-announcement/">IR announcement</a>
                    <a class="btn btn-sm dropdown-item" href="https://bitnine.net/ir-info/">IR info</a>
                    <a class="btn btn-sm dropdown-item" href="https://bitnine.net/ir-finance/">IR finance</a>
                </div>
            </li>
        </ul>
      </div>

      <div class="top-quote mr-lg-2 mt-lg-0 mt-3 d-lg-block d-none">
        <a href="{{url('contact')}}" class="btn btn-style btn-sm btn-primary">TRY FREE</a>
      </div>

      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
              <a href="{{url('logout')}}" class="btn btn-style btn-sm btn-primary">logout</a>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->


@yield('content')



 <!-- footer -->
 <section class="w3l-footer">
  <div class="w3l-footer-16-main py-5">
    <div class="container pt-lg-4">
      <div class="row">
        <div class="col-lg-12 column">
          <div class="row">
            <div class="col-sm-2 col-6 column">
              <h3>PRODUCTS</h3>
              <ul class="footer-gd-16">
                  <li><h4><a href="#">Relational Database</a></h4></li>
                <li><h4><a href="#">Graph Database</a></h4></li>
                <li><h4><a href="#">Graph-based Solution</a></h4></li>
              </ul>
            </div>
            <div class="col-sm-2 col-6 column">
              <h3>USE CASES</h3>

            </div>
            <div class="col-sm-2 col-6 column mt-sm-0 mt-4">
              <h3>SERVICES</h3>

            </div>
              <div class="col-sm-2 col-6 column mt-sm-0 mt-4">
                  <h3>RESOURCES</h3>

              </div>
              <div class="col-sm-2 col-6 column mt-sm-0 mt-4">
                  <h3>BLOG</h3>

              </div>
              <div class="col-sm-2 col-6 column mt-sm-0 mt-4">
                  <h3>COMPANY</h3>
                  <ul class="footer-gd-16">
                      <li><h4><a href="#url">About Us</a></h4></li>
                      <li><h4><a href="#url">Contact</a></h4></li>

                  </ul>
              </div>
          </div>
        </div>

      </div>
      <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
        <div class="columns text-lg-left text-center">
          <h4>&copy; 2023 by Bitnine Global Inc. All Rights Reserved.
          </h4>
        </div>


          <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                  <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                  </li>
              </ul>
          </div>

          <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                  <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                  </li>
                  <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                  </li>
              </ul>
          </div>
      </div>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>

     <script>
         /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
         function myFunction() {
             document.getElementById("myDropdown").classList.toggle("show");
         }

         // Close the dropdown if the user clicks outside of it
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
     </script>

  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</section>
<!-- //footer -->
<!-- Template JavaScript -->
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

<script src="assets/js/jquery-1.9.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>
<!-- responsive tabs -->
<script src="assets/js/easyResponsiveTabs.js"></script>

{{--<script>--}}
{{--    const navbar = document.querySelector('.navbar');--}}

{{--    window.addEventListener('scroll', () => {--}}
{{--        if (window.scrollY > 100) {--}}
{{--            navbar.style.backgroundColor = '#333'; // Change the color when scrolled--}}
{{--        } else {--}}
{{--            navbar.style.backgroundColor = 'black'; // Reset the color when not scrolled--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

<!--Plug-in Initialisation-->
<script type="text/javascript">
 $(document).ready(function () {
   //Horizontal Tab
   $('#parentHorizontalTab').easyResponsiveTabs({
     type: 'default', //Types: default, vertical, accordion
     width: 'auto', //auto or any width like 600px
     fit: true, // 100% fit in a container
     tabidentify: 'hor_1', // The tab groups identifier
     activate: function (event) { // Callback function if tab is switched
       var $tab = $(this);
       var $info = $('#nested-tabInfo');
       var $name = $('span', $info);
       $name.text($tab.text());
       $info.show();
     }
   });
 });
</script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      margin: 20,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2
        },
        480: {
          items: 2
        },
        767: {
          items: 3
        },
        992: {
          items: 4
        },
        1280: {
          items: 5
        }
      }
    })
  })
</script>

<!-- script for testimonials -->
<script>
 $(document).ready(function () {
   $('.owl-testimonial').owlCarousel({
     loop: true,
     margin: 0,
     nav: true,
     responsiveClass: true,
     autoplay: false,
     autoplayTimeout: 5000,
     autoplaySpeed: 1000,
     autoplayHoverPause: false,
     responsive: {
       0: {
         items: 1,
         nav: false
       },
       480: {
         items: 1,
         nav: false
       },
       667: {
         items: 1,
         nav: true
       },
       1000: {
         items: 1,
         nav: true
       }
     }
   })
 })
</script>
<!-- //script for testimonials -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
