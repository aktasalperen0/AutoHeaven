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
            @if(session("success"))
                <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                    {{session("success")}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
                                <a href="{{route("editMyProfile")}}" class="filled-button mt-2">Profili Düzenle</a>
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
                        @if($cars->count() > 0)
                            <div class="col-md-12 owl-testimonials owl-carousel">
                                @foreach($cars as $car)
                                    <div class="service-item">
                                        @if($car->media == null)
                                            <img src="{{ asset('assets/images/no-car.jpg') }}" alt="">
                                        @else
                                            <img src="{{ asset('assets/images/'.$car->media) }}" alt="">
                                        @endif
                                        <p class="mt-2">{{$car->title}}</p>
                                        <div>
                                            <span>
                                                <sup>₺</sup>{{$car->price}}
                                            </span>
                                        </div>
                                        <p>
                                            <i class="fa fa-dashboard"></i> {{$car->km}}km
                                            <i class="fa fa-cog"></i> {{$gearTypes[$car->gear_type]}}
                                        </p>
                                        <a href="http://127.0.0.1:8000/car-details/{{$car->id}}" class="filled-button mt-3">İncele</a>
                                        <a href="http://127.0.0.1:8000/editCar/{{$car->id}}" class="filled-button mt-3">Düzenle</a>
                                        <button type="button" class="filled-button border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-car-id="{{$car->id}}">Sil</button>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <h2 class="text-center" style="opacity: 25%">Henüz bir araba mevcut değil.</h2>
                        @endif
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form id="deleteCarForm" method="post" action="{{ route('deleteCar') }}">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Uyarı!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Arabanızı ilandan kaldırmak mı istiyorsunuz?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button id="deleteCarButton" type="submit" class="btn btn-danger">Kaldır</button>
                                    </div>
                                </form>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let carID;

            document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
                button.addEventListener('click', function() {
                    carID = this.getAttribute('data-car-id');
                });
            });

            document.getElementById("deleteCarButton").addEventListener("click", function() {
                if (carID) {
                    fetch("{{ route('deleteCar') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            car_id: carID
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        } else {
                            alert("Bir hata oluştu, lütfen tekrar deneyin.");
                        }
                    })
                    .catch(error => console.error("Error:", error));
                }
            });
        });
    </script>
@endsection
