<!DOCTYPE html>
<html lang="en">
<!--
Author: Vinod@DesignHuntr.com
URL: http://designhuntr.com
Copyright: Do not reproduce or republish this tutorial without permission from the author.
Contact: admin@designhuntr.com
-->
    <head>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Light Weight Popup Modal Box With jQuery | Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="How to Load External Website in jQuery Dialog Box UI" />
        <meta name="keywords" content="HTML, CSS, jQuery, UI, popup, info box, popup window" />
        <meta name="author" content="DesignHuntR" />
        <link rel="shortcut icon" href="http://designhuntr.com/wp-content/themes/DesignHuntR/images/favicon.ico" />
        <link rel="stylesheet"  type="text/css" href="http://designhuntr.com/wp-content/themes/DesignHuntR/demoStyle.css" />
        <link rel="stylesheet"  type="text/css" href="style.css" />
        
	<script src="js/jquery-1.9.1.js"></script>

    </head>
    <body>
<?php include "../header&footer/header.php"; ?>
<div class="top"><a href="#"><< Back to Article</a> <strong>Browser Support:</strong> Chrome, Firefox, IE 8+, Opera & Safari
<div id="right"><a href="#"><< Previous Demo</a> | <a href="#">Next Demo >></a> </div>
</div>
<br/>
<h1>Light Weight Popup Modal Box With jQuery | Demo</h1>
<button id="popup_window" data-popup-target="#example-popup">Open The Light Weight Popup Modal</button>

<div id="example-popup" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>

        <div class="popup-content">
            	<h2 class="popup-title">Simple lightweight popup [Hit Esc to Stop]</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper nulla et gravida interdum. Quisque dignissim a turpis at posuere. Praesent cursus turpis magna, quis pulvinar est vehicula</p>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
jQuery(document).ready(function ($) {

    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');

    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });

    $('.popup-exit').click(function () {
        clearPopup();

    });

    $('.popup-overlay').click(function () {
        clearPopup();
    });

    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }

});
});//]]>  

</script>

<?php include "../header&footer/footer.php"; ?>