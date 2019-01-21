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
  
   <div class="focus-member">
       <div class="morning-focus color-ylw mr-10 mb-10 mt-10">
           <div class="mor-focus-img"><img src="assets/img/focus-member-1.png" alt=""></div>
           <div class="mor-focus-text"><p>Morning Focus</p></div>
       </div>
       <div class="morning-focus coaches-corner color-blu mt-10">
           <div class="mor-focus-img"><img src="assets/img/focus-member-2.png" alt=""></div>
           <div class="mor-focus-text"><p>Coaches Corner</p></div>
       </div>
       <div class="morning-focus master-class color-skyblu mr-10">
           <div class="mor-focus-img"><img src="assets/img/focus-member-3.png" alt=""></div>
           <div class="mor-focus-text"><p>Focus Master Clsss</p></div>
       </div>
       <div class="morning-focus focus-retreat color-grey">
           <div class="mor-focus-img"><img src="assets/img/focus-member-4.png" alt=""></div>
           <div class="mor-focus-text"><p>Focus Retreats</p></div>
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
