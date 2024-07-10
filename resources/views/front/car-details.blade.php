@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><sup>$</sup>{{$car->price}}</h1>
                    <span>
                En Uygun Fiyatlar Burada!
            </span>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <img src="{{ asset('assets/images/'.$car->media) }}" alt="" class="img-fluid wc-image">
                    </div>
                </div>

                <div class="col-md-5">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Marka</span>

                                    <strong class="pull-right">{{$car->getModels->getBrands->name}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Model</span>

                                    <strong class="pull-right">{{$car->getModels->name}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Yıl</span>

                                    <strong class="pull-right">{{$car->year}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Renk</span>

                                    <strong class="pull-right">{{$selectBoxValues[0]}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Kilometre</span>

                                    <strong class="pull-right">{{$car->km}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Garanti</span>

                                    <strong class="pull-right">{{$selectBoxValues[1]}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Vites Türü</span>

                                    <strong class="pull-right">{{$selectBoxValues[2]}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Yakıt Türü</span>

                                    <strong class="pull-right">{{$selectBoxValues[3]}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fiyat</span>

                                    <strong class="pull-right">{{$car->price}}₺</strong>
                                </div>
                            </li>

                        </ul>
                    </form>

                    <br>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="tabs-content">
                            <div class="row">
                                <div class="col-12">
                                    <h2>{{$car->title}}</h2>
                                    <p>{{$car->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Hasar Açıklaması</h4>
                                    <p>{{$car->getDamages->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="tabs-content">
                        <h4>İletişim Detayları</h4>

                        <p>
                            <span>Ad</span>

                            <br>

                            <strong>{{$user->name." ".$user->surname}}</strong>
                        </p>

                        <p>
                            <span>Telefon</span>

                            <br>

                            <strong>
                                <a href="tel:{{$user->phone}}">{{$user->phone}}</a>
                            </strong>
                        </p>

                        <p>
                            <span>Email</span>

                            <br>

                            <strong>
                                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                            </strong>
                        </p>
                    </div>

                    <br>
                </div>
            </div>

            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
