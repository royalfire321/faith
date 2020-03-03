<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<{$xoImgUrl}>img/favicon.png" type="<{$xoImgUrl}>img/png">
        <title>Faith Church Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<{$xoImgUrl}>css/bootstrap.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>vendors/linericon/style.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>css/fontawesome.min.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>vendors/nice-select/css/nice-select.css">
        <link href="<{$xoImgUrl}>vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- main css -->
        <link rel="stylesheet" href="<{$xoImgUrl}>css/style.css">
        <link rel="stylesheet" href="<{$xoImgUrl}>css/responsive.css">
        <script src="<{$xoImgUrl}>js/jquery-3.2.1.min.js"></script>
        <script src="<{$xoImgUrl}>js/popper.js"></script>
        <script src="<{$xoImgUrl}>js/bootstrap.min.js"></script>
        <script src="<{$xoImgUrl}>vendorss/owl-carousel/owl.carousel.min.js"></script>
        <script src="<{$xoImgUrl}>js/jquery.ajaxchimp.min.js"></script>
        <script src="<{$xoImgUrl}>js/mail-script.js"></script>
        <script src="<{$xoImgUrl}>js/mail-script.js"></script>
        <script src="<{$xoImgUrl}>js/stellar.js"></script>
        <script src="<{$xoImgUrl}>vendorss/lightbox/simpleLightbox.min.js"></script>
        <script src="<{$xoImgUrl}>vendorss/flipclock/timer.js"></script>
        <script src="<{$xoImgUrl}>vendorss/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<{$xoImgUrl}>js/custom.js"></script>
    </head>
    <body>
        <!--================Header Area =================-->
        <{* 轉向的樣板藉由開啟檔案*}>
        <{include file="tpl/redirect.tpl"}>
        <!--================Header Area =================-->
        <{* head.tpl*}>
        <{include file="tpl_front/head.tpl"}>

     
      <{if $op == "ministries"}> 
        <{include file="tpl_front/ministries.tpl"}>
      <{elseif $op == "login_form"}> 
        <{include file="tpl_front/login_form.tpl"}>
      <{elseif $op == "new_friend_form"}> 
        <{include file="tpl_front/new_friend_form.tpl"}>
      <{elseif $op == "reg_form"}> 
        <{include file="tpl_front/reg_form.tpl"}>
      <{elseif $op == "sermons"}> 
        <{include file="tpl_front/sermons.tpl"}>
    
      <{else}>       
        <{* body.tpl*}>
        <{include file="tpl_front/body.tpl"}>
      <{/if}>

      <{* footer.tpl*}>
      <{include file="tpl_front/footer.tpl"}>

       
    </body>
</html>