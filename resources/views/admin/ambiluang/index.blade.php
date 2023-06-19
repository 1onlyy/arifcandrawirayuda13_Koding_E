@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-3"></div>
    <div class="col-8 mt-3">
    {{-- <h1 class="text-white" style="text-align: center">Ambil Uang</h1> --}}
    <a href="/admin/ambiluang" class="btn btn-info py-2 px-4 fw-bold rounded-pill mt-2" style="font-weight: bold">Ambil Uang</a>

  <div class="card mt-2">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">jumlah</th>
            <th scope="col">Jenis</th>
            <th scope="col">Tanggal</th>
          </tr>
        </thead>
      
        @foreach ($ambiluang as $row)
        <tbody>
          <tr>
            <td>{{$row->nama}}</td>
            <td>{{number_format($row->harga)}}</td>
            <td>{{$row->jenis}}</td>
            <td>{{substr($row->created_at, 0 , 10)}}</td>
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