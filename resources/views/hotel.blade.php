@extends('template')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                 <div class="card">
                <h5 class="card-header">Kamar</h5>
                <button type="button" class="btn btn-outline-primary float-left">Left</button>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>No Kamar</th>
                          <th>Harga</th>
                          <th>Kapasitas</th>
                          <th>Tipe</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      @foreach($data_hotel as $dh)
                      <tbody>
                        <tr>
                         <td>{{ $dh->id }}</td>
                         <td>{{ $dh->no_kamar }}</td>
                         <td>{{ $dh->harga }}</td>
                         <td>{{ $dh->kapasitas }}</td>
                         <td>{{ $dh->tipe }}</td>
                         <td>
                          <button type="button" class="btn btn-warning">Edit</button>
                          <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>        
            @endsection
