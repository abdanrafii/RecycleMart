@extends('RecycleMart.layouts.main')
@section('name')
    Edit Profil
@endsection
@section('header')
    Edit Profil
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
                            <button class="btn" type="button">Ubah Foto</button>
                            <button class="btn outline" type="button" style="margin-bottom: 40px">Hapus Foto</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div style="margin-left: 20px">
                            {{-- Form --}}
                            <div class="row">
                                <label for="username" class="col-sm-4 col-form-label">Username Toko</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control data" id="username">
                                </div>
                            </div>
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
                                <label for="noHP" class="col-sm-4 col-form-label">Nomor HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control data" id="noHP">
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control data" id="password" placeholder="Masukkan password">
                                    <input type="password" class="form-control data" id="passwordBaru" placeholder="Masukkan password baru">
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
