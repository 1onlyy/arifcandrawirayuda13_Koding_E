@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-3"></div>
    <div class="col-8 mt-3">
    {{-- <h1 class="text-white" style="text-align: center">Barang Terjual</h1> --}}

    <a href="/admin/terjual" class="btn btn-info py-2 px-4 fw-bold rounded-pill mt-2" style="font-weight: bold">Jual Barang</a>
  <div class="card mt-2">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Modal</th>
            <th scope="col">Untung</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
      
        @foreach ($namapaket as $row)
        <tbody>
          <tr>
            <td>{{$row->nama}}</td>
            <td>{{$row->deskripsi}}</td>
            <td>{{number_format($row->harga)}}</td>
            <td>{{number_format($row->modal)}}</td>
            <td>{{number_format($row->untung)}}</td>
            <td>{{$row->status}}</td>
            <td>
          <a href="/admin/terjual/{{$row->id}}" class="btn btn-primary">detail</a>
            </td>
          </tr>
        </tbody>
        @endforeach
        </table>
    </div>
  </div>

    </div>
    </div>
</div>
@endsection