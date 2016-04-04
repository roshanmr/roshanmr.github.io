
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <!-- Inject SVG Icons -->
      <?php include_once("img/proseicon.svg"); ?>

      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 main-menu-wrap">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="#">Prose Media</a>
            </div>
            <nav class="user-nav">
              <span class="welcome-txt">Welcome Back</span>

              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Justin
                  <span class="glyphicon glyphicon-menu-down"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>

              <a href="#" class="alert-trigger">
                <span class="sprite-icon alert-icon"></span> <span class="alert-value">3</span>
              </a>

            </nav>
          </div>
        </div>
      </nav>

      <section class="container-fluid">
        <nav class="page-nav">
          <div class="row">
            <div class="col-md-11">
              <h2>Page Nav Title</h2>

              <ul class="dot-pagination">
                <li class="done">
                  <span class="page-no">
                    1
                  </span>
                  <span class="progress-line">

                  </span>
                  <span class="step-label">Get Started</span>
                </li>

                <li class="active">
                  <span class="page-no">
                    2
                  </span>
                  <span class="progress-line">

                  </span>
                  <span class="step-label">Get Started</span>
                </li>
                
                <li>
                  <span class="page-no">
                    3
                  </span>
                  <span class="progress-line">

                  </span>
                  <span class="step-label">Get Started</span>
                </li>

              </ul>

              <div class="cart-preview dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="cart-icon">
                   <svg viewBox="0 0 30 30" class="svg-icon cart-icon">
                    <use xlink:href="#cart"></use>
                  </svg>
                  <em>3</em>
                </span>
                <span class="cart-amt">$199 <strong class="cart-label">Order Total</strong></span>

                <span class="glyphicon glyphicon-menu-down"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li>
                  <div class="order-summary-wrap">
                    <span class="label">1 Blog Post</span>
                    <span class="value">$100</span>
                  </div>
                </li>
                <li>
                  <div class="order-summary-wrap">
                    <span class="label">Rush Delivery</span>
                    <span class="value">$99</span>
                  </div>
                </li>
                <li>
                  <div class="order-summary-wrap total">
                    <span class="label">Total</span>
                    <span class="value">$199.00</span>
                  </div>
                </li>
                <li>
                  <div class="order-summary-wrap delivery-date">
                    <span class="delivery-label">
                      Delivered By
                    </span>
                    <span class="date">December 12</span>
                  </div>
                </li>
                <li>
                  <div class="btn-wrap">
                    <a href="#" class="btn small-btn">Payment Type</a>
                  </div>
                </li>
              </ul>
            </div>


          </div>
        </div>
      </nav>
      <div class="row main-page">
        <aside class="col-sm-3 col-md-2 sidebar">
          <div class="left-nav-wrap">
            <ul class="nav nav-sidebar">
              <li class="nav-trigger"><a href="#">
                <span class="anim-icon menu-icon"><i></i></span>
                <span class="nav-text logo">Prose Media</span>
              </a>
            </li>
            <li class="create-project"><a href="#">
              <span class="sprite-icon new-icon"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>
            <li class="active"><a href="#">
              <span class="sprite-icon dashboard"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>
            <li><a href="#">
              <span class="sprite-icon projects"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>

            <li><a href="#">
              <span class="sprite-icon chat"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>

            <li><a href="#">
              <span class="sprite-icon billing"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>

            <li><a href="#">
              <span class="sprite-icon help"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>

            <li><a href="#">
              <span class="sprite-icon settings"> </span>
              <span class="nav-text">Nav Text</span>
            </a></li>

          </ul>

        </div>
      </aside>


      <section class="col-sm-9 col-sm-offset-3 col-md-10 main main-content-wrap form-section">
        <div class="row">
          <form action="#" class="col-md-9">
            <div class="panel panel-default">
              <h2 class="panel-heading">Choose a category to get started</h2>
              <div class="panel-body">
                <section class="content-section">
                  <ul class="category-list">
                    <li class="trigger-callout" data-target="callout-blog">
                      <div class="box-select">
                        <label for="cat-blog">
                          <input type="checkbox" id="cat-blog" name="cat-blog">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                              <use xlink:href="#blog"></use>
                            </svg>
                          </span>
                          <strong>Blog Post</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li class="trigger-callout" data-target="callout-social">
                      <div class="box-select">
                        <label for="cat-social">
                          <input type="checkbox" id="cat-social" name="cat-social">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon socialicon">
                              <use xlink:href="#social"></use>
                            </svg>
                          </span>
                          <strong>Social Media Posts</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li class="trigger-callout" data-target="callout-whitepaper">
                      <div class="box-select">
                        <label for="cat-whitepaper">
                          <input type="checkbox" id="cat-whitepaper" name="cat-whitepaper">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon whitepaper">
                              <use xlink:href="#whitepaper"></use>
                            </svg>
                          </span>
                          <strong>Whitepaper</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li class="trigger-callout" data-target="callout-bylined">
                      <div class="box-select">
                        <label for="cat-bylined">
                          <input type="checkbox" id="cat-bylined" name="cat-bylined">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon bylined">
                              <use xlink:href="#bylined"></use>
                            </svg>
                          </span>
                          <strong>Bylined Articles</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li class="trigger-callout" data-target="callout-press">
                      <div class="box-select">
                        <label for="cat-press">
                          <input type="checkbox" id="cat-press" name="cat-press">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon press">
                              <use xlink:href="#press"></use>
                            </svg>
                          </span>
                          <strong>Press Releases</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li>
                      <div class="box-select">
                        <label for="cat-copy">
                          <input type="checkbox" id="cat-copy" name="cat-copy">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon copy">
                              <use xlink:href="#copy"></use>
                            </svg>
                          </span>
                          <strong>Copywriting</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li>
                      <div class="box-select">
                        <label for="cat-web">
                          <input type="checkbox" id="cat-web" name="cat-web">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon web">
                              <use xlink:href="#web"></use>
                            </svg>
                          </span>
                          <strong>Website Copywriting</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li>
                      <div class="box-select">
                        <label for="cat-video">
                          <input type="checkbox" name="cat-video" id="cat-video">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon video">
                              <use xlink:href="#video"></use>
                            </svg>
                          </span>
                          <strong>Video Script</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li>
                      <div class="box-select">
                        <label for="cat-speech">
                          <input type="checkbox" id="cat-speech" name="cat-speech">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon speech">
                              <use xlink:href="#speech"></use>
                            </svg>
                          </span>
                          <strong>Speech Writing</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                    <li>
                      <div class="box-select">
                        <label for="cat-editing">
                          <input type="checkbox" id="cat-editing" name="cat-editing">
                          <div class="check-icon">
                            <span class="glyphicon glyphicon-ok"></span>
                          </div>

                          <span class="select-icon">
                            <svg viewBox="0 0 30 30" class="svg-icon editing">
                              <use xlink:href="#editing"></use>
                            </svg>
                          </span>
                          <strong>Editing &amp; Proofreading</strong>

                          <span class="price">$199</span>

                        </label>

                      </div>
                    </li>
                  </ul>
                </section>
              </div>
            </div>

          </form>
          <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
            <div class="panel panel-default panel-callout" id="callout-blog">
              <div class="panel-body">
                <div class="help-block-title">
                  <span class="icon-span">
                   <svg viewBox="0 0 30 30" class="svg-icon">
                    <use xlink:href="#blog"></use>
                  </svg>
                </span>
                <span class="title-text">
                  Standard Blog Post
                </span>
              </div>

              <p>
                A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
              </p>
            </div>
          </div>

          <div class="panel panel-default panel-callout" id="callout-social">
           <div class="panel-body">
            <div class="help-block-title">
              <span class="icon-span">
               <svg viewBox="0 0 30 30" class="svg-icon">
                <use xlink:href="#social"></use>
              </svg>
            </span>
            <span class="title-text">
              Social Media Posts
            </span>
          </div>

          <p>
            A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
          </p>
        </div>
      </div>


      <div class="panel panel-default panel-callout" id="callout-whitepaper">
        <div class="panel-body">
          <div class="help-block-title">
            <span class="icon-span">
             <svg viewBox="0 0 30 30" class="svg-icon">
              <use xlink:href="#whitepaper"></use>
            </svg>
          </span>
          <span class="title-text">
            Whitepaper
          </span>
        </div>

        <p>
          A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
        </p>
      </div>
    </div>



    <div class="panel panel-default panel-callout" id="callout-bylined">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#bylined"></use>
          </svg>
        </span>
        <span class="title-text">
          Whitepaper
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>



  <div class="panel panel-default panel-callout" id="callout-press">
    <div class="panel-body">
      <div class="help-block-title">
        <span class="icon-span">
         <svg viewBox="0 0 30 30" class="svg-icon">
          <use xlink:href="#press"></use>
        </svg>
      </span>
      <span class="title-text">
        Whitepaper
      </span>
    </div>

    <p>
      A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
    </p>
  </div>
