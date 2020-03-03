<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-23 15:11:21
  from 'E:\xampp\htdocs\faith\templates\tpl\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e528809e890d1_04729348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b87bc8d88d0f69b2e3bfc24a30b0fdf63928ab1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\faith\\templates\\tpl\\login_form.tpl',
      1 => 1582467049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e528809e890d1_04729348 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/main.css" type="text/CSS" rel="stylesheet" />
		
		
		<div class="container mt-5" style="margin-top: 100px!important;">
			<form class="form-signin" action="index.php" method="post">
				<h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
				<div class="mb-3">
					<label for="name" class="sr-only">帳號</label>
					<input type="text" name="uname" id="uname" class="form-control" placeholder="請輸入帳號"  required>
				</div>
				<div class="mb-3">
					<label for="pass" class="sr-only">密碼</label>
					<input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
				</div>
			
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" name="remember" id="remember"> 記住我
					</label>
							
				</div>
					<input type="hidden" name="op" id="op" value="login">
					<button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
				<div>
					您還沒還沒註冊嗎？請 <a href="index.php?op=reg_form">點選此處註冊您的新帳號</a>。
				</div>
			</form>
		</div><?php }
}
