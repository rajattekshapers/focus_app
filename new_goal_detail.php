<?php include 'header.php';?>


<header class="container-fluid nav-down">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container no-padding">
                <ul class="nav navbar-nav top_header">
                    <li class="menu_icon back_icon"><a href="#"><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
                    <li class="logo_name"><a class="text-left back">GOAL DETAILS</a></li>
                    <li class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></li>
                </ul>

            </div>
        </nav>

    </div>
    <!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="focus-meeting-details pl-10 pr-10 pt-5 mt-40">
    <form class="meeting-details">
        <div class="form-group">
            <label for="title">My Goal</label>
            <input type="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Write down what you eat" disabled>
    
        </div>
        <div class="form-group bor-top">
            <label for="goal">Target Date</label>
            <input type="text" class="form-control" id="goal" placeholder="18 April 2018" disabled>
        </div>
		<div class="form-group bor-top">
            <label for="time">Time</label>
            <input type="text" class="form-control" id="time" placeholder="5:10 am" disabled>
        </div>
		
	</form>	
	<div class="action-step-goal">
	    <div class="action-step-heading">
		    <h3>Action Step 1</h3>
		</div>
		<div class="action-step-days">
		    <p>Mon, Tue, Wed, Thus, Fri, Sat, Sun</p>
		</div>
		<div class="action-step-time">
		    <p>08:00 AM</p>
		</div>
		<div class="action-step-eat">
		    <p>Eat Healthy Breakfast</p>
		</div>
	</div>
	<div class="action-step-goal">
	    <div class="action-step-heading">
		    <h3>Action Step 2</h3>
		</div>
		<div class="action-step-days">
		    <p>Mon, Tue, Wed, Thus, Fri, Sat, Sun</p>
		</div>
		<div class="action-step-time">
		    <p>08:00 AM</p>
		</div>
		<div class="action-step-eat">
		    <p>Eat Healthy Breakfast</p>
		</div>
	</div>
	<div class="action-step-goal">
	    <div class="action-step-heading">
		    <h3>Action Step 3</h3>
		</div>
		<div class="action-step-days">
		    <p>Mon, Tue, Wed, Thus, Fri, Sat, Sun</p>
		</div>
		<div class="action-step-time">
		    <p>08:00 AM</p>
		</div>
		<div class="action-step-eat">
		    <p>Eat Healthy Breakfast</p>
		</div>
	</div>


</div>
<script>
    $('.digit1 input').keyup(function() {
        if ($(this).val().length == $(this).attr("maxlength")) {
            $(this).next().focus();
        }
    });

</script>
<?php include 'footer.php';?>
