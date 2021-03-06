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
    <link rel="stylesheet" href="/Application/Home/View/Static/css/interaction.css">
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="/Public/bower_components/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <!--B3-->
    <script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/Application/Home/View/Static/js/nav.js"></script>
    <script>
        $(function() {
            $( "#interaction-subnav" ).tabs();
            $( "#second-tab" ).tabs();
            $( "#emialShow" ).hide();
            $("#showEmial").click(function() {
                $( "#emialShow" ).toggle( "blind" );
            });
            //            激活选项卡
            $('#subnavChange').children().each(function(index) {
                $(this).click(function () {
                    $( "#interaction-subnav" ).tabs("option", "active", index)
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
<div id="interaction-subnav">
    <!--banner图-->
    <div class="container-fluid sub-banner">
        <div class="container">
            <img src="/Static/img/banner-3.jpg" class="imgMiddle img-responsive " alt="">
            <div class="hTitle col-xs-offset-2 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-4 col-lg-8">
                <h1>
                    分享互动
                </h1>
            </div>
        </div>
    </div>
    <!--副导航-->
    <div  class="sub-navbar container-fluid">
        <div class="container">
            <ul class="row">
                <li class="col-sm-2"><a href="#interaction-one">电影分享</a></li>
                <li class="col-sm-2"><a href="#interaction-two">学生作品</a></li>
                <li class="col-sm-2"><a href="#interaction-three">教育随想</a></li>
                <li class="col-sm-2"><a href="#interaction-four">教育资讯</a></li>
                <li class="col-sm-2"><a href="#interaction-five">Emial订阅</a></li>
                <li class="col-sm-2"><a href="#interaction-six">假期营会</a></li>
            </ul>
        </div>
    </div>
    <!--内容一-->
    <div class="container-fluid section-one" id="interaction-one">
        <div class="container">
            <div class="one-title">
                <h2>电影分享</h2>
            </div>
            <!--正文-->
            <div class="content-left col-sm-10">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/move1.jpg">
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <h3>弱点</h3>
                                <p>
                                    窗明几净、精致餐点、其乐融融，对于住在田纳西州的图伊一家，这样温馨的生活仿佛是与生俱来的事情。妻子莉安（桑德拉·布洛克）温柔贤惠，丈夫西恩（蒂姆·麦格劳）事业有成，还有一双听话乖巧的儿女，更在杯觥交错中深受上流社会欢迎。......
                                    <br>
                                    <span>2013-06-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/move2.png">
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <h3>阿甘正传</h3>
                                <p>
                                    天空中，一根羽毛随风飘舞，飘过树梢，飞向蓝天……最后，它落在福雷斯·甘的脚下，阿甘把它夹进自己最喜欢的书中，他正坐在 萨凡纳Savannah州的一个长椅上，向同坐等公车的路人滔滔不绝地诉说着自己一生的故事——......<br>
                                    <span>2013-06-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/move3.jpg">
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <h3>面对巨人</h3>
                                <p>
                                    喜欢看到听到影片中有这样的镜头：妻子深夜醒来，看到丈夫在灯下阅读圣经，然后她跪下祷告。一个学校的老人，每次经过队员的换衣间，都会摸着孩子们的衣柜，一个个的为他们祷告。老人拿着圣经来跟教练说：神让我来跟你说，神开的门无人能关，神关的门无人能开，这是启示录中的话。......<br>
                                    <span>2013-06-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/move4.jpg" alt="梦想">
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <h3>消防员</h3>
                                <p>
                                    在熊熊大火中奋不顾身的烈火英雄卡利波，在工作中的座右铭是：“永远不要把同伴抛在后面”。许多次，卡利波为了保护战友都冒着生命的危险。但是，他这句格言却没有应用在妻子的身上。......<br>
                                    <span>2013-06-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/move5.jpg">
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <h3>勇气</h3>
                                <p>
                                    我们每一位作为父亲的人，都要努力融入到孩子们的生活中去，除了供养他们之外，父亲更应该陪伴孩子的一生。作为父亲必须爱自己的孩子，并获得孩子的信任，保护他们，教导他们，教她们坚守正直的品质，尊重他人，让他们成长为有责任心有爱心的成年人。......<br>
                                    <span>2013-06-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-right col-sm-2">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-xs-12 ">
                                <div class="titleRight">
                                    <h4>电影排行</h4>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <img src="/Static/img/move1.jpg" class="img-responsive imgauto">
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12">
                                    <li>阿甘正传</li>
                                    <li>弱点</li>
                                    <li>勇气</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-xs-12 ">
                                <div class="titleRight">
                                    <h4>热门电影</h4>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <img src="/Static/img/move5.jpg" class="img-responsive imgauto">
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12">
                                    <li>阿甘正传</li>
                                    <li>弱点</li>
                                    <li>勇气</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容二-->
    <div class="container-fluid section-one" id="interaction-two">
        <div class="container">
            <div class="one-title">
                <h2>学生作品</h2>
            </div>
            <!--页面内容-->
            <div id="second-tab" class="subnav-Tab contentHeight row" style="margin-top: 20px">
                <!--左侧导航-->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <ul>
                        <li><a href="#second_1" class="col-md-12 col-sm-12 col-xs-3">文学作品</a></li>
                        <li><a href="#second_2" class="col-md-12 col-sm-12 col-xs-3">项目作品</a></li>
                    </ul>
                </div>
                <!--右侧内容-->
                <div id="second_1" class="col-md-9 col-sm-9 col-xs-12">
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>职业的色彩——学生作品选2</h3>
                                    <p>
                                        我知道职业的色彩
                                        图书馆管理员是书页的灰色
                                        他们看着每个人在图书馆出入
                                        身上散发着书本与知识的味道......
                                        <br>
                                        <span>2015-03-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>职业的色彩——学生作品选1</h3>
                                    <p>
                                        在孩子们心中，所有的职业都有着专属的色彩。这些多彩的职业是怎样的呢？让我们一起来看看吧。......<br>
                                        <span>2015-03-25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>“最后一片常春藤叶”扩写</h3>
                                    <p>
                                        2015-03-19&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 编辑： [&hellip;]......<br>
                                        <span>2015-03-19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>诗意盎然——学生作品选2</h3>
                                    <p>
                                        孩子们的童年无忧无虑，就像那野地里生长的百合花。在无忧无虑的生活中，天马行空的想象便进入到他们的生活中。如果一个人的头上长满了鲜花，如果可以从这些鲜花来认识一个人，那世界会是怎样的呢？......<br>
                                        <span>2015-03-18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>诗意盎然——学生作品选1</h3>
                                    <p>
                                        鲜花总是带给人美的享受，可如果这些鲜花长在人的身上，长在人的心田呢？......<br>
                                        <span>2015-03-16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="second_2" class="col-md-9 col-sm-9 col-xs-12">
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>F. Scott Fitzgerald</h3>
                                    <p>
                                        F. Scott Fitzgerald is a famous author of influential literatures that has found a place in the list of famous American classics. He usually obviates emotionality and tries to hide his as well. Fitzgerald is also considered as an obstinate person.......
                                        <br>
                                        <span>2015-01-05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>湖州</h3>
                                    <p>
                                        算不上繁荣，又不失繁华；算不上幽静，却又不失清闲。湖州，并不是个出名的地方，但却有自己独特的风韵。……不过一会功夫，一篮子便是满满的棱角，把两角一掰，白白的“肉”便出来，嚼着生菱，吧唧吧唧的，可是香脆。......
                                        <br>
                                        <span>2014-11-13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>The Zhou Dynasty</h3>
                                    <p>
                                        The Zhou Dynasty was the ideal kingdom in the mind of the Chinese people, and also, it has many amazing historical stories from the dynasty.......
                                        <br>
                                        <span>2014-11-13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="one-content">
                        <div class="row">
                            <a href="">
                                <div class="col-sm-12">
                                    <h3>The Importance of Sleep</h3>
                                    <p>
                                        Everyone needs sleep as much as they need food and water. Sleep is very important for one’s health. According to Teens and Sleep, “Sleep is food for the brain.”......
                                        <br>
                                        <span>2014-11-05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--内容三-->
    <div class="container-fluid section-one" id="interaction-three">
        <div class="container">
            <div class="one-title">
                <h2>教育随想</h2>
            </div>
            <div class="content-left col-sm-9">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>开学寄语:找到目标</h3>
                                <p>
                                    亲爱的书院同事们，家长们：作为一起同工的我们，开学之际，有很多话想跟大家说，就借着这篇文章做个引子，说出我的一些感受吧。因为我是很用心说出每一个字，也恳请大家用心的去听好吗？期待发自您内心的回应。<br>
                                    <span>2014-02-17&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">PISA上海第一的思考</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/test1.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    这个PISA不是意大利馅饼，也不是斜塔，而是OECD组织的国际学生评估项目，评估对象是各国15岁的学生，项目为数学、阅读和科学（理科）
                                    <br>
                                    <span>2014-01-03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">孩子需要什么样的教育？</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/jiaoyu.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    转自：http://berlinfang.blog.163.com/blog/static/116670716 [&hellip;]......
                                    <br>
                                    <span>2013-12-06&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">美国明星教师的班规</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/At.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    罗恩克拉克，出生在北卡罗来纳州，大学毕业后周游列国，23岁开始在家乡的一所乡村学校任教，5年后来到纽约市哈莱姆区，取得巨大的教育成功。他曾3次受美国总统及夫人邀请带学生作客白宫......
                                    <br>
                                    <span>2013-12-04&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">萨缪尔美文《青春》</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/youth.jpeg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    青春不是年华，而是心境；青春不是桃面、丹唇、柔膝，而是深沉的意志、恢宏的想像、炽热的感情；青春是生命的深泉涌流。青春气贯长虹，勇锐盖过怯弱，进取压倒苟安。如此锐气，二十后生有之，六旬男子则更多见。......
                                    <br>
                                    <span>2013-11-11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">学习犹太人的教育智慧</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/sunrise.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    犹太人的聪明才智举世闻名，全球1300万犹太人，占世界人口的千分之二，却获得了29%的诺贝尔奖。其杰出人才分布在文明的各个领域：大卫·李嘉图、卡尔·马克思、爱因斯坦、弗洛伊德、毕加索、卡夫卡、卓别林、门德尔松、普鲁斯特、茨威格、基辛格......
                                    <br>
                                    <span>2013-09-28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">蕨与竹（中英对照）</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/6940207377_66a23a4ca4_z.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    But just 6 months later the bamboo rose to over 100 feet tall. It had spent the five years growing roots. Those roots made it strong and gave it what it needed to survive. I would not give any of my creations a challenge it could not handle.&#8221;......
                                    <br>
                                    <span>2013-09-26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">&#8220;聆听&#8221;对幼儿极其重要</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/7591272008173122_1.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    有点教育的小感悟和大家分享。抛砖引玉，希望听到您的回应。......
                                    <br>
                                    <span>2013-09-23&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 comments</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">生命的成熟</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/221.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    前些时间读蒋勋的说唐诗、宋词，文笔一如即往的恬淡隽永。在物质丰富的富饶监狱里，不缺狂欢，不少贪欢，却少了清淡的欢愉。一个好的作家，无论用什么样的表现形式，对人性是了解的，也是尊重的。......
                                    <br>
                                    <span>2013-07-05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <h3 class="col-xs-12">在这个怀疑的时代，我们更需要信仰</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive imgauto"  src="/Static/img/Weiming_Lake1.jpg">
                            </div>
                            <div class="col-sm-10">
                                <p>
                                    摘要：2012年的毕业季已经到来，本文是北大中文系教授卢新宁在2012年毕业典礼上的致辞。谢谢你们叫我回家。让我有幸再次聆听老师的教诲，分享我亲爱的学弟学妹们的特殊喜悦。......
                                    <br>
                                    <span>2013-06-27&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
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
                                    <h4>热门点击</h4>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <img src="/Static/img/jiaoyu.jpg" class="img-responsive imgauto">
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12" style="padding-right: 0">
                                    <li>孩子需要什么样的教育？</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容四-->
    <div class="container-fluid section-one" id="interaction-four">
        <div class="container">
            <div class="one-title">
                <h2>教育资讯</h2>
            </div>
            <div class="content-left col-sm-9">
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>一位多年带班班主任给家长的16条建议</h3>
                                <p>
                                    来源：中国教育报 各位尊敬的家长，以下建议只是建议，但相信他适用于大部分学生，个别难对付的除外，个别太优秀的也 [&hellip;]......
                                    <br>
                                    <span>2014-09-26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>百本英文图书免费在线阅读</h3>
                                <p>
                                    &nbsp; &nbsp; &nbsp; &nbsp; 如果说上图中的英文绘本都可以免费送给大家，你们会不会很 [&hellip;]......
                                    <br>
                                    <span>2014-06-30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>夫妻恩爱:最好的礼物</h3>
                                <p>
                                    家庭的核心是什么？谁是你一生中最难以割舍的人？父母离婚对孩子的伤害和影响有多大？我们该如何守护我们的家园？ 父 [&hellip;]......<br>
                                    <span>2014-06-03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>请不要夸孩子漂亮或帅气</h3>
                                <p>
                                    【转】 请不要夸孩子漂亮，要夸赞她的礼貌和微笑 有一位到北欧某国做访问学者的人曾经历过这样一件事： 周末，她到 [&hellip;]......
                                    <br>
                                    <span>2014-05-30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>俞敏洪谈家庭教育</h3>
                                <p>
                                    《转载》 &ldquo;我是个农民家的孩子，父母不认字，我考进了北大。能否教出好孩子，和本人知识结构没有任何关 [&hellip;]......
                                    <br>
                                    <span>2014-05-26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>适合3-15岁孩子的原版英语网站</h3>
                                <p>
                                    ​1.北美家喻户晓的一个幼儿、少儿网站。内容相当丰富。http://pbskids.org/2.英语BBC网站，有很多的FLASH动画，包括大家非常熟悉的天线宝宝。http://www.bbc.co.uk/cbeebies/......
                                    <br>
                                    <span>2014-03-04&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>广州科普亲子游的好去处</h3>
                                <p>
                                    想带孩子去了解科学，广州及周边有哪些科普场馆呢？植物馆？图书馆？收藏了！......
                                    <br>
                                    <span>2014-03-04&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>漫谈二流大学</h3>
                                <p>
                                    浙大新校长杨卫在接受《大学周刊》访问时，对大学发展，谈了些相当精辟的看法。他说：“以美国大学为例，它们是三流学校数论文篇数，二流学校数论文的影响因子，一流学校不对论文发表提要求，而顶尖的大学非常强调教学......
                                    <br>
                                    <span>2014-01-15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>推荐书籍《中国教育问题调查》</h3>
                                <p>
                                    对目前教育的问题认识越深刻，越能帮助我们看清教育的本质，书中参考了大量教育学的经典书籍，部分篇章也反观中国古代的教育理念和文化传统。非常值得关注教育的家长一读！......
                                    <br>
                                    <span>2014-01-06&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>《如何阅读一本书》</h3>
                                <p>
                                    现代人有一种感觉，就是读书这件事好像已经不再像以往那样必要了。因为我们有电视，网络，手机，平板电脑，这些工具为我们提供资讯，为我们节省了时间。......
                                    <br>
                                    <span>2013-11-01&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
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
                                    <h4>热门点击</h4>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <ul class="col-xs-12" style="padding-right: 0">
                                    <li>如何阅读一本书</li>
                                    <li>夫妻恩爱:最好的礼物</li>
                                    <li>俞敏洪谈家庭教育</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--内容五-->
    <div class="container-fluid section-one" id="interaction-five">
        <div class="container">
            <div class="one-title">
                <h2>Emial订阅</h2>
            </div>
            <div class="one-content">
                <p>
                    所以关注在家书院的朋友们，大家好！<br><br>
                    如果您想及时了解在家书院的详细情况和最新动态，不错过书院各样最新活动，培训，讲座等等信息。<br><br>
                    现在书院推出Email订阅功能，每月我们可以给您发送一份邮件，列出书院网站的最近更新内容，也欢迎您提供宝贵的改进意见。我们渴望做的更好，谢谢！<br><br>
                    所有邮件都是通过密送方式发送，所以您的邮箱地址是安全的。<br><br>
                </p>
                <h4><a id="showEmial">点击查看往期回顾>></a></h4>
            </div>
            <div class="col-sm-10 col-sm-offset-1" id="emialShow">
                <div class="one-content">
                    <div  class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>欢迎参加在家书院AHA英文夏令营，时间2015年7月13日-8月14日</h3>
                                <p>
                                    全日制国际学校&ldquo;在家书院&rdquo;今年暑假照例开办&ldquo;夏季学校&rdquo;，让您的 [&hellip;]......
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
                            <div class="col-sm-12">
                                <h3>把童话拉进现实——DIY的装扮日2</h3>
                                <p>
                                    &nbsp; &nbsp; 上周五，AHA的疯狂装扮日让师生们都大大尽兴了一把。今天，就让小编带您走进装扮日的 [&hellip;]......
                                    <br>
                                    <span>2015-06-10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>AHA STORIES——童趣篇3</h3>
                                <p>
                                    1年级的小孩子太小，不懂得如何打扫卫生？你想太多了，他们打扫卫生的热情可是空前高涨哦。......
                                    <br>
                                    <span>2014-11-07&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div  class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>露营周来啦！</h3>
                                <p>
                                    露营相册链接 亲爱的家长们，学校的露营活动周即将到来啦！待到度过美美的十一假期后，再来一次野外露营，是不是很激 [&hellip;]......
                                    <br>
                                    <span>2014-09-26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>2014年1-2月更新内容</h3>
                                <p>
                                    特别推荐：2014年开学寄语:找到目标&nbsp; &nbsp; 书院通告&nbsp;更新： 1、在家书院法语 [&hellip;]......
                                    <br>
                                    <span>2014-02-18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>2013年11-12月更新内容</h3>
                                <p>
                                    &nbsp; 书院通告&nbsp;更新： 1、2014年AHA-BJU国际教育体系老师培训课程 2、鲍琼斯大学 [&hellip;]......
                                    <br>
                                    <span>2014-02-18&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>2013年9-10月更新内容</h3>
                                <p>
                                    11月3日，书院将参与 第12届国际美食节，点击查看详情，欢迎您和孩子一起参加, Let&#8217;s have food and fun together! 书院通告 更新：专题讲座：求学与求道-教育本质与学术精神......
                                    <br>
                                    <span>2013-10-29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="one-content">
                    <div class="row">
                        <a href="">
                            <div class="col-sm-12">
                                <h3>2013年9月更新内容</h3>
                                <p>
                                    栏目、功能更新： 1、增加了&nbsp;媒体报道&nbsp;专栏，可查看媒体对于书院的相关报导。 2、增加了&#038; [&hellip;]......
                                    <br>
                                    <span>2013-10-15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No comment</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容六-->
    <div class="container-fluid section-one" id="interaction-six">
        <div class="container">
            <div class="one-title">
                <h2>假期营会</h2>
            </div>
            <div class="one-content">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <img src="/Static/img/holiday.jpg" class="img-responsive" style="margin: 0 auto" alt="">
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