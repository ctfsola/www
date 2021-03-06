<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>在家书院 AT HOME ACADEMY</title>
    <link rel="stylesheet" href="/Public/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/nav.css">
    <link rel="stylesheet" href="/Application/Home/View/Static/css/dynamic.css">
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Application/Home/View/Static/js/nav.js"></script>
    <script>
        $(function() {
            $( "#dynamic-subnav" ).tabs();
            //            激活选项卡
            //            激活选项卡
            $('#subnavChange').children().each(function(index) {
                $(this).click(function () {
                    $( "#dynamic-subnav" ).tabs("option", "active", index);
                });
            });
        });
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--头部-->
<header>
        <div class="nav-top">
            <div class="container">
                <!--左边列表-->
                <ul class="col-md-6 col-sm-5">
                    <li><a href="http://www.octomaster.com">Octomaster</a></li>
                    <li><a href="http://www.chuanke.com/s1316621.html" target="_blank">DLO</a></li>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2253083725&site=qq&menu=yes">QQ留言</a></li>
                    <li><a>校长信箱</a></li>
                </ul>

                <!--中英文切换-->
                <div class="btn-group col-md-2 col-sm-3" data-toggle="buttons">
                    <label class="btn btn-primary qieHan">
                        <input type="radio" name="options" id="option1">中文
                    </label>
                    <label class="btn btn-primary active qieHan">
                        <input type="radio" name="options" id="option2">English
                    </label>
                </div>

                <!--右边搜索栏-->
                <div class="form-group search-box col-md-3 col-sm-3">
                    <div class="input-group input-group1">
                        <input class="form-control form-control1" type="search" placeholder="全站搜索">
                        <div class="input-group-addon ">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <!--左侧边导航栏按钮-->
            <div class="menu-espanso">
                <div id="menu" class="menu"></div>
                <span class="linee linea1"></span>
                <span class="linee linea2"></span>
                <span class="linee linea3"></span>
                <div class="voci-menu">
                    <ul class="sub-navAll1">
                        <?php if(is_array($menu)): foreach($menu as $key=>$vo): ?><a href="<?php echo ($vo["nav_url"]); ?>"><li class="leftNavLi"><?php echo ($vo["nav_name"]); ?></li></a><?php endforeach; endif; ?>
                        <!-- <a href="<?php echo U('Home/Detail/index');?>"><li class="leftNavLi">走进书院</li></a>
                        <a href="<?php echo U('Home/Admitted/index');?>"><li class="leftNavLi">入读书院</li></a>
                        <a href="<?php echo U('Home/Dynamic/index');?>"><li class="leftNavLi">书院动态</li></a>
                        <a href="<?php echo U('Home/Interaction/index');?>"><li class="leftNavLi">分享互动</li></a>
                        <a href="<?php echo U('Home/Website/index');?>"><li class="leftNavLi">AHA旗下活动</li></a> -->
                    </ul>       
                    <ul class="sub-navAll2">
                         <?php if(is_array($sub_menu)): foreach($sub_menu as $key=>$vo): ?><a href="<?php echo ($vo["nav_url"]); ?>"><li class="leftNavLi atwoClick"><?php echo ($vo["nav_name"]); ?></li></a><?php endforeach; endif; ?>
                        <!-- <a href="#"><li class="leftNavLi atwoClick">媒体报道</li></a> -->
                    </ul>         
                </div>
            </div>
            <!--右侧边搜索按钮-->
            <span type="button" id="searchBtn" class="navSearchBtn glyphicon glyphicon-search"></span>
            <div class="searchLan">
                <div class="form-group searchLan11">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="全站搜索">
                        <div class="input-group-addon ">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <!--头部logo-->
                <a class="logo" href="<?php echo U('Home/Index/index');?>">
                    <img src="<?php echo ($web_config['web_logo']); ?>">
                </a>
                <?php $nav_top1 = array_slice($menu_top,0,3); $nav_top2 = array_slice($menu_top,3); ?>
                <div class="nav-listBox">
                    <ul class="nav-list1">
                        <?php if(is_array($nav_top1)): foreach($nav_top1 as $k=>$vo): ?><li>
                                <a href="<?php echo ($vo); ?>"><?php echo ($k); ?></a>
                            </li><?php endforeach; endif; ?>
                        <script>
                        $('.nav-list1').first().addClass('text-center');
                        </script>
                        <!-- <li>
                            <a href="<?php echo U('Home/Detail/index');?>">走进书院</a>
                        </li>
                         -->
                    </ul>
                    <ul class="nav-list2">
                        <?php if(is_array($nav_top2)): foreach($nav_top2 as $k=>$vo): ?><li class="text-center">
                                <a href="<?php echo ($vo); ?>"><?php echo ($k); ?></a>
                            </li><?php endforeach; endif; ?>
                        <!-- 
                        <li>
                            <a href="<?php echo U('Home/Website/index');?>">AHA旗下网站</a>
                        </li> 
                        -->
                    </ul>
                </div>

            </div>
        </nav>
    </header>
