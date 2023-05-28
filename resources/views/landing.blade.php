@extends('layouts/main-landing')

@section('content')
<div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <h1 class="coffee_taital">OUR Product OFFER</h1>
         <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
      </div>
   </div>
   <div class="coffee_section_2" style="background: linear-gradient(to right, #B0E0E6, #00BFFF);">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            @foreach ($products->chunk(3) as $key => $chunk)
            <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
               <div class="container-fluid">
                  <div class="row">
                     @foreach ($chunk as $product)
                     <div class="col-lg-4">
                        <div class="coffee_img"><img src="{{ asset('image_product/'. $product['image']) }}"></div>
                        <h3 class="types_text">{{ $product->name }}</h3>
                        <p class="looking_text">{{ $product->price }}</p>
                        <div class="mb-3">
                           <button class="btn btn-outline-success">
                              <a href="/detail-product/{{ $product->id }}">Lihat</a>
                           </button>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
         <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
         <i class="fa fa-arrow-right"></i>
         </a>
      </div>
   </div>
</div>

      
<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="about_taital">About Our shop</h1>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
         </div>
      </div>
      <div class="about_section_2 layout_padding">
         <div class="image_iman"><img src="images/tokoku.jpg" class="about_img"></div>
         <div class="about_taital_box">
            <h1 class="about_taital_1">Arkatama Store</h1>
            <p class=" about_text">Toko yang menjual berbagai macam peralatan elektronik seperti
            laptop, smartphone, dan juga tablet. Dari berbagai merk dan juga dijual dengan harga
            terjangkau. Pastikan kamu berbelanja di arkatama store ya!.   </p>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
@endsection