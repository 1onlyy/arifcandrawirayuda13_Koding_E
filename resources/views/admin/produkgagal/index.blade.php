@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="container">
    <div class="row ">
    <div class="col-3"></div>
    <div class="col-8 mt-3">
    {{-- <h1 class="text-white" style="text-align: center">Produk Gagal</h1> --}}
    <a href="/admin/produkgagal" class="btn btn-info py-2 px-4 fw-bold rounded-pill mt-2" style="font-weight: bold">Tambah Produk</a>

  <div class="card mt-2">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Jenis</th>
            <th scope="col">Stock</th>
            <th scope="col">Minus</th>
          </tr>
        </thead>
      
        @foreach ($data as $row)
        <tbody>
          <tr>
            <td>{{$row->nama}}</td>
            <td>{{$row->jenis}}</td>
            <td>{{$row->stock}}</td>
            <td>{{number_format($row->harga)}}</td>
            <td>
            @if(session('level'))
          <a href="/admin/terjual/{{$row->id}}" class="btn btn-primary">detail</a>
        @endif
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