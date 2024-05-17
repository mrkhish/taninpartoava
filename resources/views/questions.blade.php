<!DOCTYPE html>
<html lang="fa">
<head>
@include('layout.header')
	
	@section('title')
	{{$company->title}} | طنین پرتوآوا 
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
                    <h1 class="text-white">سوالات متداول</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">خانه</a></li>
                    <li> سوالات متداول</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="bg-white">
            <!-- Faq -->
             <section class="section-full content-inner">
                <div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-7">
							<div class="row">
								<div class="col-lg-12 m-b30">
									<h2 class="m-b10 m-t0">   سوالات متداول</h2>
									<p>سوالات متداول در خصوص تجهیز و تجهیزات سالن های کنفرانس </p>
									<div class="dez-accordion space" id="accordion1">
									@foreach($Questions as $question)
										<div class="panel">
											<div class="acod-head">
												<h3 class="acod-title"> 
													<a data-toggle="collapse" href="{{ $question->id }}" data-target="#{{ $question->id }}" aria-expanded="true">
														<i class="fa fa-question-circle"></i> {{ $question->question }}
													</a> 
												</h3>
											</div>
											<div id="{{ $question->id }}" class="acod-body collapse show" data-parent="#accordion1">
												<div class="acod-content">
												<h4>	{{ $question->answer}}</h4>
                                                 </div></div>
										</div>
										@endforeach
									
										
									
										
									</div>
								</div>
								
								
							</div>
							<!-- Faq END -->
						</div>
						<div class="col-lg-4 col-md-5 contact-style-1">
							<div class="p-a30 bg-gray clearfix m-b30 faqs-form">
								<h2>سوالات خود را بپرسید</h2>
								<div class="dzFormMsg"></div>
								 @livewire('form-component')
							
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- Faq END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
   @include('layout.footer')
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('js/custom.min.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src='{{asset('https://www.google.com/recaptcha/api.js')}}'></script> <!-- Google API For Recaptcha  -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->


</body>
</html>
