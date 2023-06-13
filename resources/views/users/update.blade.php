<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data User || Latihan 22</title>
  </head>
  <body>
    <div class="container mt-5 mb-5">
    	<div id="wrapper">
    		<h1 style="text-align: center"> Update Data Pengguna </h1>
        	<form action="/user/update/{{ $row->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        		<input type="hidden" name="id" value="<?= $row["id"]; ?>">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $row->name }}">
              @error('name')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $row->email }}">
              @error('email')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
              <label for="phone">Phone</label>
              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ $row->phone }}">
              @error('phone')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ $row->address }}">
              @error('address')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

             <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control " id="role" placeholder="Masukkan Tipe Akun" name="role" value="{{ $row->role }}" required>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="user">User</option>
              </select>
            </div>

            <div class="form-group">
              <label for="avatar">Avatar</label>
              <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" value="{{ $row->avatar }}">
            </div>

            <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
          </form>
        </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>