<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">


<head>

    <title>慕课网-程序员的梦工厂</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="慕课网（IMOOC）是IT技能学习平台。慕课网(IMOOC)提供了丰富的移动端开发、php开发、web前端、android开发以及html5等视频教程资源公开课。并且富有交互性及趣味性，你还可以和朋友一起编程。">
    <meta name="keywords" content="慕课网">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform "/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <script type="text/javascript" src="/statics/js/flexible.js"></script>



    <link rel="stylesheet" href="/statics/css/common_e75f96d.css"/>
    <link rel="stylesheet" href="/statics/css/swiper-3.4.2.min_c1e7355.css"/>
    <link rel="stylesheet" href="/statics/css/index_ef9f855.css"/>
</head>
<body>

<header>
    <div class="header clearfix">

        <a href="/index.php" class="logo l">
            <img src="/statics/images/maximum_logo.jpg" alt="">
        </a>

        <?php if($_username) { ?>
        <a href="/index.php" class="right-box r js-header-avator" style="width:1.6rem; font-size:0.4rem;margin-left:0.2rem;">

           <!-- <i class="imwap-Center"></i>-->
            <?php echo $_username;?>
        </a>
        <?php } else { ?>
        <a href="/index.php?m=member&c=index&a=login" class="right-box r js-header-avator"style="width:1.6rem; font-size:0.4rem;margin-left:0.2rem;">  登 录 </a>
        <?php } ?>
        <!--<i class='imwap-search index-search js-index-search'></i>
-->

        <form class="search-box r clearfix js-search-box  "  action="/index.php?m=mooc&c=index&a=search" method="post">
            <div class="l search-input ">
                <input type="text" class="search js-search" name="q" id = "q" value="<?php echo $keyword;?>" placeholder="">
                <div class="search-action l">
                    <a href="javascript:void(0);" class="imwap-close js-clear" style="display: none;"></a>
                    <button class="imwap-search"></button>
                </div>
            </div>
            <a href="javascript:void(0);" class="r cancel js-cancel">取消</a>
        </form>

    </div>
</header>

<div class="search-record js-search-record" style="display: none;">
</div>

