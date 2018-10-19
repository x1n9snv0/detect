<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 15:30
 */

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

    }
}

