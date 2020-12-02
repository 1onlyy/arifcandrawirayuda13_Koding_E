@extends('layout/main')

@section('title','Pembukuan')

@section('container')
<div class="contianer">
  <div class="row">
    <div class="col-sm-5 ml-auto mr-auto">
      <h1 style="text-align: center;">Tambah Anggota</h1>
      <form method="POST" action="/admin/home">
        @csrf
        <div class="form-group">    
          <br>
          <table class="table">
            <tr>
              <td width="40%">
                <label @error('nama') class="text-danger" @enderror>Nama Anggota @error('jenis')
                  {{$message}} @enderror</label>
              </td>
              <td>
                <input type="Text" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama">
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/" class="btn btn-danger">Kembali</a>
              </td>
            </tr>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection