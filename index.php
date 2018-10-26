<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 11:38
 */
session_start();
include "include/sys.config.php";
include "include/sys.function.php";
include "include/get.cookie.php";

if (!file_exists("install/install.lock")) goto_url("install/index.php");

$action =  isset($_REQUEST["action"]) ? chkstr($_REQUEST["action"], 1) : "";

include "include/index.function.php";
if ($_SESSION["dt_user"] == ""){
    //TODO: Add user login and register page
    include "templates/default/index.php";
}else{
    goto_url("user.php");
}
?>
