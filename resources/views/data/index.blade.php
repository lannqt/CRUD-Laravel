@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <div class="card-body">
                        <a class="btn btn-success" href="/data/create">Add Data</a>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tlpn</th>
                                    <th>Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->Nama }}</td>
                                        <td>{{ $d->Email }}</td>
                                        <td>{{ $d->Tlpn }}</td>
                                        <td>{{ $d->Kelamin }}</td>
                                        <td>{{ $d->Alamat }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a class="btn btn-warning" href="/data/{{ $d->id }}/edit">Edit</a>
                                                <form action="/data/{{ $d->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
