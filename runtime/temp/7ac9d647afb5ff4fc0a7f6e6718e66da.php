<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpStudy\WWW\feichangcelue/application/index\view\index\mobile\qqsay.html";i:1539064450;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>尚牛在线</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
    <link href="./public/static/home/css/moblie/login.css" rel="stylesheet" />
</head>
<!--登录-->
<body class="reg_body">
<!--标题-->
<header class="ml_header mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">联系客服</h1>
</header>
<!--主体-->
<div class="mui-content" style="margin: 10px 20px 0;">
	<div style="color: red">请点击右上角通过浏览器打开本页面与客服QQ交流</div>
    <div class="box" style="margin-bottom: 20px">
        <span>客服QQ： </span>
        <a style="display: inline-block;width: 100px; height: 30px" onclick="jia_qq(910605652)"><img width="100%" src="http://wpa.qq.com/pa?p=2:1061525487:51"></a>
    </div>
    <!-- 财务客服 -->
    <div class="box" style="margin-bottom: 20px">
        <span>财务QQ：</span>
        <a style="display: inline-block;width: 100px; height: 30px" onclick="jia_qq(810705652)"><img width="100%" src="http://wpa.qq.com/pa?p=2:1061525487:51"></a>
    </div>

    <!--<div class="box" style="margin-bottom: 20px">-->
        <!--<span>在线客服：</span>-->
        <!--<a style="display: inline-block;width: 100px; height: 30px" href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=1037386&configID=75734&jid=5421328761" >-->
            <!--<img width="100%" src="http://image.baidu.com/search/detail?ct=503316480&z=undefined&tn=baiduimagedetail&ipn=d&word=%E5%AF%B9%E8%AF%9D%E5%9B%BE%E6%A0%87&step_word=&ie=utf-8&in=&cl=2&lm=-1&st=undefined&cs=4000863809,83584609&os=3820416334,1137797793&simid=3312292530,329042696&pn=2&rn=1&di=99547858630&ln=1898&fr=&fmq=1536205818744_R&fm=&ic=undefined&s=undefined&se=&sme=&tab=0&width=undefined&height=undefined&face=undefined&is=0,0&istype=0&ist=&jit=&bdtype=0&spn=0&pi=0&gsm=0&hs=2&objurl=http%3A%2F%2Fimg.25pp.com%2Fuploadfile%2Fsoft%2Fimages%2F2015%2F0808%2F20150808011450574.jpg&rpstart=0&rpnum=0&adpicid=0">-->
        <!--</a>-->
    <!--</div>-->

    <!-- Live800在线客服图标:默认图标[浮动图标]开始-->
    <!--<div style='display:none;'>-->
        <!--<a href='http://www.live800.com'>网页聊天</a>-->
    <!--</div>-->
    <!--<div style='display:none;'>-->
        <!--<a href='http://en.live800.com'>live chat</a>-->
    <!--</div>-->
    <!-- 在线客服图标:默认图标结束-->
</div>
<!--<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/floatButton.js?jid=5421328761&companyID=1037386&configID=75734&codeType=custom">-->
<!--</script>-->
<!-- Live800默认功能代码: 开始-->
<script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/monitor.js?jid=5421328761&companyID=1037386&configID=75733&codeType=custom"></script>
<!-- Live800默认功能代码: 结束-->
<script type="text/javascript">
    var qq_jia = true;
    function jia_qq(data) {
        if (qq_jia) {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
                popwin = window.location.href = "tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=" + data;
            } else {
                // popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin=1061525487&version=1&src_type=web&web_src=oicqzone.com"
                popwin = window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin="+data+"&version=1&src_type=web&web_src=bjhuli.com"
                // popwin="mqqwpa://im/chat?chat_type=wpa&uin="+datas;
                // startActivity(new Intent(Intent.ACTION_VIEW, Uri.parse(popwin)));
                // try{
                //     Intent intent =getPackManager().getLaunchIntentForpacKage("com.tencent.mobileqq");
                // }catch(Exception e){
                //     eprintStackTrace();
                //     ToastUtil.makeshortText(LeagueCreateActivity.this,"请检查是否安装QQ");
                // }

            }
        }
        setTimeout("CloseWebPage()", 3000)
    };
    function CloseWebPage() {
        if (navigator.userAgent.indexOf("MSIE") > 0) {
            if (navigator.userAgent.indexOf("MSIE 6.0") > 0) {
                window.opener = null;
                window.close()
            } else {
                window.open('', '_top');
                window.top.close()
            }
        } else if (navigator.userAgent.indexOf("Firefox") > 0) {
            window.location.href = 'about:blank '
        } else {
            window.opener = null;
            window.open('', '_self', '');
            window.close()
        }
    }
</script>
<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
<script src="./public/static/home/js/moblie/mui.min.js"></script>
<script src="./public/static/home/js/moblie/reg.js"></script>
</body>
</html>