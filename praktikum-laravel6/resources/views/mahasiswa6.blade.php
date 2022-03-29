<!-- contoh penggunaan perintah continue -->
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
        @if($val < 50)
        @continue
        @endif
        <div class="alert alert-succes d-inline-block">
            {{$val}}
        </div>
        @endforeach
    </div>
</body>
</html> --}}
<!-- contoh penggunaan perintah break -->
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
        @if($val < 50)
        @break
        @endif
        <div class="alert alert-succes d-inline-block">
            {{$val}}
        </div>
        @endforeach
    </div>
</body>
</html> --}}
<!-- Baris Komentar dan PHP mode -->'
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
        {{--
        <br>
        @foreach($nilai as $val)
        @if($val < 50)
        @break
        @endif
        <div class="alert alert-succes d-inline-block">
            {{$val}}
        </div>
        @endforeach
        --}}
    </div>
</body>
</html>
