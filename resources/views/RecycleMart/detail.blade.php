@extends('RecycleMart.layouts.main')
@section('name')
    Detail Barang
@endsection

@section('content')
    <div class="col-12 col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto" style="flex: 0 0 400px; margin-bottom: 20px">
                        <div class="card image">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                    </div>

                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-auto" style="flex: 0 0 60px">
                                <div class="card image profil" id="logo">
                                    <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                                </div>
                            </div>
                            <div class="col">
                                Nama Toko
                            </div>
                        </div>


                        <div class="namaBarang" style="font-weight:500; margin-top: 10px;">
                            Nama Barang
                        </div>
                        <div class="deskripsi" style="font-size:11pt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id velit tristique, tincidunt
                            velit at, lobortis enim. Integer in aliquet elit. Sed consectetur quam vitae leo ultrices, id
                            cursus augue porta. Curabitur augue lacus, vehicula ullamcorper leo eu, sollicitudin luctus
                            erat. Fusce a lacus mi. Sed ut nisi pellentesque, sollicitudin est in, varius magna. Integer
                            bibendum, urna nec porta ultricies, tellus velit bibendum ipsum, vel fermentum nulla erat sit
                            amet sem. Nullam ac venenatis purus, vitae auctor purus. Cras pulvinar, eros ut molestie
                            tincidunt, massa dolor varius erat, at semper sem dolor ut erat. Ut hendrerit tincidunt felis et
                            finibus. Nunc euismod purus arcu, a pretium odio mollis vel..
                        </div>
                        <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="row align-items-center">
            <div style="margin-bottom: 40px">Stok: <strong>000</strong></div>

            <div class="col-auto" style="text-align: right; margin-top:2px">
                <label for="jumlah"><strong>Jumlah</strong></label>
            </div>
            <div class="col">
                <input type="text" class="form-control data" id="jumlah">
            </div>
            <!-- Button -->
            <div class="d-grid gap-2" style="margin-top: 10px">
                <button class="btn" type="button">Beli Sekarang</button>
                <button class="btn outline" type="button" style="margin-bottom: 40px">Masukkan Keranjang</button>
            </div>
        </div>
    </div>
@endsection
