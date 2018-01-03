<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
			<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/simplebootx_mobile/Public/assets/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/simplebootx_mobile/Public/assets/images/favicon.ico" type="image/x-icon">
    <link href="/themes/simplebootx_mobile/Public/assets/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/themes/simplebootx_mobile/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/themes/simplebootx_mobile/Public/assets/css/bottom/bottommain.css" rel="stylesheet">
    <link href="/themes/simplebootx_mobile/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/themes/simplebootx_mobile/Public/assets/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
		<style>
			#article_content img {
				height: auto !important
			}
			
			#article_content {
				word-wrap: break-word;
			}
			
			.btn {
				margin-top: 33px;
			}
			.span8,
			.span7{
				margin-left: 0;
				margin-right: 0;
			}
			
		</style>
	</head>

	<body class="">
		<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/"><img src="/themes/simplebootx_mobile/Public/assets/images/logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="li-class" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		

		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:8px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>
		<div class="container tc-main">
			<div class="row">
				<div class="list-baidu-span8">
					<div class="span8">
						<div class="span7">
							<div class="tc-box first-box article-box">
								<h2><?php echo ($post_title); ?></h2>
								<div class="article-infobox">
									<span><?php echo ($post_date); ?> by <?php echo ((isset($user_nicename) && ($user_nicename !== ""))?($user_nicename):$user_login); ?></span>
									<span>
					    			<i class="fa fa-eye"></i><span><?php echo ($post_hits); ?></span>
									</span>
									<div class="bdsharebuttonbox pull-right">
										<a href="#" class="bds_more" data-cmd="more"></a>
										<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
										<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
										<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
										<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
										<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
									</div>
								</div>
								<hr>
								<div id="article_content ">
									<?php echo ($post_content); ?>
								</div>
								<?php if(!empty($post_source) ): ?><div>
										<b>注：本文转载自<?php echo ($post_source); ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。</b>
									</div><?php endif; ?>
								<div>
									<?php if(!empty($prev) ): ?><a href="<?php echo leuu( 'article/index',array( 'id'=>$prev['object_id'],'cid'=>$prev['term_id']));?>" class="btn btn-primary pull-left">上一篇</a><?php endif; ?>
									<?php if(!empty($next)): ?><a href="<?php echo leuu('article/index',array('id'=>$next['object_id'],'cid'=>$next['term_id']));?>" class="btn btn-warning pull-right">下一篇</a><?php endif; ?>
									<script type="text/javascript" src="/themes/simplebootx_mobile/Public/assets/js/qrcode.min.js"></script>
									<div id="qrcode" style="width: 100px;margin:0 auto"></div>
									<script type="text/javascript">
										var qrcode = new QRCode(document.getElementById("qrcode"), {
											width: 100,
											height: 100
										});

										function makeCode() {
											qrcode.makeCode("http://<?php echo ($_SERVER['HTTP_HOST']); echo ($_SERVER['REQUEST_URI']); ?>");
										}
										makeCode();
									</script>
									<div class="clearfix"></div>
								</div>

								<?php echo hook('comment',array( 'post_id'=>$article_id, 'post_table'=>'posts', 'post_title'=>$post_title ));?>
							</div>

						</div>
						<div class="span7" style="border-top: 1px solid #BFBFBF;"></div>
						<div class="span7">
							<div class="">
								<h3 class="text-menu">
							<i class="fa fa-bars"></i><span style="margin-left: 10px;">热门文章	</span>
						</div>
						<?php $hot_articles=sp_sql_posts("cid:$portal_hot_articles;field:post_title,post_excerpt,post_date,object_id,smeta,term_id;order:post_hits desc;limit:5;"); ?>
						<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): ?><div class="text-list-hot-list">
								<a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>" class="text-list-hot-menu" href="#">
									<?php echo ($vo["post_title"]); ?>
								</a>
								<span class="text-list-hot-date">
									 <?php echo date('Y-m-d',strtotime($vo['post_date']));?> 
								</span>
						</div><?php endforeach; endif; ?>
					</div>
					</div>
				</div>
				<div class="span3 pull-right">
					<img src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/阿霍德商城.jpg" alt="皇家阿霍德" style="width:100%; margin-top: 5%;">
					<h3 class="text-center">关注微信公众号<br>阿霍德商城</h3>
							</div>
						</div>

					</div>
					<br>