<div id="dynamic-subnav">
    <!--banner图-->
    <div class="container-fluid sub-banner">
        <div class="container">
            <img src="/Static/img/banner-2.jpg" class="imgMiddle img-responsive " alt="">
            <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                <h1>
                    书院动态
                </h1>
            </div>
        </div>
    </div>
    <!--副导航-->
    <div  class="sub-navbar container-fluid">
        <div class="container">
            <ul class="row">
                <li class="col-sm-3"><a href="#dynamic-one">书院新闻</a></li>
                <li class="col-sm-3"><a href="#dynamic-two">书院通告</a></li>
                <li class="col-sm-3"><a href="#dynamic-three">书院相册</a></li>
                <li class="col-sm-3"><a href="#dynamic-four">活动视频</a></li>
            </ul>
        </div>
    </div>
    <!--内容一-->
    <div class="container-fluid section-one" id="dynamic-one">
        <div class="container">
            <div class="one-title">
                <h2>书院新闻</h2>
            </div>
            <!--正文-->
            <div class="content-left col-sm-9">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">欢迎加入AHA-BJA国际高中部</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/BJA2-2-128x96.jpg">
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在这里，我们将提供中英双母语的教学环境：孩子们将同BJA的优秀学生一同上课，利用BJU的资源展开适合自己的AP学习计划，课后将享受量身定做的英文补习计划，以及，特设的中文辅导课程。在这里，孩子们将有专门的老师辅导日常的学习和生活，将享受当地社区所提供的家庭般的关怀。可以说，我们，将为国际高中部的孩子们提供一个在外的家，一个可以随时回去的地方。<br>
                                    <span>2016-06-10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">2016年AHA家庭音乐节</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/603570180-128x96.jpg">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本届AHA的家庭音乐节将于本周四（3月24日）下午2：45分正式拉开序幕。我们诚邀各位家长前来参加我们的音乐节，一起欣赏孩子们和部分老师的精彩演出。有意前来的家长，请于3月24日上午10点前同各班班主任预约，我们将为您预留好坐席。<br>
                                    AHA期待您的到来！让我们一同见证孩子们的成长！
                                    <br>
                                    <span>2016-03-23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">在家书院9岁啦</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/20160205lkh194540.jpg">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18日下午三时许，窗外烟雨蒙蒙略透一丝寒意，伴随下课铃响，在家书院孩子们欢聚一堂，纷纷拿出精心准备的材料，以班级为单位开始蛋糕DIY。今天是什么日子呢？原来我们AHA今天9岁了。<br>
                                    <span>2016-03-18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">我们的节日——端午节</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/19-128x96.jpg" alt="梦想">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;农历五月初五，是中国的传统节日——端午。对于双语并重的AHA而言，不仅要庆祝西方的感恩节、圣诞节，中国意蕴浓厚的端午节自然也要隆重纪念一番了。<br>
                                    <span>2015-06-23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">2015年6月15-19日IOWA TEST</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/211.jpg">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IOWA是一系列由美国爱荷华州立大学教育学院所编撰的标准测试，主要测试从幼稚园大班到12年级学生在各领域的学习情况，包括单词、词汇分析、阅读理解能力、听力、英文（语言能力）、数学、社会学和自然科学。
                                    <br>
                                    <span>2015-06-23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">喜爱BJU鲍琼斯大学的八条理由</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/bju-logo-128x96.png" alt="梦想">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;今天中国的父母对于子女的教育常常很纠结，留学还是不留学？去哪个国家留学？学费会不会成为家庭的经济负担？孩子独自在外学习生活，会不会学坏？将来学成归来会不会成为“海待”？
                                    <br>
                                    <span>2015-06-23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">第二届AHA家庭音乐会重磅回归</h3>
                            <div class="col-sm-3">
                                <img class="img-responsive imgauto"  src="/Static/img/528758095-128x96.jpg" alt="梦想">
                            </div>
                            <div class="col-sm-9">
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;君忆否，自去年AHA拉开了家庭音乐会的序幕，这便成为书院的众多传统之一而延续了下来。今年，AHA家庭音乐会在我们的期待之下，终于归来了！
                                    <br>
                                    4月16日的下午4点15分开始，一场音乐的盛宴在书院三楼揭开帷幕。同第一届音乐会不同的是，本届音乐会邀请了大约50名家长前来。台上的孩子们全情投入，台下的家长们也乐在其中。<br>
                                    <span>2015-04-20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-right col-sm-3">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-xs-12 ">
                                <div class="titleRight">
                                    <h4>精彩内容</h4>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!--导航球 -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    </ol>
                                    <!-- 图片 -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="/Static/img/activity2.jpg" style="width: 100%;">
                                        </div>
                                        <div class="item">
                                            <img src="/Static/img/activity1.jpg" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12">
                                    <li>现实中的童话学校--AHA精彩装扮日</li>
                                    <li>把童话拉进现实--DIY的装扮日2</li>
                                    <li>出国求学，你准备好了吗？</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容二-->
    <div class="container-fluid section-one" id="dynamic-two">
        <div class="container">
            <div class="one-title">
                <h2>书院通告</h2>
            </div>
            <!--正文-->
            <div class="content-left col-sm-9">
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3" style="padding-top: 30px">
                            <span class="span_month_announcement_list">06</span>
                            <span class="span_day_announcement_list">10</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>欢迎加入AHA-BJA国际高中部</h3>
                            <p>
                                你是否立志在年少时便成为一名海外“学霸”呢？你是否想真正行走于东西文化之间，感受不一样的“留学”生涯？你是否想同海外的“学霸”们一较高下，同高手“华山论剑”呢?
                                如果你想挑战自我的极限，如果你想冲击美国排名前30名的高校，如果你拥有改变世界的梦想并且想脚踏实地的实现，请加入我们，AHA-BJA国际高中部。
                                <br>
                                <span>2016-06-10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">06</span>
                            <span class="span_day_announcement_list">07</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>2016年5月露营周</h3>
                            <p>
                                AHA，

                                或者说“啊哈”(听到大家都这样称呼你，不知道我是否可以把这个作为你的诸多昵称之一)，近来听说你去了巽寮湾露营。故地重游，是否多了些不一样的小故事呢？<br>
                                <span>2016-06-07</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">01</span>
                            <span class="span_day_announcement_list">04</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>在家书院英文“冬季学校”（2016年1月18-29日）</h3>
                            <p>
                                强劲的英文环境

                                两周的学习中，孩子们每天都将浸泡在英文环境中练习听力和对话。外教和中国老师一起配搭，帮助孩子更快成长。<br>
                                <span>2016-01-04</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">01</span>
                            <span class="span_day_announcement_list">04</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>美国大学探秘之旅</h3>
                            <p>
                                还在学业路上奋斗的你，是否也会偶尔放下手中疾飞的笔，任思绪飞扬，憧憬那看似遥不可及却又近在咫尺的大学校园？听了那么多的大学宣讲课程，你是否想去大洋彼岸亲自揭开她的神秘面纱，一睹芳容，亲见她的丰富多彩？面对扑面而来的大学简介时，你是否会感到迷茫和不知所措？
                                <br>
                                <span>2016-01-04</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">08</span>
                            <span class="span_day_announcement_list">01</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>AHA-BJU体系2015年度第五期教师培训开始报名啦</h3>
                            <p>
                                亲爱的弟兄姊妹，你是否疑惑过现行的教育体制？你是否想成为一个不同的教育者？你是否想同同侪们分享你独特的教育思考？你是否想带领孩子们一起成长？如果你都曾有过这些想法，如果你现在仍在思考这些问题，欢迎你加入我们。<br>
                                <span>2015-08-01</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">07</span>
                            <span class="span_day_announcement_list">20</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>2015年夏AHA在家教育家长培训课程</h3>
                            <p>
                                您是不是打算在家教育孩子，却没有任何头绪和方向，或是苦于找不到好的教材，或是看不见前面的方向，或是找不到志同道合的伙伴，或是有太多的或是……<br>
                                <span>2015-07-20</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">06</span>
                            <span class="span_day_announcement_list">24</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>在家书院2015毕业晚会</h3>
                            <p>
                                学校的持续发展以及学生的健康成长，都离不开专业化的学校管理。 中国缺乏专业校长人才，这次培训班为校长们提供一次非常难得的系统培训， 手把手教您怎样做校长，帮助您建立合乎国际学校标准的学校管理体系。 欢迎现任的学校管理者，以及有意成为校长的教育人士报名参加。<br>
                                <span>2015-06-24</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">06</span>
                            <span class="span_day_announcement_list">23</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>欢迎参加在家书院AHA英文夏令营，时间2015年7月13日-8月14日</h3>
                            <p>
                                全日制国际学校&ldquo;在家书院&rdquo;今年暑假照例开办&ldquo;夏季学校&rdquo;，让您的孩子体会不一样的英文学习。<br>
                                <span>2015-06-23</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <div class="col-sm-2 col-xs-3 text-center" style="padding-top: 30px">
                            <span class="span_month_announcement_list">03</span>
                            <span class="span_day_announcement_list">25</span>
                        </div>
                        <div class="col-sm-10 col-xs-9">
                            <h3>AHA讲座通知——留学美国实用常识，大学留学的选择</h3>
                            <p>
                                本周六3月28日上午10：30分，在家书院邀请美国纽约蓝天教育服务负责人、纽约乃亚克大学招生代表韩梅女士来校，就如何出国留学等问题进行讨论交流。<br>
                                <span>2015-03-25</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right col-sm-3">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-xs-12 ">
                                <div class="titleRight">
                                    <h4>精彩信息</h4>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <!--导航球 -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example" data-slide-to="1"></li>
                                    </ol>
                                    <!-- 图片 -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="/Static/img/p5.jpg" style="width: 100%;">
                                        </div>
                                        <div class="item">
                                            <img src="/Static/img/p3.jpg" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12">
                                    <li>现实中的童话学校--AHA精彩装扮日</li>
                                    <li>把童话拉进现实--DIY的装扮日2</li>
                                    <li>出国求学，你准备好了吗？</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--内容三-->
    <div class="container-fluid section-one" id="dynamic-three">
        <div class="container">
            <div class="one-title" style="margin-bottom: 20px">
                <h2>书院相册</h2>
            </div>
            <div class="one-content">
                <div class="row">
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p1.jpg" >
                            <p class="text_overflow">在家书院2016毕业晚会</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/20160205lkh194540.jpg">
                            <p class="text_overflow">在家书院9岁啦</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p3.jpg">
                            <p class="text_overflow">AHA STORIES—露营篇10（完结篇）</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p4.jpg">
                            <p class="text_overflow">家校联盟的呼声</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p5.jpg">
                            <p class="text_overflow">AHA STORIES—露营篇1</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p6.jpg">
                            <p class="text_overflow">2014AHA10月露营周</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p7.jpg">
                            <p class="text_overflow">AHA2014-2015学年开学日</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p8.jpg">
                            <p class="text_overflow">在家书院2014毕业晚会</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p9.jpg">
                            <p class="text_overflow">2014 AHA-The Wilds营会</p>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3 text-center">
                        <a href="#" class="thumbnail">
                            <img src="/Static/img/p10.jpg">
                            <p class="text_overflow">在家书院2014年5月海边露营</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容四-->
    <div class="container-fluid section-one" id="dynamic-four">
        <div class="container">
            <div class="one-title" style="margin-bottom: 20px">
                <h2>活动视频</h2>
            </div>
            <div class="one-content">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/teach1.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">2014教学视频: G4-Science Class_02</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/concert2.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">2014首届家庭音乐会</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/1.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">2014.10月蛋糕日</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/P1050013.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">2013圣诞晚会剪辑</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/Lecture5.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">家长学堂讲座《求学与求道》</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/bjujietu192.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">BJU鲍琼斯大学介绍短片</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/cover-page_B8B1B1BE.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">美国大学升学到底是怎么回事</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/video-2012B8D0B6F7BDDA.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">2012感恩节</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/video-B1CFD2B5B5E4C0F1_B.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">毕业典礼_毕业授勋 ^_^</p>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <a href="#" class="thumbnail">
                            <div style="position: relative">
                                <img src="/Static/img/video-B1CFD2B5B5E4C0F1_C.jpg" class="img-responsive imgauto" >
                                <div class="videopng"></div>
                            </div>
                            <p class="text_overflow">毕业典礼_葡萄枝传承</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--脚部-->
<div class="sub-footer container-fluid">
    <div class="container">
        <div class="row">
            <p class="col-xs-6 col-sm-6 text-left">
                地址: <?php echo ($web_config['web_address']); ?>&nbsp;&nbsp;<a href="<?php echo ($web_config['web_map']); ?>" target="_blank">点击查看地图</a><br>邮编:<?php echo ($web_config['zip_code']); ?>&nbsp;&nbsp;固话:<?php echo ($web_config['web_phone']); ?> 传真:<?php echo ($web_config['web_fax']); ?><br>
            </p>
            <p class="col-xs-6 col-sm-5 text-right">
                在家书院&nbsp;&nbsp;At Home Academy<br><?php echo ($web_config['web_copyright']); ?>
            </p>
            <div class="col-sm-1 text-right hidden-xs">
                <img src="/Static/img/bottomlogo.gif" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>

</body>
</html>