</div>


</aside>

</div>


<div class="row">
  <form action="#" class="col-md-9">
    <div class="panel panel-default">
      <h2 class="panel-heading">Project Title</h2>
      <div class="panel-body trigger-callout" data-target="callout-project-title">
        <section class="content-section">
          <label class="input-label" for="project-title">What is the title of your project</label>
          <input type="text" class="text-box" name="project-title" id="project-title" value="Blog Post for Net Neutrality" />
          <small class="help-text">
            This titile will be used mostly for your own reference. It is not necessarily the titile of the post as it will appear on your blog
          </small>
        </section>
      </div>
    </div>

  </form>
  <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
    <div class="panel panel-default panel-callout" id="callout-project-title">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#blog"></use>
          </svg>
        </span>
        <span class="title-text">
          Standard Blog Post
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>


</aside>

</div>



<div class="row">
  <form action="#" class="col-md-9">
    <div class="panel panel-default">
      <h2 class="panel-heading">Type of plan</h2>
      <div class="panel-body trigger-callout" data-target="callout-project-title">
        <section class="content-section">

          <div class="flat-tab">
            <ul class="tab-options">
              <li>
                <label for="oneTime" data-target="oneTimeCount">
                  <input type="radio" name="tabOption" id="oneTime" value="oneTimeTab" checked="checked">
                  <h5 class="title"><span class="one-time-icon">1</span> <span>One Time</span></h5>
                </label>
              </li>
              <li>
                <label for="recurring" data-target="recurringCount">
                  <input type="radio" name="tabOption" id="recurring" value="recurringTab">
                  <h5 class="title"><span class="glyphicon glyphicon-refresh"></span> <span>Recurring</span></h5>
                </label>
              </li>
            </ul>
            <div class="tab-panels">
              <div class="panel-option" id="oneTimeTab">
                <h5>One Time</h5>
                <input type="text" class="text-box" name="project-title" id="project-title" value="Blog Post for Net Neutrality" />
          <small class="help-text">
            This titile will be used mostly for your own reference. It is not necessarily the titile of the post as it will appear on your blog
          </small>
              </div>

              <div class="panel-option" id="recurringTab">
              <h5>Recurring</h5>
                <input type="text" class="text-box" name="project-title" id="project-title" value="Blog Post for Net Neutrality" />
          <small class="help-text">
            This titile will be used mostly for your own reference. It is not necessarily the titile of the post as it will appear on your blog
          </small>

              </div>
            </div>
          </div>
          
        </section>
      </div>
    </div>

  </form>
  <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
    <div class="panel panel-default panel-callout" id="callout-project-title">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#blog"></use>
          </svg>
        </span>
        <span class="title-text">
          Standard Blog Post
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>


