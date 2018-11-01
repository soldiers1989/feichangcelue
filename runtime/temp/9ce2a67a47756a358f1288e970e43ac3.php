<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\mobile\wechatpay.html";i:1540863475;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>尚牛在线</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
		<style type="text/css">
						.form-list li span{
							display: inline-block;
							color: #333;
							font-size: 14px;
						}
						.form-list li input{
							display: inline-block;
							color: #333;
							font-size: 14px;
							height: 36px;
						}
						.form-list li .title{
							width: 22%;
							text-align: right;
							
						}
						
						.form-list li .content{
							width: 60%;
						}
						
			#submit{
				color: #fff;
			    border: 1px solid #007aff;
			    background-color: #007aff;
			}
		</style>
	</head>
<!--个人中心-充值-支付宝-->
	<body class="quick_body payment_body">
		<header class="bg_fff mui-bar mui-bar-nav">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		    <h1 class="mui-title">微信转账</h1>
		</header>
		<div class="mui-content">
		  <div class="wx_top">
		  	<p class="color_red wx_p1">请扫码充值，并务必在转账备注中填写注册手机号 这样方便我们多重信息确认你的汇款</p>
		  	<!--<img class="wx_img" src="__STATIC__/home/img/wxpay.png"/>-->
		  	<img class="wx_img" src="__STATIC__/home/img/wxpay2.jpg"/>
		  	<p class="wx_p2">请用微信扫描二维码,加好友</p>
		  	<p class="wx_p3" style="color: #e60012">因对公帐户对帐，目前由财务代入款，给您造成不便抱歉！如您需要其他支付方式请联系在线客服，谢谢！</p>
		  	<p class="wx_p3">转账成功后，请在下方填写对应的凭证，请拨打客服热线4001665652以便我们及时帮您处理</p>
			<p class="wx_p3">账户：赵金霞</p>
			<div class="ball ball_l"></div>
			<div class="ball ball_r"></div>
			<form action="" method="post">
				<ul class="form-list">
					<li>
						<span class="title">金额:</span>
						<span class="content"><input type="text" name="amount" id="amount" value="" /></span>
					</li>
					<li>
						<span class="title" style="vertical-align: 40px;">说明:</span>
						<span class="content"><textarea rows="2" cols="60" name="instructions" id="instructions"></textarea></span>
					</li>
					<li>
						<span class="title">微信号:</span>
						<span class="content"><input type="text" name="alipay" id="alipay" value="" /></span>
					</li>
				</ul>
				<!-- <div class="upload_img">
					<p>截图凭证：</p>
					<ul>
						<li class="upload_input">
							<a href="javascript:;">
								<img src="__STATIC__/index/image/icon-cam.png">
							</a>
							<input type="file" id="myfile" enctype="multipart/form-data"  multiple accept="image/jpeg, image/jpg, image/png" name="credentials">
						</li>
					</ul>
				</div> -->
				<div class="buts" style="text-align: center;">
					<input type="button" value="确认提交" id="submit"/>
				</div>
				
			</form>
		  </div>
			
		</div>





		<!---js---->
	<script src="../public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
	<script src="../public/static/home/js/moblie/mui.min.js"></script>
	<script src="../public/static/home/js/moblie/clipboard.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
		</script>
		<script type="text/javascript">
				
					
					  $('#submit').click(function() {
                          var amount=$("#amount").val();
                          if(amount == '' || amount == 0 || amount == null){
                              mui.alert("请输入充值金额");
                              return;
                          }
                          var instructions=$("#instructions").val();
                          if(instructions =='' ||instructions == 0 || instructions == null){
                              mui.alert("请输入说明信息");
                              return;
                          }

                          var alipay=$("#alipay").val();
                          if(alipay =='' ||alipay == 0 || alipay == null){
                              mui.alert("请输入使用的微信账号");
                              return;
                          }
                          $.ajax({
                              type: "post",
                              url: "<?php echo url('index/Ucenter/getInformationWeChat'); ?>",
                              dataType: 'JSON',
                              data:{"amount":amount,"instructions":instructions,"alipay":alipay},

                              success: function(data) {
                                  if(data.status ==1){
                                      mui.alert(data.info);
                                      setTimeout(function () {
                                          window.location.href= './home.html';
                                      },2000);
                                  }else {
                                      mui.alert('提交失败');
                                  }


                              },
                              error: function(data) {
                              }
                          });
					  });
				
			</script>
	</body>
</html>
