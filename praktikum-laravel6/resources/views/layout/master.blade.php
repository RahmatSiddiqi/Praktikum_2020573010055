<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('$title','Sistem informasi mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('menumahasiswa')" href="/mahasiswa">Data mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menudosen')" href="/dosen">Data dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menugallery')" href="/gallery">gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    @section('content')
    <div class="alert alert-primary text-center">
Sisttem informasi mahasiswa
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem informasi mahasiswa|copyright (c) {{ date("y") }} Teknik Informatika
        </div>
    </footer>
    </body>
    </html>