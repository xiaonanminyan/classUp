<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">

<head>
    <title>前端开发_web前端开发_前端开发视频教程_慕课网</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="慕课网前端开发精品课程,为您提供专业的IT实战开发课程,web前端开发教程包括,HTML、CSS、JavaScript等各方面IT技,从基础到入门课程全面、制作精良、讲解通俗易懂">
    <meta name="keywords" content="前端开发,AngularJS,前端开发教程,前端开发培训,前端开发课程">
    <meta name="author" content="">
    <meta name = "format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="canonical" href="https://www.imooc.com/course/list">
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css" />
    <link rel="stylesheet" href="/statics/css/index_796fed7.css" />
    <input type="hidden" value="<?php echo $userid;?>" id="u">
</head>

<body >

<header >
    <div class="header clearfix">

        <a href="/index.php" class="logo l">
            <img src="/statics/images/maximum_logo.jpg" alt="">
        </a>


        <form class="search-box r clearfix js-search-box  " style=" display: none;" action="//m.imooc.com/search/">
            <div class="l search-input hasnameinput-1">
                <input type="text" class="search js-search" name="words" value="" placeholder="请输入搜索关键词">
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
    <div id="middle" class="container">

        <section class="header-menu">
            <ul class="clearfix">
                <li ><a href='/index.php'>首页</a></li>
                <li class="cur"><a href='/index.php?m=mooc&c=index&a=cate&fid=1'>课程</a></li>
              <!--  <li><a href="#">路径</a></li>
                <li><a href="#">实战</a></li>
                <li><a href="#">手记</a></li>
                <li><a href="#">猿问</a></li>-->

        </section>

        <section class="header-menu fixed">
            <ul class="clearfix">
                <li ><a href='/index.php'>首页</a></li>
                <li class="cur"><a href='/index.php?m=mooc&c=index&a=cate&fid=1'>课程</a></li>
            <!--    <li><a href="#">路径</a></li>
                <li><a href="#">实战</a></li>
                <li><a href="#">手记</a></li>
                <li><a href="#">猿问</a></li>-->
            </ul>
        </section>

        <div class="course-block clearfix">
            <ul class="course-left">

                <?php $n=1; if(is_array($fields)) foreach($fields AS $k => $v) { ?>
                    <li class="li-item">
                        <a href="/index.php?m=mooc&c=index&a=cate&fid=<?php echo $v['id'];?>"  <?php if($v['id']==$fid) { ?>class="active-color"<?php } ?>>

                            <?php echo $v['name'];?>

                        </a>

                    </li>
                <?php $n++;}unset($n); ?>

            </ul>
            <div class="course-right">
                <div class="course-right-inner">

                    <div class="web-base-blcok">


                        <div class="wbb-content">
                            <ul class="clearfix">
                                <?php $n=1; if(is_array($cates)) foreach($cates AS $k => $v) { ?>
                                    <li class="course-item-w l">

                                        <?php if($userid) { ?>
                                        <a href="/index.php?m=mooc&c=index&a=x&id=<?php echo $v['id'];?>">
                                            <?php } else { ?>
                                            <a href="/index.php?m=member&c=index&a=login">
                                                <?php } ?>


                                        <div class="course-img" style="background-image: url(//img.mukewang.com/59c896360001379302400240.jpg)"></div>
                                        <span class="course-label"><?php echo $v['name'];?></span>
                                    </a>
                                </li>
                                <?php $n++;}unset($n); ?>

                            </ul>
                        </div>

                    </div>

                    <div class="course-list">
                        <ul class="list-ul">

                            <?php $n=1; if(is_array($list)) foreach($list AS $k => $v) { ?>
                                 <li class="c-item-li">
                                     <?php if($userid) { ?>
                                        <a href="/index.php?m=mooc&c=index&a=course&id=<?php echo $v['id'];?>">
                                        <?php } else { ?>
                                            <a href="/index.php?m=member&c=index&a=login">
                                     <?php } ?>
                                    <div class="left-img" style="background-image: url(<?php echo $v['pic'];?>)">

                                    </div>
                                    <div class="right-c">
                                        <h2 class="r-title">
                                            <?php echo $v['title'];?>
                                        </h2>
                                        <p class="r-info">
                                            <span class="r-info-t">免费课程</span><span class="r-info-l">初级 · 9898人在学 </span>
                                        </p>
                                    </div>
                                </a>
                                </li>
                            <?php $n++;}unset($n); ?>

                        </ul>
                        <?php if(count($list)>=20) { ?>
                        <div class="more-block">
                            <a href="javascript:void(0);" data-marking="fe" class="loading-more js-show-more">点击加载更多</a>
                            <div class="loding-m-wrap">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="footer-appload js-footer-appload-wrap" style="display: none">
    <img class="logo" src="/statics/images/logo-small@2x.png" />慕课网APP，下载课程随身学习
    <i class='imwap-close footer-appload-close js-footer-appload-close r'></i>
    <a id="js-appload-footer" href="javascript:void(0);" class="r">打开</a>
</div>

<script src="/statics/js/flexible.js"></script>
<script src="/statics/js/jquery.min.js"></script>
<script src="/statics/js/jquery-3.3.1.min.js"></script>

<script>
    $(function(){
        let page = 2;
        let has = true;
        $('.loading-more').on('click',function(){
           var url = `/index.php?m=mooc&c=index&a=more&fid=<?php echo $fid;?>&page=${page}`;
            $.getJSON( url, function( data ) {
               if(has){
                   if(data.length < 20){
                       has = false;
                   }
                   data.forEach((v,i)=>{
                       $(`
                            <li class="c-item-li">
                            ${
                               $('#u').val()
                                    ? `<a href="/index.php?m=mooc&c=index&a=course&id=${v.id}">`
                                   :`<a href="/index.php?m=member&c=index&a=login">`
                               }

                                    <div class="left-img" style="background-image: url(//img2.mukewang.com/5ac3418d0001a9b806000338-590-330.jpg)">

                                    </div>
                                    <div class="right-c">
                                        <h2 class="r-title">
                                            ${v.title}
                                        </h2>
                                        <p class="r-info">
                                            <span class="r-info-t">免费课程</span>
                                            <span class="r-info-l">初级 · ${v.view_count}人在学 </span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        `).appendTo(".list-ul");
                   })
                   page ++;
               }else{
                   alert("没有了");
               }
            })
        })
    })
</script>
</html>
