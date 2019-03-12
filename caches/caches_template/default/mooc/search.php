<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">

<head>

    <title>慕课网</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="慕课网">
    <meta name="keywords" content="慕课网">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform "/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <script type="text/javascript" src="/statics/js/flexible.js"></script>
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css"/>
    <link rel="stylesheet" href="/statics/css/search_45678ed.css"/>
</head>
<body>
<style>
    #m-scroll{
        height:1.27333333rem;
        overflow-x:scroll;
        margin-top: 1.24rem;
    }
    .search-result .nav-list {
        height: 2rem;
        background-color: #fff;
        width:19rem;
    }

    .search-result .nav-list dd {
        width: auto;
        padding:0 0.5rem;
        float: left;
        text-align: center
    }
</style>

<header>
    <div class="header focus clearfix">

        <!-- {*非一级目录 有返回键 可能有name字段 可能有搜索框*} -->
        <a class="imwap-arrow_l goback l" href=""></a>


        <a href="//m.imooc.com/account/login" class="right-box r js-header-avator">
            <i class="imwap-Center"></i>
        </a>


        <form class="search-box r clearfix js-search-box  " style=" " action="/index.php?m=mooc&c=index&a=search" method="post">
            <div class="l search-input hasnameinput-2">
                <input type="text" class="search js-search" name="q" value="<?php echo $keyword;?>" placeholder="请输入搜索关键词">
                <div class="search-action l">
                    <a href="javascript:void(0);" class="imwap-close js-clear" style="display: none;"></a>
                    <button class="imwap-search"></button>
                </div>
            </div>
            <a href="/index.php" class="r cancel ">取消</a>
        </form>


    </div>
</header>

<div class="search-record js-search-record" style="display: none;">
</div>


<div id="wrapper">
    <div id="middle" class="container">

        <div id="pages-container">
            <div class="search-result">
                <div id="m-scroll">
                    <dl class="nav-list clearfix">
                        <?php $n=1; if(is_array($fields)) foreach($fields AS $k => $v) { ?>
                        <dd>
                            <a href="/index.php?m=mooc&c=index&a=search&fid=<?php echo $v['id'];?>"<?php if($v['id']===$fid) { ?>class="cur"<?php } ?>><?php echo $v['name'];?></a>
                        </dd>
                        <?php $n++;}unset($n); ?>
                    </dl>
                </div>

                <p class="result-count">共找到<?php echo count($results);?>个相关内容


                    <div class="content-box">
                <p class="type-tit">课程</p>
                <dl class="search-course-list">
                    <?php $n=1; if(is_array($results)) foreach($results AS $k => $v) { ?>
                    <dd>
                        <a href="/index.php?m=mooc&c=index&a=course&id=<?php echo $v['id'];?>" class="clearfix">
                            <img src="<?php echo $v['pic'];?>" class="l">
                            <div class="l search-course-info">
                                <p class="tit"><?php echo $v['title'];?></p>

                                <p class="desc"><?php echo $v['description'];?></p>

                                <p class="info"><label>实战</label><span><?php echo $v['view_count'];?>人在学 </span></p>
                            </div>
                        </a>
                    </dd>
                    <?php $n++;}unset($n); ?>
                </dl>

           <!--     <a href="/search/course?words=vue" class="check-type-btn">更多课程搜索结果</a>-->

            </div>

        </div>

    </div>

</div>
</div>
<script type="text/javascript" src="/statics/js/jquery-2.1.0.min_ac9f840.js"></script>
<script type="text/javascript" src="/statics/js/search_aa6b438.js"></script>
</body>
</html>
