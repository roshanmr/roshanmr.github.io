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
<body class="inner-page webinar-page">
  <div class="canvas">

    <?php include '../nav.php';?>

    <header class="section-page-header">
      <figure class="parallax">
        <img src="/img/webinar-bg.jpg" alt="graphics">
      </figure>
      <div class="page-wrap">
        <span class="webinar-logo">
          <?php echo file_get_contents("../img/webinar-logo.svg"); ?>
        </span>
      </div>
    </header>


    <main class="page section-landing webinars-listing">

      <section class="upcoming-webinars content-block">
        <h1 class="section-heading">Upcoming Webinar</h1>
        <div class="webinar-item page-wrap">
          <figure class="webinar-thumb">
            <img src="/img/webinar-thumb.jpg" alt="webinar name">
          </figure>
          <article class="webinar-details">
            <ul class="webinar-info">
              <li><i class="fa fa-calendar"></i> 17 October 2016</li>
              <li><i class="fa fa-clock-o"></i>  8:30 PM PST</li>
            </ul>
            <h2>Eliminate JavaScript CodeSmells</h2>
            <div class="presenter-details">
              <figure>
                <img src="/img/morten.jpg" alt="morten" />
              </figure>
              <span class="presenter">Morten DK</span>
            </div>
            <p class="subtitle">Explore how to detect ‘code smells’, and identify several ways to deodorize the stench.</p>
            <p>Have you ever written JavaScript that worked, but you didn't feel good about it? Maybe you knew it wasn't optimal, but you didn't..</p>

            <a href="webinar-details.php" class="btn webinar-btn">Learn More <i class="fa fa-angle-right"></i></a>
            
          </article>
        </div>
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

          <a href="listing.php" class="section-cta">View All Past Webinars <i class="fa fa-angle-right"></i></a>


        </div>
      </section>

      <section class="become-speaker content-block bottom-float">
        <div class="page-wrap row">
          <p class="col-8">If you are interested in leading one of our webinars as a speaker or a panelist, drop us a mail at <a href="mailto:email@mail.com">webinars@srijan.in</a>.

          </p>
          <a href="#" class="btn cta-btn">Become a Speaker</a>
        </div>
      </section>

      <?php include '../contact-form.php';?>
    </main>

    <?php include '../footer.php';?>

  </div>
  <?php include '../mobile-nav.php';?>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
  <script src="/js/plugins.js"></script>
  <script src="/js/main.js"></script>

</body>
</html>
