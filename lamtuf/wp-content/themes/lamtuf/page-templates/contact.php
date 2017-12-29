<?php
/**
 * Template Name: contact
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
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60892.24998476529!2d78.37979617060464!3d17.47092848521157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9161f371506f%3A0x717d334336c2c982!2sLamtuf+Plastics+Limited!5e0!3m2!1sen!2sin!4v1507036061345" width="750" height="292" frameborder="0" style="border:0" allowfullscreen></iframe>
			

				
		      </div>
		      <div class="col-md-4 col-xs-12 block-left">
		   <div class="left-txt">
		   <span>Lets <br/>Create Some<br/>Great Work <br/>Together </span>
		   </div>
		   
		  </div>
		  
      </div>
	   </div>
	   </section>
	<section class="margin">   
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 f-box1">
<div class="head123">Office</div>
<div class="contact-box1">
<div class="min-head">Lamtuf Plastics Limited </div>
        
<div class="address"> 4th floor, Fortune Chambers,Silicon Valley,<br> Madhapur,Hitech City,Hyderabad- 500 081, India.<br>
Phone : +91-40-44433315 (Dir), <br> <span style="padding:0px 0px 0px 48px;"> +91-40-44433310 to 14</span><br>Fax : +91-40-44433315 (Dir), <br> <span style="padding:0px 0px 0px 35px;">+91-40-44433310 to 14 </span> <br>Email : <a href="mailto:sales@lamtuf.com"> sales@lamtuf.com </a> <br>Website : <span style="color:#000099;"> www.lamtuf.com </span>

</div>
</div>

</div>
<div class="col-md-6 col-sm-6 col-xs-12 f-box1">
<div class="head123"></div><br/><br/>
<div class="contact-person">
<div class="min-head"> S.C.Arora </div>
<div class="address">Vice President - Marketing </div>
<div class="address"> Phone : +91-40-44433315 <br> 
    Email : <a href="mailto:arora@lamtuf.com" target="_top"> arora@lamtuf.com </a> <br> </div>
</div><br/><br/>
<div class="contact-person">
<div class="min-head"> A.V. Prabhakar </div>
<div class="address">Export Manager </div>
<div class="address"> Phone : +91-40-44433314 <br> 
    Email : <a href="mailto:prabhakar@lamtuf.com" target="_top"> prabhakar@lamtuf.com </a> <br> </div>
</div>


</div>

</div>
</div>

</div>
</div>
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
