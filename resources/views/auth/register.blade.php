@extends("front.layouts.app")

@section("content")
    <div class="page-heading p-5">
        <div class="container p-5 mt-5">
            <div class="row">
                <div class="col-6 offset-3 p-5" style="background-color: #232323">
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
                            <input type="text" class="form-control rounded-0 bg-dark text-light" placeholder="Ad" name="name" autocomplete="off">
                        </div>

                        <div class="input-group mt-3">
                            <input type="text" class="form-control rounded-0 bg-dark text-light" placeholder="Soyad" name="surname" autocomplete="off">
                        </div>

                        <div class="input-group mt-3">
                            <input type="email" class="form-control rounded-0 bg-dark text-light" placeholder="E-Posta" name="email" autocomplete="off">
                        </div>

                        <div class="input-group mt-3">
                            <input type="password" class="form-control rounded-0 bg-dark text-light" placeholder="Parola" name="password">
                        </div>

                        <div class="input-group mt-3">
                            <input type="password" class="form-control rounded-0 bg-dark text-light" placeholder="Parola Onayı" name="password_confirmation">
                        </div>

                        <div class="mt-2">
                            <p class="float-left">Hesabınız var mı? <a href="{{route("login")}}" style="color: #a4c639">Giriş Yapın</a></p>
                        </div>

                        <div class="mt-5 pt-5">
                            <button type="submit" class="btn text-light rounded-0 px-5 py-3" style="background-color: #a4c639">Hesap Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
