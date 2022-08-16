<style type="text/css">
@media screen and (min-width: 540px) and (max-width: 809px){
    #case-menu .item{
        padding-top: 30px !important;
    }
}
body{
    overflow: hidden;
}
</style>
<?php
/*
    template name: 網站開發
    description: more@poptek.cn
*/
get_header();
require_once('services-header.php'); 
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles-merged.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" type="text/css">
<style type="text/css">
li{
    line-height: 28px !important;
    font-size: 19px !important;
}
@media screen and (min-width: 1200px){
    .webcon{
      width: 1310px !important;
    }  
    #secp .container {
    width: 1170px;
    overflow: hidden;
}
}
@media screen and (min-width: 992px) and (max-width: 1200px){
    .webcon{
      width: 815px !important;
    } 
    #secp .container {
    width: 970px;
    overflow: hidden;
}
}
@media screen and (min-width: 768px) and (max-width: 992px){
    #secp .container {
    width: 750px !important;
    overflow: hidden;
}
}
#secp .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    overflow: hidden;
}
.product-try-out {
    width: 56% !important;
    background-color: #6ca82e !important;
    margin: 0 auto !important;
    margin-top: 5rem !important;
    padding: 1.6rem !important;
    border-radius: 2rem !important;
    color: #fff !important;
    text-align: center !important;
    font-size: 2.6rem !important;
    letter-spacing: .8rem !important;
}
.ee{
    overflow: unset !important;
}
@media screen and (min-width: 1201px){
    .pramat{
        height: 529px;
}
}
@media screen and (min-width: 656px)and (max-width: 1201px){
    .ee{
        height: 441px !important;
    }
}
@media screen and (min-width: 541px)and (max-width: 655px){
    .ee{
        height: 356px !important;
    }
}
@media screen and (min-width: 451px)and (max-width: 540px){
    .ee{
        height: 305px !important;
    }
}
@media screen and (min-width: 391px)and (max-width: 450px){
    .ee{
        height: 265px !important;
    }
}
@media screen and (max-width: 390px){
    .ee{
        height: 265px !important;
    }
}

@media screen and (min-width: 655px) and (max-width: 991px){
    .pramat{
        height: 509px;
}
}
@media screen and (min-width: 540px) and (max-width: 655px){
    .pramat{
        height: 428px;
}
}
@media screen and (min-width: 450px) and (max-width: 540px){
    .pramat{
        height: 348px;
}
}
@media screen and (min-width: 390px) and (max-width: 450px){
    .pramat{
        height: 301px;
}
}
@media screen and (min-width: 220px) and (max-width: 390px){
    .pramat{
        height: 253px;
}
}
@media screen and (min-width: 490px) and (max-width: 991px){
    .prs{
        height: 325px;
    }
}
@media screen and (max-width: 490px){
    .prs{
        height: 137px;
    }
}
.icon{
    width: 100px;
    margin: auto;
}
</style>
<div id="secp">
<section class="probootstrap-hero" style="background: #efefef;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center probootstrap-hero-text pb0 probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="padding-bottom:1rem"><span  style="font-size:7rem;font-weight:lighter;">網站開發</span></h1>
			<h1 style="font-weight:lighter;font-size: 40px;">服務介紹</h1>
            <!-- <p>Prosecute to the end</p> -->
          </div>
        </div>

        <div class="row probootstrap-feature-showcase marginbot">
          <div class="col-md-4 col-md-push-8 probootstrap-showcase-nav probootstrap-animate">
            <ul>
              <li class="active">

                <!-- <a href="#">網頁定制設計</a>
                <p class="ap" style="color:#a0a0a0;">深入瞭解客戶定制需求；提供新穎美觀的視覺效果設計。</p> -->
                <a href="#">個性化網頁定制需求</a>
                <p class="ap" style="color:#a0a0a0;">業務顧問瞭解客戶定制需求，提供網站頁面風格及網站群配套的廣告預案。</p>
              </li>
              <li>
                <a href="#">網站設計/技術編程/數據同步</a>
                <p class="ap" style="color:#a0a0a0;">確定編程路線、平台及整體欄目設計，網站製作頁面編程與數據庫同步進行。</p>
              </li>
              <li>
                <a href="#">網站測試/管理服務/數據託管</a>
                <p class="ap" style="color:#a0a0a0;">提供網站測試、系統集成、性能優化、管理服務、網站託管等服務方案。</p>
              </li>

              <li>
                <a href="#">網站內容維護、系統維護</a>
                <p class="ap" style="color:#a0a0a0;">提供售後技術維護服務；保障網站安全穩定運行；網站數據定期備份。</p>
              </li>
            </ul>
          </div>
          <div class="col-md-8 col-md-pull-4 probootstrap-animate pramat" style="position: relative;">
            <div class="probootstrap-home-showcase-wrap prs">
              <div class="probootstrap-home-showcase-inner ee">
                <div class="probootstrap-chrome">
                  <div><span></span><span></span><span></span></div>
                </div>
                <div class="probootstrap-image-showcase">
                  <ul class="probootstrap-images-list">
                    <li class="active"><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/02/01-1.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/02/02-750x500-1.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/02/03-750x500-1.jpg" alt="Image" class="img-responsive"></li>
                    <li><img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/02/4-750x500-1.jpg" alt="Image" class="img-responsive"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
      <div class="webcon container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h1 style="font-size:6rem;font-wieght:">服務優勢</h1>
            <p class="lead"></p>
          </div>
        </div>
        <!-- END row -->
        <div class="row probootstrap-gutter60">
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/icon_1.png">
                <!-- <i class="icon-mobile3"></i> -->
              </div>
              <div class="text">
                <h3>專人專案對接溝通</h3>
                <p style="color:#a0a0a0;">專案進度即時通知，幫助您瞭解<br>情況掌握一切，隨時跟進安排。</p>
              </div>  
            </div>
          </div>
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/icon_4.png">
                <!-- <i class="icon-presentation"></i> -->
              </div>
              <div class="text">
                <h3>專業網頁設計方案</h3>
                <p style="color:#a0a0a0;">提供合適企業的官網設計方<br>案，清晰展現企業的實力。</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInRight">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/icon_2.png">
                <!-- <i class="icon-circle-compass"></i> -->
              </div>
              <div class="text">
                <h3>定制專屬網站功能介面</h3>
                <p style="color:#a0a0a0;">提供一對一的定制建站方案，<br>助力企業全面展示品牌優勢。</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="service text-center">
              <div class="icon">
              <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/icon_3.png">
                <!-- <i class="icon-lightbulb"></i> -->
              </div>
              <div class="text">
                <h3>應用最新互聯網編程技術</h3>
                <p style="color:#a0a0a0;">緊跟互聯網發展趨勢，提供最新<br>技術支持，提高網站用戶體驗。</p>
              </div>  
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!--<section class="probootstrap-section pb0" style="background: #efefef;">
      <div class="container">
     
        <div class="row probootstrap-feature-showcase probootstrap-animate">
          <div class="col-md-4 probootstrap-showcase-nav">
            <ul>
              <li class="active">
                <a href="#">服務流程</a>
              </li>
              <li>
                <a href="#">增值服務</a>
                <p style="color:#a0a0a0;">新媒體營銷：多個社交媒體平台，提供內容營銷、活動策劃等。</p>
              </li>
              <li>
                <a href="#">其他服務</a>
                <p style="color:#a0a0a0;">提供微信應用相關服務/手機APP開發/三維地圖/技術諮詢與系統開發等服務。</p>
              </li>
            </ul>
          </div>
          <div class="col-md-8 probootstrap-animate pramat" style="position: relative;">
            <div class="probootstrap-home-showcase-wrap prs">
              <div class="probootstrap-home-showcase-inner ee">
                <div class="probootstrap-chrome">
                  <div><span></span><span></span><span></span></div>
                </div>
                <div class="probootstrap-image-showcase">
                  <ul class="probootstrap-images-list">
                    <li class="active"><img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/6.jpg" alt="Image" class="img-responsive"></li>
                    <li>               <img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/5.jpg" alt="Image" class="img-responsive"></li>
                    <li>               <img src="<?php //echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/7.jpg" alt="Image" class="img-responsive"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>-->
