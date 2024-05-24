@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><sup>$</sup>11779</h1>
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
                        <img src="{{asset("assets/images/product-1-720x480.jpg")}}" alt="" class="img-fluid wc-image">
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-1-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-2-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-3-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>

                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-4-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-5-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div>
                                <img src="{{asset("assets/images/product-6-720x480.jpg")}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-5">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Model</span>

                                    <strong class="pull-right">Lorem ipsum dolor sit</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Hasar</span>

                                    <strong class="pull-right">Lorem ipsum dolor sit</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Yıl</span>

                                    <strong class="pull-right">05/2010</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Renk</span>

                                    <strong class="pull-right">Black</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Kilometre</span>

                                    <strong class="pull-right">50000</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Garanti</span>

                                    <strong class="pull-right">Var</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Vites Türü</span>

                                    <strong class="pull-right">Manuel</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Yakıt Türü</span>

                                    <strong class="pull-right">Benzin</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">İlan Tarihi</span>

                                    <strong class="pull-right">05/2010</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fiyat</span>

                                    <strong class="pull-right">500000</strong>
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
                    <div class="tabs-content">
                        <h4>Araç Açıklaması</h4>

                        <p>Lorem ipsum dolor sit amet.</p>

                        <br>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="tabs-content">
                        <h4>İletişim Detayları</h4>

                        <p>
                            <span>Ad</span>

                            <br>

                            <strong>John Smith</strong>
                        </p>

                        <p>
                            <span>Telefon</span>

                            <br>

                            <strong>
                                <a href="tel:123-456-789">123-456-789</a>
                            </strong>
                        </p>

                        <p>
                            <span>Email</span>

                            <br>

                            <strong>
                                <a href="mailto:john@carsales.com">john@carsales.com</a>
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
