<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"D:\phpStudy\WWW\feichangcelue/application/index\view\ucenter\mobile\bank_transfer.html";i:1540808035;s:74:"D:\phpStudy\WWW\feichangcelue/application/index\view\public\PublicNav.html";i:1539064450;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0053)http://www.ygzx668.com/payment.php?type=bank_recharge -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="minimal-ui,initial-scale=1,user-scalable=no, width=device-width">
		<title>个人中心-充值</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="../public/static/home/css/moblie/main.css">
		<link rel="stylesheet" type="text/css" href="../public/static/home/css/moblie/personCenter.css">
		<style>
			.my-table {
				border: 1px solid #ddd;
				line-height: 30px;
				text-align: center;
				border-collapse: collapse;
				font-size: 12px;
			}

			.my-table td {
				border: 1px solid #ddd;
				padding: 0 20px;
			}
		</style>
		<!--<link rel="stylesheet" href="../public/static/home/css/moblie/layer.css" id="layuicss-skinlayercss">-->
	<link href="../public/static/home/css/moblie/mui.min.css" rel="stylesheet" />
	<link href="../public/static/home/css/moblie/tradeCommon.css" rel="stylesheet" />
	<link href="../public/static/home/css/moblie/cropper.min.css" rel="stylesheet">
</head>

	<body style="">
		<!-- 头部菜单 -->
		<nav class="global-nav">
			<header>
				<a href="javascript:window.history.back();" id="back" style=" background-size:80%; height:100%; float:left; width:20px; display:block; margin-left:12px;" alt="返回"></a>
			</header>
		</nav>
		<!--<nav class="ml_tab mui-bar mui-bar-tab">
			<a class="mui-tab-item " href="<?php echo url('/index'); ?>">
				<span class="mui-icon mui-icon-home"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item " href="<?php echo url('/stock'); ?>">
				<span class="mui-icon mui-icon-phone"></span>
				<span class="mui-tab-label">我要配资</span>
			</a>
			<a class="mui-tab-item" href="<?php echo url('/invite'); ?>">
				<span class="mui-icon mui-icon-postion"></span>
				<span class="mui-tab-label">我要推广</span>
			</a>
			<a class="mui-tab-item" href="<?php echo url('/buy'); ?>">
				<span class="mui-icon mui-icon-stock"></span>
				<span class="mui-tab-label">我要交易</span>
			</a>
			<a class="mui-tab-item mui-active" href="<?php echo url('/ucenter/home'); ?>">
				<span class="mui-icon mui-icon-email"></span>
				<span class="mui-tab-label" id="abc">账户中心</span>
			</a>
		</nav>-->
		<section id="content">
			<div class="wrap bg-gray">
				<form id="form2" method="post" action="">
					<input type="hidden" value="1" name="pay_type">
				<div style="background-color:#fff">
					<div class="offline-wrap">
						<ul class="each-line clearfix">
							<li style="    width: 100%;"> 你可以通过网上银行、银行柜台、ATM等方式向转账 <span style="color: #f70909;">(提示：必须先转账 后填写此凭证提交)</span></li>
						</ul>
						<ul class="each-line clearfix">
							<li>
								<span>银行帐号：</span>
							</li>
							<li>
								<!--<span style="color: red;float: right">755928537410701</span>-->
								<span style="color: red;float: right">75592853741</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value="755928537410701" style="color: #ff0000;">-->
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>账户名称：</span>
							</li>
							<li>
								<span style="color: red;float: right">深圳市尚美时尚产业投资管理有限公司</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value="深圳市尚美时尚产业投资管理有限公司" style="color: #ff0000;">-->
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li style="width: 100%;">
								<span style="color: red;">
									因对公帐户对帐，目前由财务代入款，给您造成不便抱歉！建设银行帐户：6236683200000984199姓名：梁欣茵，如您需要其他支付方式请联系在线客服，谢谢！
								</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value="深圳市尚美时尚产业投资管理有限公司" style="color: #ff0000;">-->
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>财务建设银行帐户帐号：</span>
							</li>
							<li>
								<!--<span style="color: red;float: right">755928537410701</span>-->
								<span style="color: red;float: right">6236683200000984199</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value="755928537410701" style="color: #ff0000;">-->
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>账户名称：</span>
							</li>
							<li>
								<span style="color: red;float: right">梁欣茵</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value="深圳市尚美时尚产业投资管理有限公司" style="color: #ff0000;">-->
							</li>
						</ul>





						<ul class="each-line clearfix">
							<li>
								<span>开户银行：</span>
							</li>
							<li>
								<span style="color: red;float: right">招商银行股份有限公司深圳中心城支行</span>
								<!--<input type="text" placeholder="请输入充值金额" disabled="" value=" 招商银行股份有限公司深圳中心城支行" style="color: #ff0000;">-->
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>充值金额</span>
							</li>
							<li>
								<input type="number" placeholder="请输入充值金额" id="paymoney" name="pay_money">
							</li>
						</ul>
						<ul class="each-line clearfix">
							<li>
								<span>我的充值银行卡号：</span>
							</li>
							<li>
								<input type="text" value=""  placeholder="请填写充值的银行卡号进行核对" id="bank_num" name="bank_num">
							</li>
						</ul>

						<ul class="each-line clearfix">
							<li>
								<span>转账备注</span>
							</li>
							<li>
								<input type="text" value="本人确认该笔款项用于股票配资之用"  placeholder="本人确认该笔款项用于股票配资之用" id="remark" name="remark">
							</li>
						</ul>

						<div class="zzpz-tip" id="upbutton">
							<label>
                        <!--+添加转账凭证-->
                        <!--<input id="idHold" type="file" accept="image/*" name="file" data-url="/m.php/Upload/index.html?t=idcard" onchange="upload(this)" style="display:none;">-->
		                <!--<input type="hidden" id="imgsrc" class="sfzimg2" value="" name="charge_image">-->
                    </label>

						</div>

					</div>

					<!--<div class="offline-pic" id="upimg" style="display:none;">-->
						<!--&lt;!&ndash;删除图片&ndash;&gt;-->
						<!--<img class="delete" src="./个人中心-充值_files/delete.png" alt="删除" onclick="imgdelete();">-->
						<!--&lt;!&ndash;这里装上传凭证的图片&ndash;&gt;-->
						<!--<div id="cId"><img src="./个人中心-充值_files/201712111819153265162.jpg"></div>-->
					<!--</div>-->
				</div>
				<div class="recharge-tip">
				<!-- 	<h1>关于转账到款时间说明：</h1>
					<p> 1、工作日上午9点到11点30分和下午13点到 17点30分前转账的，承诺在资金到账后的半小时内完成充值</p>
					<p> 2、工作日17点30分以后转账的，承诺在第二个工作日的早上9点完成充值</p>
					<p>3、非工作日转账的，承诺在下一工作日的早上9点完成充值</p>
					<p> 4、请使用实名认证后对应姓名的银卡进行转账</p>
					<p>5、请明确填写的充值金额与实际转账金额一致，转账凭证中包含付款人、收款人、金额三要素；
						<a href="http://www.ygzx668.com/payment.php?type=pay_demo" style="color:-webkit-link;">图片示例</a>
					</p> -->
					<!-- <p>6、如未能及时充值，请联系客服</p> -->
					<p>充值后，请在公众号留言或联系充值客服QQ：910605652，我们及时为您充值</p>
				</div>
					<div style="width: 100%">
						<!--<div class="btn-full btn-orange" style="margin-left: 5%;" onclick="charge();" id="on_buton">确认提交</div>-->
						<div class="btn-full btn-orange" style="margin-left: 5%;"id="on_buton">确认提交</div>
					</div>

				</form>

			</div>
		</section>
		<!-- js -->
		<!--<script src="../public/static/home/js/moblie/jquery.js" type="text/javascript" charset="utf-8"></script>-->
		<!--<script src="../public/static/home/js/moblie/main.js"></script>-->
		<!--<script src="../../js/common.js"></script>-->
		<!--<script src="../public/static/home/js/moblie/layer.js"></script>-->
		<script src="../public/static/home/js/moblie/trans.js"></script>
		<!--<script src="../../js/user.js"></script>-->
		<!--<script src="../public/static/home/js/moblie/clipboard.min.js"></script>-->


		<!--上传头像 js  和 css---->

		<!--<script src="../public/static/home/js/moblie//lrz.bundle.js"></script>-->
		<!--<script src="../public/static/home/js/moblie//cropper.min.js"></script>-->
		<!--<script src="../public/static/home/js/moblie//1.chunk.js" type="text/javascript"></script>-->
		<!--<script src="../public/static/home/js/moblie//2.chunk.js" type="text/javascript"></script>-->

		<!--<script>-->
            <!--function charge() {-->
                <!--var pay_money = $("#paymoney").val();-->
                <!--alert(pay_money);-->

                <!--if(pay_money == '' || pay_money == 0 || pay_money == null){-->
                    <!--showMessage("请输入充值金额");-->
                    <!--return;-->
                <!--}-->
                <!--var beizhu =$('#remark').val();-->
                <!--alert(beizhu);-->
<!--//-->
                <!--document.getElementById("form2").submit();-->
            <!--}-->
