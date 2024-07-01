<!DOCTYPE html>
<html lang="en">
@include('RecycleMart.layouts.head')

<body>
    @include('RecycleMart.layouts.navbar')
    <div class="container-md">
        @include('RecycleMart.layouts.header')
        <!-- Main content -->
        <div class="row">
            @yield('content')           
        </div>
    </div>
    @include('RecycleMart.layouts.scripts')
</body>

</html>
