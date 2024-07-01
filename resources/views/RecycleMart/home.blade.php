@extends('RecycleMart.layouts.main')
@section('name')
    Setup Toko
@endsection
@section('header')
    Setup Toko
@endsection

@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
            {{-- Barang 1 --}}
            <div class="col">
                <div class="card">
                    <div class="card-body">
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

                        <div class="card image">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                        <div class="namaBarang" style="font-weight:500; margin-top: 10px;">
                            Nama Barang
                        </div>
                        <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
                    </div>
                </div>
            </div>

            {{-- Barang 2 --}}
            <div class="col">
                <div class="card">
                    <div class="card-body">
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

                        <div class="card image">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                        <div class="namaBarang" style="font-weight:500; margin-top: 10px;">
                            Nama Barang
                        </div>
                        <div><strong style="font-size: 14pt;">Rp 000.000</strong></div>
                    </div>
                </div>
            </div>

            {{-- Barang 3 --}}
            <div class="col">
                <div class="card">
                    <div class="card-body">
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

                        <div class="card image">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
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
@endsection