<div id="wrapper">
    <div id="middle" class="container" style="margin-top: 1.4rem">

        <section class="header-menu">
            <ul class="clearfix">
                <li class="cur"><a href='/index.php'>首页</a></li>
                <li><a href='/index.php?m=mooc&c=index&a=cate&fid=1'>课程</a></li>

            </ul>
        </section>

        <section class="header-menu fixed">
            <ul class="clearfix">
                <li class="cur"><a href='/index.php'>首页</a></li>
                <li><a href='/index.php?m=mooc&c=index&a=cate&fid=1'>课程</a></li>

            </ul>
        </section>

        <div id="pages-container">
            <!-- banner 轮播 -->
            <section class="banner">
                <div class="swiper-container swiper-container-banner">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/197.html">
                                <img src="//img1.mukewang.com/szimg/5abc64d80001dd2c09000300.jpg">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/203.html">
                                <img src="//img3.mukewang.com/szimg/5ac316be0001e87609000300.jpg">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/187.html">
                                <img src="//img2.mukewang.com/szimg/5acafd1c00013ac909000300.jpg">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/196.html">
                                <img src="//img1.mukewang.com/szimg/5abc651c0001267d09000300.jpg">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/207.html">
                                <img src="//img1.mukewang.com/szimg/5ad40c020001c92509000300.jpg">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="//coding.imooc.com/class/195.html">
                                <img src="//img3.mukewang.com/szimg/5abc645c0001574309000300.jpg">
                            </a>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>


            <section class="mode ccc">
                <p class="tit">
                    <span class="icon icon-0"></span>实战推荐
                    <i class="imwap-arrow_r r"></i>
                    <a href="http://coding.imooc.com" class="r more">更多实战</a>
                </p>


                <div class="imooc-list js-imooc-list clearfix">
                    <!-- 免费 1 实战 2  路径 4 -->
                    <div class="big-box clearfix">


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #5280f1;background: #5280f1 url(//img2.mukewang.com/59c895400001280402400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=197">
                                <h2>PHP</h2>
                                <p class="big-card-title">韩天峰力荐 Swoole入门到实战打造高性能赛事直播平台</p>
                                <div class="big-card-bottom">

                                    ¥299.00


                                    <span class="number"><i class="imwap-peaple"></i>493</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #41b883;background: #41b883 url(//img4.mukewang.com/59c896130001f9d302400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=203">
                                <h2>Vue.js</h2>
                                <p class="big-card-title"> Vue2.5开发去哪儿网App 从零基础入门到实战项目</p>
                                <div class="big-card-bottom">

                                    ¥266.00


                                    <span class="number"><i class="imwap-peaple"></i>347</span>

                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="small-box nosw">


                        <div class="small-card clearfix">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=117">
                                <img data-original="//img1.sycdn.imooc.com/szimg/59eeb21c00012eb205400300-360-202.jpg"
                                     class="small-card-banner l lazy">
                                <div class="l">
                                    <p class="small-card-title">Spring Boot企业微信点餐系统</p>
                                    <div class="small-card-info">


                                        中级 · 2032人在学

                                    </div>

                                    <div class="small-card-price ">

                                        ¥348.00

                                    </div>

                                </div>
                            </a>
                        </div>


                        <div class="small-card clearfix">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=136">
                                <img data-original="//img1.sycdn.imooc.com/szimg/59b8a486000107fb05400300-360-202.jpg"
                                     class="small-card-banner l lazy">
                                <div class="l">
                                    <p class="small-card-title">全网最热Python3入门+进阶 更快上手实际开发</p>
                                    <div class="small-card-info">


                                        初级 · 3816人在学

                                    </div>

                                    <div class="small-card-price ">

                                        ¥366.00

                                    </div>

                                </div>
                            </a>
                        </div>


                        <div class="small-card clearfix">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=176">
                                <img data-original="//img1.sycdn.imooc.com/szimg/5a5ddeda000145b405400300-360-202.jpg"
                                     class="small-card-banner l lazy">
                                <div class="l">
                                    <p class="small-card-title">基于Python玩转人工智能最火框架 TensorFlow应用实践</p>
                                    <div class="small-card-info">


                                        中级 · 802人在学

                                    </div>

                                    <div class="small-card-price ">

                                        ¥299.00

                                    </div>

                                </div>
                            </a>
                        </div>


                    </div>

                </div>

            </section>


            <section class="mode fff">
                <p class="tit">
                    <span class="icon icon-1"></span>新上好课

                    <a href="" class="r more"></a>
                </p>


                <div class="imooc-list js-imooc-list clearfix">
                    <!-- 免费 1 实战 2  路径 4 -->
                    <div class="big-box clearfix">


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #4a95dc;background: #4a95dc url(//img4.mukewang.com/5a4f62780001094502400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=169">
                                <h2>机器学习</h2>
                                <p class="big-card-title">Python3入门机器学习 经典算法与应用</p>
                                <div class="big-card-bottom">

                                    ¥399.00


                                    <span class="number"><i class="imwap-peaple"></i>795</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #ff4545;background: #ff4545 url(//img4.mukewang.com/59c8953300012e3602400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=162">
                                <h2>Java</h2>
                                <p class="big-card-title">Java企业级电商项目架构演进之路 Tomcat集群与Redis分布式</p>
                                <div class="big-card-bottom">

                                    ¥399.00


                                    <span class="number"><i class="imwap-peaple"></i>992</span>

                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="small-box">
                        <div class="swiper-container swiper-container-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/972">
                                            <img data-original="//img2.mukewang.com/5abc6159000142f706000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Python实现线性回归</p>
                                                <div class="small-card-info">


                                                    初级 · 5146人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=201">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5ab9be440001b21f05400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">ZooKeeper分布式专题与Dubbo微服务入门</p>
                                                <div class="small-card-info">


                                                    中级 · 178人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥199.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=206">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5acf37460001aa3405400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Gradle3.0自动化构建技术精讲+实战</p>
                                                <div class="small-card-info">


                                                    中级 · 53人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥199.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                </div>
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=205">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5acc60d80001ef7605400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">HBase+SpringBoot实战分布式文件存储</p>
                                                <div class="small-card-info">


                                                    中级 · 17人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥288.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/974">
                                            <img data-original="//img2.mukewang.com/5ac3418d0001a9b806000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">入门微信小程序开发</p>
                                                <div class="small-card-info">


                                                    初级 · 9767人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=190">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5a9dfab40001bf1005400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">揭秘一线互联网企业 前端JavaScript高级面试</p>
                                                <div class="small-card-info">


                                                    高级 · 311人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥366.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </section>


            <section class="mode ccc">
                <p class="tit">
                    <span class="icon icon-3"></span>新手入门
                    <i class="imwap-arrow_r r"></i>
                    <a href="http://www.imooc.com/topic/xiaochengxu?mc_marking=e417a314a03d64868f37b74caf976b1c&amp;mc_channel=syzt1"
                       class="r more"><span class="original">专题</span>火爆微信小程序开发，只有实用，没有套路！</a>
                </p>


                <div class="imooc-list js-imooc-list clearfix">
                    <!-- 免费 1 实战 2  路径 4 -->
                    <div class="big-box clearfix">


                        <div class="big-card l cl"
                             style="background: #fff url(//www.imooc.com/static/img/andriod/zhiye/web.png) no-repeat right;">
                            <a href="http://class.imooc.com/sc/20">
                                <h2>Web前端攻城狮</h2>
                                <p class="big-card-title" style="color: #FF7900;">前端小白入门</p>
                                <div class="big-card-bottom">

                                    ¥499.00


                                    <span class="step">5步／33课</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cl"
                             style="background: #fff url(//www.imooc.com/static/img/andriod/zhiye/ios.png) no-repeat right;">
                            <a href="http://class.imooc.com/sc/41">
                                <h2>C++攻城狮</h2>
                                <p class="big-card-title" style="color: #04C0CC;">C++零基础入门 热门编程语言 编程入门 二级考试必备</p>
                                <div class="big-card-bottom">

                                    ¥399.00


                                    <span class="step">3步／34课</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #00c7c7;background: #00c7c7 url(//img2.mukewang.com/58afa0d10001a39f02400240.jpg) no-repeat right;">
                            <a href="https://www.imooc.com/learn/975">
                                <h2>动效动画</h2>
                                <p class="big-card-title">MAYA动画入门课-飞机飞行</p>
                                <div class="big-card-bottom">

                                    免费


                                    <span class="number"><i class="imwap-peaple"></i>1458</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cl"
                             style="background: #fff url(//www.imooc.com/static/img/andriod/zhiye/java.png) no-repeat right;">
                            <a href="http://class.imooc.com/sc/43">
                                <h2>Java攻城狮</h2>
                                <p class="big-card-title" style="color: #FF006E;">Java Web强化：SSM框架整合</p>
                                <div class="big-card-bottom">

                                    ¥588.00


                                    <span class="step">3步／18课</span>

                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="small-box">
                        <div class="swiper-container swiper-container-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=71">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/59eeb022000162bc05400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">程序猿的内功修炼，学好算法与数据结构</p>
                                                <div class="small-card-info">


                                                    中级 · 5387人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥166.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://class.imooc.com/sc/18">
                                            <img data-original="//climg.mukewang.com/58c7b92d0001608406000338.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Java零基础入门</p>
                                                <div class="small-card-info">


                                                    3步骤 · 27门课 · 4364人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥299.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/955">
                                            <img data-original="//img.mukewang.com/5a97d4000001d97906000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">ES6快速入门</p>
                                                <div class="small-card-info">


                                                    初级 · 16078人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                </div>
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="http://class.imooc.com/sc/22">
                                            <img data-original="//climg.mukewang.com/58d1f2dc0001eedf06000338.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">PHP从基础语法到原生项目开发</p>
                                                <div class="small-card-info">


                                                    4步骤 · 18门课 · 1062人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥498.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/945">
                                            <img data-original="//img2.mukewang.com/5a72827d0001cb8006000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">SpringBoot+MyBatis搭建迷你小程序</p>
                                                <div class="small-card-info">


                                                    中级 · 20788人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=144">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/59c9b245000143ae05400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">毕设项目 SSM到Spring Boot 从零开发校园商铺平台</p>
                                                <div class="small-card-info">


                                                    初级 · 894人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥299.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </section>


            <section class="commend-ad mode ccc">
                <a href="http://m.imooc.com/appwap/lottery"><img src="//img2.mukewang.com/5a7914ff0001ad3210000350.jpg"
                                                                 title="积分抽奖"></a>
            </section>


            <section class="mode fff">
                <p class="tit">
                    <span class="icon icon-4"></span>技能提升
                    <i class="imwap-arrow_r r"></i>
                    <a href="http://www.imooc.com/topic/bigdata?mc_marking=5f96a45032d727d7634e44a465bb1283&amp;mc_channel=syzt3"
                       class="r more"><span class="original">专题</span>从零开始系统学习大数据，新手教程全攻略</a>
                </p>


                <div class="imooc-list js-imooc-list clearfix">
                    <!-- 免费 1 实战 2  路径 4 -->
                    <div class="big-box clearfix">


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #3093ff;background: #3093ff url(//img3.mukewang.com/59c8959e0001f87902400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=202">
                                <h2>iOS</h2>
                                <p class="big-card-title">新浪微博资深大牛全方位剖析 iOS 高级面试</p>
                                <div class="big-card-bottom">

                                    ¥366.00


                                    <span class="number"><i class="imwap-peaple"></i>81</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #41b883;background: #41b883 url(//img3.mukewang.com/59c896130001f9d302400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=107">
                                <h2>Vue.js</h2>
                                <p class="big-card-title">全网稀缺Vue 2.0高级实战 独立开发专属音乐WebAPP</p>
                                <div class="big-card-bottom">

                                    ¥399.00


                                    <span class="number"><i class="imwap-peaple"></i>2801</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #34ce3a;background: #34ce3a url(//img2.mukewang.com/59cb86f000011f3602400240.jpg) no-repeat right;">
                            <a href="https://www.imooc.com/learn/935">
                                <h2>Node.js</h2>
                                <p class="big-card-title">Vue+Webpack打造todo应用</p>
                                <div class="big-card-bottom">

                                    免费


                                    <span class="number"><i class="imwap-peaple"></i>19761</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #9dcc29;background: #9dcc29 url(//img2.mukewang.com/59cb86d50001117402400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=101">
                                <h2>Android</h2>
                                <p class="big-card-title">BAT大咖助力 全面升级Android面试</p>
                                <div class="big-card-bottom">

                                    ¥288.00


                                    <span class="number"><i class="imwap-peaple"></i>2699</span>

                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="small-box">
                        <div class="swiper-container swiper-container-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=174">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5a52d6630001cfd305400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Java深入微服务原理改造房产销售平台</p>
                                                <div class="small-card-info">


                                                    中级 · 286人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥366.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/924">
                                            <img data-original="//img1.mukewang.com/5a2f4d7f00012c8106000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">IntelliJ IDEA神器使用技巧</p>
                                                <div class="small-card-info">


                                                    中级 · 33795人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=200">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5abcabea00014f6b10800600-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Python高级编程和异步IO并发编程</p>
                                                <div class="small-card-info">


                                                    高级 · 136人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥399.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                </div>
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/277">
                                            <img data-original="//img2.mukewang.com/5705d3a3000129d006000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">JavaScript深入浅出</p>
                                                <div class="small-card-info">


                                                    中级 · 230636人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=206">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5acf37460001aa3405400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Gradle3.0自动化构建技术精讲+实战</p>
                                                <div class="small-card-info">


                                                    中级 · 53人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥199.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/745">
                                            <img data-original="//img3.mukewang.com/58048dfb0001a10606000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">zepto设计和源码分析</p>
                                                <div class="small-card-info">


                                                    高级 · 12712人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </section>


            <section class="mode ccc">
                <p class="tit">
                    <span class="icon icon-5"></span>前沿技术
                    <i class="imwap-arrow_r r"></i>
                    <a href="http://www.imooc.com/topic/php?mc_marking=7aa54e6b60ef482059362d88c005beb8&amp;mc_channel=syzt5"
                       class="r more"><span class="original">专题</span>PHP从入门到精通只需三个阶段</a>
                </p>


                <div class="imooc-list js-imooc-list clearfix">
                    <!-- 免费 1 实战 2  路径 4 -->
                    <div class="big-box clearfix">


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #4a95dc;background: #4a95dc url(//img1.mukewang.com/5a4f62780001094502400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=191">
                                <h2>机器学习</h2>
                                <p class="big-card-title">OpenCV+TensorFlow 入门人工智能图像处理</p>
                                <div class="big-card-bottom">

                                    ¥299.00


                                    <span class="number"><i class="imwap-peaple"></i>143</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #5280f1;background: #5280f1 url(//img2.mukewang.com/59c895400001280402400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=197">
                                <h2>PHP</h2>
                                <p class="big-card-title">韩天峰力荐 Swoole入门到实战打造高性能赛事直播平台</p>
                                <div class="big-card-bottom">

                                    ¥299.00


                                    <span class="number"><i class="imwap-peaple"></i>493</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #42a4f0;background: #42a4f0 url(//img3.mukewang.com/565ec2b00001dc0902400240.jpg) no-repeat right;">
                            <a href="https://www.imooc.com/learn/867">
                                <h2>云计算</h2>
                                <p class="big-card-title">Docker入门</p>
                                <div class="big-card-bottom">

                                    免费


                                    <span class="number"><i class="imwap-peaple"></i>22921</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #0070bb;background: #0070bb url(//img.mukewang.com/59c896b50001942802400240.jpg) no-repeat right;">
                            <a href="http://coding.m.imooc.com/classindex.html?cid=176">
                                <h2>Python</h2>
                                <p class="big-card-title">基于Python玩转人工智能最火框架 TensorFlow应用实践</p>
                                <div class="big-card-bottom">

                                    ¥299.00


                                    <span class="number"><i class="imwap-peaple"></i>802</span>

                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="small-box">
                        <div class="swiper-container swiper-container-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=103">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/59e563cb00010b7105400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">机器学习入门 Scikit-learn实现经典小案例</p>
                                                <div class="small-card-info">


                                                    初级 · 719人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥199.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/717">
                                            <img data-original="//img3.mukewang.com/57cfa226000150c206000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">初识机器学习-理论篇</p>
                                                <div class="small-card-info">


                                                    入门 · 86232人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=201">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5ab9be440001b21f05400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">ZooKeeper分布式专题与Dubbo微服务入门</p>
                                                <div class="small-card-info">


                                                    中级 · 178人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥199.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                </div>
                                <div class="swiper-slide">


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/943">
                                            <img data-original="//img1.mukewang.com/5a7048580001670506000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Python人工智能常用库Numpy使用入门</p>
                                                <div class="small-card-info">


                                                    初级 · 13471人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="http://coding.m.imooc.com/classindex.html?cid=156">
                                            <img data-original="//img1.sycdn.imooc.com/szimg/5a097bde00019ed605400300-360-202.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">Python3数据科学入门与实战</p>
                                                <div class="small-card-info">


                                                    初级 · 274人在学

                                                </div>

                                                <div class="small-card-price ">

                                                    ¥248.00

                                                </div>

                                            </div>
                                        </a>
                                    </div>


                                    <div class="small-card clearfix">
                                        <a href="https://www.imooc.com/learn/896">
                                            <img data-original="//img2.mukewang.com/59c32b540001f16f06000338-590-330.jpg"
                                                 class="small-card-banner l lazy">
                                            <div class="l">
                                                <p class="small-card-title">AWS云-深度学习&amp;机器学习的AI业务应用</p>
                                                <div class="small-card-info">


                                                    中级 · 5292人在学

                                                </div>

                                                免费

                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>

            </section>


            <!-- 热门话题 -->
            <section class="commend-topic mode fff">
                <p class="tit"><span class="icon icon-6"></span>热门话题<a href="/wenda/issue" class="r more">更多话题<i
                        class="imwap-arrow_r"></i></a></p>
                <div class="topic-list">
                    <div class="clearfix topic-period">
                        <a href="http://www.imooc.com/wenda/issuedetail/27" target="_blank" class="big-tit l">打工奋斗7万落京户VS自主创业牧马城市，如何抉择？
                            <p>【内推第2波】</p></a>
                        <img class="r" src="//img4.mukewang.com/5abc43e500012ec805120512.jpg">
                    </div>
                </div>
                <div class="line-dashed"></div>
            </section>


            <!-- 热门手记 -->
            <section class="commend-article mode fff">
                <p class="tit"><span class="icon icon-7"></span>热门手记<a href="/article" class="r more">更多手记<i
                        class="imwap-arrow_r"></i></a></p>
                <div class="article-list clearfix">

                    <div class="clearfix articl-item l">
                        <a href="http://www.imooc.com/article/26090" target="_blank" class="big-tit">
                            <p class="title">我们为什么需要HBase？</p>
                            <p class="info">浏览99 / 推荐3</p>

                            <img class="" src="//img1.mukewang.com/5ad419c6000136eb02200229.jpg">

                        </a>
                    </div>
                    <div class="cut-line l"></div>
                    <div class="r article-right-box">
                        <div class="clearfix articl-item">
                            <a href="http://www.imooc.com/article/25858" target="_blank" class="big-tit">
                                <p class="title">聊聊滴滴开源 Vue 组件库— cube-ui 的技术内幕</p>
                                <p class="info">浏览1224 / 推荐16</p>
                            </a>
                        </div>
                        <div class="tit-line"></div>
                        <div class="clearfix articl-item">
                            <a href="http://www.imooc.com/article/25972" target="_blank" class="big-tit">
                                <p class="title">文本分类需要cnnnofasttext完美解决你的需求前篇</p>
                                <p class="info">浏览137 / 推荐3</p>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="line-dashed"></div>
            </section>


            <!-- 猿问精选 -->
            <section class="commend-wenda mode fff">
                <p class="tit"><span class="icon icon-12 imwap-Q-n-A"></span>猿问精选<a href="/wenda" class="r more">更多猿问<i
                        class="imwap-arrow_r"></i></a></p>
                <dl class="wenda-recommend-list">

                    <dd>
                        <a href="/wenda/detail/388579" target="_blank">
                            <p class="title">微服务框架 spring cloud 和 dubbo 有什么区别？</p>
                            <span>共3个回答</span>
                        </a>
                    </dd>

                    <dd>
                        <a href="/wenda/detail/388591" target="_blank">
                            <p class="title">通过&quot;数学归纳法&quot;开始论证高度为h的红黑树，它的包含的内节点个数至少为 2bh(x)-1个&quot;</p>
                            <span>共2个回答</span>
                        </a>
                    </dd>

                    <dd>
                        <a href="/wenda/detail/388598" target="_blank">
                            <p class="title">是在英文状态下输入的，一直显示错误</p>
                            <span>共1个回答</span>
                        </a>
                    </dd>

                </dl>
            </section>


            <!-- 猜你喜欢 -->
            <section class="guess-like mode fff">
                <p class="tit"><span class="icon icon-10"></span>猜你喜欢</p>
                <div class="like-list js-like-list clearfix">


                    <div class="small-card clearfix">
                        <a href="http://coding.m.imooc.com/classindex.html?cid=133">
                            <img data-original="//img1.sycdn.imooc.com/szimg/59a007f600018d1f05400300-360-202.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">360大牛带你横扫PHP职场 全面解读PHP面试</p>
                                <div class="small-card-info">


                                    中级 · 849人在学

                                </div>

                                <div class="small-card-price ">

                                    ¥266.00

                                </div>

                            </div>
                        </a>
                    </div>


                    <div class="small-card clearfix">
                        <a href="http://coding.m.imooc.com/classindex.html?cid=169">
                            <img data-original="//img1.sycdn.imooc.com/szimg/5a39cd3f0001c09805400300-360-202.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">Python3入门机器学习 经典算法与应用</p>
                                <div class="small-card-info">


                                    中级 · 795人在学

                                </div>

                                <div class="small-card-price ">

                                    ¥399.00

                                </div>

                            </div>
                        </a>
                    </div>


                    <div class="small-card clearfix">
                        <a href="https://www.imooc.com/learn/976">
                            <img data-original="//img2.mukewang.com/5ac43bbc0001574b06000338-590-330.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">电商banner设计制作</p>
                                <div class="small-card-info">


                                    入门 · 2249人在学

                                </div>

                                免费

                            </div>
                        </a>
                    </div>


                    <div class="small-card clearfix">
                        <a href="https://www.imooc.com/learn/975">
                            <img data-original="//img4.mukewang.com/5ac2dec100014aae05400300-590-330.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">MAYA动画入门课-飞机飞行</p>
                                <div class="small-card-info">


                                    初级 · 1458人在学

                                </div>

                                免费

                            </div>
                        </a>
                    </div>


                    <div class="big-box clearfix">


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #ffa133;background: #ffa133 url(//img2.mukewang.com/59c896360001379302400240.jpg) no-repeat right;">
                            <a href="https://www.imooc.com/learn/974">
                                <h2>Html5</h2>
                                <p class="big-card-title">入门微信小程序开发</p>
                                <div class="big-card-bottom">

                                    免费


                                    <span class="number"><i class="imwap-peaple"></i>9767</span>

                                </div>
                            </a>
                        </div>


                        <div class="big-card l cd"
                             style="box-shadow: 0 4px 16px 0 #4a95dc;background: #4a95dc url(//img1.mukewang.com/5a4f62780001094502400240.jpg) no-repeat right;">
                            <a href="https://www.imooc.com/learn/972">
                                <h2>机器学习</h2>
                                <p class="big-card-title">Python实现线性回归</p>
                                <div class="big-card-bottom">

                                    免费


                                    <span class="number"><i class="imwap-peaple"></i>5146</span>

                                </div>
                            </a>
                        </div>


                    </div>


                    <div class="small-card clearfix">
                        <a href="https://www.imooc.com/learn/968">
                            <img data-original="//img4.mukewang.com/5aaf5f370001c40306000338-590-330.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">GO语言语法入门篇</p>
                                <div class="small-card-info">


                                    入门 · 6463人在学

                                </div>

                                免费

                            </div>
                        </a>
                    </div>


                    <div class="small-card clearfix">
                        <a href="https://www.imooc.com/learn/965">
                            <img data-original="//img4.mukewang.com/5aaf1f110001a0e105400300-590-330.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">C4D创意M字母教程</p>
                                <div class="small-card-info">


                                    初级 · 1393人在学

                                </div>

                                免费

                            </div>
                        </a>
                    </div>


                    <div class="small-card clearfix">
                        <a href="https://www.imooc.com/learn/964">
                            <img data-original="//img4.mukewang.com/5ab8702c00016cce05400300-590-330.jpg"
                                 class="small-card-banner l lazy">
                            <div class="l">
                                <p class="small-card-title">MAYA-Polygon多边形建模</p>
                                <div class="small-card-info">


                                    入门 · 629人在学

                                </div>

                                免费

                            </div>
                        </a>
                    </div>

                </div>
                <a href="javascript:void(0);" class="loading-more js-load-imooc" data-flag="more">点击加载更多</a>
            </section>


        </div>

    </div>
</div>

<script type="text/javascript" src="/statics/js/jquery-2.1.0.min_ac9f840.js"></script>
<!--<script type="text/javascript" src="/statics/js/common_03ec857.js"></script>-->
<script type="text/javascript" src="/statics/js/swiper-3.4.2.jquery.min_f6c43f2.js"></script>
<script type="text/javascript" src="/statics/js/jquery.lazyload_75578ef.js"></script>
<script type="text/javascript" src="/statics/js/index_6878353.js"></script>
</body>
</html>
