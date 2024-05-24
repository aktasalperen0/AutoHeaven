@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Arabalar</h1>
                    <span>Yeni ve İkinci El Arabalar İçin!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <form action="#" id="contact">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Model:</label>

                            <select class="form-control">
                                <option value="">--All --</option>
                                <option value="new">--All --</option>
                                <option value="used">--All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Hasar:</label>

                            <select class="form-control">
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                                <option value="">--All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Yıl:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Renk:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Kilometre:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Garanti:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Vites Türü:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Yakıt Türü:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>İlan Tarihi:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Fiyat:</label>

                            <select class="form-control">
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 offset-sm-4">
                    <div class="main-button text-center">
                        <a href="#" class="filled-button">Ara</a>
                    </div>
                </div>
                <br>
                <br>
            </form>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-1-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-2-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-3-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-4-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-5-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset("assets/images/product-6-720x480.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup>11779
                  </span>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="{{route("car-details")}}" class="filled-button">İncele</a>
                        </div>
                    </div>

                    <br>
                </div>
            </div>

            <br>
            <br>

            <nav>
                <ul class="pagination pagination-lg justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
