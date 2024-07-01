@extends('RecycleMart.layouts.main')
@section('name')
    Kelola Barang
@endsection
@section('header')
    Kelola Barang
@endsection

@section('content')
    <div class="col-12 col-md-9" style="margin-bottom:40px">
        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <div class="row" style="margin-bottom: 10px">
                    <div class="col d-flex justify-content-end">
                        <button class="btn" type="button" style="width: 150px; margin-top: 20px">Tambah Barang</button>
                    </div>
                </div>
                <div class="row" style="margin-bottom:18px">
                    <div class="col-auto" style="flex: 0 0 155px;">
                        <div class="card image" id="barang" style="margin-bottom:10px">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                    </div>
                    <div class="col">
                        <div class="namaBarang" style="font-weight:bold">
                            Nama Barang
                        </div>
                        <div class="deskripsi kelola" style="font-size:11pt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id velit tristique, tincidunt
                            velit at, lobortis enim. Integer in aliquet elit. Sed consectetur quam vitae leo ultrices, id
                            cursus augue porta. Curabitur augue lacus, vehicula ullamcorper leo eu, sollicitudin luctus
                            erat. Fusce a lacus mi. Sed ut nisi pellentesque, sollicitudin est in, varius magna. Integer
                            bibendum, urna nec
                        </div>
                    </div>
                    <div class="col-auto d-flex flex-column align-items-end" style="flex: 0 0 150px; font-size: 11pt;">
                        <div class="btn-group mb-2" style="margin-top: 6px">
                            <button class="btn kelola" type="button">Hapus</button>
                            <span style="color:#BC6C25; font-size:12px;margin-top: 3px">|</span>
                            <button class="btn kelola" type="button">Edit</button>
                        </div>
                        
                        <div style="margin-top: auto; text-align: right; margin-bottom:4px">
                            <div>Stok: <strong>000</strong></div>
                            <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
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
