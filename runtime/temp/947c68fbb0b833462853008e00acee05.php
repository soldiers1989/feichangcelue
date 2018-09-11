<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\phpStudy\PHPTutorial\WWW\feichangcelue/application/index\view\ucenter\mobile\share.html";i:1536635781;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
	</head>
	<!--个人中心-推广赚钱-->

	<body class="share_body bg_fff">
		<header class="mui-bar mui-bar-nav bg_fff">
			<a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">推广赚钱</h1>
		</header>
		<div class="mui-content bg_fff">
			<div class="share_box">
                <!--控制器-->
                <div class="mui-segmented-control mui-segmented-control-inverted">
                    <a class="mui-control-item mui-active" href="#item1">推广详情</a>
                    <a class="mui-control-item" href="#item2">我的用户</a>
                </div>
                <!--内容-->
                <div class="">
                    <!--item1-->
                    <div id="item1" class="mui-control-content mui-active">
                    	<div class="topbg">
	                        <div class="topBox mui-row">
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0.00</h5>
	                        		<p>已赚佣金</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">6%</h5>
	                        		<p>佣金比例</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0</h5>
	                        		<p>我的用户</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0</h5>
	                        		<p>交易人数</p>
	                        	</div>
	                        </div>
                        </div>
                        <img class="ewm" src="/public/static/home/img/moblie/ewm.png"/>
                        <p class="color_black mui-text-center">推荐朋友扫码，成为您的用户</p>
                        <div class="copyBox mui-row">
                        	<div class="copy_l mui-pull-left">复制推广链接发给朋友 </br><span class="www">http://www.feichangmoulv.com</span> </div>
                        	<a id="copy_a" class="mui-pull-right" href="javascript:;">复制</a>
                        </div>
                        <h5 class="step_title color_black mui-text-center">只需三步 即可获得佣金</h5>
                    	<div class="step_box mui-clearfix">
                    		<img class="step_img mui-pull-left" src="/public/static/home/img/moblie/thl.png"/>
	                    	<p class="mui-pull-left">通过以上方式邀请好友</p>
	                    	<p class="mui-pull-left">被邀请人成功操作点买策略</p>
	                    	<p class="mui-pull-left">获得佣金管理费的6%</p>
                    	</div>
                    </div>
                    <!--item2-->
                    <div id="item2" class="mui-control-content">
                        <div class="topbg">
	                        <div class="topBox mui-row">
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0.00</h5>
	                        		<p>已赚佣金</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">6%</h5>
	                        		<p>佣金比例</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0</h5>
	                        		<p>我的用户</p>
	                        	</div>
	                        	<div class="top_item mui-col-xs-3 mui-col-sm-3 mui-text-center">
	                        		<h5 class="color_red">0</h5>
	                        		<p>交易人数</p>
	                        	</div>
	                        </div>
                        </div>
                        <div class="share_people">
                        	<div class="share_people_top mui-row mui-text-center">
                        		<div class="mui-col-xs-4">用户名</div>
                        		<div class="mui-col-xs-4">当前交易</div>
                        		<div class="mui-col-xs-4">注册时间</div>
                        	</div>
                        	<div class="share_people_bot">
                        		<p class="data_empty mui-text-center">暂无数据</p>
                        	</div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!---js---->
	
		<script src="../public/static/home/js/moblie/mui.min.js"></script>
		<script src="../public/static/home/js/moblie/jquery.js"></script>
			<script src="../public/static/home/js/moblie/clipboard.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
					var clipboard = new Clipboard('#copy_a', {
				        text: function() {
				            return 'http://www.feichangmoulv.com';
				        }
				    });
				
				    clipboard.on('success', function(e) {
				        mui.toast('复制成功！')
				    });
				
				    clipboard.on('error', function(e) {
				        mui.toast('此浏览器不支持自动复制！请手动输入！');
				    });
		</script>
		<script type="text/javascript">
		
</script>
	</body>

</html>