@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
    <div class="row">
    <div class="col-10">
    <h1 style="text-align: center">Home</h1>
    <table class="table">
  <a href="/admin/home" class="btn btn-primary">Tambah Anggota</a>
  <tbody>
  <br><br>
      <th scope="col" style="text-align: center">Modal Anggota</th>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Modal</th>
      <th scope="col">Uang</th>
    </tr>
  </thead>
  @foreach ($data[0] as $row)
  <tbody>
    <tr>
    <td>{{$row->nama}}</td>
      <td>{{number_format($row->harga)}}</td>
      <td>{{number_format($row->uang)}}</td>
      <td>
    @if(session('level'))
      <form action="/admin/modal/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
    @endif
      </td>
    </tr>
  </tbody>
  @endforeach


  <table class="table">
  <tbody>
  <br><br>
      <th scope="col" style="text-align: center">Total Modal</th>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Untung</th>
      <th scope="col">Modal</th>
      <th scope="col">Pulang Modal</th>
    </tr>
  </thead>
  @foreach ($data[1] as $row)
  <tbody>
    <tr>
    <td>{{number_format($row->untung)}}</td>
      <td>{{number_format($row->modal)}}</td>
      <td>{{number_format($row->pulang)}}</td>
      <td>
      @if(session('level'))
      <form action="/admin/uang/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
    @endif
      </td>
    </tr>
  </tbody>
  @endforeach


  <table class="table">
  <tbody>
  <br><br>
      <th scope="col" style="text-align: center">Stock</th>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jenis</th>
      <th scope="col">Stock</th>
      <th scope="col">Harga Satuan</th>
    </tr>
  </thead>
  @foreach ($data[2] as $row)
  <tbody>
    <tr>
    <td>{{$row->jenis}}</td>
      <td>{{$row->stock}}</td>
      <td>{{number_format($row->hargasatuan)}}</td>
      <td>
      @if(session('level'))
      <form action="/admin/stock/{{$row->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">delete</button>
    </form>
    @endif
      </td>
    </tr>
  </tbody>
  @endforeach

  
    </div>
    </div>
</div>
@endsection