<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 15:30
 */

if ($action == "user-name-check"){
    $username = chkstr($_POST["username"], 1);
    $sql = "select count(*) from dt_user where username='$username'";
    $result = $db->query($sql);
    $rs = mysqli_fetch_row($result);
    if ($rs[0] > 0){
        exit(sysmsg(1,'error','用户名'.$username.'已存在'));
    }else{
        exit(sysmsg(0, 'success', '用户名'.$username.'可注册'));
    }
}
if ($action == "user-reg-save"){
    $username = chkstr($_POST["username"],1);
    $password1 = chkstr($_POST["password1"],1);
    $password2 = chkstr($_POST["password2"],1);
    $email = chkstr($_POST["email"],1);
    $phone = chkstr($_POST["phone"],1);
    $website = chkstr($_POST["website"],1);
    $pageurl = chkstr($_POST["pageurl"],1);
    $countershow = chkstr($_POST["countershow"], 1);
    if ($admin["regstate"] == 0){
        exit(sysmsg(2, 'error', '系统禁止新用户注册'));
    }
    if ($admin["regadmincheck"] == 0){
        $userstate = 1;
    }else{
        $userstate = 0;
    }
    $sql = "insert into dt_user (username, pwd, pwd_view, email, phone, website, pageurl, adddate, countershow, userstate, otherset, usercode) values ('$username', '$password1', '$password2', '$email', '$phone', '$website', '$pageurl', '" . date("Y-m-d") . "', '$countershow', '$userstate', '', '" . md5("1" . $username . $password1) . "')";
    $db->query($sql);
    if ($admin["regadmincheck"] == 0) {
        $_SESSION["dt_user"] = $username;
        setcookie("dt_user_cookie", 1, time() + 311040000);
        exit(sysmsg(0, 'success', '注册成功'));
    } else {
        exit(sysmsg(0, 'tips', '注册成功，经管理员审核后即可使用'));
    }
}
if ($action == "user-login"){
    $username = chkstr($_POST["username"],1);
    $password = chkstr($_POST["password"],1);
    $cookies_time = chkstr($_POST["cookies_time"],2);
    $sql = "select username,pwd,userstate from dt_user where username='$username'";
    $result = $db->query($sql);
    $rs = mysqli_fetch_assoc($result);
    if ($rs["username"] == "") exit(sysmsg(1,'error','没有此用户'));
    if ($rs["password"] <> md5($password)) exit(sysmsg(2, 'error', '用户名或密码错误'));
    if ($rs["userstate"] == 0) exit(sysmsg(3,'tips', '账号暂停或未通过审核'));
    $_SESSION["dt_user"] = $username;
    $dt_user_cookie = md5("1".$rs["username"].$rs["pwd"]);
    setcookie("dt_user_cookie",$dt_user_cookie, time() + $cookies_time);
    setcookie("dt_cra_cookie",1, time() + 311040000);
    $sql = "update dt_user set usercode='$dt_user_cookie' where username='$username'";
    $db->query($sql);
    exit(sysmsg(0,'success','登录成功'));
}
if ($action == 'admin-login'){
    $adminame = chkstr($_POST["adminame"],1);
    $password = chkstr($_POST["password"],1);
    $cookies_time = chkstr($_POST["cookies_time"],2);
    $sql = "select * from dt_admin where admin = '$adminame'";
    $result = $db->query($sql);
    $rs = mysqli_fetch_assoc($result);
    if ($rs["admin"] == "") exit(sysmsg(1,'error', '没有此用户'));
    if ($rs["pwd"] <> md5($password)) exit(sysmsg(2, 'error', '用户名或密码错误'));
    $_SESSION["dt_admin"] = "ok";
    $dt_admin_cookie = md5("0".$rs["admin"].$rs["pwd"]);
    setcookie("dt_admin_cookie", $dt_admin_cookie, time() + $cookies_time);
    setcookie("dt_cra_cookie",1,time() + 311040000);
    $sql = "update dt_admin set admincode='$dt_admin_cookie'";
    $db->query($sql);
    exit(sysmsg(0, 'success','登录成功'));
}
if ($action == 'user-view-login'){
    $username = chkstr($_POST["username"],1);
    $passview = chkstr($_POST["passview"],1);
    $passview = md5($passview);
    $sql = "select username,pwd_view from dt_user where username='$username'";
    $result = $db->query($sql);
    $rs = mysqli_fetch_assoc($result);
    if ($rs["username"] == "") exit(sysmsg(1,'error', '没有此用户'));
    if ($rs["pwd_view"] <> $passview) exit(sysmsg(1, 'error', '用户名或密码错误'));
    $_SESSION["dt_user_view"] = $username;
    setcookie("dt_user_cookie", 1, time()+311040000);
    exit(sysmsg(0,'success', '登录成功'));
}
