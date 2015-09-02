<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>小董快餐</title>
    <link href="/xdkc/Public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/xdkc/Public/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="/xdkc/Public/css/page.css" rel="stylesheet" type="text/css" />

</head>
<body>
  <div class="cpt">
    
    
    <?php
 session_start(); if(isset($_SESSION['user_account'])){ echo "
      <div class='header log_header'>
            <a href='/xdkc/index.php/Home/Post/post/'><div class='logo'>&nbsp</div></a>
              <div class='myself'>
                <p class='user'>亲爱的用户</p>
                <p class='account'>".$_SESSION['user_account']."</p>
              </div> 
              <div class='mine'>
              <div class='me'><a href='/xdkc/index.php/Home/User/host'>我</a></div>
              <p class='change'><a href='/xdkc/index.php/Home/Login/login'>切换账号</a></p>
            </div>"; }else{ echo "<div class='header'>"; echo "<img src='/xdkc/Public/images/index1.jpg'>"; } ?>
     </div>
     <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
    <div class="main cptMain" style="margin-top:-3px;">
      <div class="swiperWrap msjdSwiperWrap">
        <span class="tip">左滑查看更多</span>
        <span class="btn swiperNext"></span>
        <span class="btn swiperPrev"></span>
        <div class="swiper-container swiper-content imgContent">
        <div class="swiper-wrapper">
  
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='swiper-slide msjdImg'>
                <a href='/xdkc/index.php/Home/Login/judge/goods_id/<?php echo ($vo["goods_id"]); ?>' class='buy'>购买
                </a>
                      <div class='des'>
                        <h4><?php echo ($vo["goods_name"]); ?></h4>
                        <p><?php echo ($vo["goods_price"]); ?>"￥/杯</p>
                      </div>
    <img class='msjd2' width='100%' src="/xdkc/Public/<?php echo ($vo["goods_pic"]); ?>" alt=''>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
           </div>
        </div>
      </div> 
    <div class="swiper-container swiper-nav">
          <div class="swiper-wrapper">
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide <?php if($i == 1): ?>active-nav first<?php endif; ?>">  <!-- volist判断 -->
                  <span class='angle'></span>
                  <img src="/xdkc/Public/<?php echo ($vo["goods_pic"]); ?>" alt='' class='lit'>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>    
        </div>    
 </div>
 
<div class="bot">
  <div class="nav" id="nav">
          <ul>
           <li class="first"><a href="/xdkc/index.php/Home/Goods/goods/category_id/1">爽口饮品</a></li>
           <li><a href="/xdkc/index.php/Home/Goods/goods/category_id/2">丰富主食</a></li>
           <li><a href="/xdkc/index.php/Home/Goods/goods/category_id/3">香喷喷~菜</a></li>
           <li><a href="/xdkc/index.php/Home/Goods/goods/category_id/4">饭后甜点</a></li>
           <li><a href="/xdkc/index.php/Home/Goods/goods/category_id/5">营养水果</a></li>
          </ul>
        </div>
      </div>
      </div>
 
<script type="text/javascript" src="/xdkc/Public/js/zepto.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/touch.min.js"></script>
<script type="text/javascript" src="/xdkc/Public/js/idangerous.swiper.min.js"></script>
<script type="text/javascript">
   
    $(function(){

          var  contentSwiper = $(".swiper-content").swiper({
                calculateHeight:true,
                onSlideChangeStart: function(){
                  setBtn();
                  updateNavPosition();
                }
          }); 

          $(".swiperPrev").on("tap", function(e){
            e.preventDefault();
            contentSwiper.swipePrev();
          });
          $(".swiperNext").on("tap", function(e){
            e.preventDefault();
            contentSwiper.swipeNext();
          })
         

            var navSwiper = $(".swiper-nav").swiper({
                visibilityFullFit: true,
                slidesPerView:"4",
                onSlideChangeStart: function(){
                    setBtn();
                },
                onSlideClick: function(){
                    contentSwiper.swipeTo( navSwiper.clickedSlideIndex );
                }
            })

            function setBtn(){
                $(".tip").hide();
            }

            function updateNavPosition(){
                $(".swiper-nav .active-nav").removeClass("active-nav");
                var activeNav = $(".swiper-nav .swiper-slide").eq(contentSwiper.activeIndex).addClass("active-nav");
                
                if (!activeNav.hasClass("swiper-slide-visible")) {
                    if (activeNav.index() > navSwiper.activeIndex) {
                        var thumbsPerNav = Math.floor(navSwiper.width/activeNav.width()) - 1;
                        navSwiper.swipeTo(activeNav.index() - thumbsPerNav);
                    }
                    else {
                        navSwiper.swipeTo(activeNav.index())
                    }   
                }

            }
    });
   

    var category_id = <?php echo ($category_id); ?>; //js获取php传的值 
    $("#nav li").eq(category_id-1).addClass("whi");
    </script> 

</body>
</html>