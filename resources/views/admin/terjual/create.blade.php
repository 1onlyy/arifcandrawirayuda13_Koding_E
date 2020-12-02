@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Jual Barang</h1>
      <form method="POST" action="/admin/terjual/">
        @csrf
        <div class="form-group">    
          <br>
          <table class="table">
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
              <td width="40%">
                <label @error('deskripsi') class="text-danger" @enderror>Deskripsi @error('deskripsi')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{old('deskripsi')}}" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="masukan deskripsi" name="deskripsi">
              </td>
            </tr>
            <tr>
              <td width="40%">
                <label @error('harga') class="text-danger" @enderror>Harga Barang @error('harga')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Number" value="{{old('harga')}}" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="masukan harga" name="harga">
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/terjual" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection