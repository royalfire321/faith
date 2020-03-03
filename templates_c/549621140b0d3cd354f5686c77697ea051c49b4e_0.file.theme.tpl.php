<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 15:11:07
  from 'D:\xampp\htdocs\faith\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e030b3848f9_76098081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '549621140b0d3cd354f5686c77697ea051c49b4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\faith\\templates\\theme.tpl',
      1 => 1583219464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/redirect.tpl' => 1,
    'file:tpl_front/head.tpl' => 1,
    'file:tpl_front/ministries.tpl' => 1,
    'file:tpl_front/login_form.tpl' => 1,
    'file:tpl_front/new_friend_form.tpl' => 1,
    'file:tpl_front/reg_form.tpl' => 1,
    'file:tpl_front/sermons.tpl' => 1,
    'file:tpl_front/body.tpl' => 1,
    'file:tpl_front/footer.tpl' => 1,
  ),
),false)) {
function content_5e5e030b3848f9_76098081 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/popper.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendorss/owl-carousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/jquery.ajaxchimp.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/mail-script.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/mail-script.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/stellar.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendorss/lightbox/simpleLightbox.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendorss/flipclock/timer.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
vendorss/nice-select/js/jquery.nice-select.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/custom.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <!--================Header Area =================-->
                <?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--================Header Area =================-->
                <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

     
      <?php if ($_smarty_tpl->tpl_vars['op']->value == "ministries") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/ministries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "login_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "new_friend_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/new_friend_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "reg_form") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "sermons") {?> 
        <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/sermons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
      <?php } else { ?>       
                <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("file:tpl_front/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       
    </body>
</html><?php }
}
