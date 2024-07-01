<!DOCTYPE html>
<html lang="en">
@include('RecycleMart.layouts.head')
@section('title')
    Daftar
@endsection

<body>
    @include('RecycleMart.layouts.navbar1')
    <div class="container-md">
        <!-- Main content -->
        <div class="row justify-content-center align-items-center ">
            <div class="card sign" style="margin-top: 160px">
                <div class="card-body">
                    <h6 style="margin-bottom: 20px">Buat Akun</h6>
                    <input type="text" class="form-control sign" id="username" placeholder="Username">
                    <input type="text" class="form-control sign" id="noHP" placeholder="Nomor Handphone">
                    <input type="password" class="form-control sign" id="password" placeholder="Password">

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" style="width: 500px; margin-top: 10px; margin-bottom: 5px">Masuk</button>
                    </div>
                    <div class="d-flex justify-content-center" style="color: #606C38">
                        <p>
                            Sudah memiliki akun? <a href="#" style="color: #BC6C25;">Login</a> di sini.
                        </p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    @include('RecycleMart.layouts.scripts')
</body>

</html>
