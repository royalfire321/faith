
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
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<style>
  .error{
      color:red;
  }
  </style>
	<script>
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
  
			
			
			
			
			
			</script>

        
        
        
        
        
  