<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 15:08:46
  from 'E:\xampp\htdocs\faith\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5d136e2450b2_88927773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15a3f89c3160bad7cb8268c6063d09aee0057ba4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\faith\\templates\\theme.tpl',
      1 => 1583158004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/command.tpl' => 1,
    'file:tpl/redirect.tpl' => 1,
    'file:tpl/head.tpl' => 1,
    'file:tpl/ok.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:tpl/new_friend_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/admin.tpl' => 1,
    'file:tpl/body.tpl' => 1,
    'file:tpl/footer.tpl' => 1,
  ),
),false)) {
function content_5e5d136e2450b2_88927773 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/favicon.png" type="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/png">
        <title>Faith Church Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/fontawesome.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendors/nice-select/css/nice-select.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/style.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/responsive.css">
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/command.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
    <body id="page-top">
        <!--================Header Area =================-->
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--================Header Area =================-->
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     
      <?php if ($_smarty_tpl->tpl_vars['op']->value == "ok") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/ok.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "login_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "new_friend_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/new_friend_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "reg_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "admin") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
    
      <?php } else { ?>
     
        
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--================ start footer Area  =================-->	

        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       
    </body>
</html><?php }
}
