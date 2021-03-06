 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="index.php#page-top"><{$WEB.web_title}></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
         <!--================Header Area =================-->
         <header class="header_area">
          <div class="header_top">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-5">
                          <ul class="nav social_icon">
                              <li><a href="#"><img src="../img/facebook.jpg"></a></li>
                              <li><a href="#"><img src="../img/email.jfif"></a></li>
                              <li><a href="#"><img src="../img/phone.jpg"></a></li>
                          </ul>
                      </div>
                    
                  </div>
              </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container">
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                      <ul class="nav navbar-nav menu_nav ml-auto">
                          <li class="nav-item"><a class="nav-link" href="http://localhost/faith">首頁</a></li> 
                          <li class="nav-item"><a class="nav-link" href="index.php?op=ministries">小組</a></li>
                          <li class="nav-item"><a class="nav-link" href="index.php?op=sermons">教會平台</a></li>
                          <li class="nav-item submenu dropdown active">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教會生活</a>
                              <ul class="dropdown-menu">
                                  <li class="nav-item"><a class="nav-link" href="event.html">社會關懷</a></li>
                                  <li class="nav-item"><a class="nav-link" href="event-details.html">新朋友</a></li>
                              </ul>
                          </li> 
                          <li class="nav-item submenu dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教會生活</a>
                              <ul class="dropdown-menu">
                                  <li class="nav-item"><a class="nav-link" href="about-us.html">教會課程</a></li>
                                  <li class="nav-item"><a class="nav-link" href="gallery.html">兒童主日學</a></li>
                                  <li class="nav-item"><a class="nav-link" href="elements.html">資源分享區</a></li>
                              </ul>
                          </li>  
                          <li class="nav-item submenu dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">生活花絮</a>
                              <ul class="dropdown-menu">
                                  <li class="nav-item"><a class="nav-link" href="blog.html">教會活動</a></li>
                                  <li class="nav-item"><a class="nav-link" href="blog-single.html">見證分享</a></li>
                              </ul>
                          </li> 
                          
                          <li class="nav-item"><a class="nav-link" href="contact.html">聯絡我們</a></li>
                          <{if $smarty.session.user.kind === 1}>
                          <{* 管理員   *}>
                            <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="user.php">後台</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">登出</a>
                            </li>
                          <{elseif $smarty.session.user.kind === 0}> 
                            <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">登出</a>
                            </li> 
                          <{else}>
                          <{* 未登入  *}>
                            <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="index.php?op=login_form">登入</a>
                            </li>                            
                        <{/if}>
                      </ul>
                  </div> 
                </div>
            </nav>
          </header>
        </ul>        
    </div>
  </div>
</nav>