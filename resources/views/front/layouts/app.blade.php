<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>AutoHeaven</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.css")}}">

    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #232323;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #a4c639;
        }
    </style>
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>autoheaven@company.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route("index")}}"><h2>Auto<em> Heaven</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route("index")}}">Ana Sayfa
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("cars")}}">Arabalar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hakkında</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route("about")}}">Hakkımızda</a>
                            <a class="dropdown-item" href="{{route("blog")}}">Blog</a>
                            <a class="dropdown-item" href="{{route("team")}}">Takım</a>
                            <a class="dropdown-item" href="{{route("testimonials")}}">Görüşler</a>
                            <a class="dropdown-item" href="{{route("faq")}}">SSS</a>
                            <a class="dropdown-item" href="{{route("terms")}}">Şartlar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("contact")}}">Bize Ulaşın</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route("dashboard")}}">Profil</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Çıkış Yap</a>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("login")}}">Giriş Yap</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield("content")

<!-- Footer Starts Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-item">
                <h4>AutoHeaven</h4>
                <p>En iyi fiyatlarla güvenilir araçlar sunuyoruz. Kalite ve müşteri memnuniyeti garantisi ile hizmetinizdeyiz.</p>
                <ul class="social-icons">
                    <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4>Kullanışlı Bağlantılar</h4>
                <ul class="menu-list">
                    <li><a href="#">Ana Sayfa</a></li>
                    <li><a href="#">Arabalar</a></li>
                    <li><a href="#">Bize Ulaşın</a></li>
                    <li><a href="#">Giriş Yap</a></li>
                    <li><a href="#">Profil</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4>Ek Sayfalar</h4>
                <ul class="menu-list">
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">SSS</a></li>
                    <li><a href="#">Takım</a></li>
                    <li><a href="#">Şartlar</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item last-item">
                <h4>Bize Ulaşın</h4>
                <div class="contact-form">
                    <form id="contact footer-contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Ad Soyad" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Mesaj Gönder</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Telif Hakkı © 2024 AutoHeaven</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Additional Scripts -->
<script src="{{asset("assets/js/custom.js")}}"></script>
<script src="{{asset("assets/js/owl.js")}}"></script>
<script src="{{asset("assets/js/slick.js")}}"></script>
<script src="{{asset("assets/js/accordions.js")}}"></script>

<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>

</body>
</html>