<!--//			var clipboard = new Clipboard('.copy');-->
<!--//			clipboard.on('success', function(e) {-->
<!--//				$(e.trigger).text("已复制");-->
<!--//				e.clearSelection();-->
<!--//			});-->
<!--//			clipboard.on('error', function(e) {-->
<!--//				$(e.trigger).text("不支持复制,已为您选择帐号");-->
<!--//			});-->

			<!--function payok() {-->
				<!--window.location.reload();-->

			<!--}-->

			<!--function moneychange(_this) {-->
				<!--var money = $(_this).val();-->
				<!--if(parseFloat(money) == 0 || money == null || parseFloat(money) < 0) {-->
					<!--$("#clickid").val("0");-->
				<!--}-->
			<!--}-->
			<!--var data_protect = "";-->
			<!--$(function() {-->

<!--//				$.ajax({-->
<!--//					type: "post",-->
<!--//					url: "/tools/user_ajax.ashx?action=get_avoidmoney",-->
<!--//					dataType: 'JSON',-->
<!--//					error: function(result) {-->
<!--//-->
<!--//						layer.open({-->
<!--//							content: '您的登录已失效，请重新登录',-->
<!--//							style: 'background-color:#09C1FF; color:#fff; border:none;' //自定风格-->
<!--//								,-->
<!--//							title: '温馨提示',-->
<!--//							btn: ['立即登录'],-->
<!--//							yes: function(index) {-->
<!--//								location.href = "/login/login.html";-->
<!--//-->
<!--//								return;-->
<!--//							}-->
<!--//						});-->
<!--//						setTimeout(function() {-->
<!--//							location.href = "/login/login.html";-->
<!--//						}, 3000);-->
<!--//						//showMessage(result.responseText + "，请联系客服处理！");-->
<!--//					},-->
<!--//					success: function(result) {-->
<!--//						$(".money_balance_able").html(result.available_balance_money);-->
<!--//						$("#user_id").val(result.user_id);-->
<!--//					}-->
<!--//				});-->

				<!--/*$.get("/tools/user_opt_ajax.ashx", {-->
						<!--act: "get_sysconfig",-->
						<!--t: new Date()-->
					<!--},-->
					<!--function(data) {-->
						<!--config = eval('(' + data + ')');-->

						<!--$(".phone").html(config.Company_phone);-->

						<!--$(".phone").bind("click", function() {-->
							<!--window.location.href = 'tel:' + config.Company_phone + '';-->
						<!--});-->
					<!--});*/-->
			<!--});-->

			<!--//图像压缩-->
