@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col"width="5%" class="text-center">No</th>
                <th scope="col"width="60%" class="text-center">NAMA</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row" class="text-center">1</th>
                <td class="text-center">town</td>
                <td><a href="upload"><button type="button" class="btn btn-sm btn-primary">upload</button></a>
                    <a href=""><button type="button" class="btn btn-sm btn-danger">hapus</button>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">2</th>
                <td class="text-center">forrest</td>
                <td><a href="upload"><button type="button" class="btn btn-sm btn-primary">upload</button></a>
                    <a href=""><button type="button" class="btn btn-sm btn-danger">hapus</button>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">3</th>
                <td class="text-center">sea</td>
                <td><a href="upload"><button type="button" class="btn btn-sm btn-primary">upload</button></a>
                    <a href=""><button type="button" class="btn btn-sm btn-danger">hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