<br>
<br>
<!-- Footer ================================================== -->
<hr> <?php echo hook('footer');?>
<div id="main_footer">

	<!--Bottom-->
	<section id="bottom" class="main">
		<!--Container-->
		<div class="container">

			<!--row-fluids-->
			<div class="row-fluid">

				<!--Contact Form-->
				<div class="span3">
					<h4>地址</h4>
					<ul class="unstyled address">
						<li>
							<i class="icon-home"></i><strong>地址:</strong> 佛山市禅城区智慧新城T6-803
						</li>
						<li>
							<i class="icon-envelope"></i>
							<strong>Email: </strong> aholdhk@aliyun.com
						</li>
						<li>
							<i class="icon-globe"></i>
							<strong>Website:</strong> www.aholdhk.com
						</li>
						<li>
							<i class="icon-phone"></i>
							<strong>Toll Free:</strong> 400-084-8003
						</li>
					</ul>
				</div>
				<!--End Contact Form-->

				<!--Important Links-->
				<div id="tweets" class="span3">
					<h4 style="margin-left: 26px;">关于阿霍德</h4>
					<div>
						<?php
 $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target'>\$label</a>"; echo sp_get_menu("main",$filetpl,$foldertpl); ?>
					</div>
				</div>
				<!--Important Links-->

				<!--Archives-->
				<div id="archives" class="span3">
					<h4>最新资讯</h4>
					<div>

						<ul class="arrow">
							<?php $hot_articles=sp_sql_posts("cid:$portal_hot_articles;field:post_title,post_excerpt,post_date,object_id,smeta,term_id;order:post_hits desc;limit:5;"); ?>
							<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): ?><li>
									<a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo (msubstr($vo["post_title"],0,13)); ?></a>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<!--End Archives-->

				<div class="span3">
					<h4>关注我们</h4>
					<img id="erweima" src="/themes/simplebootx_mobile/Public/assets/images/oneindexpic/阿霍德商城.jpg" alt="皇家阿霍德" />
					<h3>官方微信</h3>

				</div>

			</div>
			<!--/row-fluid-->
		</div>
		<!--/container-->

	</section>
	<!--/bottom-->

	<!--Footer-->
	<footer id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span5 cp">
					&copy; 2017 More Templates
					<a href="http://www.aholdhk.com/" target="_blank" title="皇家阿霍德">皇家阿霍德</a> - Collect from
					<a href="http://www.aholdhk.com/" title="阿霍德商城" target="_blank">皇家阿霍德</a>. All Rights Reserved.
				</div>
				<!--/Copyright-->

				<div class="span6">
					<ul class="social pull-right">
						<li>
							<a href="#"><i class="fa fa-weixin"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-weibo"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-qq"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-mobile-phone"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-mail-forward"></i></a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</footer>
	<!--/Footer-->
</div>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>
					<script type="text/javascript">
	//全局变量
	var GV = {
		ROOT: "/",
		WEB_ROOT: "/",
		JS_ROOT: "public/js/"
	};
</script>
<!-- Placed at the end of the document so the pages load faster -->
<script src="/public/js/jquery.js"></script>
<script src="/public/js/wind.js"></script>
<script src="/themes/simplebootx_mobile/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/js/frontend.js"></script>
<script>
	$(function() {
		$('body').on('touchstart.dropdown', '.dropdown-menu', function(e) {
			e.stopPropagation();
		});

		$("#main-menu li.dropdown").hover(function() {
			$(this).addClass("open");
		}, function() {
			$(this).removeClass("open");
		});

		$.post("<?php echo U('user/index/is_login');?>", {}, function(data) {
			if(data.status == 1) {
				if(data.user.avatar) {
					$("#main-menu-user .headicon").attr("src", data.user.avatar.indexOf("http") == 0 ? data.user.avatar : "<?php echo sp_get_image_url('[AVATAR]','!avatar');?>".replace('[AVATAR]', data.user.avatar));
				}

				$("#main-menu-user .user-nicename").text(data.user.user_nicename != "" ? data.user.user_nicename : data.user.user_login);
				$("#main-menu-user li.login").show();

			}
			if(data.status == 0) {
				$("#main-menu-user li.offline").show();
			}

			/* $.post("<?php echo U('user/notification/getLastNotifications');?>",{},function(data){
				$(".nav .notifactions .count").text(data.list.length);
			}); */

		});;
		(function($) {
			$.fn.totop = function(opt) {
				var scrolling = false;
				return this.each(function() {
					var $this = $(this);
					$(window).scroll(function() {
						if(!scrolling) {
							var sd = $(window).scrollTop();
							if(sd > 100) {
								$this.fadeIn();
							} else {
								$this.fadeOut();
							}
						}
					});

					$this.click(function() {
						scrolling = true;
						$('html, body').animate({
							scrollTop: 0
						}, 500, function() {
							scrolling = false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery);

		$("#backtotop").totop();

	});
</script>

<script>
	window._bd_share_config = {
		"common": {
			"bdSnsKey": {},
			"bdText": "",
			"bdMini": "2",
			"bdMiniList": false,
			"bdPic": "",
			"bdStyle": "2",
			"bdSize": "16"
		},
		"share": {},
		"image": {
			"viewList": ["weixin", "tsina", "qzone", "tqq", "renren"],
			"viewText": "分享到：",
			"viewSize": "16"
		},
		"selectShare": {
			"bdContainerClass": null,
			"bdSelectMiniList": ["weixin", "tsina", "qzone", "tqq", "renren"]
		}
	};
	with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
	</body>

</html>