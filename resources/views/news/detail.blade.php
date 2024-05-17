<!DOCTYPE html>
<html lang="fa">
<head>
	@include('layout.header')
	@section('description')
	{{$detail->content}}
	@endsection
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
   	@include('layout.menu')
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image: url('{{ asset('images/background/download.jpg')}}');">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">جزئیات پروژه</h1>
					<div class="dez-separator bg-primary"></div>
					<p class="text-white max-w800">{{ $detail->title}}</p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">پروژه ها</a></li>
                    <li>{{ $detail ->title}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
		
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
				<div class="row m-b30">
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
							<div class="col-md-12 col-lg-12">
							   
								<div class="dez-box">
									<div class="dez-media"> <a><img class="ImgOfDetail shadow p-3 mb-5 bg-white rounded "  src="{{ asset('media/' .$detail->img) }}" alt="{{ $detail->title}}" title="{{ $detail->title}}"></a> </div>
									<div class="dez-info m-t30 ">
										<h4 class="dez-title m-t0"><a href="#">{{ $detail->lead}} </a></h4>
										<p> {!! ($detail->content) !!}</p>
									</div>
									<div class="dez-info m-t30 ">
										<h4 class="dez-title m-t0"><a href="#"> </a></h4>
										
									</div>
									 <!---->
							      <div class="dez-post-text ">
                                        <div class="row m-b30">
										<div class="col-md-6">
											<div class="p-a30 port-info-box bg-gray radius-sm shadow p-3 mb-5  rounded">
												<h5>عنوان پروژه: <span class="m-l10 font-weight-300 text-black"> حسابداری</span></h5>
												<h5>مشتری: <span class="m-l10 font-weight-300 text-black">نام شرکت.</span></h5>
												<h5>تاریخ شروع پروژه: <span class="m-l10 font-weight-300 text-black"> 18 شهریور 1397</span></h5>
												<h5>تاریخ اتمام پروژه: <span class="m-l10 font-weight-300 text-black"> 23 شهریور 1399</span></h5>
												<h5>آدرس پروژه: <span class="m-l10 font-weight-300 text-black">www.example.com</span></h5>
											</div>
										</div>
										<div class="col-md-6 info-box align-self-center">
											<h5 class="text-black fw5 m-b10">{{ $detail->lead}} </h5>
											<p class="m-b0">{!! ($detail->content) !!}</p>
										</div>
									</div>
									</div>
							    <!---->
								</div>
								
							</div>
							
						</div>
					</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="side-sticky">
							<div class="icon-bx-wraper bx-style-1 p-a30 center m-b15 shadow p-3 mb-5 bg-white rounded">
							 <div class="widget bg-white p-a20 widget_tag_cloud">
                                <h4 class="tagcloud">تگ ها</h4>
                                <div class="tagcloud"> <a href="#">{{ $detail->more}}</a> </div>
                            </div>
							</div>
							<div class="widget widget_getintuch shadow p-3 mb-5 bg-white rounded">
								<h4 class="widget-title">اطلاعات تماس</h4>
								<ul>
									<li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg></i><strong>آدرس</strong> {{$company->address}} </li>
									<li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
</svg></i><strong>تلفن</strong>{{$company->tel}}<br>
										 </li>
									<li><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zm.192 8.159 6.57-4.027L8 9.586l1.239-.757.367.225A4.49 4.49 0 0 0 8 12.5c0 .526.09 1.03.256 1.5H2a2 2 0 0 1-1.808-1.144M16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708z"/>
</svg></i><strong>ایمیل</strong>{{$company->email}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section-content m-b30">
					<div class="portfolio-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic1.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic2.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic3.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic4.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic5.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ow-portfolio">
								<div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="images/our-work/pic6.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-search-plus icon-bx-xs"></i> </a> <a href="images/our-work/pic2.jpg"  class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Company END -->
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
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->


</body>
</html>
