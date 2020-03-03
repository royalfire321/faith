<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-15 03:20:23
  from 'D:\ugm\xampp\htdocs\web11\templates\tpl\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e475567e99d84_10352499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77aabbdc3e9fc5ac6eb172f45cbbd526b959e52c' => 
    array (
      0 => 'D:\\ugm\\xampp\\htdocs\\web11\\templates\\tpl\\admin.tpl',
      1 => 1581733120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e475567e99d84_10352499 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
	 .admin{
			
			margin: 100px;
	}      
</style>

<div class="admin">
<h1 class="text-center mt-4">育將電腦工作室 後台</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-9">

		</div>
		<div class="col-sm-3">

			<div class="card" style="width: 18rem;">
				<div class="card-header">
					管理員
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						<a href="index.php" style="display:block;">首頁</a>
					</li>
					<li class="list-group-item">
						<a href="index.php?op=logout" class="btn-block">登出</a>
					</li>
					<li class="list-group-item">
						<a href="http://localhost/adminer/adminer.php" class="btn-block" target="_blank">資料庫管理</a>
					</li>
					
				</ul>
			</div>

		</div>
	</div>
</div>
</div><?php }
}
