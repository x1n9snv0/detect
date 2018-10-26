<?php
/**
 * Created by PhpStorm.
 * User: Autumn
 * Date: 10/24/2018
 * Time: 10:46
 */
?>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-1 dt-side-menu">
            <ul class="dt-menu">
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="general") echo " active";?>">
                    <a href="?action=general">
                        <i class="iconfont icon-barchart"></i>
                        <p class="dt-menu-text">统计总览</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="pagestat") echo " active";?>">
                    <a href="?action=pagestat">
                        <i class="iconfont icon-filesearch"></i>
                        <p class="dt-menu-text">页面统计</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="useragent") echo " active";?>">
                    <a href="?action=useragent">
                        <i class="iconfont icon-liulanqi"></i>
                        <p class="dt-menu-text">访客代理</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="system") echo " active";?>">
                    <a href="?action=system">
                        <i class="iconfont icon-windows"></i>
                        <p class="dt-menu-text">操作系统</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="screensize") echo " active";?>">
                    <a href="?action=screensize">
                        <i class="iconfont icon-pingmufangda"></i>
                        <p class="dt-menu-text">屏幕尺寸</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="searchengine") echo " active";?>">
                    <a href="?action=searchengine">
                        <i class="iconfont icon-search"></i>
                        <p class="dt-menu-text">搜索引擎</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="statcode") echo " active";?>">
                    <a href="?action=statcode">
                        <i class="iconfont icon-code"></i>
                        <p class="dt-menu-text">统计代码</p>
                    </a>
                </li>
                <li class="dt-menu-item crosslineletfright<?php if($_GET["action"]=="settings") echo " active";?>">
                    <a href="?action=settings">
                        <i class="iconfont icon-shezhi"></i>
                        <p class="dt-menu-text">我的设置</p>
                    </a>
                </li>
            </ul>
            <div class="dt-side-copyright">
                <p>Copyright &copy; 2018</p><p>x1n9snv0</p>
            </div>
        </div>
    </div>
</section>