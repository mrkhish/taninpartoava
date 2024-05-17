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
                    <h1 class="text-white">مقاله ها</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">خانه</a></li>
                    <li>مقاله ها</li>
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
							<h2 class="m-t0">مقاله ها</h2>
							<div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
						</div>
					<div class="row" id="masonry">
						@foreach($papers as $paper)
							<div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container  ">
								<div class="dez-box border rounded shadow p-3 mb-5 bg-light">
									<div class="dez-thum-bx  dez-img-effect rounded "> <img style="height: 300px; width: 300px;" src="{{ asset('media/'.$paper->img) }}" alt="{{$paper->name}}" title="{{$paper->name}}">
										
									</div>
									<div class="dez-info p-a20 text-center">
										<h4 class="dez-title m-t0 text-uppercase"><a href="{{route('papers.detail',['slug'=>$paper->slug])}}">{{$paper->name}}</a></h4>
										<h3 class="m-b0">{{$paper->slug}} </h3>
										<div class="m-t20">
										
											<a class="text-dark" href="{{route('papers.detail',['slug'=>$paper->slug])}}" title="اطلاعات بیشتر" rel="bookmark" class=" site-button-link rounded"><button type="button" class="btn btn-warning rounded"> اطلاعات بیشتر 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
                                </button></a> 
										</div>
									</div>
								</div>
							</div>
								@endforeach	
						
						
						
						
						
						
							
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
