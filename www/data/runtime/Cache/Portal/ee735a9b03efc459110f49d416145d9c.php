<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

	<head>
		<title>皇家阿霍德(Ahold)-阿霍德商城</title>
		<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
		<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
		<meta name="keywords" content="皇家阿霍德,阿霍德,阿霍德商城,ahold,阿霍德集团,广东阿霍德,佛山阿霍德,网上购物,网上商城,创业,创业者,市场巨大,阿霍德网,ahold网">
		<meta name="description" content="皇家阿霍德商业有限公司创立于2015皇家阿霍德是一家物联网平台，拥有中国阿霍德网络科技有限公司，公司一心帮助到更多行业，共享圣果，同时给予各行各业分享共赢">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/css/oneindexcss/swiper.min.css">
		<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/css/oneindexcss/bootstrap.min.css">
		<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/css/oneindexcss/style.min.css">
		<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/css/oneindexcss/layer.css" id="layuicss-skinlayercss">
		<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/css/oneindexcss/bideo.css" />
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/bideo.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/main.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/jquery-3.2.1.min.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/swiper.jquery.min.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/tether.min.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/bootstrap.min.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/layer.js"></script>
		<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/browserDetect.min.js"></script>

		<script>
			var baseUrl = '/';

			console.log(BrowserDetect.browser);
			console.log(BrowserDetect.version);
			console.log(BrowserDetect.OS);

			window.onload = function() {
				if(BrowserDetect.browser == 'Internet Explorer' && BrowserDetect.version < 10) {
					$(document.body).append('<div rel="alert" class="alert alert-warning ie-alert text-center" style="position:fixed;width:100%;left:0;top:0;z-index:9999;">微软都推荐用Edge了您还在用' + BrowserDetect.browser + BrowserDetect.version + '，我们的站点不支持IE10以下的浏览器，建议使用IE10+或其他浏览器最新版</div>');
				}
			}

			function detail(title, url) {
				layer.open({
					type: 2,
					title: title + ' 详情查看',
					shadeClose: true,
					shade: 0.8,
					area: ['80%', '100%'],
					content: url
				});
				
			}
			

			function goIndex(index) {
				slide.slideTo(index, 1000, function() {
					nav.removeClass('active');
					setTimeout(function() {
						this.addClass('active');
					}, 0)
				});
			}
		</script>
	</head>

	<body>
		
			
		<nav class="navbar navbar-toggleable-md  navbar-toggler-center navbar-inverse bg-inverse main-navbar">
			<div class="container container-no-relative">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
				<a class="navbar-brand" href="javascript:void(0)"><img  style="height:50px;width: 300px; margin: -10px;" title="皇家阿霍德" alt="皇家阿霍德" src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/皇家阿霍德.png "></a>
				<div class="collapse navbar-collapse justify-content-lg-end justify-content-md-end justify-content-sm-end" id="mainNavbar">
					<ul class="navbar-nav main-swiper-pagination">
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link active" onclick="goIndex(0)">网站首页</a>
						</li>
						<li class="nav-item">
							<a href="javascript:void(0);" class="nav-link" onclick="goIndex(1)">公司简介</a>
						</li>
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link" onclick="goIndex(2)">服务范围</a>
						</li>
						<li class="nav-item">
							<a href="javascript:void(0);" class="nav-link" onclick="goIndex(3)">最新资讯</a>
						</li>
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link" onclick="goIndex(4)">联系我们</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="indexSwiper" class="swiper-container main-swiper swiper-container-horizontal">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slide-active" style="width: 1366px;">

					<div id="video_body">
						<div id="video_container">
							<video id="video_background_video" loop muted></video>
							<div id="video_cover"></div>
							<div id="video_overlay"></div>
							<div id="video_controls">
								<span id="video_play">
				        <img src="play.png">
				      </span>
								<span id="video_pause">
				        <img src="pause.png">
				      </span>
							</div>
							<section id="video_main_content">
								<div id="video_head">
									<h1>AHOLD</h1>
									<p class="video_sub_head">皇家阿霍德网络科技公司</p>
									<p class="video_info">ROYAL AHOLD NETWORK TECHNOLOGY COMPANY</p>
								</div>
							</section>
						</div>
					</div>
					<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/bideo.js"></script>
					<script src="/themes/simplebootx_mobile/Public/assets/js/oneindexjs/main.js"></script>
				</div>
				<div class="swiper-slide scroll-y swiper-slide-next" style="width: 1366px;">
					<section class="page-wrap about-wrap">
						<div class="page-container about">
							<ul class="nav nav-tabs nav-about-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#about-company" role="tab">公司简介</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#about-team" role="tab">企业宗旨</a>
								</li>
							</ul>
							<!-- 公司介绍 -->
							<div class="tab-content pt-5">
								<div class="tab-pane active" id="about-company" role="tabpanel">
									<h2 class="page-title"><span>COMPANY</span> PROFILE</h2>
									<div class="d-flex align-content-stretch">
										<strong class="h2 pr-3">公司简介</strong>
										<div class="about-slogan">
											<div>我们拥有完善的营销方案，让更多的合作商家得到更大的回报。</div>
											<div>让我们为商家创造无限的价值、为消费者提供更多得益。</div>
										</div>
									</div>
									<div class="row mt-5  d-flex align-items-center">
										<div class="col-md-4 col-sm-12 d-flex align-items-center justify-content-center pb-3">
											<div class="about-circle rounded-circle">移动电商</div>
											<div class="about-circle about-circle-primary rounded-circle">共享经济</div>
											<div class="about-circle rounded-circle">创业平台</div>
										</div>
										<div class="col-md-4 col-sm-12 d-flex align-items-center justify-content-center about-border-dashed">
											皇家阿霍德商业有限公司创立于2015皇家阿霍德是一家物联网平台，拥有中国阿霍德网络科技有限公司，在欧洲，亚洲，南美洲有十多年的物联网累积经验，于2015年进入大陆市场，将毕生的经验在中国发展，并受到中国市场的认可，公司一心帮助到更多行业，共享圣果，同时给予各行各业分享共赢。
										</div>
										<div class="col-md-4 col-sm-12 text-center">
											<div>
												<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/acba4517660e73e570eced10f1e71f5b.png">
											</div>
											<h4>
                                            <a href="/">www.aholdhk.com</a>
                                        </h4>
										</div>
									</div>
								</div>
								<!-- 企业宗旨 -->
								<div class="tab-pane" id="about-team" role="tabpanel">
									<h2 class="page-title"><span>ENTERPRISE</span> TENET</h2>
									<div class="d-flex align-content-stretch">
										<strong class="h2 pr-3">企业宗旨</strong>
									</div>
									<div class="mt-3 ">
										<h3>公司目标：帮助合作商家共赢</h3>
										<h3>公司方向：成为中国有史以来最多创业者的领跑者</h3>
										<h3>公司结果：要做到中国最强大线上线下的航空母舰</h3>
										<h3>公司愿景：打造过百万个老板，成为千万富翁</h3>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="swiper-slide scroll-y" style="width: 1366px;">
					<section class="page-wrap page-3">
						<div class="page-container">
							<h2 class="page-title"><span>SERVICE</span> AREA</h2>
							<h2>服务范围</h2>
							<div class="mt-5 service-list">
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\时髦女装.jpg" alt="时髦女装">
									<div class="item-text">时髦女装</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\户外运动.jpg" alt="户外运动">
									<div class="item-text">户外运动</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\家居家纺.jpg" alt="家居家纺">
									<div class="item-text">家居家纺</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\美妆各户.jpg" alt="美妆各户">
									<div class="item-text">美妆各户</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\母婴童装.jpg" alt="母婴童装">
									<div class="item-text">母婴童装</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\暖心内衣.jpg" alt="暖心内衣">
									<div class="item-text">暖心内衣</div>
								</div>
								<div class="item">
									<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic\shangpin\品质男装.jpg" alt="品质男装">
									<div class="item-text">品质男装</div>
								</div>
								<div class="item item-content">十八大类商品、十万各色商品，每日限时特价，全国精选优质商品，为您带来前所未有的购物体验。 </div>
							</div>
						</div>
					</section>
				</div>
				<div class="swiper-slide scroll-y news" style="width: 1366px;">
					<section class="page-wrap ">
						<div class="page-container">
							<h2 class="page-title text-white"><span>NEWS</span> INFORMATION</h2>
							<h3 class="text-white">最新资讯</h3>
							<div class="d-flex justify-content-md-end justify-content-sm-start">
								<ul class="news-list">
										<?php $lastnews=sp_sql_posts("cid:$portal_index_lastnews;field:post_title,post_date,post_excerpt,object_id,smeta,term_id;order:post_date desc;limit:8;where:istop=1"); ?>
									<?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
									<li class="item pt-3 pb-3">
										<div class="item-circle"></div>										
											<div>
												<a href="javascript:void(0)" title="<?php echo ($vo["post_title"]); ?>" onclick="detail('<?php echo ($vo["post_title"]); ?>','<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>');">
													<h3><?php echo ($vo["post_title"]); ?></h3>
													<p><?php echo ($vo["post_date"]); ?></p>
												</a>
											</div>										
									</li><?php endforeach; endif; ?>	
								</ul>
							</div>
						</div>
					</section>
				</div>
				<div class="swiper-slide scroll-y contact-wrap text-white" style="width: 1366px;">
					<section class="page-wrap">
						<div class="page-container">
							<div class="text-center">
								<h2 class="page-title contact-title"><span>联系我们</span></h2>
								<h5 class="p-3 contact-title-sub mt-3">CONTACT FORM</h5>
							</div>
							<h3 class="p-md-5 p-sm-3 contact-company-name text-center ">                       
                               阿霍德商城公司
                        </h3>
							<div class="row mt-5">
								<div class="col-md-6 col-sm-12 d-flex mb-4">
									<div class="d-flex">
										<div>
											<p class="h4">
												<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/icon_location.png">佛山市禅城区智慧新城T6-803 </p>
											<p class="h4">
												<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/icon_tel.png">400-084-8003 </p>
											<p class="h4">
												<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/icon_weibo.png">皇家阿霍德商业有限公司 </p>
										</div>
										<div class="pl-md-5 qr">
											<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/皇家阿霍德.jpg" alt="皇家阿霍德" height="96">
											<p class="text-center">微信公众号<br>皇家阿霍德</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 mb-4">
									<div class="contact-md">
										<div class="d-flex">
											<div>
												<p class="h4">梁S</p>
												<p class="h4">Phone：0757-22685533 </p>
												<p class="h4">E-mail:173944143@qq.com </p>
											</div>
											<div class="pl-md-5 qr">
												<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/阿霍德商城.jpg" alt="皇家阿霍德" height="96">
												<p class="text-center">微信公众号<br>阿霍德商城</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	




		<script>
			var nav = $('#mainNavbar .nav-link');
			var slide = new Swiper('.main-swiper', {
				autoplay: false,
				direction: 'horizontal',
				//pagination: '.main-swiper-pagination',
				observer: true,
				observeParents: true,
				iOSEdgeSwipeDetection: true,
				onSlideChangeStart: function(swiper) {
					var i = swiper.activeIndex;
					$.each(nav, function(index, item) {
						if(index == i) {
							$(item).addClass('active');
						} else {
							$(item).removeClass('active');
						}
					})
				}
			});
		</script>
	</body>

</html>