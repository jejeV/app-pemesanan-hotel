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
                          <th>Fasilitas</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      @foreach($data_kamar as $dk)
                      <tbody>
                        <tr>
                         <td>{{ $dk->id }}</td>
                         <td>{{ $dk->no_kamar }}</td>
                         <td>{{ $dk->fasilitas }}</td>
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
