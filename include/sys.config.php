<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/19/2018
 * Time: 11:38
 */

$hostname="localhost";
$database="detect";
$username="detect";
$password="lkVXnzILG5bfmETV";
$db = new mysqli($hostname,$username,$password) or die ("无法连接到Mysql主机！");
$db->query("set names 'utf8'");
$db->select_db($database) or die ("无法连接到Mysql数据库！");
$sql = "select * from dt_admin";
$result = $db->query($sql);
$admin = mysqli_fetch_assoc($result);
if (!$admin) {
    echo "无法取得数据库里的系统配置!";
    exit;
}
//系统名称
$systitle = $admin["systitle"];
////背景图片地址
//$bgimgpath = "templet/default/images/bg" . $rsset["skintype"] . ".gif";
////菜单背景图片地址
//$menubgimgpath = "templet/default/images/topmenubg" . $rsset["skintype"] . ".gif";
////表格边框颜色
//$tablebordercolor = getskincolor($rsset["skincolor"], 0);
////表格行的标题背景颜色
//$tableheadbgcolor = getskincolor($rsset["skincolor"], 1);
////字体颜色
//$fontcolor = getskincolor($rsset["skincolor"], 2);
////链接颜色：
//$linkcolor = getskincolor($rsset["skincolor"], 3);
////点过的链接颜色
//$linkovercolor = getskincolor($rsset["skincolor"], 4);

$user_visit_max_restore_num = 100;  //每个用户保留最近访问的个数默认100个
$client_keep_day = 6; //客户端信息最大保留天数,默认6天
$count_keep_day = 365;  //天数统计最大保留天数,默认365天
$hour_keep_day = 6;  //小时统计最大保留天数,默认6天
$msg_keep_day = 6;  //来源统计最大保留天数,默认6天
$search_keep_day = 6; //搜索引擎统计最大保留天数,默认6天
$search_keyword_keepday = 3; //搜索关键字统计最大保留天数,默认3天
$web_keep_day = 3; //页面统计最大保留天数,默认3天
?>