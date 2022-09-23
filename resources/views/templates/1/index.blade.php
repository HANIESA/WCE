
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$customer->name}}</title>
    <meta name="description" content="{{$customer->description}}">
<meta property="og:title" content="{{$customer->name}}">
<meta property="og:description" content="{{$customer->description}}">



<meta property="og:site_name" content="{{$customer->name}}">
<meta property="og:image" itemprop="image" content="{{$customer->logo}}">
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1440432930" />




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/animate.css">
    
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/magnific-popup.css">

    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/aos.css">

    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/flaticon.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/icomoon.css">
    <link rel="stylesheet" href="https://haniesa.me/templates/1/css/style.css">
      <style>
      .owl-carousel .owl-stage, .owl-carousel.owl-drag .owl-item {
-ms-touch-action: auto;
    touch-action: auto;}
    a{
        pointer-events: none
    }
  </style>
  </head>

  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">{{$customer->name}}</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> {{$content[7]['text']}}
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">{{$content[0]['text']}}</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">{{$content[1]['text']}}</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">{{$content[2]['text']}}</a></li>
	          <li class="nav-item"><a href="doctors.html" class="nav-link">{{$content[3]['text']}}</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">{{$content[4]['text']}}</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">{{$content[5]['text']}}</a></li>
	          <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>{{$content[6]['text']}}</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel" >
      <div class="slider-item" style="background-image: url('{{$content[8]['image']}}');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$content[9]['text']}}</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$content[10]['text']}}</p>
              <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">{{$content[6]['text']}}</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{$content[11]['image']}}');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$content[12]['text']}}</h1>
              <p class="mb-4">{{$content[13]['text']}}</p>
              <p><a href="#" class="btn btn-primary px-4 py-3">{{$content[6]['text']}}</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    @if ($content[14]['isExist'])
     {!! $content[15]['text'] !!}
    @endif
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            {!! $content[16]['text'] !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            {!! $content[17]['text'] !!}

          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            {!! $content[18]['text'] !!}

          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            {!! $content[19]['text'] !!}

          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
                {!! $content[20]['text'] !!}

          </div>
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url({{$content[22]['image']}});">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="about-wrap">
      				<div class="heading-section heading-section-white mb-5 ftco-animate">
                        {!! $content[21]['text'] !!}
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
                            {!! $content[23]['text'] !!}

      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
                            {!! $content[24]['text'] !!}

      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-check2"></span>
      					</div>
      					<div class="text">
                            {!! $content[25]['text'] !!}
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            {!! $content[26]['text'] !!}

          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{$content[27]['image']}});"></div>
      				<div class="info text-center">
                        {!! $content[28]['text'] !!}

	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{$content[29]['image']}});"></div>
      				<div class="info text-center">
                        {!! $content[30]['text'] !!}

	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{$content[32]['image']}});"></div>
      				<div class="info text-center">
                        {!! $content[31]['text'] !!}

	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{$content[34]['image']}});"></div>
      				<div class="info text-center">
                        {!! $content[33]['text'] !!}

	        				<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    @if ($content[35]['isExist'])
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Best Pricing</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    		<div class="row">
                {!! $content[36]['text'] !!}
                {!! $content[37]['text'] !!}
                {!! $content[38]['text'] !!}
                {!! $content[39]['text'] !!}

        </div>
    	</div>
    </section>

    @endif


    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            {!! $content[40]['text'] !!}

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            {!! $content[41]['text'] !!}

          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{$content[42]['image']}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    {!! $content[44]['text'] !!}

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{$content[43]['image']}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    {!! $content[45]['text'] !!}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{$content[46]['image']}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{$content[47]['image']}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{$content[48]['image']}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{$content[49]['image']}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            {!! $content[50]['text'] !!}

          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{$content[51]['image']}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                    {!! $content[56]['text'] !!}

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url({{$content[52]['image']}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                    {!! $content[54]['text'] !!}

              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url({{$content[53]['image']}});">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                    {!! $content[55]['text'] !!}

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		
		<div id="map"></div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <img src="{{$customer->logo}}" style="width: 200px;display:block;margin: auto" alt="">
            </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">{{$customer->name}}</h2>
              <p>{{$customer->description}}</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>


          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              {!! $content[57]['text'] !!}

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by {{$customer->name}}
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  {!! $content[58]['text'] !!}

  <script src="https://haniesa.me/templates/1/js/jquery.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/popper.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/bootstrap.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.easing.1.3.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.waypoints.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.stellar.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/owl.carousel.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.magnific-popup.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/aos.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.animateNumber.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/bootstrap-datepicker.js"></script>
  <script src="https://haniesa.me/templates/1/js/jquery.timepicker.min.js"></script>
  <script src="https://haniesa.me/templates/1/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="https://haniesa.me/templates/1/js/google-map.js"></script>
  <script src="https://haniesa.me/templates/1/js/main.js"></script>
    
  </body>
</html>