
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>daffodil university-about Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header" style="background-color: CadetBlue">
              <div class="logo">
                <a href="index.html">SQUAD 25</a>
              </div>
            </header>

            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h1>About System</h1>
                    <p>This is a site where student can save their information and show their talent outside of academic education. </p>
                    </div>
                </div>
              </div>
            </div>

            <!-- Simple Post -->
            <section class="simple-post">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                  <!--  <img src="assets/images/simple-post.jpg" alt=""> -->
                  <div class="owl-carousel owl-theme">
                    <a href="#">
                      <div class="featured-item">
                        <img src="assets/images/s1.jpg" alt="featured one">
                        <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="featured-item">
                        <img src="assets/images/s2.jpg" alt="featured two">
                        <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="featured-item">
                        <img src="assets/images/s3.jpg" alt="featured three">
                        <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                      </div>
                    </a>
                  </div>
                    <div class="down-content">
                      <p>Mauris aliquam ipsum nibh, id scelerisque leo congue vel. Vivamus ornare, eros et ornare consectetur, ipsum ipsum sollicitudin libero, at condimentum risus nulla non enim. Quisque sodales vestibulum arcu porttitor finibus. Phasellus dictum nisl id augue ornare, vel interdum nibh mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                      <p>Phasellus vestibulum venenatis interdum. Praesent augue massa, tincidunt eget dignissim a, scelerisque vitae ante. Curabitur a arcu tellus. Donec et massa at dolor condimentum ornare nec non lorem. Maecenas non egestas metus, sed ultricies lectus. Aliquam sit amet gravida tellus. Phasellus id erat nec mi ullamcorper viverra. Quisque vitae pharetra sem. Maecenas sit amet velit ultrices, malesuada quam id, porta nisl. Cras scelerisque ex ut bibendum egestas.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          

            <!-- Contact Form -->
            <section class="contact-form">
              <h1> <strong>Contact</strong> </h1> <br> <br>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="button" style="background-color: CadetBlue ">Send Message</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-6">
                    <div id="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7885564297067!2d90.3741778145243!3d23.754918384587167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sDaffodil%20International%20University%20(DIU)!5e0!3m2!1sen!2sbd!4v1605673696224!5m2!1sen!2sbd" width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          
        </div>
        </div>
        

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Search..." />
              </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="{{ url('/home') }}">Homepage</a></li>
                <li><a href="{{ route('about')}}">About</a></li>
                <li><a href="{{ url('/chart') }}">Chart</a></li>
                <li><a href="{{ url('/student') }}">User Profile</a></li>
                <!--<li>
                  <span class="opener">Dropdown One</span>
                  <ul>
                    <li><a href="#">First Sub Menu</a></li>
                    <li><a href="#">Second Sub Menu</a></li>
                    <li><a href="#">Third Sub Menu</a></li>
                  </ul>
                </li>
                <li>
                  <span class="opener">Dropdown Two</span>
                  <ul>
                    <li><a href="#">Sub Menu #1</a></li>
                    <li><a href="#">Sub Menu #2</a></li>
                    <li><a href="#">Sub Menu #3</a></li>
                  </ul>
                </li>
                <li><a href="https://www.google.com">External Link</a></li>-->
              </ul>
            </nav>           

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

  </body>

</html>
