<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\mobile\reg.html";i:1539668959;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>尚牛在线</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="__STATIC__/home/css/mui.min.css" rel="stylesheet" />
		<link href="__STATIC__/home/css/moblie/login.css" rel="stylesheet" />

	</head>
<!--登录-->
	<body class="reg_body">
		<!--标题-->
		<header class="ml_header mui-bar mui-bar-nav">
		    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		    <h1 class="mui-title">注册</h1>
		</header>
		<!--主体-->
		<div class="mui-content">
		    <form class="reg_form login_form mui-input-group" method="post" action="<?php echo url('index/index/doReg'); ?>">
			    <div class="mui-input-row">
			        <input id="mobileno" type="text" class="mui-input-clear" name="mobile" placeholder="请输入您的手机号">
			    </div>
			    <div class="mobilenoCode_row mui-input-row">
			        <input id="mobilenoCode" type="text" class="mui-input-clear" name="code" placeholder="请输入验证码">
			        <!--<a href="javascript:;" onclick="yzm()" id="mobileno_code_a">获取验证码</a>-->
			        <button onclick="yzm()" id="mobileno_code_a">获取验证码</button>
			    </div>
			    <div class="mui-input-row">
			        <input id="pwd" type="password" name="login_pwd" class="mui-input-clear" placeholder="请输入密码">
			    </div>
			    <div class="mui-input-row">
			        <input id="mobile" type="text" name="nick_name" class="mui-input-clear" placeholder="设置用户名，不小于6位">
			    </div>
			     <!--<div class="mui-input-row">
			        <input id="recommend_code" type="text" class="mui-input-clear" placeholder="请输入机构码">
			    </div>-->
				<div class="mui-input-row">
					<input type="text" name="inviterId" value="<?php echo $uid; ?>" class="mui-input-clear" placeholder="邀请码(可填可不填)">
					<!--<input type="hidden" name="uid" value="<?php echo $_GET['uid']?invite($_GET['uid']):'';?>">-->
				</div>
				<!--隐藏域帮助进行识别获取到的邀请人的memberID-->

				<div style="text-align: center;"><a href="<?php echo url('index/index/reg_agreement'); ?>">注册协议(注册即代表同意本协议)</a></div>
					<button type="submit" id="reg_btn" class="ml_btn mui-btn mui-btn-block">注&nbsp;册</button>
			</form>
		</div>


		<script src="__STATIC__/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
		<script src="__STATIC__/home/js/moblie/mui.min.js"></script>
		<script src="__STATIC__/home/js/moblie/reg.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
			reg_moblie.init()
		</script>
		<script>
            function buttonCountdown($el, msNum, timeFormat) {
                var text = $el.data("text") || $el.text(),
                    timer = 0;
                $el.prop("disabled", true).addClass("disabled")
                    .on("bc.clear", function () {
                        clearTime();
                    });

                (function countdown() {
                    var time = showTime(msNum)[timeFormat];
                    $el.text(time + '后失效');
                    if (msNum <= 0) {
                        msNum = 0;
                        clearTime();
                    } else {
                        msNum -= 1000;
                        timer = setTimeout(arguments.callee, 1000);
                    }
                })();

                function clearTime() {
                    clearTimeout(timer);
                    $el.prop("disabled", false).removeClass("disabled").text(text);
                }

                function showTime(ms) {
                    var d = Math.floor(ms / 1000 / 60 / 60 / 24),
                        h = Math.floor(ms / 1000 / 60 / 60 % 24),
                        m = Math.floor(ms / 1000 / 60 % 60),
                        s = Math.floor(ms / 1000 % 60),
                        ss = Math.floor(ms / 1000);

                    return {
                        d: d + "天",
                        h: h + "小时",
                        m: m + "分",
                        ss: ss + "秒",
                        "d:h:m:s": d + "天" + h + "小时" + m + "分" + s + "秒",
                        "h:m:s": h + "小时" + m + "分" + s + "秒",
                        "m:s": m + "分" + s + "秒"
                    };
                }
                return this;
            }



//            $('#mobileno_code_a').click(function () {
//                buttonCountdown($(this), 1000 * 60 * 1, "ss");
//            });
            function yzm() {
				var mobile = $("#mobileno").val();
				$.ajax({
					url:"<?php echo url('index/index/sendMobileCode'); ?>",
					type:"POST", //GET
					async:false, //或true，异步请求
					timeout:5000,
					data:{'mobile':mobile},
					dataType:"json",
                    success:function(data){
					    console.log(data);
                        if(data.code ==0){
                            alert(data.msg);
                        }
                        if(data.status==1){
//                            console.log($(this));
                			buttonCountdown($('#mobileno_code_a'), 1000 * 60 * 1, "ss");
                        }

                    },
					error:function () {
						console.log("错误");
                    }
				})
            }
		</script>
	</body>
</html>