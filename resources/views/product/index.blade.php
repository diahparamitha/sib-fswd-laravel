@extends('layouts/main-landing')

@section('content')


<div class="container p-5">
		<div class="row">
			@foreach($products as $product) 
			<div class="col-md-3 mt-5">
				<div class="card" style="background-color: turquoise;">
					<img src="https://source.unsplash.com/500x400?{{ $product->category->name }}" class="card-img" alt="$product->category->name }}">
						<div class="card-img-overlay d-flex p-0">
							<a href="/detail-product/{{ $product->id}}" class = "text-white text-decoration-none">
							    <h5 class="card-title p-2 fs-3" style="background-color: turquoise; text-align: center;" > {{ $product->category->name }} </h5>
							</a>
						</div>
						<div class="m-3" >
							<h4>{{ $product->name }}</h4>
							<h4>Rp {{ $product->price }}</h4>
							<h4>Status : {{ $product->status }}</h4>
						</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection