<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
				<li class="logo_name"><a class="text-left back">VISION DETAILS</a></li>
			    <li class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></li>
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="body_bg">
  <div class="my_vision_detail pt-5 mt-60">
	
	<div class="col-sm-12 col-xs-12 uploaded-pic">
	    <div class="uploaded-pic-title">
		    <h3>Uploaded Pictures</h3>
		</div>
	</div>
	<div class="pic-gallery">
	    <div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>
        <div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>	
		<div class="upload-image">
			<div class="uploaded-image">
				<img src="assets/img/upload-pic1.png">
			</div>
			
		</div>		
		
	</div>
	
	
	<div class="col-sm-12 col-xs-12 your-vision mt-10">
	    <div class="heading">
            <h3>Your Vision</h3> 
        </div>
		<div class="heading-para">
            <p>Carve out a chunk of time</p> 
        </div>
	</div>
	<div class="col-sm-12 col-xs-12 your-vision mt-10">
	    <div class="heading-goal">
            <h3>Goal Achievement Date</h3> 
        </div>
		<div class="heading-goal-para">
            <p>8 April 2018</p> 
        </div>
	</div>
	 

</div>
</div>
<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>