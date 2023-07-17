@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA BUNGA</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/bunga')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS BUNGA</label>
                        <select name="bunga_id_jenisbunga" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenisbunga as $jenis)
                                <option value="{{$jenis->jenisbunga_id}}">{{$jenis->jenisbunga_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA BUNGA</label>
                        <input type="text" name="bunga_nama" class="form-control" placeholder="Nama bunga">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="bunga_harga" class="form-control" placeholder="Harga bunga">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="bunga_stock" class="form-control" placeholder="Stock bunga">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection