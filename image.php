<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css.css">
<body class="w3-black">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<?php
include 'layout/nav.php';
?>

<!-- Page Content -->
<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Portfolio Section -->
    <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-light-grey">My Image</h2>
        <hr style="width:200px" class="w3-opacity">

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <img src="img/Cat.jpg" style="width:100%">
                <img src="img/thanos.png" style="width:100%">
                <img src="img/Smile.png" style="width:100%">
                <img src="img/Fun.png" style="width:100%">
            </div>

            <div class="w3-half">
                <img src="img/Break.gif" style="width:100%">
                <img src="img/Hate.png" style="width:100%">
                <img src="img/Athea.png" style="width:100%">
                <img src="img/LenDan.jpg" style="width:100%">
            </div>
            <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
    </div>

    <div class="w3-padding-64 w3-content w3-white" >
        <!--    Start facebook For Developers, tạo bình luận-->
        <div id="fb-root" ></div>
        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
        <!--End facebook For Developers, tạo bình luận-->
    </div>

    <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
        <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
</div>

    <?php
    include 'layout/footer.php';
    ?>
    <!-- END PAGE CONTENT -->
</div>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<script>w3IncludeHTML();</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6170106f86aee40a573782e7/1fies0ctc';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6170425ce6ce4b7a"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W9SDZ7ZEP1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-W9SDZ7ZEP1');
</script>
</body>
</html>
