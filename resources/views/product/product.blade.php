<!DOCTYPE html>
<html lang="fa">
<head>
@include('layout.header')
	
	
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    @include('layout.menu')
        <!-- main header END -->
  
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image: url('{{ asset('images/background/download.jpg')}}');">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">محصولات</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">خانه</a></li>
                    <li>محصولات</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-inner section-full bg-white">
            <!-- Product -->
            <div class="container">
				
                <div class="row">
					<div class="col-lg-3 col-md-5 col-sm-6">
						<div class="widget bg-white">
							<h4 class="widget-title">جستجو</h4>
							<div class="search-bx">
								<form role="search" method="post">
									<div class="input-group">
										<input name="text" class="form-control" placeholder="جستجو" type="text">
										<span class="input-group-btn">
										<button type="submit" class="site-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></button>
										</span> </div>
								</form>
							</div>
						</div>
					
						<div class="widget bg-white  widget_tag_cloud">
							<h4 class="widget-title">تگ ها</h4>
							<div class="tagcloud"> 
								<a href="javascript:void(0);">دوربین</a> 
								<a href="javascript:void(0);">سالن کنفرانس</a> 
							 
							</div>
						</div>
					
					</div>
                    <div class="col-lg-9 col-md-7 col-sm-6">
						<div class="text-center m-b30">
							<h2 class="m-t0">آخرین محصولات</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
					<div class="row" id="masonry">
								@foreach($ProductLists as $ProductList)
							<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
								<div class="dez-box p4 shadow p-3 mb-5 bg-white rounded">
									<div class="dez-thum-bx  dez-img-effect "> <img class="p4 rounded" style="height: 300px; width: 400px;" src="{{ asset('media/'.$ProductList->img) }}" alt="{{$ProductList->name}}" title="{{$ProductList->name}}">
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
										</div>
									</div>
									<div class="dez-info p-a20 text-center">
										<h3 class="dez-title m-t0 text-uppercase"><a href="{{route('products.detail',['slug'=>$ProductList->slug])}}">{{$ProductList->name}}</a></h3>
										<h5 class="m-b0">{{$ProductList->price}} </h5>
										<div class="m-t20">
											<a href="{{route('products.detail',['slug'=>$ProductList->slug])}}" class="site-button rounded">جزئیات محصول	</a>
										</div>
										<div class="m-t20">
											<a href="tel:+989127269336" class="site-button rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
</svg>	</a>
										</div>
									</div>
								</div>
							</div>
								@endforeach
							<!--<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
								<div class="dez-box ">
									<div class="dez-thum-bx  dez-img-effect "> <img src="images/product/img3.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
										</div>
									</div>
									<div class="dez-info p-a20 text-center">
										<h4 class="dez-title m-t0 text-uppercase"><a href="#">دستگاه اندازه گیری</a></h4>
										<h2 class="m-b0"><del class="m-r10">25.000</del> 20.000 </h2>
										<div class="m-t20">
											<a href="#" class="site-button">افزودن به سبد خرید	</a>
										</div>
									</div>
									<div class="sale">
										<span class="site-button button-sm primary">فروش ویژه</span>
									</div>
								</div>
							</div>-->
						
						
						
						
						
						
							
						</div>
						
					</div>
                </div>
				<div class="row m-t30 product-service">
				
				</div>
			</div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    @include('layout.footer')
    <!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
@include('layout.js')
</body>
</html>
