@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1 style="text-align: center">Barang Terjual</h1>
    <table class="table">
  <tbody>
  <a href="/admin/terjual" class="btn btn-primary">Jual Barang</a>
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
    </div>
    </div>
</div>
@endsection