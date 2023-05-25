@extends('layouts/main-landing')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card mb-5">
				<img src="https://source.unsplash.com/300x150?{{ $product->name }}" class="card-img" alt="{{ $product->name }}" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title" style="font-size: 50px">{{ $product->name }}</h5>
					<p class="card-text">{{ $product->category->name }}</p>
					<p class="card-text">{{ $product->description }}</p>
					<p class="card-text">Rp {{ $product->price }}</p>
					<p class="card-text">Status {{ $product->status }}</p>
					<p class="card-text"><small class="text-muted">Last updated: {{ $product->updated_at->diffForHumans() }}</small></p>
			        <a href="/product/edit/{{ $product->id }}" onclick="return confirm('Yakin product ini {{$product->name}} mau di ubah?')"><button class="btn btn-warning">edit</button></a>
			        <form action="/product/delete/{{ $product->id }}" method="post" class="d-inline">
			            @csrf
			            <button class="btn btn-danger" onclick="return confirm('Hapus product ini {{$product->name}}?')">hapus</button>
			        </form>
					<a href="/product" class="text-decoration-none" style="float: right;">Kembali ke halaman product</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
