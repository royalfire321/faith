<link href="<{$xoImgUrl}>css/main.css" type="text/CSS" rel="stylesheet" />
<div class="box">
    <div class="container">
      <h1 class="text-center">新朋友表單</h1>
      
      <form action="index.php" method="post" id="myForm_F" class="mb-2" enctype="multipart/form-data">
      
          <div class="row">         
              <!--姓名-->              
              <div class="col-sm-5">
                  <div class="form-group">
                  <label>姓名<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="" >
                  </div>
              </div>  
                   
              <!-- 性別-->              
              <div class="col-sm-3 ">
                  <div class="form-group">
                  <label style="display:block;">性別</label>
                  <div class= "gender text-center">
                  <input type="radio" name="gender" id="gender_F" value="F" >
                  <label for="gender_F" style="display:inline;">女性</label>&nbsp;&nbsp;
                  <input type="radio" name="gender" id="gender_M" value="M">
                  <label for="gender_M" style="display:inline;">男性</label>
                  </div>
              </div>
            </div>
              <!-- 出生年 -->
             <div class="col-sm-4">
                  <div class="form-group">
                      <label>出生年(西元)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="age" id="age" value="">
                      </div>
              </div>  
              <!--電話-->              
             <div class="col-sm-6">
                  <div class="form-group">
                  <label>電話<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="tel" id="tel" value="">
                  </div>
              </div>             
              <!--信箱-->              
             <div class="col-sm-12">
                  <div class="form-group">
                  <label>信箱<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="email" id="email" value="">
                  </div>
              </div>  
              <!--信仰-->
              <div class="col-sm-4">
                  <div class="form-group">
                  <label style="display:block;">信仰</label>
                  <input type="radio" name="christian" id="christian_Y" value="Y">
                  <label for="christian_Y" style="display:inline;">基督徒</label>&nbsp;&nbsp;
                  <input type="radio" name="christian" id="christian_N" value="N" >
                  <label for="christian_N" style="display:inline;">非基督徒</label>
                  </div>
              </div> 
              <!--備註-->
               <div class="col-sm-12">
                  <div class="form-group">
                  <label>備註<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="opinion" id="opinion" value="">
                  </div>
              </div> 
          </div>
          <div class="text-center pb-20">
          <input type="hidden" name="op" value="chk">
          <button type="submit" class="btn btn-primary">送出</button>
          </div>
      
      </form> 
      <!-- 表單驗證 -->
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
      <!-- 調用方法 -->
      <style>
          .error{
          color:red;
          }
      </style>
      <script>
          $(function(){
          });
          $(function(){
          $("#myForm_F").validate({
              submitHandler: function(form) {
                  form.submit();
              },
              rules: {
                  'name' : {
                      required: true
                  },
                  'gender' : {
                      required: true
                  },
                  'tel' : {
                      required: true
                  },
                  'year' : {
                      required: true
                  },
                  'email' : {
                      required: true,
                      email:true
                  }, 
                  'christian' : {
                      required: true
                  }
                  },
              messages: {
                  'name' : {
                      required: "必填"
                  },
                  'gender' : {
                      required: "必選"
                  },
                  'tel' : {
                      required: "必填"
                  },
                  'year' : {
                      required: "必填"
                  },
                  'email' : {
                      required: "必填",
                      email: "請填正確email"
                  },
                  'christian' : {
                      required: "必選"
                  },
              }
          });
          });
      </script>
      
  </div> 