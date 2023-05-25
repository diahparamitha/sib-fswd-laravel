@extends('layouts/main-landing')

@section('content')


<div class="container p-5">
		<div class="row">
			@foreach($categories as $category) <!-- mengambil nilai dari postcontoller metod category (php line 75) -->
			<div class="col-md-4 mt-5">
				<div class="card bg-dark text-white">
				  <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="$category->name }}">
				  <div class="card-img-overlay d-flex p-0">
				    <a href="/category/{{ $category->id}}" class = "text-white text-decoration-none"><h5 class="card-title p-2 fs-3" style="background-color: turquoise; text-align: center;" > {{ $category->name }} </h5></a>
				  </div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection