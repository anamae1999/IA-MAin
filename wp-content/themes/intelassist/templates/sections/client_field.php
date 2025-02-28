<head>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
</head>
<?php get_template_part( 'templates/partials/section-settings' ); ?>
	  		<div class="container client-container">

	  			<div class="main">
	  			  <h1>Trusted by:</h1>
	  <div class="slider slider-nav">
	    <div><img src="/wp-content/uploads/2021/12/spark-energy-1.png"></div>
	    <div><img src="/wp-content/uploads/2021/12/electrolux-removebg-preview-1-1.png"></div>
	    <div><img src="/wp-content/uploads/2021/12/metromont-1.png"></div>
	    <div><img src="/wp-content/uploads/2021/12/rayco-1.png"></div>
	    <div><img src="/wp-content/uploads/2021/12/Young-Office-Logo-1.png"></div>
	    
	  </div>
	</div>
	 	
	 		</div>
</section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script><script  src="./script.js"></script>
<script type="text/javascript">
 $('.slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
   focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 1000,
   responsive: [
      {
        breakpoint: 799,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        }
      }
    ]     
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
</script>