</div>

            <section id="serveranli" class="probootstrap-section pb0" style="background: #efefef;">
              
                      <?php
                      /**
                       * The function is located in the following path
                       * deep/src/class-deep-theme.php
                       */
                      the_content("");
                      ?>
              
            </section>

<div id="secp">
    <section id="Contact" class="probootstrap-section proboostrap-clients probootstrap-bg-white probootstrap-border-top">
      <div class="container">
        <div class="row">
          <div class="section-heading probootstrap-animate" style="text-align: center;">
            <h1 style="font-size:6rem;font-weight: bold;">歡迎聯繫諮詢</h1>
            <p class="lead">Contact information</p>
          </div>
        </div>
        <div class="row" style="display:flex;justify-content: space-around;">
          <div class="col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn" style="text-align: center;">
            <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/client_12.png" alt="oa-img">
            <div class="call-Manner">
              <p style="font-size: 2.2rem;font-weight: 900;color: #000;">傳真</p>
              <span>Fax     28354350<br/><!--FAX 0756-8890938--></span>
            </div>
          </div>
          <div class="col-sm-6 col-xs-6 text-center client-logo probootstrap-animate" data-animate-effect="fadeIn" style="text-align: center; ">
            <img src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/client_2.png" alt="oA-img">
            <div  class="call-Manner">
              <p style="font-size: 2.2rem;font-weight: 900;color: #000;">郵件</p>
              <span>info@MacauTech.net</span>
            </div>
          </div>
        </div>
		<div style="text-align:center;margin:2rem 0 6rem 0;">
			<div>
				<image src="<?php echo esc_url(home_url('/'));?>wp-content/uploads/2022/01/图片4.png">
        
				<p style="font-size:2.6rem;margin-top:1.2rem;">掃碼添加微信</p>
			</div>
	  </div>
        <div>
            <!-- <a target="_blank" href="http://www.issuetracker.cn"><p class="product-try-out">查看案列</p></a> -->
        </div>
      </div>
    </section> 
    </div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.min.js"></script>
	<script type="text/javascript">
		function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
            var flag = true;
            for(var v = 0; v < Agents.length; v++) {
               if(userAgentInfo.indexOf(Agents[v]) > 0) {
                  flag = false;
                  break;
               }
            }
            return flag;
         }
         if(/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {        
            //alert("IOS端");
         } else if(/(Android)/i.test(navigator.userAgent)) {
            //alert("安卓端");
         } else {
           
         };
	</script>
    
    
<?php
/**
 * The function is located in the following path
 * deep/src/class-deep-theme.php
 */
// the_content();

get_footer();

