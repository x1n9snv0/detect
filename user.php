<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/23/2018
 * Time: 21:12
 */
session_start();
include "include/sys.config.php";
include "include/sys.function.php";
include "include/get.cookie.php";

if ($_SESSION["dt_user"] == "") {
    if ($_SESSION["dt_user_view"] == "") {
        setcookie("dt_user_cookie", "", time() - 600);
        goto_url("index.php");//如果用户未登录会由此进入index.php
        exit;
    } else {
        $username = $_SESSION["dt_user_view"];
    }
} else {
    $username = $_SESSION["dt_user"];
}
$action =  isset($_REQUEST["action"]) ? chkstr($_REQUEST["action"], 1) : "general";//默认进入统计总览界面
//include "include/index.function.php"; //user.php是由index.php路由而来的，不需要其检测登录等操作 只需要其判断会话中的用户名是否为空
?>
<!DOCTYPE>
<html>
    <?php include $systpl."/header.php";?>
    <body>
        <?php include $systpl."/nav.php";?>
        <?php include $systpl."/user.menu.php"?>
    </body>
</html>