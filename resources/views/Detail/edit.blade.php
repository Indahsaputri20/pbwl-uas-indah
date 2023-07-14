@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA DETAIL</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/detail/' .$row->detail_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <select name="detail_pelanggan_id" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($pelanggan as $pel)
                                <option value="{{$pel->pelanggan_id}}">{{$pel->pelanggan_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">BARANG</label>
                        <select name="detail_barang_id" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($barang as $brg)
                                <option value="{{$brg->barang_id}}">{{$brg->barang_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH</label>
                        <input type="text" name="detail_jumlah" class="form-control" value="{{$row->detail_jumlah}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection