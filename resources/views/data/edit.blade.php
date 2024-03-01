@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edit Data</h1>
<form action="/data/{{$data->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Nama}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Email}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Tlpn}}">
    </div>
    <select class="form-select" aria-label="Default select example" type="text" name="Kelamin">
        <option value="Pilih Jenis Kelamin">Jenis Kelamin</option>
        <option value="L" @if($data->Kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($data->Kelamin == "P") selected @endif>Perempuan</option>
    </select><br/>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Alamat</label>
        <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px" name="Alamat" rows="10" >{{$data->Alamat}}</textarea><br/>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Save">
</form>
</div>
@endsection