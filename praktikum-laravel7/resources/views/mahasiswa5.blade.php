{{-- <!-- perulanggan foreach -->
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
        <h1 class="bg-dark px3 py-1 text-white d-inline-block"></h1>
        <br>
        @foreach($nilai as $val)
        <div class="alert alert-info d-inline-block">
            {{$val}}
        </div>
        @endforeach
    </div>
</body>
</html> --}}
<!-- percobaan kalau nilai nya lebih kecil dari 59 maka
tampilkan alert merah kalau sebaliknya tampilkan alert
hijau -->
{{-- <!DOCTYPE html>
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
        <h1 class="bg-dark px3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <br>
        @foreach($nilai as $val)
        @if(($val >=0) and ($val <50))
        <div class="alert alert-danger d-inline-block">
            {{$val}}
        </div>
        @else(($val >=50) and ($val <100))
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
        @endif
        @endforeach
    </div>
</body>
</html> --}}
<!-- perulanggan forelse -->
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
        <h1 class="bg-dark px3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <br>
        @forelse($nilai as $val)
        @if(($val >=0) and ($val <50))
        <div class="alert alert-danger d-inline-block">
            {{$val}}
        </div>
        @elseif(($val >=50) and ($val <100))
        <div class="alert alert-success d-inline-block">
            {{$val}}
        </div>
        @endif
        @empty
        <div class="alert alert-dark d-inline-block">
            Tidak Ada Data ....
        </div>
        @endforelse
    </div>
</body>
</html>
