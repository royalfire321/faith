<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 10:26:23
  from 'D:\xampp\htdocs\faith\templates\tpl\redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5dc04f79b884_73033030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379e1f13301ac70cbf214c42b132d96e84cc4999' => 
    array (
      0 => 'D:\\xampp\\htdocs\\faith\\templates\\tpl\\redirect.tpl',
      1 => 1581648988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5dc04f79b884_73033030 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <?php if ($_smarty_tpl->tpl_vars['redirect']->value) {?>
          <!-- sweetalert2 -->
          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
>
            window.onload = function(){
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: "<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
",
                showConfirmButton: false,
                timer: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>

              })
            }    
          <?php echo '</script'; ?>
>
        <?php }
}
}
