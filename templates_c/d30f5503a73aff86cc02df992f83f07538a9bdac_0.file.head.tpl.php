<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 12:01:41
  from 'D:\ugm\xampp\htdocs\faith\templates\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e573f25cf2b35_61603796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd30f5503a73aff86cc02df992f83f07538a9bdac' => 
    array (
      0 => 'D:\\ugm\\xampp\\htdocs\\faith\\templates\\tpl\\head.tpl',
      1 => 1582776095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e573f25cf2b35_61603796 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header_area">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-5">
                    <ul class="nav social_icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-7">
                    <div class="top_btn d-flex justify-content-end">

                        
                        <?php if ($_SESSION['user']['kind'] === 1) {?>
                                              
                        <a  href="user.php">管理員</a>
                     
                        <a  href="index.php?op=logout">登出</a>

                        <?php } elseif ($_SESSION['user']['kind'] === 0) {?> 
                        <a  href="index.php?op=logout">登出</a>

                    <?php } else { ?>
                                            
                        <a  href="index.php?op=login_form">登入</a>
                     
                      
                    <?php }?>
          

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php#page-top"><img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/church_view.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php#page-top"><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
首頁</a></li> 
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
ministries.html">小組</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
sermons.html">教會講道平台</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教會外展</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
event.html">社會關懷</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
event-details.html">新朋友</a></li>
                        </ul>
                    </li> 
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教會資源</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
about-us.html">資源分享區</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
gallery.html">兒童天地</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
elements.html">教會課程</a></li>
                        
                        
                        </ul>
                    </li> 
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
blog-single.html">Blog Details</a></li>
                        </ul>
                    </li> 
                    
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
contact.html">聯絡我們</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                 
                        
            
                </ul>
            </div> 
        </div>
    </nav>
</header><?php }
}
