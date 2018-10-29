<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/16/2018
 * Time: 20:57
 */
?>
<!DOCTYPE>
<html lang="zh-CN">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
        <title>登录-<?php echo $systitle;?></title>
        <link rel="stylesheet" media="screen" href="<?php echo $systpl;?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $systpl;?>/css/reset.css">
        <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_885783_k2f5gr4zf3.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $systpl;?>/css/common/ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $systpl;?>/css/animate.css">
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/sea.js"></script>
    </head>
    <body>
        <div id="dt-particles-js">
            <div class="dt-login">
                <div class="dt-login-top">
                    <img src="<?php echo $systpl;?>/images/dt-login.png">
                </div>
                <div class="dt-login-center clearfix">
                    <div class="dt-login-center-img"><i class="iconfont icon-user"></i></div>
                    <div class="dt-login-center-input">
                        <input type="text" name="username" value="" placeholder="请输入您的用户名" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的用户名'"/>
                        <div class="dt-login-center-input-text">用户名</div>
                    </div>
                </div>
                <div class="dt-login-center clearfix">
                    <div class="dt-login-center-img"><i class="iconfont icon-key"></i></div>
                    <div class="dt-login-center-input">
                        <input type="password" name="password" value="" placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'"/>
                        <div class="dt-login-center-input-text">密码</div>
                    </div>
                </div>
                <div class="dt-login-button" id="login">登录</div>
                <div class="dt-register-button" id="register">注册</div>
            </div>
            <div class="dt-register nodisplay">
                <!--TODO:Register-->
            </div>
        </div>
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/particles.min.js"></script>
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/app.js"></script>
        <script type="text/javascript">
            let config = {'base': '/detecting/<?php echo $systpl;?>/js/'};
            seajs.config(config).use(['common/ui/LightTip'], function (LightTip) {
                let username = $("input[name='username']").val();
                let password = $("input[name='password']").val();
                $("#login").click(function () {
                    $.post({
                        url: "?action=user-login",
                        data: {"username": username, "password": password, "cookies_time": 3600},
                        success :function (data) {
                            if (data.code !== 0){
                                $.lightTip.error(data.msg);
                                if (data.code === 1){$("input[name='username']").addClass("animated shake")}
                                if (data.code === 2){$("input[name='username']").addClass("animated shake");$("input[name='password']").addClass("animated shake");}
                                if (data.code === 3){$("input[name='username']").addClass("animated swing")}
                            } else{
                                $.lightTip.success(data.msg);
                                setTimeout("$(location).attr('href', 'user.php')", 3000);
                            }
                        }
                    })
                })
            });
        </script>
    </body>
</html>
