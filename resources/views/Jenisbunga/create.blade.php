@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA JENIS BUNGA</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/jenisbunga')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">NAMA JENIS BUNGA</label>
                        <input type="text" name="jenisbunga_nama" class="form-control" placeholder="Jenis bunga">
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