<?php
/**
 * Template Name: moreinfo
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
  
 get_header(); ?>
<section>
<div class="container" >
 		   <div class="row">
		
	          <div class="col-md-8 col-xs-12 banner">
			
			<img style="height: 292px;" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
			

				
		      </div>
		      <div class="col-md-4 col-xs-12 block-left">
		   <div class="left-txt">
		   <span>Wide Range <br/>of Attractive <br/>Laminates To<br/>Choose From</span>
		   </div>
		   
		  </div>
		  
      </div>
	   </div>
	   </section>
	<section class="margin">   
 <div class="container">
	<div class="row ">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
			   <div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				</div>
				</div>
	          <div class="row margin">
				<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 ">
					<div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="s2-box-border1">
				<div class="img"><img class="pro-img" src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg"></div>
				<div class="producthead">Phenolic Fabric Laminates</div>
				<a href="#" data-toggle="modal" data-target="#producthead" class="producthead-more">Know More</a>
				</div>
				</div>
				</div>
				</div>
<div class="row margin"></div>				
	     </div>
       
  </div>  </div>
</section>   

<div class="m-paneler1">

<a class="trigger text-uppercase" href="#"  data-toggle="modal" data-target="#myModal">Enquire Now</a>

				
</div>	  
	   </div>
	  <script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu1>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

$(function(){
$('.clickable').on('click',function(){ 
		 
         $(".bhoechie-tab .bhoechie-tab-content").removeClass("active");
         $("#ul_menu li").removeClass("active");
		 
         })
 })
</script>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Enquire Now</h4>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode( ' [contact-form-7 id="5" title="enquire now"]' ); ?>
        </div>

      </div>
      
    </div>
  </div>
   
         <div class="modal fade" id="producthead" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="http://ihomestore.net/ragava-dutt/wp-content/themes/ragava-dutt/assets/images/error.png"></button>
        
        </div>
        <div class="modal-body">
		<div class="body1">
		 <div class="head">Phenolic Fabric Laminates </div>
          <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                    <br/><p>These laminates are produced by impregnating cotton fabric with Phenolic resin and then pressing these prepegs under high pressure and controlled temperature. By choosing different grades (coarse/ medium/ fine wave) of Fabric and modifying phenolic resin, laminates of various grades and specifications are produced. If required, lubricants are added in the resin system to achieve better wear resistance. Cotton fabrics are scoured or bleached to improve electrical insulation and water resistance properties along with superior surface finish of the machined component.

These materials find numerous usages in mechanical applications like gears, pulleys, guides etc. and as bearing materials. These are also used where electrical insulation is required with structural / mechanical strengths.</p>

			
			

        </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php get_footer();
