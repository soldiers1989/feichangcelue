<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\feichangcelue/application/user/view/admin/publics\signin.html";i:1533196075;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="zh"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>后台登录</title>

        <meta name="description" content="">
        <meta name="author" content="caiweiming">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="__ADMIN_IMG__/favicons/favicon.ico">

        <link rel="icon" type="image/png" href="__ADMIN_IMG__/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="__ADMIN_IMG__/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="__ADMIN_IMG__/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="__ADMIN_IMG__/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="__ADMIN_IMG__/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="__ADMIN_IMG__/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="__ADMIN_IMG__/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="__ADMIN_IMG__/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="__ADMIN_IMG__/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="__ADMIN_IMG__/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="__ADMIN_IMG__/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="__ADMIN_IMG__/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="__ADMIN_IMG__/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="__ADMIN_IMG__/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->


        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="__LIBS__/sweetalert/sweetalert.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="__ADMIN_CSS__/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="__ADMIN_CSS__/oneui.css">
        <link rel="stylesheet" href="__ADMIN_CSS__/dolphin.css">

        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- login Content -->
        <div class="bg-white pulldown">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- login Title -->

                            <!-- END login Title -->

                            <!-- login Form -->
                            <form class="js-validation-login form-horizontal push-30-t signin-form" name="signin-form" action="<?php echo url('signin'); ?>" method="post">
                                <div class="form-group">
                                    <label class="col-xs-12" for="login-username">用户名</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" id="login-username" name="username" placeholder="请输入您的用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12" for="login-password">密码</label>
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" id="login-password" name="password" placeholder="请输入您的密码">
                                    </div>
                                </div>
                                
                                <?php echo hook('signin_captcha'); ?>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="remember-me"><span></span> 7天内自动登录?
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="">忘记密码?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-block btn-primary" type="submit">登 录</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END login Content -->

        <!-- login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; DolphinPHP 1.0</small>
        </div>
        <!-- END login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="__ADMIN_JS__/core/jquery.min.js"></script>
        <script src="__ADMIN_JS__/core/bootstrap.min.js"></script>
        <script src="__ADMIN_JS__/core/jquery.slimscroll.min.js"></script>
        <script src="__ADMIN_JS__/core/jquery.scrollLock.min.js"></script>
        <script src="__ADMIN_JS__/core/jquery.appear.min.js"></script>
        <script src="__ADMIN_JS__/core/jquery.countTo.min.js"></script>
        <script src="__ADMIN_JS__/core/jquery.placeholder.min.js"></script>
        <script src="__ADMIN_JS__/core/js.cookie.min.js"></script>
        <script src="__ADMIN_JS__/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="__LIBS__/jquery-validation/jquery.validate.min.js"></script>
        <script src="__LIBS__/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="__LIBS__/sweetalert/sweetalert.min.js"></script>

        <!-- Page JS Code -->
        <script src="__ADMIN_JS__/dolphin.js"></script>
        <?php echo hook('signin_footer'); ?>
        <script>
            $(document).ready(function () {
                $('.signin-form').on('submit', function () {
                    var $data = $(this).serialize();

                    Dolphin.loading();
                    $.post($(this).attr('action'), $data, function (res) {
                        Dolphin.loading('hide');
                        if (res.code) {
                            Dolphin.notify('登录成功，页面即将跳转~', 'success');
                            setTimeout(function () {
                                location.href = res.url;
                            }, 1500);
                        } else {
                            if (res.msg == '验证码错误或失效') {
                                $('#captcha').click();
                            }
                            Dolphin.notify(res.msg, 'danger');
                        }
                    }).fail(function () {
                        Dolphin.loading('hide');
                        Dolphin.notify('服务器错误~', 'danger');
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>