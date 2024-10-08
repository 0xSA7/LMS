<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META ============================================= -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="robots" content="">

  <!-- DESCRIPTION -->
  <meta name="description" content="EduChamp is a LSM ">

  <!-- OG -->
  <meta property="og:title" content="EduChamp">
  <meta property="og:description" content="EduChamp">
  <meta property="og:image" content="">
  <meta name="format-detection" content="telephone=no">

  <!-- FAVICONS ICON ============================================= -->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

  <!-- PAGE TITLE HERE ============================================= -->
  <title>EduChamp</title>

  <!-- MOBILE SPECIFIC ============================================= -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('assets/js/respond.min.js') }}"></script>
  <![endif]-->

  <!-- All PLUGINS CSS ============================================= -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">

  <!-- TYPOGRAPHY ============================================= -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">

  <!-- SHORTCODES ============================================= -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}">

  <!-- STYLESHEETS ============================================= -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css') }}">

  <!-- REVOLUTION SLIDER CSS ============================================= -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/layers.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/settings.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/navigation.css') }}">
  <!-- REVOLUTION SLIDER END -->
</head>

<body id="bg">

  <!-- Header Top ==== -->
  <header class="header rs-nav">
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="topbar-left">
            <ul>
              <li>
                <a href="#">
                  <i class="fa fa-question-circle"></i>Ask a Question
                </a>
              </li>
              <li>
                <a href="mailto:support@website.com">
                  <i class="fa fa-envelope-o"></i>Support@website.com
                </a>
              </li>
            </ul>
          </div>
          <div class="topbar-right">
            <ul class="align-items-center">
              <li>
                <select class="header-lang-bx">
                  <option data-icon="flag flag-uk">English UK</option>
                  <option data-icon="flag flag-us">English US</option>
                </select>
              </li>
              @guest
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
              @endguest
              @auth
              <!-- Avatar -->
              <li class="dropdown">
                <!-- to be cont... -->
                <a class="dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="10" style="width: 30px; height:30px ;" alt="Avatar" loading="lazy" />
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/profile">My Profile</a>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </div>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-header navbar-expand-lg">
      <div class="menu-bar clearfix">
        <div class="container clearfix">
          <!-- Header Logo ==== -->
          <div class="menu-logo">
            <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="EduChamp Logo"></a>
          </div>
          <!-- Mobile Nav Button ==== -->
          <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <!-- Author Nav ==== -->
          <div class="secondary-menu">
            <div class="secondary-inner">
              <ul>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                <!-- Search Button ==== -->
                <li class="search-btn">
                  <button id="quik-search-btn" type="button" class="btn-link">
                    <i class="fa fa-search"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <!-- Search Box ==== -->
          <div class="nav-search-bar">
            <form action="#">
              <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
              <span><i class="ti-search"></i></span>
            </form>
            <span id="search-remove"><i class="ti-close"></i></span>
          </div>
          <!-- Navigation Menu ==== -->
          <div class="menu-links navbar-collapse collapse justify-content-center" id="menuDropdown">
            <div class="menu-logo">
              <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li class="add-mega-menu"><a href="javascript:;">Our Courses <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu add-menu">
                  <li class="add-menu-left">
                    <h5 class="menu-adv-title">Our Courses</h5>
                    <ul>
                      <!-- to be cont... -->
                      <li><a href="{{ route('courses') }}">Courses </a></li>
                      <li><a href="{{route('courses.courseDetails', 1)}}">Courses Details</a></li>
                    </ul>
                  </li>
                  <li class="add-menu-right">
                    <img src="{{asset('assets/images/adv/adv.jpg')}}" alt="" />
                  </li>
                </ul>
              </li>
              <!-- to be cont... -->
              <li class="nav-dashboard"><a href="/dashboard">Dashboard</a></li>
              <li class="nav-dashboard"><a href="#">Contact Us</a></li>
            </ul>
            <div class="nav-social-link">
              <a href="javascript:;"><i class="fa fa-facebook"></i></a>
              <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
              <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <!-- Navigation Menu END ==== -->
        </div>
      </div>
    </div>
  </header>
  <!-- header END ==== -->

  <main>
  @yield('content')
  </main>

  <!-- Footer ==== -->
  <footer>
    <div class="footer-top">
      <div class="pt-exebar">
        <div class="container">
          <div class="d-flex align-items-stretch">
            <div class="pt-logo mr-auto">
              <a href="/"><img src="{{asset('assets/images/logo-white.png')}}" alt="EduChamp Logo" /></a>
            </div>
            <div class="pt-social-link">
              <ul class="list-inline m-a0">
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
            @guest
            <div class="pt-btn-join">
              <a href="/login" class="btn ">Join Now</a>
            </div>
            @endguest
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
            <div class="widget">
              <h5 class="footer-title">Sign Up For A Newsletter</h5>
              <p class="text-capitalize m-b20">
                Weekly Breaking news analysis and cutting edge advices on job searching.
              </p>
              <div class="subscribe-form m-b20">
                <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                  <div class="ajax-message"></div>
                  <div class="input-group">
                    <input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
                    <span class="input-group-btn">
                      <button name="submit" value="Submit" type="submit" class="btn">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5 col-md-7 col-sm-12">
            <div class="row">
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Company</h5>
                  <ul>
                    <!-- to be cont... -->
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Get In Touch</h5>
                  <ul>
                    <!-- to be cont... -->
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Event</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                <div class="widget footer_widget">
                  <h5 class="footer-title">Courses</h5>
                  <ul>
                    <!-- to be cont... -->
                    <li><a href="{{ route('courses') }}">Courses</a></li>
                    <li><a href="#">Details</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Profile</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
            <div class="widget widget_gallery gallery-grid-4">
              <h5 class="footer-title">Our Gallery</h5>
              <ul class="magnific-image">
                <li>
                  <a href="{{asset('assets/images/gallery/pic1.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic1.jpg')}}" alt="Gallery Image 1">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic2.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic2.jpg')}}" alt="Gallery Image 2">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic3.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic3.jpg')}}" alt="Gallery Image 3">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic4.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic4.jpg')}}" alt="Gallery Image 4">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic5.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic5.jpg')}}" alt="Gallery Image 5">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic6.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic6.jpg')}}" alt="Gallery Image 6">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic7.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic7.jpg')}}" alt="Gallery Image 7">
                  </a>
                </li>
                <li>
                  <a href="{{asset('assets/images/gallery/pic8.jpg')}}" class="magnific-anchor">
                    <img src="{{asset('assets/images/gallery/pic8.jpg')}}" alt="Gallery Image 8">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <span>
              Developed by <a target="_blank" href="https://taha-shaban-kaamel.github.io/portfolio/#home" class="text-warning">Taha Shaban 👩‍💻</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer END ==== -->
  
  <!-- External JavaScripts -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
  <script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
  <script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
  <script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
  <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
  <script src="{{ asset('assets/js/functions.js') }}"></script>
  <script src="{{ asset('assets/js/contact.js') }}"></script>
  <script src="{{ asset('assets/vendors/switcher/switcher.js') }}"></script>
  <!-- Revolution JavaScripts Files -->
  <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
  <!-- Slider revolution 5.0 Extensions -->
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
  <script>
    jQuery(document).ready(function () {
      var ttrevapi;
      var tpj = jQuery;
      if (tpj("#rev_slider_486_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_486_1");
      } else {
        ttrevapi = tpj("#rev_slider_486_1").show().revolution({
          sliderType: "standard",
          jsFileLocation: "assets/vendors/revolution/js/",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "on",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "on",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            },
            arrows: {
              style: "uranus",
              enable: true,
              hide_onmobile: false,
              hide_onleave: false,
              tmp: '',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 10,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 10,
                v_offset: 0
              }
            },

          },
          viewPort: {
            enable: true,
            outof: "pause",
            visible_area: "80%",
            presize: false
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [768, 600, 600, 600],
          lazyType: "none",
          parallax: {
            type: "scroll",
            origo: "enterpoint",
            speed: 400,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
            type: "scroll",
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    });
  </script>
</body>

</html>