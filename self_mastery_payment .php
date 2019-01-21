<?php include 'header.php';?>


<header class="container-fluid nav-down">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container no-padding">
                <ul class="nav navbar-nav top_header">
                    <li class="menu_icon back_icon"><a href="#"><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
                    <li class="logo_name"><a class="text-left back">Payment information</a></li>

                </ul>

            </div>
        </nav>

    </div>
    <!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="privacy_policy pl-10 pr-10 pt-5 mt-50">
    <div class="remark-us repay-mark">
        <p>Fill out below info to get membership ID.</p>
    </div>
    <div class="login_form-pay">
        <div class="form_container-info">
            <form class="mui-form">

                <div class="mui-textfield pay-info col-sm-6 col-xs-12">
                    <input type="text" id="name" placeholder="First Name*" required>
                </div>
                <div class="mui-textfield pay-info col-sm-6 col-xs-12">
                    <input type="text" id="name" placeholder="Phone Number" required>
                </div>

                <div class="mui-textfield pay-info col-sm-6 col-xs-12">
                    <input type="text" id="name" placeholder="Email ID*" required>
                </div>
                <div class="mui-textfield pay-info col-sm-6 col-xs-12">
                    <input type="text" id="name" placeholder="Card Number*" required>
                </div>
                
                <div class="mui-textfield pay-info col-sm-6 col-xs-12">
                    <input type="text" id="name" placeholder="Name on Card" required>
                </div> 
                <div class="mui-select pay-info col-sm-6 col-xs-12">
                    <Select>
                        <option value="">Duration</option>
                        <option value="">Duration</option>
                        <option value="">Duration</option>
                        <option value="">Duration</option>
                    </Select>
                </div> 
                <div class="mui-select pay-info col-sm-6 col-xs-12">
                    <Select>
                        <option value="">Select Payment Method</option>
                        <option value="">Select Payment Method</option>
                        <option value="">Select Payment Method</option>
                        <option value="">Select Payment Method</option>
                    </Select>
                </div>    

                <div class="submit_2btn col-xs-12 text-center">
                    <a href="#">Get Membership</a>
                </div>


            </form>
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
