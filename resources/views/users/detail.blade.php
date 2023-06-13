<!DOCTYPE html>
<html>
<head>
	<title>Profil Pengguna</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
		  <div class="card-body">
		    <div class="row">
		      <div class="col-sm-4 text-center">
		       <img class="avatar" src="{{ asset('storage/avatar/'. $row['avatar']) }}" alt="Avatar">
		      </div>
		      <div class="col-sm-8 text-center">
		        <h5 class="card-title"><?= $row["name"]; ?></h5>
		        <p class="card-text"><?= $row["email"]; ?></p>
		        <p class="card-text">Phone : <?= $row["phone"]; ?></p>
		        <p class="card-text">Address : <?= $row["address"]; ?></p>
		        <p class="card-text">Role : <?= $row["role"]; ?></p>
		      </div>
		      <a href="/dashboard" style="text-decoration: none; float: right;"> Kembali </a>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>