@extends("front.layouts.app")

@section("content")
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Araba Sat</h1>
                    <span>Uygun Fiyatlı Araçlar</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5" style="background-color: #f7f7f7">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Arabanı Hızlıca <em>Sat</em></h2>
                    <span>Araç Alım Satımı</span>
                </div>
            </div>
        </div>

        <div class="container pt-3 pb-5">
            <form action="" method="post">
                <div>
                    <h4 class="px-3">Araç Başlığı</h4>
                    <input name="title" type="text" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="name" placeholder="Başlık giriniz" required>
                </div>

                <div class="mt-5">
                    <h4 class="px-3">Araç Açıklaması</h4>
                    <textarea name="description" class="form-control border-0 mt-3 p-3" rows="3" style="border-radius: 25px" id="name" placeholder="Açıklama giriniz" required></textarea>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="h4 px-3">Araç Markası</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0">Lütfen Marka Seçiniz</option>
                                <option value="1">--All --</option>
                                <option value="2">--All --</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <span class="h4 px-3 ">Araç Modeli</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0">Lütfen Model Seçiniz</option>
                                <option value="1">--All --</option>
                                <option value="0">--All --</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="h4 px-3">Araç Yılı</span>
                            <input name="year" type="date" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="year" placeholder="Başlık giriniz" required>
                        </div>
                        <div class="col-6">
                            <span class="h4 px-3 ">Araç Rengi</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0" selected disabled>Lütfen Renk Seçiniz</option>
                                <option value="1">Beyaz</option>
                                <option value="2">Siyah</option>
                                <option value="3">Gri</option>
                                <option value="4">Gümüş</option>
                                <option value="5">Mavi</option>
                                <option value="6">Kırmızı</option>
                                <option value="7">Diğer</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="h4 px-3">Araç Kilometresi</span>
                            <input name="km" type="text" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="km" placeholder="Kilometre giriniz" required>
                        </div>
                        <div class="col-6">
                            <span class="h4 px-3 ">Araç Garantisi</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0" selected disabled>Lütfen Garanti Seçiniz</option>
                                <option value="1">Var</option>
                                <option value="2">Yok</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="h4 px-3">Araç Vites Türü</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0" selected disabled>Lütfen Vites Türü Seçiniz</option>
                                <option value="1">Manuel</option>
                                <option value="2">Otomatik</option>
                                <option value="2">Yarı-Otomatik</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <span class="h4 px-3 ">Araç Yakıt Türü</span>
                            <select class="form-control mt-3 border-0" style="border-radius: 25px">
                                <option value="0" selected disabled>Lütfen Yakıt Türü Seçiniz</option>
                                <option value="1">Benzin</option>
                                <option value="2">Dizel</option>
                                <option value="2">LPG</option>
                                <option value="2">Elektrik</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <span class="h4 px-3">Araç Hasarı</span>
                            <textarea name="damage-description" class="form-control border-0 mt-3 p-3" rows="2" style="border-radius: 25px" id="damage-description" placeholder="Açıklama giriniz" required></textarea>
                        </div>
                        <div class="col-6">
                            <span class="h4 px-3 ">Araç Görseli</span>
                            <div class="input-group">
                                <div class="input-group">
                                    <input name="media" type="file" class="input-group mt-3" id="media" required>
                                    <label class="custom-file-label mt-3 border-0 rounded-0"  for="media" data-content="Dosya Seçildi"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-12">
                            <span class="h4 px-3">Araç Fiyatı</span>
                            <input name="price" type="text" class="form-control border-0 mt-3 p-3"  style="border-radius: 25px" id="price" placeholder="Fiyat giriniz" required>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn text-light mt-5 px-5 py-3" style="background-color: #a4c639; border-radius: 25px">Yayınla</button>
                </div>

            </form>
        </div>
    </div>

@endsection
