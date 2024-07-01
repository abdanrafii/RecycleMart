@extends('RecycleMart.layouts.main')
@section('name')
    Unggah Barang
@endsection
@section('header')
    Unggah Barang
@endsection

@section('content')
    <div class="col-12 col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card image" id="barang" style="margin-bottom: 10px">
                            <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                        </div>
                        <div class="row" style="max-width: 250px">
                            <div class="col"><div class="card image" id="barang" style="margin-bottom: 10px">
                                <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                            </div></div>
                            <div class="col"><div class="card image" id="barang" style="margin-bottom: 10px">
                                <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                            </div></div>
                            <div class="col"><div class="card image" id="barang" style="margin-bottom: 10px">
                                <img src="{{ asset('build/assets/barang.png') }}" class="card-img">
                            </div></div>
                        </div>

                        <!-- Button -->
                        <div class="d-grid gap-2">
                            <button class="btn" type="button" style="margin-bottom: 40px">Tambahkan Foto</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div style="margin-left: 20px">
                            {{-- Form --}}
                            <div class="row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control data" id="nama">
                                </div>
                            </div>
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control data" id="alamat" style="height:100px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                                <div class="col-sm-8">
                                    <p class="inline-form" style="font-size: 11pt">Rp <input type="text"
                                            class="form-control data" id="harga" style="margin-left: 8px"></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="stok" class="col-sm-4 col-form-label">Stok</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control data" id="stok">
                                </div>
                            </div>

                            {{-- Unggah --}}
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <button class="btn" type="button" style="width:150px; margin-top: 5px">Unggah
                                        Barang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3"></div>
@endsection
