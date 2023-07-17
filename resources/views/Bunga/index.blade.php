@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA BUNGA</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('bunga/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>JENIS BUNGA</td>
                        <td>NAMA</td>
                        <td>HARGA</td>
                        <td>STOCK</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->bunga_id}}</td>
                        <td>{{ $row->jenisbunga->jenisbunga_nama}}</td>
                        <td>{{ $row->bunga_nama}}</td>
                        <td>{{ $row->bunga_harga}}</td>
                        <td>{{ $row->bunga_stock}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('bunga/' .$row->bunga_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('bunga/' .$row->obat_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection