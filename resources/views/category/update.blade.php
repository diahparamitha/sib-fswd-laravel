<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layouts/partials-landing/head')
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Category || Latihan 22</title>
  <style type="text/css">
    .avatar{
      width: auto;
      height: 100px;
    }
    .col-2,
  .col-10 {
    overflow: hidden; /* Tambahkan scroll jika konten melebihi tinggi maksimum */
  }

  .description-container {
    max-width: 100px; /* Ubah nilai sesuai kebutuhan Anda */
    max-height: 100px; /* Ubah nilai sesuai kebutuhan Anda */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  
  .description-text {
    margin: 0;
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

    <div class="container mt-5 mb-5">
      <div id="wrapper">
        <h1 style="text-align: center"> Update Category </h1>
          <form action="/category/update/{{ $category->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $category->id }}">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $category->name }}">
              @error('name')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <br>
            <div class="form-group">
              <label for="image">image</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ $category->image }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
    </div>
        
         

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  @include('layouts/partials-landing/footer')

</body>
</html>
