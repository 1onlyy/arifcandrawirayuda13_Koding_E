<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="/css/style.css">
      <script src="{{ asset('js/script.js') }}"></script>
      <title>@yield('title')</title>
</head>
<style>
      .navbar-nav {
            color: black;
            font-weight: 500;
            font-style: bold;
      }

      .nav-item {
            text-align: center;
      }
      body{
            background-image: url('/img/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
      }
</style>

<body>
      <div class="row">
            <div class="col-3">
                  <div class="ml-5 mt-5 mr-2">
                        <img src="/img/logo.png" width="200" alt="" style="position: absolute;">
                  </div>
            </div>
            <div class="col-8">
                  <nav class="mt-5 mx-3 navbar navbar-expand-lg navbar-light bg-warning text-white rounded-pill">
                        <div class="container">
                              {{-- <div class="collapse navbar-collapse" id="navbarNav"> --}}
                                    <div class=" row justify-content-between text-white m-auto" style="border-radius: 25px">
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/') }}">Home</a>
                                          
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/belibarang') }}">Beli Barang</a>
                                          
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/terjual') }}">Terjual</a>
                                          
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/ambiluang') }}">Ambil Uang</a>
                                          
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/produkgagal') }}">Produk Gagal</a>
                                          
                                          <!-- 
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/galeri') }}">Galeri</a>
                                          
                                          
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/contact') }}">Contact</a>
                                           -->
                                          <!-- 
                                                <a style="width: 300px;font-weight: bold" class="m-auto text-center text-dark fw-bold nav-link py-2 d-block col-2 text-white" href="{{ url('/admin/register') }}">Register</a>
                                           -->
                                    </div>
                              {{-- </div> --}}
                        </div>
                  </nav>
            </div>
      </div>

      <a style="width: 150px;font-weight: bold;position: fixed;bottom: 25px" class="btn btn-danger ml-5 py-3 rounded-pill" href="{{ url('/admin/logout') }}">Logout</a>
                                          

      @yield('container')

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) --> 
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>