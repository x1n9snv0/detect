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
        <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_885783_0w5cxf92r8lo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $systpl;?>/css/common/ui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $systpl;?>/css/animate.css">
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $systpl;?>/js/plugin/sea.js"></script>
    </head>
    <body>
        <div id="dt-particles-js">
            <div class="dt-login nodisplay">
                <div class="dt-login-top ">
                    <img src="<?php echo $systpl;?>/images/dt-login.png">
                </div>
                <div class="dt-login-center clearfix">
                    <div class="dt-login-center-img"><i class="iconfont icon-user"></i></div>
                    <div class="dt-login-center-input">
                        <input type="text" name="username" value="" placeholder="请输入您的账户" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的账户'"/>
                        <div class="dt-login-center-input-text">账户</div>
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
            <div class="dt-register">
                <div class="dt-register-top">
                    <div class="dt-register-return"><i class="iconfont icon-fanhui"></i></div>
                    <img src="<?php echo $systpl;?>/images/dt-register-small.png">
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-user"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="username" value="" placeholder="请输入您的账户" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的账户'"/>
                        <div class="dt-register-center-input-text">账户</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-key"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="password" value="" placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'"/>
                        <div class="dt-register-center-input-text">密码</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-check"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="check" value="" placeholder="请确认您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请确认您的密码'"/>
                        <div class="dt-register-center-input-text">密码确认</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-home"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="website" value="" placeholder="请输入您的网站名称" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的网站名称'"/>
                        <div class="dt-register-center-input-text">网站名称</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-location"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="pageurl" value="" placeholder="请输入您的网站地址" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的网站地址'"/>
                        <div class="dt-register-center-input-text">网站地址</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-mail"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="email" value="" placeholder="请输入您的电子邮箱" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的电子邮箱'"/>
                        <div class="dt-register-center-input-text">电子邮箱</div>
                    </div>
                </div>
                <div class="dt-register-center clearfix">
                    <div class="dt-register-center-img"><i class="iconfont icon-phone"></i></div>
                    <div class="dt-register-center-input">
                        <input type="text" name="phone" value="" placeholder="请输入您的手机号码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的手机号码'"/>
                        <div class="dt-register-center-input-text">手机号码</div>
                    </div>
                </div>
                <div class="dt-register-button" id="register">注册</div>
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
