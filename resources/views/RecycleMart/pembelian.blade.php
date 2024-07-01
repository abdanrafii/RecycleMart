@extends('RecycleMart.layouts.main')
@section('name')
    Checkout
@endsection
@section('header')
    Checkout
@endsection

@section('content')
    <div class="col-12 col-md-9" style="margin-bottom:40px">
        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <div class="row" style="margin-bottom:18px">
                    <h6 style="margin-bottom:10px">Alamat Pengiriman</h6>
                    <div>
                        Alamat Pengiriman
                    </div>
                </div>
            </div>
        </div>

        <div class="card" style="margin-bottom:20px">
            <div class="card-body">
                <div class="row" style="margin-bottom:18px">
                    <h6 style="margin-bottom:20px">Barang</h6>
                    <div class="col-auto" style="flex: 0 0 130px;">
                        <div class="card image" id="barang" style="margin-bottom:10px">
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

                        <div class="namaBarang" style="font-weight:500; margin-top: 10px;">
                            Nama Barang
                        </div>
                        <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
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
