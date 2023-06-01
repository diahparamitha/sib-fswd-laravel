@extends('layouts/main-landing')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card mb-5">
				<img src="{{ asset('image_product/'. $product['image']) }}" class="card-img" alt="{{ $product->name }}" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title" style="font-size: 50px">{{ $product->name }}</h5>
					<p class="card-text">{{ $product->category->name }}</p>
					<p class="card-text">{{ $product->description }}</p>
					<p class="card-text">Rp {{ $product->price }}</p>
					<p class="card-text">Status {{ $product->status }}</p>
					<p class="card-text"><small class="text-muted">Last updated: {{ $product->updated_at->diffForHumans() }}</small></p>
					@if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isStaff())
					<a href="/product-list" class="text-decoration-none" style="float: right;">Kembali ke halaman product</a>
					@else
					<a href="/product" class="text-decoration-none" style="float: right;">Kembali ke halaman product</a>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
