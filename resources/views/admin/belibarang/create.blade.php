@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Tambah Barang</h1>
      <form method="POST" action="/admin/belibarang/">
        @csrf
        <div class="form-group">    
          <br>
          <table class="table">
            <tr>
              <td width="40%">
                <label @error('jenis') class="text-danger" @enderror>Jenis @error('jenis')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{old('jenis')}}" class="form-control @error('jenis') is-invalid @enderror" id="jenis" placeholder="masukan jenis" name="jenis">
              </td>
            </tr>
            <tr>
              <td width="40%">
                <label @error('harga') class="text-danger" @enderror>Harga @error('harga')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Number" value="{{old('harga')}}" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="masukan harga" name="harga">
              </td>
            </tr>
            <tr>
              <td width="40%">
                <label @error('stock') class="text-danger" @enderror>Stock @error('stock')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Number" value="{{old('stock')}}" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="masukan stock" name="stock">
              </td>
            </tr>
            <tr>
            <td width="40%">
                <label @error('nama') class="text-danger" @enderror>Nama @error('nama')
                  {{$message}} @enderror</label>
              </td>
            <td width="60%"><select value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
                  @foreach($data as $row)
                  <option value="{{$row->nama}}">{{$row->nama}}</option>
                  @endforeach
                </select></td>
              <td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/belibarang" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection