<?php include 'header.php';?>


<header class="container-fluid nav-down">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container no-padding">
                <ul class="nav navbar-nav top_header">
                    <li class="menu_icon back_icon"><a href="#"><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
                    <li class="logo_name"><a class="text-left back">Focus membership</a></li>

                </ul>

            </div>
        </nav>

    </div>
    <!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="privacy_policy pl-10 pr-10 pt-5 mt-50">
    <div class="focus-member-login">
        
        <div class="welcome-img"><img src="assets/img/focus-mem-welcome.png" alt=""></div>

        <div class="welcome-focus-member">
            <h4>Welcome to <br> Focus Membership</h4>
        </div>
        <div class="focus-membership-text">Established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page</div>

        <div class="submit_2btn col-xs-12 text-center">
            <a href="#">Get Membership ID</a>
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
