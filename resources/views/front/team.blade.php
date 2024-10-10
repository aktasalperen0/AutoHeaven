@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Takım</h1>
                    <span>Profesyonel ekip arkadaşlarımız</span>
                </div>
            </div>
        </div>
    </div>

    <div class="team" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Ekip <em>üyelerimiz</em></h2>
                        <span>Ekip Üyelerimizi Tanıyın</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{asset("assets/images/team-image-1-646x680.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Alperen Aktaş</h4>
                            <span>Junior Web Developer</span>
                            <p>Merhaba, ben Alperen. Yeniliklere ve öğrenmeye açığım. Takım çalışmasına ve projelerde yer almaya hazırım!</p>

                            <p>
                                <a href="https://www.linkedin.com/in/aktasalperen0/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{asset("assets/images/team-image-2-646x680.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Elif Bahar Özdoğru</h4>
                            <span>Senior Web Developer</span>
                            <p>Merhaba, ben Elif. Yeniliklere ve öğrenmeye açığım. Takım çalışmasına ve projelerde yer almaya hazırım!</p>
                            <p>
                                <a href="https://www.linkedin.com/in/elif-bahar-%C3%B6zdo%C4%9Fru/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{asset("assets/images/team-image-3-646x680.jpg")}}" alt="">
                        <div class="down-content">
                            <h4>Yakup Aktar</h4>
                            <span>Junior Web Developer</span>
                            <p>Merhaba, ben Yakup. Yeniliklere ve öğrenmeye açığım. Takım çalışmasına ve projelerde yer almaya hazırım!</p>
                            <p>
                                <a href="https://www.linkedin.com/in/yakup-aktar-8910b01b1/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
