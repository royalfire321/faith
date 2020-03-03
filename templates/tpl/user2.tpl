<{if $op=="op_list2"}>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">姓名</th>
            <th scope="col">性別</th>
            <th scope="col">出生年</th>
            <th scope="col">電話</th>
            <th scope="col">信箱</th>
            <th scope="col">信仰</th>
            <th scope="col">備註</th>
            <th scope="col">功能</th>
        </tr>
        </thead>
        <tbody>
            <{foreach $rows as $row}>
                <tr>
                    <td><{$row.name}></td>
                    <td><{$row.gender}></td>
                    <td><{$row.age}></td>
                    <td><{$row.tel}></td>
                    <td><{$row.email}></td>
                    <td><{$row.christian}></td>
                    <td><{$row.opinion}></td>
                    <td>
                        <a href="friend.php?op=op_form&uid=<{$row.uid}>"><i class="far fa-edit"></i></a>
                        <a href="#" onclick="op_delete(<{$row.uid}>);"><i class="far fa-trash-alt"></i></a>
                    </td>                
                </tr>
            <{foreachelse}>
                <tr>
                    <td colspan=6>目前沒有資料</td>
                </tr>
            <{/foreach}>

        </tbody>
    </table>
    
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
    <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
    <script>
        function op_delete(uid){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="friend.php?op=op_delete&uid="+uid;
                }
            })
        }
    </script>
<{/if}>


<{if $op=="op_form"}>
    
    <div class="container">
        <h1 class="text-center">會員表單</h1>
        
        <form action="friend.php" method="post" id="myForm" class="mb-2" enctype="multipart/form-data">
        
            <div class="row">         
                <!--姓名-->              
                <div class="col-sm-5">
                    <div class="form-group">
                    <label>姓名<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="<{$row.name}>" readonly>
                    </div>
                </div>  
                     
                <!-- 性別-->              
                <div class="col-sm-3 ">
                    <div class="form-group">
                    <label style="display:block;">性別</label>
                    <div class= "gender text-center">
                    <input type="radio" name="gender" id="gender_F" value="F"<{if $row.gender=='F'}>checked<{/if}>>
                    <label for="gender_F" style="display:inline;">女性</label>&nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender_M" value="M" <{if $row.gender=='M'}>checked<{/if}>>
                    <label for="gender_M" style="display:inline;">男性</label>
                    </div>
                </div>
              </div>
                <!-- 出生年 -->
               <div class="col-sm-4">
                    <div class="form-group">
                        <label>出生年(西元)<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="age" id="age" value="<{$row.age}>">
                        </div>
                </div>  
                <!--電話-->              
               <div class="col-sm-6">
                    <div class="form-group">
                    <label>電話<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tel" id="tel" value="<{$row.tel}>">
                    </div>
                </div>             
                <!--信箱-->              
               <div class="col-sm-12">
                    <div class="form-group">
                    <label>信箱<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="<{$row.email}>">
                    </div>
                </div>  
                <!--信仰-->
                <div class="col-sm-4">
                    <div class="form-group">
                    <label style="display:block;">信仰</label>
                    <input type="radio" name="christian" id="christian_Y" value="Y"<{if $row.christian=='Y'}>checked<{/if}>>
                    <label for="christian_Y" style="display:inline;">基督徒</label>&nbsp;&nbsp;
                    <input type="radio" name="christian" id="christian_N" value="N"<{if $row.christian=='N'}>checked<{/if}>>
                    <label for="christian_N" style="display:inline;">非基督徒</label>
                    </div>
                </div> 
                <!--備註-->
                 <div class="col-sm-12">
                    <div class="form-group">
                    <label>備註<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="opinion" id="opinion" value="<{$row.opinion}>">
                    </div>
                </div> 
            </div>
            <div class="text-center pb-20">
                <input type="hidden" name="op" value="op_update">
                <input type="hidden" name="uid" value="<{$row.uid}>">
                
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
<{/if}>

