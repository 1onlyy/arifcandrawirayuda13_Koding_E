@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1 style="text-align: center">Beli Barang</h1>
    <table class="table">
  <tbody>
  <a href="/admin/belibarang" class="btn btn-primary">Tambah Barang</a>
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
    </div>
    </div>
</div>
@endsection