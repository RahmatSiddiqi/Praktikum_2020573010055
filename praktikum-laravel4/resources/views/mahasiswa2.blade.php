{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 pt-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 pt-1 text-white d-inline-block">
            {{$nilai}}
        </h1>

        @if(($nilai >= 0) and ($nilai<50))
        <div class="alert alert-danger d-inline-block">
            Maaf Anda Tidak Lulus
        </div>
        @elseif(($nilai >= 50) and ($nilai <=100))
        <div class="alert alert-success d-inline-block">
            Selamat Anda Lulus
        </div>
        @endif
    </div>
</body>
</html> --}}
<!-- contoh dua  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 pt-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 pt-1 text-white d-inline-block">
            {{$nilai}}
        </h1>

        @if(($nilai >= 0) and ($nilai<50))
        <div class="alert alert-danger d-inline-block">
            Maaf Anda Tidak Lulus
        </div>
        @elseif(($nilai >= 50) and ($nilai <=100))
        <div class="alert alert-success d-inline-block">
            Selamat Anda Lulus
        </div>
        @else
        <div class="alert alert-dark d-inline-block">
            nilai tidak valid
        </div>
        @endif
    </div>
</body>
</html>
