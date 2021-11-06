<!DOCTYPE html>
<html>
<title>About</title>
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
    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">My Name</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
        <p class="w3-wide">Carry team in LOL</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:80%"></div>
        </div>
        <p class="w3-wide">Meme Design</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:65%"></div>
        </div>
        <p class="w3-wide">Photoshop</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:40%"></div>
        </div>
        <p class="w3-wide">Friendly</p>
        <div class="w3-white">
            <div class="w3-dark-grey" style="height:28px;width:90%"></div>
        </div>
        <br>

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
