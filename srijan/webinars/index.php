<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Srijan | Webinars</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="/css/style.css">

  <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="inner-page">
  <div class="canvas">

    <?php include '../nav.php';?>
    <header class="section-page-header">
      <figure class="parallax">
        <img src="/img/webinars.jpg" alt="graphics">
      </figure>
      <div class="page-wrap">
        <div class="header-content-wrap">
        <h1>Srijan Wednesday Webinars</h1>
        <div class="row stats-row">
          <div class="col-4">
            <h2>75 <span>Speakers</span></h2>
          </div>
          <div class="col-4">
            <h2>15 <span>Countries</span></h2>
          </div>
          <div class="col-4">
            <h2>3700 <span>Strong Community</span></h2>
          </div>
        </div>
        </div>
      </div>
    </header>

    <main class="page section-landing webinars-listing">
      <section class="content-block webinar-listing">
        <header class="section-subheader">
          <h2>Upcoming Webinars</h2>
        </header>
        <div class="search-webinars page-wrap">
          <form action="#" class="webinar-search">
            <div class="search-bar">
              <input type="text" placeholder="Keywords" name="webinarSearch" id="webinarSearch" /> <input type="button" class="btn searchbtn" value="Search">
            </div>
          </form>
        </div>
      </section>


      <section class="generic-intro">
        <div class="page-wrap">
        <p>The Srijan Wednesday Webinars is an initiative to build a community that encourages a free flow knowledge and expertise. With over seventy webinars since its inception in 2013, we have covered a wide variety of tech and business issues
        </p>

        <a href="#" class="btn cta-btn">Become a Speaker</a>
        </div>
      </section>

      <section class="content-block infographic-block page-wrap">
         <figure class="infographics">
          <?php echo file_get_contents("../img/webinar-graphics.svg"); ?>
        </figure>

      </section>

      <section class="content-block grey-bg">
        <header class="section-subheader">
          <h2>Featured Webinars</h2>
        </header>
          <div class="page-wrap">
             <div class="row item-listing webinar-listing">
          <div class="col-4 item ">
            <div class="item-wrap">
              <a href="#">
                <header>
                  <figure class="icon">
                    <img src="/img/larry-garfield.png" alt="larry garfield">
                  </figure>

                  <h2>Drupal 8 Crash Course <span class="by-txt">Larry Garfield</span></h2>
                </header>
                <div class="intro-txt">
                  <p>Go from product idea to a prototype, swiftly, with Srijan’s Discovery Workshops.</p>
                </div>
              </a>
              <a href="webinar-details.php" class="cta-btn">Watch Webinar <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-4 item ">
            <div class="item-wrap">
              <a href="#">
                <header>
                  <span class="icon">
                    <img src="/img/morten.jpg" alt="morten">
                  </span>
                  <h2>Goodbye to 10 Years of Theming Headaches <span class="by-txt">Morten DK</span></h2>
                </header>
                <div class="intro-txt">
                  <p>Go from product idea to a prototype, swiftly, with Srijan’s Discovery Workshops.</p>
                </div>
              </a>
              <a href="webinar-details.php" class="cta-btn">Watch Webinar <i class="fa fa-angle-right"></i></a>

            </div>
          </div>
          <div class="col-4 item ">
            <div class="item-wrap">
              <a href="#">
                <header>
                  <span class="icon">
                    <img src="/img/jesus.jpg" alt="">
                  </span>

                  <h2>Faster &amp; Smarter Development with Drupal Console <span class="by-txt">Jesus M. Olivas</span></h2>
                </header>
                <div class="intro-txt">
                  <p>Go from product idea to a prototype, swiftly, with Srijan’s Discovery Workshops.</p>
                </div>
              </a>
              <a href="webinar-details.php" class="cta-btn">Watch Webinar <i class="fa fa-angle-right"></i></a>
              
            </div>
          </div>
        </div>
          </div>
      </section>

    </main>

    <?php include '../contact-form.php';?>
    <?php include '../footer.php';?>


  </div>
  <div class="off-canvas">
    <ul class="menu-panel">
      <li><a href="#">Home</a></li>
      <li><a href="#">Drupal</a></li>
      <li><a href="#">Solutions</a></li>
      <li><a href="#">Technologies</a></li>
      <li><a href="#">Processes</a></li>
      <li><a href="#">Clients</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Webinars</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Careers</a></li>
    </ul>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
  <script src="/js/plugins.js"></script>
  <script src="/js/main.js"></script>

</body>
</html>
