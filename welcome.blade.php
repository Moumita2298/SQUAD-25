<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
        <link rel="stylesheet" href="assets/css/owl.css">

   
    <title>Daffodil International University </title>
        <title>Laravel</title>
         <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body class="is-preload">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
            <div id="wrapper">
               <div id="main" >
                  <div class="inner">            
                     <header id="header" style="background-color: CadetBlue">
                         <div class="logo">
                              <a href="index.html">SQUAD 25</a>
                         </div>
                     </header> 

                     <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption" >
                            <h4> <em>Daffodil International University</em></h4>
                          <!-- <span>Find Your Hidden Talent </span>-->
                              <div class="primary-button">
                              <a href="login-1.html">login or Create Your Account</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            </div>
        </div>

       <!-- <div id="sidebar">

<div class="inner">

  <!-- Search Box 
  <section id="search" class="alt">
    <form method="get" action="#">
      <input type="text" name="search" id="search" placeholder="Search..." />
    </form>
  </section>

  <!-- Menu 
  <nav id="menu">
    <ul>
      <li><a href="index.html">Homepage</a></li>

      <li><a href="simple_page.html">About</a></li>
      <li><a href="Chart.html">Chart</a></li>
      <li><a href="student.php">User Profile</a></li>
</ul>
            </nav>
            </div>
        </div>-->

    </div>
            </div>

         

                                     <script src="vendor/jquery/jquery.min.js"></script>
								     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

								     <script src="assets/js/browser.min.js"></script>
								     <script src="assets/js/breakpoints.min.js"></script>
								     <script src="assets/js/transition.js"></script>
								     <script src="assets/js/owl-carousel.js"></script>
								     <script src="assets/js/custom.js"></script>
								                          
    </body>
</html>
