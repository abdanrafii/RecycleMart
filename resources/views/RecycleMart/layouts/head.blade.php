<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('name')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Inter:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif !important;
        }

        .navbar-brand {
            font-family: 'Baloo 2', sans-serif !important;
            color: #606C38;
            font-size: 36pt;
        }

        .navbar.bg-body-tertiary {
            background-color: #FFFFFF !important;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav.justify-content-end .nav-link {
            color: #000000 !important;
        }

        .offcanvas.offcanvas-end {
            background-color: #606C38 !important;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid black;
            border-radius: 0;
            padding-left: 0;
            height: 22px;
            margin-top: 16px;
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid black;
        }

        .navbar-toggler{
            border: none !important;
        }

        .card{
            border: none;
            border-radius: 20px;
            box-shadow: 0px 6px 4px #0000001a, 0px -1px 4px #0000001a;;
        }
    </style>
</head>
