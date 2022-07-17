@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7 offset-2">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Foto</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Masukan gambar</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
