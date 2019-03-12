<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">

<head>

    <title>前端开发_HTML/CSS入门基础到高级教程_慕课网</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。">
    <meta name="keywords" content="HTML/CSS视频教程，HTML/CSS入门教程，HTML/CSS基础教程，HTML/CSS入门，HTML/CSS精通">
    <meta name="author" content="">
    <meta name = "format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <script type="text/javascript" src="/statics/js/flexible.js"></script>
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css" />
    <link rel="stylesheet" href="/statics/css/course_8c1cd8f.css" />
</head>
<body >


<header >
    <div class="header clearfix">

        <!-- {*非一级目录 有返回键 可能有name字段 可能有搜索框*} -->
        <a class="imwap-arrow_l goback l" href="javascript:history.go(-1)"></a>

        <span class='js-header-name header-name header-tit l'>
				<?php echo $list2['0']['name'];?>
			</span>
    </div>
</header>

<div id="wrapper">
    <div id="middle" class="container">

        <div id="pages-container">
            <div class="course-class clearfix">
                <div class="l">
                    <a href="javascript:void(0);" class="js-slide js-type" data-type="type"><span>全部</span><i class="imwap-arrow_d"></i></a>
                    <a href="javascript:void(0);" class="js-slide js-best" data-type="best"><span>最新</span><i class="imwap-arrow_d"></i></a>
                </div>

            </div>
            <dl class="course-class-box js-type-tab">
                <dd><a href="javascript:void(0);" data-type="0" class="cur">全部</a></dd>

                <dd>
                    <a href="javascript:void(0);" data-type="1">基础</a>
                </dd>

                <dd>
                    <a href="javascript:void(0);" data-type="2">案例</a>
                </dd>

                <dd>
                    <a href="javascript:void(0);" data-type="3">框架</a>
                </dd>

            </dl>
            <dl class="course-class-box js-best-tab">
                <dd><a href="javascript:void(0);" class="cur" data-order="2">最热</a></dd>
                <dd><a href="javascript:void(0);" data-order="1">最新</a></dd>
            </dl>
            <div class="loading js-loading">
                <img src="/statics/images/refresh.gif" style="display: none;">
            </div>
            <dl class="js-course-list course-list clearfix">
                <?php $n=1; if(is_array($list)) foreach($list AS $k => $v) { ?>
                <dd>
                    <?php if($userid) { ?>
                    <a href="/index.php?m=mooc&c=index&a=course&id=<?php echo $v['id'];?>" class="clearfix">
                        <?php } else { ?>
                        <a href="/index.php?m=member&c=index&a=login" class="clearfix">
                            <?php } ?>

                        <div class="l pr">
                            <img src="<?php echo $v['pic'];?>">
                        </div>
                        <div class="l course-info">
                            <p class="tit"><?php echo $v['title'];?></p>
                            <p class="desc"><?php echo $v['description'];?></p>
                            <p class="info">初级<em>·</em><?php echo $v['view_count'];?>人在学 </p>
                        </div>
                    </a>
                </dd>
                <?php $n++;}unset($n); ?>
            </dl>
            <a class="loading-more js-load-course" data-type="0" style="display:none;">点击加载更多</a>
            <p class="load-tip js-load-tip" style="display:none;">没有更多数据了哟~</p>
        </div>

    </div>
</div>

<!--<script type="text/javascript" src="/statics/js/common_03ec857.js"></script>-->
<!--<script type="text/javascript" src="/statics/js/course_7d782c8.js"></script>-->
<script src="/statics/js/jquery.min.js"></script>

</body>
<script>
    $(function () {
        function addClick(o) {
            $(`.js-${o}`).on('click',function(){
                $('.js-slide').removeClass('slideshow');
                if(o==='type'){
                    $(`.js-best-tab`).hide();
                }else{
                    $(`.js-type-tab`).hide();
                }
                $(this).toggleClass('slideshow');
                $( `.js-${o}-tab`).toggle();
            })
        }
        addClick('type');
        addClick('best');
        function add2(o){
            $(`.js-${o}-tab a`).on('click',function () {
                let dl = $(this).closest('dl');//3离自己最近的dl
                dl.find('a').removeClass('cur');//2添加类前，所有的都要移除
                $(this).addClass('cur');//1点击每个都添加类
                dl.hide();//4点完以后要消失
                $(`.js-${o} span`).text($(this).text());//返回相应的文字
                $(`.js-${o}`).removeClass('slideshow');//
                fetch_data();//点击的时候
            })
        }
        add2('type');
        add2('best');
        function fetch_data() {
            let typeid = $(`.js-type-tab .cur`).attr('data-type');
            let order = $(`.js-best-tab .cur`).attr('data-order');
            let loading = $(`.js-loading img`);

            loading.show();
            $.getJSON(
                `
                /index.php?m=mooc&c=index&a=s&id=<?php echo $id;?>&typeid=${typeid}&order=${order};
                `)
                .done(function(data){

                    loading.hide();
                    $('.js-course-list').empty();
                    data.forEach((v,i) => {

                        $(`
                            <dd>
                                <a href="/index.php?m=mooc&c=index&a=course&id=${v.id}" class="clearfix">

                                <div class="l pr">
                                    <img src="//img1.mukewang.com/5774db480001229006000338-590-330.jpg">
                                </div>
                                <div class="l course-info">
                                    <p class="tit">${v.title}</p>
                                    <p class="desc">${v.description}</p>
                                    <p class="info">初级<em>·</em>${v.view_count}人在学 </p>
                                </div>
                                </a>
                            </dd>
                        `).appendTo('.js-course-list');
                    })

                })

        }
    })
</script>
</html>
