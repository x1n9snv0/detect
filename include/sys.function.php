<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 13:22
 */

function chkstr($paravalue, $paratype){
    if ($paratype == 1) {
        $filter_str = "(and|or)\\b.+?(>|<|=|in|like)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
        if (preg_match("/" . $filter_str . "/is", $paravalue) == 1) {
            echo "传递的参数类型有错误！";
            exit;
        }
        $input_str = str_replace("'", "''", $paravalue);
    } elseif ($paratype == 2) {
        if ($paravalue != "" && is_numeric($paravalue) == false) {
            echo "传递的参数类型有错误！";
            exit;
        } else {
            $input_str = $paravalue;
        }
    } elseif ($paratype == 3) {
        if ($paravalue != "" && (strtotime($paravalue) == false || strtotime($paravalue) == -1)) {
            echo("传递的参数类型有错误！");
            exit;
        } else {
            $input_str = $paravalue;
        }
    }
    return $input_str;
}

function goto_url($url){
    echo "<script> location.href='" . $url . "';</script>";
    exit;
}

function sysmsg($code, $type, $msg){
    return json_encode(array('code'=>$code, 'type'=>$type, 'msg'=>$msg));
}