</aside>

</div>





<div class="row">
  <form action="#" class="col-md-9">
    <div class="panel panel-default">
      <h2 class="panel-heading">Type of plan</h2>
      <div class="panel-body trigger-callout" data-target="callout-project-title">
        <section class="content-section">
          <div class="row">
          <div class="col-md-5">
          <ul class="plan-type select-box-list">
            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="short-blog">
                  <input type="checkbox" id="short-blog" checked="true" name="short-blog">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="one-time-icon ioconspan">1</span>
                  <strong>One Time</strong>


                </label>

              </div>
            </li>

            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="long-blog">
                  <input type="checkbox" id="long-blog" name="long-blog">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="glyphicon glyphicon-refresh iconspan"></span>
                  <strong>Recurring</strong>
                </label>

              </div>
            </li>


          </ul>
          
          </div>

          <div class="number-col col-md-6">
            <h5>One Time</h5>
                <input type="text" class="text-box" name="project-title" id="project-title" value="Blog Post for Net Neutrality" />
          <small class="help-text">
            This titile will be used mostly for your own reference. It is not necessarily the titile of the post as it will appear on your blog
          </small>
          </div>
          </div>
          
        </section>
      </div>
    </div>

  </form>
  <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
    <div class="panel panel-default panel-callout" id="callout-project-title">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#blog"></use>
          </svg>
        </span>
        <span class="title-text">
          Standard Blog Post
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>


