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
                        @if($user->profile_photo_path == null)
                            <img src="{{asset("assets/images/anonymous.png")}}">
                        @else
                            <img src="{{ asset('assets/images/'.$user->profile_photo_path) }}">
                        @endif
                        <div class="down-content">
                            <h4>{{$user->name." ".$user->surname}}</h4>
                            <span>{{$user->job}}</span>
                            @if($user->bio == null)
                                <p>Merhaba, ben {{$user->name}}!</p>
                            @else
                                <p>{{$user->bio}}</p>
                            @endif
                            <h4 class="mt-5">Telefon</h4>
                            <strong><a href="tel:{{$user->phone}}">{{$user->phone}}</a></strong>
                            <h4 class="mt-3">Email</h4>
                            <strong><a href="mailto:{{$user->email}}">{{$user->email}}</a></strong>
                            <div class="text-center">
                                <a href="{{route("sellCar")}}" class="filled-button mt-5">Araba Sat</a>
                                <a href="#" class="filled-button mt-5">Blog Yaz</a>
                                <a href="{{route("editProfile")}}" class="filled-button mt-2">Profili Düzenle</a>
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
                            @foreach($cars as $car)
                                <div class="service-item">
                                    <img src="{{ asset('assets/images/'.$car->media) }}" alt="">
                                    <p class="mt-2">{{$car->title}}</p>
                                    <div>
                                    <span>
                                        <sup>₺</sup>{{$car->price}}
                                    </span>
                                    </div>

                                    <p>
                                        <i class="fa fa-dashboard"></i> {{$car->km}}km &nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-cog"></i> {{$gearTypes[$car->gear_type]}} &nbsp;&nbsp;&nbsp;
                                    </p>
                                    <a href="http://127.0.0.1:8000/car-details/{{$car->id}}" class="filled-button mt-3">İncele</a>
                                </div>
                            @endforeach
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
