@extends('RecycleMart.layouts.main')
@section('name')
    Lacak Penjualan
@endsection
@section('header')
    Lacak Penjualan
@endsection

@section('content')
    <div class="col-12 col-md-9">
        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <h6>Di Etalase</h6>
                <div class="row" style="margin-bottom:18px">
                    <div class="col-auto" style="flex: 0 0 110px;">
                        <div class="card image" id="barang" style="margin-bottom:10px">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                    </div>
                    <div class="col">
                        <div class="namaBarang" style="font-weight:bold">
                            Nama Barang
                        </div>
                        <div class="deskripsi lacak" style="font-size:11pt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id velit tristique, tincidunt
                            velit at, lobortis enim. Integer in aliquet elit. Sed consectetur . . .
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-end"
                        style="flex: 0 0 150px; align-items: bottom; font-size: 11pt;">
                        <div>
                            Stok: <strong>000</strong><br>
                            <strong style="font-size: 14pt">Rp 000.000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin-bottom:40px">
            <div class="card-body">
                <h6>Terjual</h6>
                <div class="row" style="margin-bottom:18px">
                    <div class="col-auto" style="flex: 0 0 110px;">
                        <div class="card image" id="barang" style="margin-bottom:10px">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                    </div>
                    <div class="col">
                        <div style="font-weight:bold">
                            Nama Barang
                        </div>
                        <div class="deskripsi lacak" style="font-size:11pt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id velit tristique, tincidunt
                            velit at, lobortis enim. Integer in aliquet elit. Sed consectetur . . .
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-end"
                        style="flex: 0 0 150px; align-items: bottom; font-size: 11pt;">
                        <div>
                            Stok: <strong>000</strong><br>
                            <strong style="font-size: 14pt">Rp 000.000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <h6>Profil Toko</h6>
                <div class="d-flex align-items-center flex-column text-center">
                    <div class="card image profil" id="logo" style="margin-bottom: 10px">
                        <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                    </div>
                    <div style="font-weight:bold">
                        Nama Toko
                    </div>
                    <div style="font-size:11pt">
                        Alamat abc abc abc abc abc abc abc abc abc abc abc abc abc abc
                    </div>
                    <button class="btn" type="button" style="width:100px; margin-top: 20px">Setup Toko</button>
                </div>
            </div>
        </div>
    </div>
@endsection
