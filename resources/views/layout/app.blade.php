<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>There's a little bit of magic in my box! | Pylbox</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- Lightbox CSS-->
        <link rel="stylesheet" href="{{ asset('vendor/lightbox2/css/lightbox.min.css') }}">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&amp;display=swap">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="https://img.icons8.com/pastel-glyph/128/000000/box--v3.png">
        <!-- AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- ToastJS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/Toast.css') }}">
        <!-- Vex -->
        <link rel="stylesheet" href="{{ asset('css/vex.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/vex-theme-plain.css') }}"/>
        @yield('custom-css')
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-inner d-flex flex-column">
                <div class="px-4 py-5"><a href="{{ route('home.index') }}"><img src="https://img.icons8.com/pastel-glyph/256/000000/box--v3.png" alt="" width="90"></a></div>
                <div class="sidebar-menu-holder flex-grow-1">
                    <ul class="sidebar-menu list-unstyled">
                        <li class="mb-2 pb-1">
                            <a id="menu-home" class="sidebar-link h6 text-uppercase letter-spacing-2 font-weight-bold text-small" href={{ route('home.index') }}>Home</a>
                        </li>
                        <li class="mb-2 pb-1">
                            <a id="menu-add-new-item" class="sidebar-link h6 text-uppercase letter-spacing-2 font-weight-bold text-small" href="{{ route('items.create') }}">Add new item</a>
                        </li>
                        <li class="mb-2 pb-1">
                            <a id="menu-documentation" class="sidebar-link h6 text-uppercase letter-spacing-2 font-weight-bold text-small" href="javascript:void(0)">Documentation</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <ul class="list-inline list-social mb-3">
                        <li class="list-inline-item"><a class="reset-anchor" target="_blank" href="https://www.facebook.com/pyl.walker/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" target="_blank" href="https://www.instagram.com/_pylw/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="reset-anchor" target="_blank" href="https://github.com/code-tieumomo"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-holder">
            <div class="px-4 d-block d-lg-none">
                <!-- navbar-->
                <header class="header">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
                        <button class="navbar-toggler navbar-toggler-right text-sm text-uppercase" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img width="24px" src="{{ asset('icons/menu.gif') }}"/>
                        </button><a class="navbar-brand" href="{{ route('home.index') }}"><img src="https://img.icons8.com/pastel-glyph/256/000000/box--v3.png" alt="" width="50"></a>
                    </nav>
                </header>
            </div>

            @yield('content')

            <footer class="text-muted" style="background: #0d0d0d">
                <div class="container-fluid py-5">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div data-aos="fade-up-right" class="col-lg-4 mb-4 mb-lg-0">
                                    <h2 class="h4 text-white mb-4">
                                        Pylbox
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 172 172" style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#ffffff">
                                                    <path d="M84.65625,19.08125l-64.5,22.84375c-1.6125,0.5375 -2.6875,2.15 -2.6875,3.7625v80.625c0,1.74687 1.075,3.225 2.6875,3.7625l64.5,22.84375c0.40313,0.13438 0.94062,0.26875 1.34375,0.26875c0.26875,0 0.40313,0 0.67188,0h0.13437c0.13437,0 0.26875,-0.13438 0.40313,-0.13438v0l64.5,-22.84375c1.6125,-0.5375 2.6875,-2.15 2.6875,-3.7625v-80.75938v-0.13437c0,-0.13438 0,-0.40313 0,-0.5375v-0.13437c-0.26875,-1.34375 -1.20938,-2.55313 -2.55313,-2.95625l-32.25,-11.42187h-0.13437c-0.80625,-0.26875 -1.88125,-0.40313 -2.82187,0l-62.8875,22.17188c-1.6125,0.5375 -2.6875,2.15 -2.6875,3.7625v14.78125c0,2.28437 1.74687,4.03125 4.03125,4.03125c2.28438,0 4.03125,-1.74688 4.03125,-4.03125v-11.95938l58.85625,-20.82812l20.425,7.25625l-53.75,19.08125c-1.6125,0.5375 -2.6875,2.01563 -2.6875,3.7625c0,0 0,0 0,0.13438v74.98125l-56.4375,-20.15625v-74.98125l61.8125,-21.90312c2.15,-0.80625 3.225,-3.09062 2.41875,-5.10625c-0.67187,-2.15 -2.95625,-3.225 -5.10625,-2.41875zM90.03125,71.35313l56.4375,-20.02188v72.025l-56.4375,20.02187z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </h2>
                                    <p class="text-small">There's a little bit of magic in my box!<br>??? ??? ???_??? ??????</p>
                                    <ul class="list-unstyled text-small mb-0 text-white">
                                        <li class="mb-1"><a class="reset-anchor"> <i class="fas fa-globe-americas text-muted mr-2 fa-fw"></i>Cau Giay, Hanoi 100000.</a></li>
                                        <li class="mb-1"><a class="reset-anchor"> <i class="fas fa-mobile text-muted mr-2 fa-fw"></i>+84 918 516 036</a></li>
                                        <li class="mb-1"><a class="reset-anchor" href="mailto:code.tieumomo@gmail.com"> <i class="fas fa-envelope text-muted mr-2 fa-fw"></i>code.tieumomo@gmail.com</a></li>
                                    </ul>
                                </div>
                                <div data-aos="fade-up" class="col-lg-4 mb-4 mb-lg-0">               
                                    <h2 class="h4 text-white mb-4">Follow me</h2>
                                    <ul class="list-inline">
                                        <div class="row text-white text-small">
                                            <div class="col-6">
                                                <ul class="list-unstyled">
                                                    <li><a class="reset-anchor" target="_blank" href="https://www.facebook.com/pyl.walker/"><i class="fab fa-facebook-f mr-2 mb-2 fa-fw"></i>Facebook</a></li>
                                                    <li><a class="reset-anchor" target="_blank" href="https://www.instagram.com/_pylw/"><i class="fab fa-instagram mr-2 mb-2 fa-fw"></i>Instagram</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled">
                                                    <li><a class="reset-anchor" target="_blank" href="https://github.com/code-tieumomo"><i class="fab fa-github mr-2 mb-2 fa-fw"></i>Github</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <div data-aos="fade-up-left" class="col-lg-4 mb-4 mb-lg-0">
                                    <h2 class="h4 text-white mb-4">Pylation</h2>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a class="reset-anchor" href="#"> 
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                                            <g fill="#ffffff">
                                                                <path d="M86,6.88c-43.62952,0 -79.12,35.49048 -79.12,79.12c0,43.62952 35.49048,79.12 79.12,79.12c8.4968,0 16.67739,-1.35929 24.35547,-3.84985c-2.1328,-1.63744 -4.27506,-3.43779 -6.3425,-5.39515c-5.77232,1.48952 -11.78313,2.365 -18.01297,2.365c-39.83176,0 -72.24,-32.40824 -72.24,-72.24c0,-39.83176 32.40824,-72.24 72.24,-72.24c39.83176,0 72.24,32.40824 72.24,72.24c0,3.8872 -0.39253,7.67964 -0.98765,11.40172c2.32544,0.62264 4.54069,1.49855 6.59781,2.63375c0.82216,-4.558 1.26985,-9.24355 1.26985,-14.03547c0,-43.62952 -35.49048,-79.12 -79.12,-79.12zM85.94625,24.03297c-1.89722,0.02966 -3.41223,1.58976 -3.38625,3.48703v48.76469c-2.75235,0.97772 -4.96149,3.07598 -6.07953,5.77438c-1.11804,2.69841 -1.04025,5.74421 0.21406,8.38203l-20.64672,20.64672c-0.89867,0.86281 -1.26068,2.14404 -0.94641,3.34956c0.31427,1.20552 1.2557,2.14696 2.46122,2.46122c1.20552,0.31427 2.48675,-0.04774 3.34956,-0.94641l20.64,-20.64c1.3889,0.66343 2.9086,1.00777 4.44781,1.00781c5.02507,-0.00143 9.31863,-3.62208 10.16843,-8.57478c0.84979,-4.9527 -1.99125,-9.79752 -6.72843,-11.47397v-48.75125c0.01273,-0.92983 -0.35149,-1.82522 -1.00967,-2.48214c-0.65819,-0.65692 -1.55427,-1.01942 -2.48408,-1.00489zM118.68,103.25375c-12.384,0 -22.36,9.97735 -22.36,22.01735c0,18.92 17.19731,30.27334 28.20531,37.49734c3.096,2.064 5.50937,3.44 7.22937,5.16l2.06266,1.72l2.06265,-1.72c0.86,-0.688 1.978,-1.46469 3.225,-2.32469c1.247,-0.86 2.62165,-1.80331 3.99765,-2.83531c11.696,-7.568 28.89735,-18.57734 28.89735,-37.49734c0,-12.04 -9.976,-22.01735 -22.36,-22.01735c-0.731,0 -1.45864,0.04098 -2.17687,0.11422c-4.30941,0.4394 -8.34872,2.15538 -11.69063,4.72328c-0.55698,0.42798 -1.0965,0.88419 -1.6125,1.35719c-4.128,-3.784 -9.632,-6.19469 -15.48,-6.19469zM118.68,110.13375c5.16,0 9.62931,2.408 12.72531,6.88l2.75469,4.13203l2.75469,-4.13203c0.344,-0.516 0.71689,-1.00781 1.12203,-1.47812c2.83598,-3.29219 7.08828,-5.40188 11.60328,-5.40188c8.6,0 15.48,6.88135 15.48,15.13735c0,15.136 -14.45069,24.76531 -25.11469,31.64531c-2.408,1.376 -4.12531,2.75738 -5.84531,3.78938c-1.72,-1.376 -3.43731,-2.41338 -5.84531,-3.78938c-10.664,-6.88 -25.11469,-16.50931 -25.11469,-31.64531c0,-1.032 0.10414,-2.04519 0.30906,-3.02344c1.43445,-6.84775 7.64594,-12.1139 15.17094,-12.1139z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="ml-3 media-body">
                                                        <p class="text-white mb-0">Countday</p>
                                                        <p class="small mb-1">https://countday.netlify.app</p>
                                                        <p class="text-gray text-small">A page about us!</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="reset-anchor" href="#"> 
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
                                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                                            <g fill="#ffffff">
                                                                <path d="M18.8125,1.34375c-9.675,0 -17.46875,7.79375 -17.46875,17.46875v134.375c0,9.675 7.79375,17.46875 17.46875,17.46875h134.375c9.675,0 17.46875,-7.79375 17.46875,-17.46875v-134.375c0,-9.675 -7.79375,-17.46875 -17.46875,-17.46875zM18.8125,9.40625h134.375c5.24062,0 9.40625,4.16563 9.40625,9.40625v20.15625h-153.1875v-20.15625c0,-5.24062 4.16563,-9.40625 9.40625,-9.40625zM24.1875,20.15625c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h5.375c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM45.6875,20.15625c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h5.375c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM9.40625,47.03125h153.1875v106.15625c0,5.24062 -4.16563,9.40625 -9.40625,9.40625h-134.375c-5.24062,0 -9.40625,-4.16563 -9.40625,-9.40625zM59.125,79.28125c-3.49375,0 -6.45053,2.28333 -7.25678,5.6427l-10.07812,40.44897c-0.5375,2.15 0.80782,4.29948 2.95782,4.83698c2.15,0.5375 4.29948,-0.80782 4.83698,-2.95782l1.88177,-7.79218c0.26875,0 0.53698,0.13385 0.80573,0.13385h14.37707l1.88178,7.65833c0.40313,1.88125 2.15053,3.09167 3.8974,3.09167c0.26875,0 0.67082,0.00053 0.93957,-0.13385c2.15,-0.5375 3.49532,-2.68698 2.95782,-4.83698l-10.07812,-40.44897c-0.67187,-3.35937 -3.62917,-5.6427 -7.12292,-5.6427zM87.34375,79.28125c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v43c0,2.28438 1.74688,4.03125 4.03125,4.03125c2.28437,0 4.03125,-1.74687 4.03125,-4.03125v-10.75h6.04688c9.94375,0 18.14063,-8.19687 18.14063,-18.14062c0,-9.94375 -8.19687,-18.14062 -18.14062,-18.14062zM126.3125,79.28125c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v43c0,2.28438 1.74688,4.03125 4.03125,4.03125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125v-43c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125zM91.375,87.34375h6.04688c5.50937,0 10.07813,4.56875 10.07813,10.07813c0,5.50937 -4.56875,10.07813 -10.07812,10.07813h-6.04687zM59.125,89.22553l5.6427,22.30572h-11.15155z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <div class="ml-3 media-body">
                                                        <p class="text-white mb-0">Pylapi</p>
                                                        <p class="small mb-1">http://pylapi.herokuapp.com</p>
                                                        <p class="text-gray text-small">Our api!</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-dark py-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="row text-white">
                                    <div class="col-md-6 text-center text-md-left">
                                        <p class="text-small mb-3 mb-md-0"><span class="text-muted">&copy; All rights reserved - code.tieumomo</span></p>
                                    </div>
                                    <div class="col-md-6 text-center text-md-right">
                                        <p class="text-small mb-0">
                                            <!-- You are completely free to use this template for your personal use or as a work for your client as long as you keep the link at the template footer pointing to our partner and us.-->
                                            <!-- If you would prefer removing the backlink from the theme footer, please purchase the attribution-free license at the theme page at https://bootstraptemple.com --><span class="text-muted">Template designed by </span><a class="reset-anchor" href="https://bootstraptemple.com/p/minimal-bootstrap-creative-portfolio">Bootstrap Temple</a><span class="text-muted"><br>Re-designed by </span><a class="reset-anchor" target="_blank" href="https://www.facebook.com/pyl.walker/">Qu??n</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- JavaScript files-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/masonry-layout/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/lightbox2/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/front.js') }}"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                mirror: true
            });
        </script>
        <!-- ToastJS -->
        <script type="text/javascript" src="{{ asset('js/Toast.js') }}"></script>
        <!-- Vex -->
        <script src="{{ asset('js/vex.combined.min.js') }}"></script>
        <script>vex.defaultOptions.className = 'vex-theme-plain'</script>
        @yield('custom-js')
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </body>
</html>
