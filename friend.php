<?php
/* 引入檔頭，每支程都會引入 */
 require_once 'head.php';
 
if($_SESSION['user']['kind'] !==1)redirect_header("index.php", '您沒有權限', 3000);

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list2', 'string');
$uid = system_CleanVars($_REQUEST, 'uid', '', 'int');
// echo $op;die();
 
/* 程式流程 */
switch ($op){
  case "op_delete" :
    $msg = op_delete($uid);
    redirect_header("friend.php", $msg, 3000);
    exit;

  case "op_update" :
    $msg = op_update($uid);
    redirect_header("friend.php", $msg, 3000);
    exit;

   case "op_form" :
    $msg = op_form($uid);
      break;

    

   
  default:
    $op = "op_list2";
    op_list2();
    
    break;  

 }
/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
 
/*---- 程式結尾-----*/
$smarty->display('admin.tpl');
 
/*---- 函數區-----*/
function op_form($uid=""){
  global $smarty,$db;

  if($uid){
    $sql="SELECT *
          FROM `new_friend`
          WHERE `uid` = '{$uid}'
    ";//die($sql);
    
    $result = $db->query($sql) or die($db->error() . $sql);
    $row = $result->fetch_assoc(); 

    
  }
  $row['uid'] = isset($row['uid']) ? $row['uid'] : "";
  $row['name'] = isset($row['name']) ? $row['name'] : "";
  $row['gender'] = isset($row['gender']) ? $row['gender'] : "F";
  $row['age'] = isset($row['age']) ? $row['age'] : "";
  $row['tel'] = isset($row['tel']) ? $row['tel'] : "";
  $row['email'] = isset($row['email']) ? $row['email'] : "";
  $row['christian'] = isset($row['christian']) ? $row['christian'] : "Y";
  $row['opinion'] = isset($row['opinion']) ? $row['opinion'] : "";
  $smarty->assign("row",$row);
}

function op_list2(){
  global $smarty,$db;
  
  $sql = "SELECT *
          FROM `new_friend`
  ";//die($sql);

  $result = $db->query($sql) or die($db->error() . $sql);
  $rows=[];//array();
  while($row = $result->fetch_assoc()){
 
    $row['uid'] = (int)$row['uid'];//整數
    $row['age'] = htmlspecialchars($row['age']);//字串
    $row['christian'] = htmlspecialchars($row['christian']);//字串
    $row['age'] = htmlspecialchars($row['age']);//字串
    $row['name'] = htmlspecialchars($row['name']);//字串   
    $row['tel'] = htmlspecialchars($row['tel']);//字串
    $row['email'] = htmlspecialchars($row['email']);//字串
    $row['opinion'] = htmlspecialchars($row['opinion']);//字串    
    $rows[] = $row;
    // print_r($row); 
    // die();
  }
  $smarty->assign("rows",$rows);  

}

function op_delete($uid){
  global $db; 
  $sql="DELETE FROM `new_friend`
        WHERE `uid` = '{$uid}'
  ";
  $db->query($sql) or die($db->error() . $sql);
  return "會員資料刪除成功";
}

function op_update($uid=""){
  global $db; 
   
  $_POST['name'] = db_filter($_POST['name'], '姓名');
  $_POST['gender'] = db_filter($_POST['gender'], '性別');//密碼
  $_POST['age'] = db_filter($_POST['age'], '出生年');
  $_POST['tel'] = db_filter($_POST['tel'], '電話');
  $_POST['email'] = db_filter($_POST['email'], 'email',FILTER_SANITIZE_EMAIL);
  $_POST['christian'] = db_filter($_POST['christian'], '信仰');
  $_POST['opinion'] = db_filter($_POST['opinion'], '建議');
 

   $sql="UPDATE `new_friend` SET
        `name` = '{$_POST['name']}',
        `gender` = '{$_POST['gender']}',
        `age` = '{$_POST['age']}',
        `tel` = '{$_POST['tel']}',
        `email` = '{$_POST['email']}',
        `christian` = '{$_POST['christian']}',
        `opinion` = '{$_POST['opinion']}'
        WHERE `uid` = '{$uid}';  
  ";//die($sql);
  $db->query($sql) or die($db->error() . $sql);
  return "會員資料更新成功";

}