<!--//			function upload(the) {-->
<!--//				$(".tx-touxiang").hide();-->
<!--//				$("#update-touxiang").hide();-->
<!--//				$(".w-loading").show();-->
<!--//				lrz(the.files[0], {-->
<!--//						width: 1920-->
<!--//					})-->
<!--//					.then(function(rst) {-->
<!--//						//把处理的好的图片给用户看看呗-->
<!--//						var img = new Image();-->
<!--//						img.src = rst.base64;-->
<!--//						//  layer.close("上传中...");-->
<!--//-->
<!--//						layer.closeAll();-->
<!--//						//这里的base64数据上传给后端-->
<!--//						$.ajax({-->
<!--//							url: "payment.php?type=upload",-->
<!--//							type: "post",-->
<!--//							data: {-->
<!--//								img: rst.base64-->
<!--//							},-->
<!--//							dataType: "json",-->
<!--//							success: function(data) {-->
<!--//								// layer.closeAll();-->
<!--//								if(data.status == 1) {-->
<!--//									// alert(data.msg);-->
<!--//									// layer.alert("图片上传成功",9);-->
<!--//									$("#cId").find("img").attr("src", data.msg + "?id=" + Math.random());-->
<!--//									$("#imgsrc").val(data.msg);-->
<!--//									$("#upbutton").hide();-->
<!--//									$("#upimg").show();-->
<!--//								} else {-->
<!--//-->
<!--//									showMessage(data.msg);-->
<!--//									//alert(data.msg);-->
<!--//									return;-->
<!--//								}-->
<!--//							}-->
<!--//						});-->
<!--//					})-->
<!--//					.catch(function(err) {-->
<!--//						// 万一出错了，这里可以捕捉到错误信息-->
<!--//						// 而且以上的then都不会执行-->
<!--//						layer.open({-->
<!--//							content: err,-->
<!--//							time: 2-->
<!--//						});-->
<!--//					})-->
<!--//					.always(function() {});-->
<!--//			};-->

			<!--function imgdelete() {-->

				<!--$("#upbutton").show();-->
				<!--$("#upimg").hide();-->
			<!--};-->
		<!--</script>-->


		<!---js---->
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="../public/static/home/js/moblie/mui.min.js"></script>


		<script>
			$("#on_buton").click(function () {
                var pay_money = $("#paymoney").val();
                if(pay_money == '' || pay_money == 0 || pay_money == null){
                    mui.alert("请输入充值金额");
                    return;
                }
                var beizhu =$('#remark').val();
                var bank_num =$('#bank_num').val();
                if(bank_num =='' ||bank_num == 0 || bank_num == null){
                    mui.alert("请输入充值的银行卡号");
                    return;
				}

                $(function(){
                    $.ajax({
                        type:"post",
                        url:"<?php echo url('index/Ucenter/bank_transfer'); ?>",
                        data:{
                            'pay_money':pay_money,
							'beizhu':beizhu,
							'bank_num':bank_num
						},
                        dataType:'json',
                        success:function(data){
                            mui.alert(data.msg+'<br/>请等待审核');
                            setTimeout(function () {
                                window.location.href= './home.html';
                            },2000);
                            console.log('成功');
                        },
                        error:function (data) {
                            console.log("错误");
                        }
                    })
                });

            });


		</script>
	</body></html>