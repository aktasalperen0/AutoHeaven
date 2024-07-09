@extends("front.layouts.app")

@section("content")

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Profil</h1>
                    <span>Hoşgeldin {{\Illuminate\Support\Facades\Auth::user()->name}}!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="team" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{asset("assets/images/team-image-1-646x680.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Alperen Aktaş</h4>
                            <span>Junior Web Developer</span>
                            <p>Merhaba, ben Alperen. Yeniliklere ve öğrenmeye açığım. Takım çalışmasına ve projelerde yer almaya hazırım!</p>
                            <p>
                                <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                            <h4 class="mt-5">Telefon</h4>
                            <strong><a href="tel:123-456-789">123-456-789</a></strong>
                            <h4 class="mt-3">Email</h4>
                            <strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong>
                            <div class="text-center">
                                <a href="{{route("sellCar")}}" class="filled-button mt-5">Araba Sat</a>
                                <a href="#" class="filled-button mt-5">Blog Yaz</a>
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                                    <a href="{{route("addBrandModel")}}" class="filled-button mt-2">Araba Marka/Model Ekle</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 px-5">
                    <h2>Arabaların</h2>
                    <div class="row mt-5">
                        <div class="col-md-12 owl-testimonials owl-carousel">
                            <div class="service-item">
                                <img src="http://127.0.0.1:8000/assets/images/product-1-720x480.jpg" alt="">
                                <p class="mt-2">Araba 1</p>
                                <div>
                                    <span>
                                        <sup>$</sup>11779
                                    </span>
                                </div>

                                <p>
                                    <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                                </p>
                                <a href="http://127.0.0.1:8000/car-details" class="filled-button mt-3">İncele</a>
                            </div>
                            <div class="service-item">
                                <img src="http://127.0.0.1:8000/assets/images/product-2-720x480.jpg" alt="">
                                    <p>Araba 2</p>
                                    <div style="margin-bottom:10px;">
                                        <span>
                                            <sup>$</sup>11779
                                        </span>
                                    </div>
                                    <p>
                                        <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                                    </p>
                                    <a href="http://127.0.0.1:8000/car-details" class="filled-button mt-3">İncele</a>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt-5">Blogların</h2>
                    <div class="row mt-5">
                        <div class="col-md-12 owl-testimonials owl-carousel">
                            <section >
                                <article id="tabs-1">
                                    <img src="http://127.0.0.1:8000/assets/images/blog-image-1-940x460.jpg" alt="">
                                    <h4 class="my-3"><a href="http://127.0.0.1:8000/blog-details" class="text-dark">Blog 1</a></h4>
                                    <div style="margin-bottom:10px;" class="mt-2">
                                        <span>John Doe &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                                    </div>
                                    <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam.</p>
                                    <br>
                                    <div>
                                        <a href="http://127.0.0.1:8000/blog-details" class="filled-button">Okumaya Devam Et</a>
                                    </div>
                                </article>
                            </section>
                            <section >
                                <article id="tabs-2">
                                    <img src="http://127.0.0.1:8000/assets/images/blog-image-2-940x460.jpg" alt="">
                                    <h4 class="my-3"><a href="http://127.0.0.1:8000/blog-details" class="text-dark">Blog 2</a></h4>
                                    <div style="margin-bottom:10px;">
                                        <span>John Doe &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                                    </div>
                                    <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam.</p>
                                    <br>
                                    <div>
                                        <a href="http://127.0.0.1:8000/blog-details" class="filled-button">Okumaya Devam Et</a>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
