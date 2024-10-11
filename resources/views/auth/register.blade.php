@extends("front.layouts.app")

<style>
    input::placeholder {
        color: #aaa !important;
        opacity: 1;
    }
</style>

@section("content")
    <div class="page-heading p-lg-5">
        <div class="container p-lg-5 px-5 mt-lg-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 p-5" style="background-color: #232323">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>Hesap Oluştur</h2>

                        @if($errors->any())
                            <ul class="mt-5" style="list-style-type: disc; text-align: left">
                                @foreach($errors->all() as $error)
                                    <li style="color: #a4c639">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="input-group mt-5">
                            <input type="text" class="form-control border-0 p-3 shadow-none" placeholder="Ad" name="name" value="{{old("name")}}" autocomplete="off" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="input-group mt-3">
                            <input type="text" class="form-control border-0 p-3 shadow-none" placeholder="Soyad" name="surname" value="{{old("surname")}}" autocomplete="off" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="input-group mt-3">
                            <input type="email" class="form-control border-0 p-3 shadow-none" placeholder="E-Posta" name="email" value="{{old("email")}}" autocomplete="off" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="input-group mt-3">
                            <input type="tel" class="form-control border-0 p-3 shadow-none" placeholder="Telefon" name="phone" value="{{old("phone")}}" autocomplete="off" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="input-group mt-3">
                            <input type="password" class="form-control border-0 p-3 shadow-none" placeholder="Parola" name="password" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="input-group mt-3">
                            <input type="password" class="form-control border-0 p-3 shadow-none" placeholder="Parola Onayı" name="password_confirmation" style="background-color: #343434; border-radius: 25px; color: #aaa !important;">
                        </div>

                        <div class="mt-2">
                            <p class="float-left">Hesabınız var mı? <a href="{{route("login")}}" style="color: #a4c639">Giriş Yapın</a></p>
                        </div>

                        <div class="mt-5 pt-5">
                            <button type="submit" class="btn text-light px-5 py-3" style="background-color: #a4c639; border-radius: 25px">Hesap Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
