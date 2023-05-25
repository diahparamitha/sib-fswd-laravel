@extends('layouts/main-landing')

@section('content')
<div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <h1 class="coffee_taital">{{ $category->name }}</h1>
         <div class="bulit_icon"><img src="{{ asset ('images/bulit-icon.png')}}"></div>
      </div>
   </div>
   <div class="coffee_section_2">
      <div class="container mb-5">
         <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4">
               <div class="card">
                  <img src="{{ asset('images/acer.jpg') }}" class="card-img-top" alt="{{ $product->name }}">
                  <div class="card-body">
                     <h5 class="card-title">{{ $product->name }}</h5>
                     <p class="card-text">{{ $product->description }}</p>
                     <p class="card-text">Rp {{ $product->price }}</p>
                     <a href="/detail-product/{{ $product->id }}" class="btn btn-primary">Lihat Detail</a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection
