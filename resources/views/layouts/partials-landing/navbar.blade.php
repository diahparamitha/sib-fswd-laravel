<div class="header_section">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand"href="/landing"><img src="{{ asset ('images/logotoko.jpg')}}" width="50px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="/landing">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/category">Category</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/product">Products</a>
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
   <!-- banner section start --> 
     <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active" style="background-image: url('{{ asset('images/bg-biru.jpg') }}');">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset ('images/laptop.png')}}" width="auto"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Laptop</h1>
                                 <h5 class="tasty_text">Arkatama Store</h5>
                                 <p class="banner_text">Ciptakan inovasi baru bersama kami </p>
                                 <div class="btn_main">
                                    <div class="callnow_bt active"><a href="https://api.whatsapp.com/send?phone=087771842546">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item" style="background-image: url('{{ asset('images/bg-biru.jpg') }}');">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset ('images/hp.png')}}" width="200px"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Phone</h1>
                                 <h5 class="tasty_text">Arkatama Store</h5>
                                 <p class="banner_text">Ciptakan inovasi baru bersama kami </p>
                                 <div class="btn_main">
                                    <div class="callnow_bt active"><a href="https://api.whatsapp.com/send?phone=087771842546">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item" style="background-image: url('{{ asset('images/bg-biru.jpg') }}');">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{ asset ('images/tablet.png')}}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Tablet</h1>
                                 <h5 class="tasty_text">Arkatama Store</h5>
                                 <p class="banner_text">Ciptakan inovasi baru bersama kami </p>
                                 <div class="btn_main">
                                    <div class="callnow_bt active"><a href="https://api.whatsapp.com/send?phone=087771842546">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
   <!-- banner section end -->
</div>