</aside>

</div>








<div class="row">
  <form action="#" class="col-md-9">
    <div class="panel panel-default">
      <h2 class="panel-heading">Post Length</h2>
      <div class="panel-body trigger-callout" data-target="callout-project-title">
        <section class="content-section">
          <label class="input-label" for="project-title">How long do you want your post to be?</label>
          
          <ul class="blog-type select-box-list">
            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="short-blog">
                  <input type="checkbox" id="short-blog" checked="true" name="short-blog">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="select-icon">
                    <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                      <use xlink:href="#shortblog"></use>
                    </svg>
                  </span>
                  <strong>Standard Blog Post</strong>

                  <span class="price">Included</span>

                </label>

              </div>
            </li>

            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="long-blog">
                  <input type="checkbox" id="long-blog" name="long-blog">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="select-icon">
                    <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                      <use xlink:href="#longblog"></use>
                    </svg>
                  </span>
                  <strong>Long Post</strong>

                  <span class="price">+ $49</span>

                </label>

              </div>
            </li>


          </ul>
        </section>
      </div>
    </div>

  </form>
  <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
    <div class="panel panel-default panel-callout" id="callout-project-title">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#blog"></use>
          </svg>
        </span>
        <span class="title-text">
          Standard Blog Post
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>


</aside>

</div>




