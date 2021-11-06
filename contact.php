<!DOCTYPE html>
<html>
<title>Contact</title>
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
<div class="w3-padding-large" id="main">

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
            <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> VIET NAME, VAN MIEU</p>
            <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
            <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
        </div><br>
        <p>If you like it and want more. Send me a message:</p>

        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
            <p>
                <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </p>
        </form>
        <!-- End Contact Section -->
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
</body>
</html>
