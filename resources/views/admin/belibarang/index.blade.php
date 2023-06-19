@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="container">
    <div class="row ">
      <div class="col-3"></div>
    <div class="col-8 mt-3">
    {{-- <h1 class="text-white" style="text-align: center">Beli Barang</h1> --}}
  <a href="/admin/belibarang" class="btn btn-info py-2 px-4 fw-bold rounded-pill mt-2" style="font-weight: bold">Tambah Barang</a>

  <div class="card mt-2">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Jenis</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
            <th scope="col">Nama</th>
          </tr>
        </thead>
      
        @foreach ($belibarang as $row)
        <tbody>
          <tr>
            <td>{{$row->jenis}}</td>
            <td>{{number_format($row->harga)}}</td>
            <td>{{$row->stock}}</td>
            <td>{{$row->nama}}</td>
            <td>
            @if(session('level'))
            <form action="/admin/galeri/" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger">delete</button>
          </form>
            </td>
          </tr>
          @endif
        </tbody>
        @endforeach
      </table>
    </div>
  </div>


    </div>
    </div>
</div>
@endsection