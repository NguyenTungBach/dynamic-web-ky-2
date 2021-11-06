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
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="home.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="about.html" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
        <a href="image.html" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
        <a href="contact.html" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"><span class="w3-hide-small">I'm The Man From No Where.</span></h1>
        <p>Photographer and Meme Designer.</p>
        <p>Sản phẩm được học hỏi từ W3 School, không được dùng vào mục đích kinh doanh</p>
        <img src="img/dog.jpg" alt="boy" class="w3-image" width="336" height="480">
    </header>

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
