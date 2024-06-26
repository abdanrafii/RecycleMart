@extends('RecycleMart.layouts.main')
@section('name')
    Keranjang
@endsection
@section('header')
    Keranjang
@endsection

@section('content')
    <div class="col-12 col-md-9" style="margin-bottom:40px">
        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <div class="row" style="margin-bottom:18px">
                    <div class="col-auto d-flex align-items-center justify-content-center" style="flex: 0 0 20px;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>

                    <div class="col-auto" style="flex: 0 0 130px;">
                        <div class="card image" id="barang" style="margin-bottom:10px; max-width: 250px;">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                    </div>

                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-auto" style="flex: 0 0 60px;">
                                <div class="card image profil" id="logo">
                                    <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                                </div>
                            </div>
                            <div class="col">
                                Nama Toko
                            </div>
                        </div>

                        <div class="namaBarang" style="font-weight:bold; margin-top: 10px;">
                            Nama Barang
                        </div>
                    </div>


                    <div class="col-auto d-flex flex-column align-items-end" style="flex: 0 0 150px; font-size: 11pt;">
                        <div class="btn-group mb-2" style="margin-top: 6px">
                            <button class="btn kelola" type="button">Hapus</button>
                            <span style="color:#BC6C25; font-size:12px;margin-top: 3px">|</span>
                            <button class="btn kelola" type="button">Edit</button>
                        </div>

                        <div style="margin-top: auto; text-align: right; margin-bottom:4px">
                            <div class="row align-items-center">
                                <div class="col-auto" style="text-align: right; margin-top:2px">
                                    <label for="jumlah" >Jumlah</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control data" id="jumlah" style="width: 40px;">
                                </div>
                            </div>

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
                <h6 style="margin-bottom:20px">Ringkasan Belanja</h6>
                <div class="row align-items-center">
                    <div class="col-auto" tyle="flex: 0 0 90px">
                        Total
                    </div>
                    <div class="col" style="text-align: right">
                        <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col text-center">
                                <button class="btn" type="button" style="width: 120px; margin-top: 20px;">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
