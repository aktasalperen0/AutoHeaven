@extends("front.layouts.app")

@section("content")
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bloglarımızı okuyun</h1>
                    <span>Keşfet, Oku, Keyif Al!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-services">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{asset("assets/images/blog-image-1-940x460.jpg")}}" alt="">
                            <h4><a href="{{route("blog-details")}}">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                            <div style="margin-bottom:10px;">
                                <span>John Doe &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                            </div>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
                            <br>
                            <div>
                                <a href="{{route("blog-details")}}" class="filled-button">Continue Reading</a>
                            </div>
                        </article>

                        <br>
                        <br>
                        <br>

                        <article id='tabs-2'>
                            <img src="{{asset("assets/images/blog-image-2-940x460.jpg")}}" alt="">
                            <h4><a href="{{route("blog-details")}}">Mauris lobortis quam id dictum dignissim</a></h4>
                            <div style="margin-bottom:10px;">
                                <span>John Doe &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                            </div>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                            <br>
                            <div>
                                <a href="{{route("blog-details")}}" class="filled-button">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>

                <div class="col-md-4">
                    <h4 class="h4">Ara</h4>

                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="form-control form-control-lg" placeholder="aramak için yazın..." autocomplete="on">
                    </form>

                    <br>
                    <br>

                    <h4 class="h4">Yakın zamanda gönderilenler</h4>

                    <ul>
                        <li>
                            <h5 style="margin-bottom:10px;"><a href="{{route("blog-details")}}">Dolorum corporis ullam, reiciendis inventore est repudiandae</a></h5>
                            <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                        </li>

                        <li><br></li>

                        <li>
                            <h5 style="margin-bottom:10px;"><a href="{{route("blog-details")}}">Culpa ab quasi in rerum dolorum impedit expedita</a></h5>
                            <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                        </li>

                        <li><br></li>

                        <li>
                            <h5 style="margin-bottom:10px;"><a href="{{route("blog-details")}}">Explicabo soluta corrupti dolor doloribus optio dolorum</a></h5>

                            <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
@endsection
