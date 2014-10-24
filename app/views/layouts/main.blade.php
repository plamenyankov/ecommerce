<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/main.css') }}

    <!--    <link rel="stylesheet" href="css/normalize.css">-->
    <!--    <link rel="stylesheet" href="css/main.css">-->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div id="wrapper">
    <header>
        <section id="top-area">
            <p>Phone orders: 1-800-0000 | Email us: <a href="mailto:office@shop.com">office@shop.com</a></p>
        </section>
        <!-- end top-area -->
        <section id="action-bar">
            <div id="logo">
                <a href="/">{{HTML::image("img/turtile_03.png",'logo')}}</a>
            </div>
            <!-- end logo -->

            <nav class="dropdown">
                <ul>
                    <li>
                        <a href="#">Shop by Category <i class="fa fa-caret-down"></i></a>
                        <ul>
                            @foreach($catnav as $cat)
                            <li><a href="/categories/{{$cat->id}}">{{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="search-form">
                {{Form::open(['url'=>'store/search','method'=>'get'])}}
                {{Form::text('keyword',null,['placeholder'=>'Search by keyword','class'=>'search'])}}
                {{Form::submit('Search',['class'=>'search submit'])}}
                {{Form::close()}}

            </div>
            <!-- end search-form -->

            <div id="user-menu">
                @if(Auth::check())
                <nav class="dropdown">
                    <ul>
                        <li>
                            <a class="username" href="#">{{HTML::image("img/user-icon.gif",Auth::user()->firstname)}} {{Auth::user()->firstname}}
                                <i class="fa fa-caret-down"></i></a>
                            <ul>
                                @if(Auth::user()->admin == 1)
                                <li>{{HTML::link('/admin/category','Manage Categories')}}</li>
                                <li>{{HTML::link('/admin/products','Manage Products')}}</li>
                                @endif
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="/users/signOut">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                @else
                <nav id="signin" class="dropdown">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Sign In <i class="fa fa-caret-down"></i></a>
                            <ul>
                                <li><a href="/users/signin">Sign In</a></li>
                                <li><a href="/users/create">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                @endif

            </div>
            <!-- end user-menu -->

            <div id="view-cart">
                <a href="/store/cart"><i class="fa fa-shopping-cart"></i> View Cart</a>
            </div>
            <div id="wishlist">
                <a href="/wishlist"><i class="fa fa-heart"></i>Wishlist</a>
            </div>
            <!-- end view-cart -->
        </section>
        <!-- end action-bar -->
    </header>
    @yield('promo')
    @yield('search-keyword')
    <hr/>
    @if(Session::has('message'))
    <div class="alert">{{Session::get('message')}}</div>
    @endif
    <section id="main-content" class="clearfix">

        @yield('content')
    </section>
    <!-- end main-content -->

    <hr/>


    @yield('pagination')
    <footer>
        <section id="contact">
            <h3>For phone orders please call 1-800-000. You<br>can also email us at <a href="mailto:office@shop.com">office@shop.com</a>
            </h3>
        </section>
        <!-- end contact -->

        <hr/>

        <section id="links">
            <div id="my-account">
                <h4>MY ACCOUNT</h4>
                <ul>
                    <li>{{HTML::link("/users/signin",'Sign In')}}</li>
                    <li><a href="/users/create">Sign Up</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="/store/cart">Shopping Cart</a></li>
                </ul>
            </div>
            <!-- end my-account -->
            <div id="info">
                <h4>INFORMATION</h4>
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- end info -->
            <div id="extras">
                <h4>EXTRAS</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li>{{HTML::link('/store/contact','Contact Us')}}</li>
                </ul>
            </div>
            <!-- end extras -->
        </section>
        <!-- end links -->

        <hr/>

        <section class="clearfix">
            <div id="copyright">
                <div id="logo">
                    <a href="#"><span id="logo-accent">e</span>Commerce</a>
                </div>
                <!-- end logo -->
                <p id="store-desc">This is a short description of the store.</p>

                <p id="store-copy">&copy; 2013 eCommerce. Theme designed by Adi Purdila.</p>
            </div>
            <!-- end copyright -->
            <div id="connect">
                <h4>CONNECT WITH US</h4>
                <ul>
                    <li class="twitter"><a href="#">Twitter</a></li>
                    <li class="fb"><a href="#">Facebook</a></li>
                </ul>
            </div>
            <!-- end connect -->
            <div id="payments">
                <h4>SUPPORTED PAYMENT METHODS</h4>
                {{ HTML::image('/img/payment-methods.gif','Supported Payment Methods') }}

            </div>
            <!-- end payments -->
        </section>
    </footer>
</div>
<!-- end wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>
