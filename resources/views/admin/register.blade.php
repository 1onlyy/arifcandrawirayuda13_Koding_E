@extends('layout.auth-master')

@section('content')
<div class="mx-auto d-flex justify-content-center">
  <img src="/img/logo.png" width="200" style="text-align: center" alt="">
</div>
<div class="card card-primary my-3">
  <div class="card-header"><h4>Register</h4></div>

  <div class="card-body">
  <div class="form-group">
      @if (session('message'))
    <div class="alert alert-danger">
      {{session('message')}}
    </div>
    @endif 
    <form method="POST" action="/admin/register/">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="Full name" value="{{ old('name') }}" autofocus>
          <div class="invalid-feedback">
            {{ $errors->first('name') }}
          </div>
        </div>
        <div class="form-group">
          <label for="level">Level</label>
          <select value="" class="form-control @error('level') is-invalid @enderror" id="level" placeholder="masukan level" name="level">
                  <option value="admin">Admin</option>
                  <option value="master">Master</option>
                </select>
          <div class="invalid-feedback">
            {{ $errors->first('level') }}
          </div>
        </div>


      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" placeholder="Set account password" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
  <div class="mt-5 text-muted text-center">
   Already have an account? <a href="{{ url('admin/login') }}">login</a>
  </div>
</div>
@endsection
