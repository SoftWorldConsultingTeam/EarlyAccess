<!DOCTYPE html>
<html>
<?php include 'resources/headers.html'; ?>
<body>	
<?php include 'resources/menu.php'; ?>
<div class="parallax-window wow fadeIn" data-wow-delay="1s"  data-parallax="scroll" data-image-src="images/main.jpg"data-speed="0.0">
			<div id="banners" class="carousel slide " data-ride="carousel" >
			  <ol class="carousel-indicators">
			    <li data-target="#banners" data-slide-to="0" class="active"></li>
			    <li data-target="#banners" data-slide-to="1"></li>
			    <li data-target="#banners" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <div>
			     <div class="carousel-content"> 	
			     	<h3>Servicio numero 1</h3>
					<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
			      </div></div>
			    </div>
			    <div class="item">
			     <div>
			     <div class="carousel-content">	
			     	<h3>Servicio numero 2 </h3>
					<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>	
			     </div></div>
			    </div>
			     <div class="item">
			     <div>
			     <div class="carousel-content">	
			     	<h3>Sollicitudin sit amet </h3>
					<p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
			     	
			     </div></div>
			    </div>
			  </div>
			  <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#banners" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
</div>
<div class="jumbotron wow fadeInUp">
  <h3>¿Porque financiar con nosotros??</h3>
  <p>Duis dapibus lacinia libero at aliquam. Sed pulvinar, magna vitae consectetur ultricies, augue massa condimentum eros non luctus ipsum lacus interdum odio.</p>
  <p><a class="btn btn-success" href="#" role="button">Ver testimonios</a></p>
</div>
<div class="row steps-graphics parallax-window" data-parallax="scroll" data-image-src="images/main2.jpg" data-speed="0.0">
  <div class="col-sm-4 wow fadeInLeft">           
		<div class="thumbnail">
	      <img src="images/cnv.png" alt="Convertible">
	      <div class="caption">
	          <h3>Thumbnail label 1</h3>
		      <p>Duis dapibus lacinia libero at aliquam</p>
	     </div> 
  	</div>
  </div>
  <div class=" col-sm-4 wow fadeInDown">
	    <div class="thumbnail">
	      <img src="images/sedan.png" alt="Sedan">
	      <div class="caption">
	          <h3>Thumbnail label 2</h3>
		      <p>Duis dapibus lacinia libero at aliquam</p>
	     </div>  
	  </div>
	</div>
  <div class="col-sm-4  wow fadeInRight">
       <div class="thumbnail">
	      <img src="images/truck.png" alt="Truck">
	      <div class="caption">
	          <h3>Thumbnail label 3</h3>
		      <p>Duis dapibus lacinia libero at aliquam</p>
	     </div>  
  		</div>
  </div>
  <div class="clearfix"> </div>
</div>

<?php include 'resources/footer.php'; ?>

</body>	
</html>