@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Yeniliklerle Dolu</h6>
                        <h4>Yeni Modellerle Tanışın</h4>
                        <p>En son teknoloji ve tasarım harikalarıyla donatılmış yeni araç modellerimizi keşfedin. Sürüş deneyiminizi bir üst seviyeye taşıyan yenilikçi özelliklerle dolu araçlarımızı yakından inceleyin.</p>
                        <a href="{{route("cars")}}" class="filled-button">Arabalar</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Kaçırılmayacak Fırsatlar</h6>
                        <h4>Özel Tekliflerle Dolu</h4>
                        <p>Sınırlı süreli ve özel tekliflerimizi keşfedin! En sevdiğiniz modellerde geçerli olan indirimler, avantajlı finansman seçenekleri ve ekstra hediyelerle dolu fırsatları kaçırmayın.</p>
                        <a href="{{route("about")}}" class="filled-button">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Size Destek Oluyoruz</h6>
                        <h4>Satış Sonrası Hizmetlerimiz</h4>
                        <p>Satın aldığınız araçtan sonra da yanınızdayız! Güvenilir satış sonrası destek hizmetlerimizle, aracınızın bakımı, onarımı ve yedek parça ihtiyaçları konusunda size yardımcı oluyoruz. Size en iyi hizmeti sunmak için buradayız.</p>
                        <a href="{{route("contact")}}" class="filled-button">Bize Ulaşın</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Hemen geri aranmak ister misiniz?</h4>
                    <span>Size hemen geri dönelim mi?</span>
                </div>
                <div class="col-md-4">
                    <a href="{{route("contact")}}" class="border-button">Bize Ulaşın</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Öne Çıkan <em>Arabalar</em></h2>
                        <span>En Popüler Araçlarımızı Keşfedin!</span>
                    </div>
                </div>
                @for($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <div class="service-item">
                            @if($cars[$i]->media == null)
                                <img src="{{ asset('assets/images/no-car.jpg') }}" alt="">
                            @else
                                <img src="{{ asset('assets/images/'.$cars[$i]->media) }}" alt="">
                            @endif
                            <div class="down-content">
                                <h4>{{$cars[$i]->title}}</h4>
                                <div style="margin-bottom:10px;">
                                  <span>
                                      <sup>₺</sup>{{$cars[$i]->price}}
                                  </span>
                                </div>
                                <p>
                                    <i class="fa fa-dashboard"></i> {{$cars[$i]->km}} &nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-cog"></i> {{$gearTypes[$cars[$i]->gear_type]}}
                                </p>
                                <a href="car-details/{{$cars[$i]->id}}" class="filled-button">İncele</a>
                            </div>
                        </div>
                        <br>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="more-info-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="{{asset("assets/images/about-1-570x350.jpg")}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="right-content">
                            <span>Biz kimiz?</span>
                            <h2>Şirketimiz hakkında <em>bilgi edinin</em></h2>
                            <p>Şirketimiz, araç alım satım sürecinde müşterilere en yüksek kalite ve güvenceyi sağlar. Tüm araçlar kapsamlı bir denetimden geçer ve kalite standartlarına uygun olarak sunulur. Müşteri memnuniyeti önceliğimizdir ve satış sonrası destek hizmetleriyle her zaman yanınızdayız. Güvenilir ve şeffaf hizmet anlayışımızla aracınızı güvenle seçip satın alabilirsiniz.</p>
                            <a href="{{route("about")}}" class="filled-button">Devamını oku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info">
        <div class="container">
            <div class="section-heading">
                <h2>Bloglarımızı<em> Okuyun</em></h2>
                <span>Keşfet, Oku, Keyif Al!</span>
            </div>

            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                        <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                        <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                        <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    </ul>

                    <br>

                    <div class="text-center">
                        <a href="{{route("blog")}}" class="filled-button">Devamını Oku</a>
                    </div>

                    <br>
                </div>

                <div class="col-md-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{asset("assets/images/blog-image-1-940x460.jpg")}}" alt="">
                            <h4><a href="{{route("blog-details")}}">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
                        </article>
                        <article id='tabs-2'>
                            <img src="{{asset("assets/images/blog-image-2-940x460.jpg")}}" alt="">
                            <h4><a href="{{route("blog-details")}}">Mauris lobortis quam id dictum dignissim</a></h4>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="{{asset("assets/images/blog-image-3-940x460.jpg")}}" alt="">
                            <h4><a href="{{route("blog-details")}}">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                            <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                            </p>
                        </article>
                    </section>
                </div>
            </div>


        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Hakkımızda neler <em>söylüyorlar?</em></h2>
                        <span>EN BÜYÜK MÜŞTERİLERİMİZDEN GÖRÜŞLER</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>George Walker</h4>
                                <span>Chief Financial Analyst</span>
                                <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>John Smith</h4>
                                <span>Market Specialist</span>
                                <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>David Wood</h4>
                                <span>Chief Accountant</span>
                                <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Andrew Boom</h4>
                                <span>Marketing Head</span>
                                <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="callback-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Geri arama isteğinde <em>bulunun</em></h2>
                        <span>Lütfen Geri Arayın</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Ad Soyad" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Konu" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">Mesaj Gönder</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
