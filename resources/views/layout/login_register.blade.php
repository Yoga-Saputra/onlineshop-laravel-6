<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{asset('template/img/favicon.png')}}" type="image/png" />
  <title>Eiser ecommerce</title>
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="{{asset('template/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/linericon/style.css')}}" />
  <link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/lightbox/simpleLightbox.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/nice-select/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('template/vendors/jquery-ui/jquery-ui.css')}}" />
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('template/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}" />

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('template/img/yo1.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('template/img/yo1.png')}}">
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    {{--  <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +01 256 25 235</p>
              <p>email: info@eiser.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="cart.html">
                    gift card
                  </a>
                </li>
                <li>
                  <a href="tracking.html">
                    track order
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="{{asset('template/img/yoga.png')}}" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Product</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Bag</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Shoes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Arlogi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">T-Shirt</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Info</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="#">How to Order</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Account Bank</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Confirmation</a>
                  </li>
                  
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>
                  @guest
                    <li class="nav-item">
                        <a class="icons" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="icons" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="icons dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                  
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!--================Home Banner Area =================-->
  @yield('content')

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('template/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('template/js/popper.js')}}"></script>
  <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template/js/stellar.js')}}"></script>
  <script src="{{asset('template/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('template/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('template/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('template/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('template/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('template/js/mail-script.js')}}"></script>
  <script src="{{asset('template/js/theme.js')}}"></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>