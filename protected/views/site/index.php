<html lang="en"><head>
    <meta charset="utf-8">
    <title>Carousel Template · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Le styles -->
    <link href="./ind/css/bootstrap.css" rel="stylesheet">
    <link href="./ind/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1 {
      padding-left: 1em;
      margin: 0;
      line-height: 1.25;
      color: #000000;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .lead {
      padding-left: 2em;
      margin: 0;
      line-height: 1.25;
      color: #000000;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
      margin-left: 2em;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;

      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }
    }

    .envelope {
      font-family: Consolas;
      font-size: 14px;
      font-weight: bolder;
      padding-top: 15ex;
      padding-bottom: 7ex;
    }

    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  <style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>

  <body>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active left">
          <img src="./img/doc4.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>HMS</h1>
              <p class="lead">Honduras Medical Center is proud to provide comprehensive inpatient and outpatient health services designed to meet the needs and expectations of all our patients.</p>
              <a class="btn btn-large btn-inverse" href="#">Log in</a>
            </div>
          </div>
        </div>
        <div class="item next left">
          <img src="./img/doc2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cutting Edge Specialists.</h1>
              <p class="lead">The best Doctors around equipped with the best techniques, all for your benefit.</p>
              <a class="btn btn-large btn-inverse" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./img/doc3.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
<<<<<<< HEAD
              <h1>Medical History, Simplified.</h1>
              <p class="lead">Easy access for Doctors to your past medical history in order to diagnose causes and solutions faster.</p>
=======
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
>>>>>>> 7506608d01a049103e93f97fdbb1ad9f746e470b
              <a class="btn btn-large btn-inverse" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->



    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="http://www.clker.com/cliparts/1/4/7/0/1207314060955899368hospital%20blue.svg.hi.png">
          <h2>Health Plans</h2>
          <p>Innovative and accessible plans offering personal healthcare for yourslef and your family too.. For more details click the link below.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="http://www.medindia.net/health-images/health-symbol-1.jpg">
          <h2>Medical Directory</h2>
          <p>The best Doctors from the area all available and ready to overcome whatever you need. Click the link below to see some of the Doctors waiting for you.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="http://upload.wikimedia.org/wikipedia/commons/c/c8/WA_road_sign_hospital_symbol.png">
          <h2>Medicine + Tech</h2>
          <p>Combining the best of both worlds to give all our clients the treatment they deserve. By empowering Doctors with the latest technology we guarantee we will be able to help you faster.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

     
      <div class="envelope"> <p style="font-size:15px">Contact Us:</p> <img src="http://icons.iconarchive.com/icons/custom-icon-design/mini/32/Telephone-icon.png">22267117 <img src="http://icons.iconarchive.com/icons/mysitemyway/blue-jeans-social-media/48/mail-icon.png"> honduras@medicalcenter.com</div>
     
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2013 Honduras Medical Center Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./ind/js/jquery.js"></script>
    <script src="./ind/js/bootstrap-transition.js"></script>
    <script src="./ind/js/bootstrap-alert.js"></script>
    <script src="./ind/js/bootstrap-modal.js"></script>
    <script src="./ind/js/bootstrap-dropdown.js"></script>
    <script src="./ind/js/bootstrap-scrollspy.js"></script>
    <script src="./ind/js/bootstrap-tab.js"></script>
    <script src="./ind/js/bootstrap-tooltip.js"></script>
    <script src="./ind/js/bootstrap-popover.js"></script>
    <script src="./ind/js/bootstrap-button.js"></script>
    <script src="./ind/js/bootstrap-collapse.js"></script>
    <script src="./ind/js/bootstrap-carousel.js"></script>
    <script src="./ind/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="./ind/js/holder.js"></script>
  

</body></html>


