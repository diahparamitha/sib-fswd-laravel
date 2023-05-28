<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Product || Latihan 22</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div id="wrapper">
            <h1 style="text-align: center">Product Baru</h1>
            <form action="/product/create" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required placeholder="Enter name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="description">Description</label>
                    <textarea style="height: 100px" type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description" required placeholder="Enter description" value="{{ old('description') }}"></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" required placeholder="Enter price" value="{{ old('price') }}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control " id="status" name="status" required>
                        <option value="rejected">Rejected</option>
                        <option value="waiting">Waiting</option>
                        <option value="accepted">Accepted</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>