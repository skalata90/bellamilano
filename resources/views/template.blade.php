@if(Request::ajax() == false)
    <!DOCTYPE html>
    <html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
    	<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('css/JiSlider.css')}}">
        <link href="{{asset('css/light-carousel.css')}}" rel="stylesheet" type='text/css'>
        <!-- <link href="css/flickerplate.css"  type="text/css" rel="stylesheet"> -->
        <!-- Standard Favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
    	<title>{{isset($title) ? $title : "Bella Milano"}}</title>
    </head>
    <body>

        <header>
            <div class="logo"><a href="{{url('index')}}"><img src="{{asset('img/logo2.png')}}"></a></div>
                <div class="bars"><i class="fa fa-bars fa-2x"></i></div>
                    <nav id="nav">
                        <li><a href="{{url('index')}}" class="hvr-pop">Home</a></li>
                        <li><a href="{{url('menus')}}" class="hvr-pop">Menu</a></li>
                        <li><a href="{{url('booking')}}" class="hvr-pop">Booking</a></li>
                        <li><a href="{{url('reviews')}}" class="hvr-pop">Reviews</a></li>
                        <li><a href="{{url('contact')}}" class="hvr-pop">Contact</a></li>

                        @if(Auth::check())
                        <li><a href="{{url('logout')}}" class="hvr-pop">Logout</a></li>
                            @if(Auth::user()->admin == 1)
                                <li><a href="{{url('admin')}}" class="hvr-pop">Admin</a></li>
                            @else
                                <li><a href="{{url('users/'.Auth::user()->id)}}" class="hvr-pop">Account</a></li>
                            @endif
                        @else      
                        <li><a href="{{url('login')}}" class="hvr-pop">Login/Register</a></li>
                        @endif
                        
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-1x fat"></i></a></li>
                        <li><a href="ttps://www.twitter.com/"><i class="fa fa-twitter-square fa-1x fat"></i></a></li>    
                    </nav>
        </header>

        <main>
@endif           
            @yield('content')

@if(Request::ajax() == false)

        <div id="token" style="display:none;">{{ csrf_token() }}</div>
        </main>

        <footer>
            <div class="aboutus foot hideIt">
                <h2>About Us</h1><br>
                    <p>Located in Auckland New Zealand<br> Bella Milano Restaurant has seen<br> 25 years of serving food <br>especially to Aucklanders and <br>tourists in Auckland City.</p>
            </div>
            <div class="openhours foot">
                <h2>Opening Hours</h1><br>
                    <p>Mon to Thur: 11am-Late<br>Fri to Sun: 9am-Late</p><br>
                    <i class="fa fa-cc-visa fa-2x"></i>
                    <i class="fa fa-cc-amex fa-2x"></i>
                    <i class="fa fa-cc-mastercard fa-2x"></i>
            </div>
            <div class="location foot">
                <h2>Our Location</h1><br>
                    <p>Bella Milano Restaurant<br>12 Shortland St<br>
                     Auckland </p>
            </div>
            <p>Copyright © 2015 Bella Milano. Design by <a href="">Kiril Zhelyazkov</a></p>
        </footer>
     
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI70QvYZy_lrSASsqVsgn8teLLmmBcy6M&callback=initMap" async defer></script>

    <script src="{{asset('js/geo-min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script> 
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{asset('js/JiSlider.js')}}"></script>
    <script src="{{asset('js/jquery.light-carousel.js')}}"></script>
    <script src="{{asset('js/history/html5/jquery.history.js')}}"></script>
    <script src="{{asset('js/jquery.jeditable.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    </body>
    </html>
@endif