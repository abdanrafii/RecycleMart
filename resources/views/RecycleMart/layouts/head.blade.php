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
            background-color: #283618 !important;
        }

        .form-control.search {
            border: none;
            border-bottom: 1px solid black;
            border-radius: 0;
            padding-left: 0;
            height: 22px;
        }

        .form-control.sign {
            border: none;
            border-bottom: 1px solid #606C38;
            border-radius: 0;
            height: 22px;
            margin-bottom: 20px;

        }

        .form-control.sign::placeholder {
            color: #606C38;
            font-size: 10pt;
            opacity: 1;
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid black;
        }

        .navbar-toggler {
            border: none !important;
        }

        .card.image {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 0px #0000001a;
            
        }

        .card.image.profil {
            border: none;
            border-radius: 50%;
            box-shadow: 0px 0px 0px #0000001a;
            max-width: 70px;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0px 6px 4px #0000001a, 0px -1px 4px #0000001a;
        }

        .btn {
            background-color: #BC6C25;
            color: white;
            border: none;
            font-size: 14px;
            padding: 8px 8px;
            cursor: pointer;
        }

        .btn.kelola {
            background-color: transparent;
            color: #BC6C25;
            border: none;
            font-size: 11px;
            padding: 3px 3px;
            cursor: pointer;
        }

        .btn.outline {
            background-color: transparent;
            color: #BC6C25;
            border: 1px solid #BC6C25;
            font-size: 14px;
            padding: 8px 8px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #A55D21;
        }

        .btn.outline:hover {
            background-color: #fff5ec;
            color: #BC6C25;
        }

        .btn.kelola:hover {
            background-color: transparent;
            color: #BC6C25;
            font-weight: bold;
        }

        .col-form-label {
            font-weight: bold;
            font-size: 11pt;
        }

        .form-control.data {
            box-shadow: inset 0 0px 2px #49494966;
            border-radius: 5px;
            padding-left: 8px;
            padding-right: 8px;
            margin-top: 5px;
            height: 30px;
            font-size: 11pt;
        }

        .inline-form {
            display: flex;
            align-items: center;
            margin: 0px;
        }

        h6 {
            font-size: 16pt;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .deskripsi.lacak {
            font-size: 11pt;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .deskripsi.kelola {
            font-size: 11pt;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .form-check-input {
            margin-left: 8px;
            width: 20px;
            height: 20px;
            appearance: none;
            border: 1px solid #606C38;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #606C38;
            border-color: #606C38;
        }

        .sidebar-nav {
            color: #BCC69A !important;
            font-size: 10pt;
            font-weight: normal;
            font-style: normal;
        }

        .logout {
            color: #BCC69A !important;
            font-size: 14pt;
            font-weight: normal;
            font-style: normal;
        }

        .card.sign {
            width: 450px;
            border: 5px solid #606C38;
            padding: 10px;
            align-self: center;
            border-radius: 25px;
            box-shadow: 0px 6px 4px #0000001a, 0px -1px 4px #0000001a;
            width: 
        }

        body{
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>
