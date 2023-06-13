<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layouts/partials-landing/head')
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Data User || Latihan 22</title>
  <style type="text/css">
    .avatar{
      width: auto;
      height: 100px;
    }
    .col-2,
  .col-10 {
    overflow: hidden; /* Tambahkan scroll jika konten melebihi tinggi maksimum */
  }

  </style>
</head>
<body>
  <div class="container-fluid">
     <div class="row">
      <!-- Sidebar -->
      <div class="col-2">
        @include('layouts/partials-dashboard/sidebar')
      </div>
      <!-- Main content -->
      <div class="col-10">
        <nav class="navbar navbar-dark bg-primary">
          <div class="container">
            <a href="/" class="navbar-brand">HOME</a>
            <a href="/logout" class="navbar-brand"> Logout </a>
          </div>
        </nav>

        @include('layouts/partials-dashboard/slider')

        <div class="row  mt-5 mb-5">
          <div class="col-md-6">
            <div class="card">
              <div class="card-title p-2">Hai {{auth()->user()->name}}</div>
              <div class="card-body">
                <div card class="text">Selamat datang di Arkatama Store! <br>
                  <span> Ini adalah halaman dashboard admin!</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-title p-2">Berikut Jumlah Data</div>
              <div class="card-body">
              <table>
                <tr>
                  <td>Jumlah User</td>
                  <td> : </td>
                  <td> {{ $result->count() }}</td>
                </tr>
                <tr>
                  <td>Jumlah Category</td>
                  <td> : </td>
                  <td> {{ $categories->count() }}</td>
                </tr>
                <tr>
                  <td>Jumlah Product</td>
                  <td> : </td>
                  <td> {{ $products->count() }}</td>
                </tr>
              </table>
            </div>
            </div>
          </div>
        </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  @include('layouts/partials-landing/footer')

</body>
</html>

