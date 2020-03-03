<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 13:59:50
  from 'D:\xampp\htdocs\faith\templates\tpl_front\body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5df25631d365_52557720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07077feddfa96825d9cfbcba48146fa840a07bd9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\faith\\templates\\tpl_front\\body.tpl',
      1 => 1583214440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5df25631d365_52557720 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--================About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="title col-sm-6 text-center">

            <h2>信義會靈糧堂</h2>
            <marquee direction="left" height="50" scrollamount="5" behavior="alternate"><h2 style=color:purple;>歡迎光臨 一次歡迎 永遠歡迎&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;歡迎光臨 一次歡迎 永遠歡迎</h2></marquee>
        </div>
        <div class="row">
            <div class="col-md-6 d_flex">
                <div class="about_content flex">
                    <h3 class="title_color mt-5"></h3>
                    <h3>地址： 710永康區復興路246巷7號</br>
                        電話： 06 313 3100</h3>
                        <img src= "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/map.jpg" width=520px;>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
event-details.html" class="about_btn btn_hover btn-danger mt-5">新朋友</a>
                  

                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <?php if ($_smarty_tpl->tpl_vars['mainSlides']->value) {?>  
<!-- 輪播圖 -->
  
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainSlides']->value, 'mainSlide', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mainSlide']->value) {
?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value == '0') {?>class="active" <?php }?> ></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <div class="carousel-inner" role="listbox">
      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainSlides']->value, 'mainSlide', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mainSlide']->value) {
?>
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['index']->value == '0') {?>active <?php }?>" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['mainSlide']->value['pic'];?>
')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"><?php echo $_smarty_tpl->tpl_vars['mainSlide']->value['title'];?>
</h2>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>


<?php }?>
                <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/1008.jpg" width=520px alt="abou_img"> -->
            </div>
        </div>
    </div>
</section>
<!--================About Area =================-->

<!--================Features Area =================-->
<section class="features_area">
    <div class="row m0">
        <div class="col-md-2 features_item">
            <h3 class="text-center">生命成長的夥伴</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/cell_group.jpg" width=100px height=100px;>
            <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
ministries.html"><h2 class="text-center" >小組</h2></a>
        </div>
        <div class="col-md-2 features_item">
            <h3 class="text-center">屬靈的糧食</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/bible.jfif"width=100px height=100px;>
          <h2 class="text-center"> <a href=<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
sermons.html">講道平台</a></h2>
        </div>
        <div class="col-md-2 features_item">
            <h3 class="text-center">世界接軌</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/hand.jfif"width=115px height=100px;>
           <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
event.html"><h2 class="text-center">社會關懷</h2></a>
        </div>
        <div class="col-md-2 features_item">
            <h3 class="text-center">在職進修</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/seed.jfif"width=100px height=100px;>
           <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
about-us.html"><h2 class="text-center">裝備課程</h2></a>
        </div>
        <div class="col-md-2 features_item">
            <h3 class="text-center">兒童天地</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/kid_sunday_school.jfif"width=100px height=100px;>
           <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
gallery.html"><h2 class="text-center">兒童主日學</h2></a>
        </div>
        <div class="col-md-2 features_item">
            <h3 class="text-center">叮咚</h3>
            <img src = "<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
img/contact.png"width=100px height=100px;>
           <a href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
contact.html"><h2 class="text-center">聯絡我們</h2></a>
        </div>
    </div>
</section>
<!--================Features Area =================-->

<!--================Sermons work Area =================-->

    
<section class="sermons_work_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 style=margin-left:50px;>聚會時間表</h2>
            <table>

                <thead>
                    <tr>
                        <th>星期</th>
                        <th>時間</th>
                        <th>聚會名稱</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>星期天</td>
                        <td>上午10:00</td>
                        <td>主日崇拜</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>上午10:00</td>
                        <td>兒童主日學</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>長青小組</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>以勒小組</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>約書亞小組</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>保羅小組</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>佳美小組</td>
                    </tr>
                    <tr>
                        <td>星期天</td>
                        <td>下午12:30</td>
                        <td>福樂小組</td>
                    </tr>
                    <tr>
                        <td>星期三</td>
                        <td>晚上7:30</td>
                        <td>1+7小組</td>
                    </tr>
                    <tr>
                        <td>星期三</td>
                        <td>下午12:30</td>
                        <td>美女小組</td>
                    </tr>
                    <tr>
                        <td>星期四</td>
                        <td>上午9:30</td>
                        <td>良善小組</td>
                    </tr>
                    <tr>
                        <td>星期四</td>
                        <td>晚上7:15</td>
                        <td>喜樂小組</td>
                    </tr>
                    <tr>
                        <td>星期五</td>
                        <td>晚上7:30</td>
                        <td>牛棚小組</td>
                    </tr>
                    <tr>
                        <td>星期五</td>
                        <td>晚上7:30</td>
                        <td>得勝、百合小組</td>
                    </tr>
                    <tr>
                        <td>星期六</td>
                        <td>晚上7:30</td>
                        <td>學青小組</td>
                    </tr>
                    
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        
            <table>
        
                <thead>
                    <tr>
                        <th>星期</th>
                        <th>時間</th>
                        <th>活動</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>星期天(第一個主日)</td>
                        <td>上午10:00</td>
                        <td>聖餐</td>
                    </tr>
        
        
                    <tr>
                        <td>星期六(每月第二個星期六)</td>
                        <td>上午11:00</td>
                        <td>禱告會</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php }
}
