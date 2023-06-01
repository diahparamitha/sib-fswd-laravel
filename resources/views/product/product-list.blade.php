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
    /*overflow: hidden*/; /* Tambahkan scroll jika konten melebihi tinggi maksimum */
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

        @if(session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('edit') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif

        @if(session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
          {{ session('delete') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif

         @if(session()->has('alert'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
          {{ session('alert') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
        @endif

        <div class="container-fluid" style="margin-bottom: 30px; padding-top: 3px;">
          <h3 style="text-align: center;">Products</h3>
          <form action="/product/create" style="text-align: right;">
            <button type="submit" class="btn btn-primary"> + Product </button>
          </form>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col" class="sort-role" data-orderable="true">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Description</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php $i = 1; @endphp
              @foreach ($products as $data)
              <tr>
                <th>{{$i}}</th>
                <td><img class="avatar" src="{{ asset('image_product/'. $data['image']) }}" width="100px" alt="Avatar"></td>
                <td><?= $data["name"]; ?></td>
                <td>{{ $data->category->name }}</td>
                <td><?= $data["price"]; ?></td>
                <td><?= $data["status"]; ?></td>
                 <td>
                    <div class="description-container">
                      <p class="description-text">{{ $data["description"] }}</p>
                    </div>
                  </td>
                <td>
                  <a href="/detail-product/{{ $data->id}}"><button class="btn btn-primary">detail</button></a>
                     || 
                     <a href="/product/edit/{{ $data->id }}" onclick="return confirm('Yakin product ini {{$data->name}} mau di ubah?')"><button class="btn btn-warning">edit</button></a> ||
                      <form action="/product/delete/{{ $data->id }}" method="post" class="d-inline">
                          @csrf
                          <button class="btn btn-danger" onclick="return confirm('Hapus product ini {{$data->name}}?')">hapus</button>
                    </form>
                </td>
              </tr>
              @php $i++; @endphp
              @endforeach
            </tbody>
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
