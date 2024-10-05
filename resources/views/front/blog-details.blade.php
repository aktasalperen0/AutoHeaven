@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$blog->title}}</h1>
                    <span><i class="fa fa-user"></i>    <a class="text-light" href="{{route('profile', $blog->getUsers)}}">{{$blog->getUsers->name}} {{$blog->getUsers->surname}}</a>  &nbsp;|&nbsp; <i class="fa fa-calendar"></i> {{$blog->updated_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="more-info-content">
                <div class="right-content">
                    <div>
                        @if($blog->media)
                            <img src="{{asset("assets/images/$blog->media")}}" class="img-fluid w-100" style="height: 350px; object-fit: contain">
                        @endif
                    </div>
                    <h2 class="text-center mt-5">{{$blog->title}}</h2>
                    <p class="mt-5">{{$blog->content}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="callback-form contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Yorum <em>yap</em></h2>
                        <span>Fikirlerinizi Paylaşın, Duyurun!</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Ad Soyad" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
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
                                        <button type="submit" id="form-submit" class="filled-button">Gönder</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
