@extends('RecycleMart.layouts.main')
@section('name')
    Setup Toko
@endsection
@section('header')
    Setup Toko
@endsection

@section('content')
    <div class="col-12 col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card image" id="logo" style="margin-bottom: 10px">
                            <img src="{{ asset('build/assets/logo.png') }}" class="card-img">
                        </div>

                        <!-- Button -->
                        <div class="d-grid gap-2">
                            <button class="btn" type="button">Ubah Logo</button>
                            <button class="btn outline" type="button" style="margin-bottom: 40px">Hapus Logo</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div style="margin-left: 20px">
                            {{-- Form --}}
                            <div class="row">
                                <label for="namaToko" class="col-sm-4 col-form-label">Nama Toko</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control data" id="namaToko">
                                </div>
                            </div>
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control data" id="alamat" style="height:100px"></textarea>
                                </div>
                            </div>

                            {{-- Simpan --}}
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-8">
                                    <button class="btn" type="button" style="width:90px; margin-top: 5px">Simpan</button>
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
