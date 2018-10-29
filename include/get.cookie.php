<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 14:07
 */

if (!isset($_SESSION["dt_user"])) $_SESSION["dt_user"] = "";
if (!isset($_SESSION["dt_user_view"])) $_SESSION["dt_user_view"] = "";
if (!isset($_SESSION["dt_admin"])) $_SESSION["dt_admin"] = "";

if ($_SESSION["dt_user"] == ""){
    if (!isset($_COOKIE["dt_user_cookie"])) $_COOKIE["dt_user_cookie"] = "";
    $dt_user_cookie = chkstr($_COOKIE["dt_user_cookie"], 1);
    if (!empty($dt_user_cookie)){
        $sql = "select username from dt_user where usercode='$dt_user_cookie'";
        $result = $db->query($sql);
        $rs = mysqli_fetch_assoc($result);
        if ($rs["username"] != ""){
            $_SESSION["dt_user"] = $rs["username"];
        }
    }
}
if ($_SESSION["dt_admin"] == ""){
    if (!isset($_COOKIE["dt_admin_cookie"])) $_COOKIE["dt_admin_cookie"] = "";
    $dt_admin_cookie = chkstr($_COOKIE["dt_admin_cookie"], 1);
    if (!empty($dt_admin_cookie)){
        $sql = "select admin from dt_admin where admincode = '$dt_admin_cookie'";
        $result = $db->query($sql);
        $rs = mysqli_fetch_assoc($result);
        if ($rs["admin"] != ""){
            $_SESSION["dt_admin"] = "ok";
        }
    }
}
?>