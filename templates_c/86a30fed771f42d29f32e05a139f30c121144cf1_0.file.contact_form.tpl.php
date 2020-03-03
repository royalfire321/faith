<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-14 09:15:50
  from 'D:\ugm\xampp\htdocs\web11\templates\tpl\contact_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4657361b1c23_69258324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a30fed771f42d29f32e05a139f30c121144cf1' => 
    array (
      0 => 'D:\\ugm\\xampp\\htdocs\\web11\\templates\\tpl\\contact_form.tpl',
      1 => 1581668146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4657361b1c23_69258324 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--表單標題開始-->
 <h1 class="text-center mt-5">聯絡我</h1>
 <div class="container">
 
  <!-- 表單返回頁，記得在表單加「 target='returnWin' 」 -->
  <iframe name="returnWin" style="display: none;" onload="this.onload=function(){window.location='index.php?op=ok'}"></iframe>
     
     <!--表單問題中的傳送碼-->
     <form target='returnWin' role="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScRCY6yZfpbCPisIsTIlGZNsoD5sU6b3rTqTjiqbaGfvsekvQ/formResponse" method="post" id="myForm">
         <div class="row">  
         
        <div class="col-sm-3">
            <div class="form-group">
                <label><span class="title">姓名</span><span class="text-primary">*(請填您的稱呼)</span></label>
                <input type="text" class="form-control" name="entry.1060848100" id="1060848100" maxlength="6" />
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label><span class="title">電話</span><span class="text-primary">*(請填連絡電話)</span></label>
                <input type="tel" class="form-control" name="entry.1678241233" id="1678241233" placeholder ="格式０９ＸＸＸＸＸＸＸＸ" minlength= "7" maxlength="14">
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label><span class="title">網址</span><span class="text-primary">*(請填聯繫網址)</span></label>
                <input type="email" class="form-control" name="entry.856472878" id="856472878"/>
            </div>
        </div>
    </div>
    
    <div class="col-sm-12">
            <div class="form-group">
                <label class="control-label">聯絡事項</label>
                <textarea class="form-control" rows="3" name="entry.606368931" id="606368931"></textarea>
            </div>
        </div>

    <div class="text-center pb-3">
        <button type="submit" class="btn btn-primary">送出</button>
     </div> 
   
</form>

</div>

<!-- 表單驗證 -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
<style>
  .error{
      color:red;
  }
  </style>
	<?php echo '<script'; ?>
>
		$(function(){
      		$("#myForm").validate({
        	submitHandler: function(form) {
          	form.submit();
        	},
          
          rules: {
            'entry.1060848100' : {
              required: true
          },
          'entry.1678241233' : {
              required: true
          },
          'entry.856472878' : {
              required: true,
              email : true
          }
        },

        messages: {
          'entry.1060848100' : {
            required: "必填"
          },
          'entry.1678241233' : {
            required: "必填",
           
          },
          'entry.856472878' : {
            required: "必填",
            email : "請填正確email格式"
          }
        }
      });
    });
  
			
			
			
			
			
			<?php echo '</script'; ?>
>

        
        
        
        
        
  <?php }
}
