@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Create Data</h1>
<form action="/data/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No Tlpn</label>
        <input type="text" name="Tlpn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <select class="form-select" aria-label="Default select example" type="text" name="Kelamin">
        <option value="Pilih Jenis Kelamin">Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br/>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Alamat</label>
        <textarea class="form-control" name="Alamat"   id="floatingTextarea2" style="height: 100px" rows="10"></textarea><br/>
    </div>
    <input type="submit" name="submit" class="btn btn-success" value="Save">
</form>
</div>
@endsection

