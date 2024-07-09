@extends("front.layouts.app")

@section("content")

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Marka/Model Ekle</h1>
                    <span>En Yeni Modeller</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #f7f7f7">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Yeni Modeller <em>Ekle</em></h2>
                    <span>Piyasanın En Yenileri</span>
                </div>
            </div>
        </div>

        <div class="container pb-5">

            @if(session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session("success")}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{route("addBrandModelPost")}}" method="post">
                @csrf
                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <h4 class="px-3">Araç Markası</h4>
                                <input name="brand" type="text" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="brand" placeholder="Marka giriniz" autocomplete="off" value="{{old("brand")}}">
                                @error("brand")
                                <p class="m-3   text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h4 class="px-3">Araç Modeli</h4>
                                <input name="model" type="text" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="model" placeholder="Model giriniz" autocomplete="off" value="{{old("model")}}">
                                @error("model")
                                <p class="m-3 text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn text-light mt-5 px-5 py-3" style="background-color: #a4c639; border-radius: 25px">Ekle</button>
                </div>

            </form>
        </div>


    </div>

@endsection