<div class="row">
  <form action="#" class="col-md-9">
    <div class="panel panel-default">
      <h2 class="panel-heading">Writer</h2>
      <div class="panel-body trigger-callout" data-target="callout-project-title">
        <section class="content-section">
          <label class="input-label" for="project-title">What type of writing expertise do you need?</label>
          
          <ul class="writer-type select-box-list">
            

            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="standard">
                  <input type="checkbox" id="standard"  name="standard">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="select-icon">
                    <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                      <use xlink:href="#standard"></use>
                    </svg>
                  </span>
                  <strong>Standard</strong>

                  <span class="price">$65 / Post (Short)</span>
                  <span class="price">$80 / Post (Short)</span>

                </label>

              </div>
            </li>

            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="expert">
                  <input type="checkbox" id="expert"  name="expert">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="select-icon">
                    <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                      <use xlink:href="#expert"></use>
                    </svg>
                  </span>
                  <strong>Standard</strong>

                  <span class="price">$65 / Post (Short)</span>
                  <span class="price">$80 / Post (Short)</span>

                </label>

              </div>
            </li>



            <li class="trigger-callout" data-target="callout-blog">
              <div class="box-select">
                <label for="premium">
                  <input type="checkbox" id="premium"  name="premium">
                  <div class="check-icon">
                    <span class="glyphicon glyphicon-ok"></span>
                  </div>

                  <span class="select-icon">
                    <svg viewBox="0 0 30 30" class="svg-icon blogicon">
                      <use xlink:href="#premium"></use>
                    </svg>
                  </span>
                  <strong>Standard</strong>

                  <span class="price">$65 / Post (Short)</span>
                  <span class="price">$80 / Post (Short)</span>

                </label>

              </div>
            </li>




          </ul>

          <div class="tag-input">
            <div class="tag-input-field">
           
            </div>
             <a class="tag-menu" href="#">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
              </a>
              <menu class="tag-list">
                <div class="tag-list-wrap">
                  <ul class="parent-list">
                    <li>
                      <a href="#">Technology</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" checked name="t1" id="t1" /></div><label for="t1">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t2" id="t2" /></div><label for="t2">Consumer Technology</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t3" id="t3" /></div><label for="t3">B2B/Enterprise Technology</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t4" id="t4" /></div><label for="t4">Cloud Computing</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t5" id="t5" /></div><label for="t5">Big Data</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t6" id="t6" /></div><label for="t6">Mobile Tech</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t7" id="t7" /></div><label for="t7">Telecommunications</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t8" id="t8" /></div><label for="t8">Social Media</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t9" id="t9" /></div><label for="t9">Ad Tech</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t10" id="t10" /></div><label for="t10">Healthcare Technology</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t11" id="t11" /></div><label for="t11">Productivity / BPM</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t12" id="t12" /></div><label for="t12">Gaming</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t13" id="t13" /></div><label for="t13">E-Commerce</label>
                        </li>

                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t14" id="t14" /></div><label for="t14">Electronics &amp; Hardware</label>
                        </li>

                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="t15" id="t15" /></div><label for="t15">Clean Tech</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Healthcare</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h1" id="h1" /></div><label for="h1">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h2" id="h2" /></div><label for="h2">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h3" id="h3" /></div><label for="h3">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h4" id="h4" /></div><label for="h4">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h5" id="h5" /></div><label for="h5">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h6" id="h6" /></div><label for="h6">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h7" id="h7" /></div><label for="h7">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h8" id="h8" /></div><label for="h8">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h9" id="h9" /></div><label for="h9">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="10" id="h10" /></div><label for="h10">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h11" id="h11" /></div><label for="h11">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h12" id="h12" /></div><label for="h12">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="h13" id="h13" /></div><label for="h13">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Finance</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Retail</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Professional Services</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Lifestyle</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Construction</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Manufacturing</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Causes</a>
                      <ul class="sub-list">
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                        <li>

                          <div class="check-box-icon"><span class="glyphicon glyphicon-ok"></span><input type="checkbox" name="" id="" /></div><label for="">Startups</label>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="button-wrap">
                    <a href="#" class="btn btn-primary done-btn">Done</a> <a href="#" class="btn btn-ghost clear-btn">Clear All</a>

                  </div>
                </div>
              </menu>
          </div>
        </section>
      </div>
    </div>

  </form>
  <aside class="col-sm-9 col-md-3 fixed-sidebar right-sidebar hover-sidebar">
    <div class="panel panel-default panel-callout" id="callout-project-title">
      <div class="panel-body">
        <div class="help-block-title">
          <span class="icon-span">
           <svg viewBox="0 0 30 30" class="svg-icon">
            <use xlink:href="#blog"></use>
          </svg>
        </span>
        <span class="title-text">
          Standard Blog Post
        </span>
      </div>

      <p>
        A blog post is one of the best ways to present your company’s public face, comments on current trends or nrews and establish readership in your industry. Ideally 400-650 words blog posts are short and sweet, informative and entircing
      </p>
    </div>
  </div>


</aside>

</div>





</section>



</div>
</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/dashboard.js"></script>
    
    

  </body>
  </html>
