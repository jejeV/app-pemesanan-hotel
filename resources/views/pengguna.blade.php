@extends('layouts.main')

@section('content')
<a href="/tambahguru" type="button"  class="btn btn-success mt-5 mb-4">Tambah+</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">NIK Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Ussername</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @php
        $no=1
    @endphp
    <tbody>
        @foreach ($data as $row)            
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->namaguru }}</td>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->mapel }}</td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->password }}</td>
            <td style="display: flex;">
                <form action="/deletedataguru/{{$row->id}}" method="post" style="margin-right: 20px">
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  @method('delete')
                </form>
                <a type="button" href="/tampilanguru/{{$row->id}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection