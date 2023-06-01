<div class="header_section">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand"href="/landing"><img src="{{ asset ('images/logotoko.jpg')}}" width="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                  <a class="nav-link" href="/">Home</a>
               </li>
               @if (Auth::check())
                   @if (Auth::user()->isAdmin() || Auth::user()->isStaff())
                       <a class="nav-link" href="/category-list">Categories</a>
                   @else
                       <a class="nav-link" href="/category">Categories</a>
                   @endif
               @else
                   <a class="nav-link" href="/category">Categories</a>
               @endif

               <li class="nav-item {{ Request::is('product') ? 'active' : '' }}">
                   @if (Auth::check())
                       @if (Auth::user()->isAdmin() || Auth::user()->isStaff())
                           <a class="nav-link" href="/product-list">Products</a>
                       @else
                           <a class="nav-link" href="/product">Products</a>
                       @endif
                   @else
                       <a class="nav-link" href="/product">Products</a>
                   @endif
               </li>

               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/logout">Logout</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <div class="login_bt">
                  <ul>
                     <li><a href="/login"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                  </ul>
               </div>
            </form>
         </div>
      </nav>
   </div>
</div>


   <!-- banner section start --> 
<div class="banner_section layout_padding">
   <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            @foreach($categories as $index => $category)
            <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
         </ol>

         <!-- Slides -->
         <div class="carousel-inner">
            @foreach($categories as $index => $category)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
               <img class="d-block w-100" src="https://source.unsplash.com/1200x450?/{{ $category->name }}" width="auto" alt="Slide {{ $index + 1 }}">
               <div class="carousel-caption">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <button class="btn btn-primary" onclick="window.location.href='/category/{{ $category->id}}'">Read More</button>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>

         <!-- Controls -->
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>

</div>
<!-- banner section end -->