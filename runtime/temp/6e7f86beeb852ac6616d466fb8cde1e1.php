<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\WWW\feichangcelue/application/index\view\ucenter\mobile\re_tip.html";i:1541658793;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>尚牛在线</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
		<style type="text/css">
			*{-webkit-user-select: text;user-select: text;}
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
			/* 多图片上传样式 */
			.upload_img{
    width: 90%;
    padding: 0 .47rem;
    box-sizing: border-box;
    margin-bottom: .5rem;
	margin: 1.5rem;
}
.upload_img p{
    font-size: .32rem;
    color: #333;
    margin-bottom: .2rem;
}
.upload_img ul{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}
.upload_img .img_box_li{
    position: relative;
    margin-right: 10px;
    margin-bottom: 10px;
    width: 2.37rem;
    height: 1.96rem;
}
.upload_img .img_box_li img{
    width: 100%;
    height: 100%;
}
.upload_img .img_box_li button{
    position: absolute;
    top: 0;
    right: 0;
    width: .4rem;
    height: .4rem;
    transform: translate(50%,-50%);
    border-radius: 50%;
    text-align: center;
    line-height: .4rem;
    background-color: rgba(0, 0, 0, .6);
    font-size: .36rem;
    color: #fff;
    border: 0;
    padding: 0;
}
.upload_img .upload_input{
    position: relative;
    width: 1.37rem;
    height: .96rem;
    border: 1px dashed #c5c5c5;
    border-radius: 5px;
    box-sizing: border-box;
}
.upload_img .upload_input a{
    position: absolute;
    top: 0;
    left: 0;
    width: .64rem;
    height: .64rem;
    transform: translate(50%,15%);
}
.upload_img .upload_input a img{
    width: 100%;
    height: 100%;
}
.upload_img .upload_input input{
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 99;
    opacity: 0;
    filter: alpha(opacity=0);
}
#submit{
	color: #fff;
    border: 1px solid #007aff;
    background-color: #007aff;
}
		</style>
	</head>
<!--个人中心-->
	<body class="person_body">   
		<header class="mui-bar mui-bar-nav bg_fff">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.back(-1)"></a>
		    <h1 class="mui-title">账户充值</h1>
		</header>
		<div class="mui-content">
		    <div class="pay_title">第一步：请复制或牢记我们的支付宝账号</div>
		    <!--<section class="sec1 bg_fff mui-clearfix">-->
		    	<!--<img class="mui-pull-left mui-col-xs-2" src="../public/static/home/img/moblie/Apay.png"/>-->
		    	<!--<div class="text mui-pull-left mui-col-xs-9">-->
		    		<!--<p>支付账号：<span class="copy" id="copyText">sm00009@163.com</span></p>-->
		    		<!--<p> 深圳市尚美时尚产业投资管理有限公司</p>-->
		    		<!--<p class="zhuyi">注：请务必在转账备注中填写注册手机号 这样方便我们多重信息确认你的汇款</p>-->
		    	<!--</div>-->
		    	<!--<a id="copy_btn" class="copy mui-pull-right mui-col-xs-1" href="javascript:;">复制</a>-->
		    <!--</section>-->
				<section>
					<div style="width: 17rem; margin: 0 auto;">
					<img src="__STATIC__/home/img/moblie/Apay.jpg" alt="">
					</div>
			
						<p style="text-align: center; color: #333;" >因对公帐户核对帐目，现由子公司代收，给您造成不便 我们深表谦意</p>
					
				</section>


			<!--<form action="" method="post">-->
				<ul class="form-list" style="margin-top: 20px;">
					<li>
						<span class="title">金额:</span>
						<span class="content"><input type="text" name="amount" id="amount" value="" /></span>
					</li>
					<li>
						<span class="title" style="vertical-align: 40px;">说明:</span>
						<span class="content"><textarea rows="2" cols="60" name="instructions" id="instructions"></textarea></span>
					</li>
					<li>
						 <span class="title">支付宝账号:</span>
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
				
			<!--</form>-->




			 <!--<div class="pay_title">第二步：手机打开支付宝，快速转账</div>-->
		    <!--<section class="sec2 bg_fff">-->
		    	<!--<img src="../public/static/home/img/moblie/ali-pay.png"/>-->
		    <!--</section>-->
		    <!--<p class="over_p mui-text-center bg_fff">完成后，请到个人中心查看<a href="../ucenter/home.html">账户余额</a></p>-->
			<!--<a type="button" class="ml_btn mui-btn mui-btn-block" href="https://ds.alipay.com/?from=mobilecodec&scheme=alipays%3A%2F%2Fplatformapi%2Fstartapp%3FsaId%3D10000007%26clientVersion%3D3.7.0.0718%26qrcode%3Dhttps%253A%252F%252Fqr.alipay.com%252Fa6x061714walnkq3lfptl18%253F_s%253Dweb-other">去转账</a>-->

			<p class="mui-text-center font12 re_p1">请在上方填写对应的凭证</p>
			<p class="mui-text-center re_p2">到账时间</p>
			<p class="mui-text-center font12 re_p3">08：45-17:00（30分钟内到账） 17:00以后（次日09:30到账）</br> 如急需到账，请电话 <a href="javascript:void(0);" target="_blank">联系客服</a></p>
		
		
		
		
		</div>
	
		
		<!---js---->
		<script src="../public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
		<script src="../public/static/home/js/moblie/mui.min.js"></script>
		<script src="../public/static/home/js/moblie/clipboard.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})

					var clipboard = new Clipboard('#copy_btn', {
				        text: function() {
				            return 'sm00009@163.com';
				        }
				    });
				
				    clipboard.on('success', function(e) {
				        mui.toast('复制成功！')
				    });
				
				    clipboard.on('error', function(e) {
				        mui.toast('此浏览器不支持自动复制！请手动输入！');
				    });
	


			
    
		</script>
	 
	 <!-- 图片上传js -->
	<!-- <script type="text/javascript">
	 	// 删除图片
        function removeImg(obj){
            $(obj).parent().remove();
        }
        // 上传图片
        $(function(){
            $('#myfile').change(function(){
                var objUrl = [],
                    str = '';
                var len =  this.files.length;
                for(var i = 0; i < len; i++){
                    // 存地址
                    objUrl.push(getObjectURL(this.files[i]));
                }
                $.each(objUrl, function(idx, val){
                    str += '<li class="img_box_li">\
                            <img src="'+val+'">\
                            <button onclick="javascript:removeImg(this);" class="close_img">×</button>\
                        </li>'
                })
                $('.upload_input').before(str);
            })
            // 在浏览器上预览本地图片
            function getObjectURL(file) {
                var url = null;
                if(window.URL != undefined) { // mozilla(firefox)
                    url = window.URL.createObjectURL(file);
                } else if(window.webkitURL != undefined) { // webkit or chrome
                    url = window.webkitURL.createObjectURL(file);
                }
                return url;
            }
        });
	 </script>
	 -->
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
                      mui.alert("请输入使用的支付宝账号");
                      return;
                  }
				$.ajax({
					type: "post",
					url: "<?php echo url('index/Ucenter/getInformationAlipay'); ?>",
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
