<!DOCTYPE html>
<html lang="en">
@include('RecycleMart.layouts.head')

<body>
    @include('RecycleMart.layouts.navbar')
    <div class="container-md">
        @include('RecycleMart.layouts.header')
        <!-- Main content -->
        <div class="row">
            <div class="col-9 col-md-9">
                <div class="card">
                    <div class="card-body">@yield('left-card')</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <div class="card-body">@yield('right-card')</div>
                </div>
            </div>
        </div>
    </div>
    @include('RecycleMart.layouts.scripts')
</body>

</html>
