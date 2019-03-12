<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>    
        <title>慕课网</title>   
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="慕课网">
        <meta name="keywords" content="慕课网">
        <meta name="author" content="">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-transform ">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <script src="https://zz.bdstatic.com/linksubmit/push.js"></script>
        <script src="https://hm.baidu.com/hm.js?c92536284537e1806a07ef3e6873f2b3"></script>
        <script type="text/javascript" src="/statics/js/flexible.js"></script>
        <meta name="viewport" content="initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no">
        <script type="text/javascript">
            var userInfo = "";
        </script>
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css">
    <link rel="stylesheet" href="/statics/css/main_5f4f57a.css"></head>
<body style="font-size: 24px;">
<header>
	<div class="header clearfix">
			<!-- {*非一级目录 有返回键 可能有name字段 可能有搜索框*} -->
			<a class="imwap-arrow_l goback l" href="javascript:history.go(-1)"></a>
			<span class="js-header-name header-name header-tit l">
				注册登录
			</span>
	</div>
</header>
  <div id="wrapper">
            <div id="middle" class="container">             
<section class="step1">
	<ul class="account-tab">
		<li><a href="index.php?m=member&c=index&a=login">登录</a></li>
		<li class="active">注册</li>
	</ul>
	<?php if(!isset($_GET['t'])) { ?>
	<div class="account-form">
		<form method="post" action="/index.php?m=member&c=index&a=register" id="myform">
			<input type="hidden" name="siteid" value="<?php echo $siteid;?>" />
		    <div class="account-form-group">
                <input type="text" id="username" name="username" size="36" placeholder="手机号" class="account-form-control js-input-name">
			    <div class="account-form-tip errorHint"></div>		
		    </div>
		    <div class="account-form-group">
			    <input type="password" id="password" name="password" size="36"  placeholder="请输入密码" class="account-form-control js-input-name">
			    <div class="account-form-tip errorHint" data-error-hint="请输入正确验证码"></div>
		    </div>
		    <div class="account-form-group">
			    <input type="password" id="pwdconfirm" name="pwdconfirm" size="36"  placeholder="请确认密码" class="account-form-control js-input-name">
			    <div class="account-form-tip errorHint" data-error-hint="请输入正确验证码"></div>
		    </div>
		    <div class="account-form-group button-row">
			    <div class="account-form-tip js-error"></div>
			    <input type="submit" name="dosubmit" value="注册" class="account-form-btn js-btn-next" style="padding:0px 45%">
		    </div>
		</form>
	</div>
	<?php } ?>
</section>
<section class="step2">
	<div class="account-phone">短信验证码已发送至<span class="js-register-phone"></span></div>
	<div class="account-form">
		<div class="account-form-group">
			<input type="number" oninput="if(value.length>4)value=value.slice(0,4)" class="account-form-control verify js-phone-verify" data-validate="require-string" data-maxlength="4" data-minlength="4" placeholder="请输入验证码">
			<div class="js-btn-send">
				<div class="send-timer js-btn-send">重新发送<span>60</span></div>
			</div>			
			<div class="account-form-tip errorHint" data-error-hint="请输入正确验证码"></div>
		</div>
		<div class="account-form-group">
			<input type="password" class="account-form-control js-input-password" data-validate="require-password" placeholder="6-16位密码，区分大小写，不能用空格">
			<i class="imwap-visibility js-showpw"></i>
			<div class="account-form-tip errorHint"></div>
		</div>
		<div class="account-form-group button-row">
			<div class="account-form-tip js-error"></div>
			<a href="javascript:void(0)" class="account-form-btn js-btn-register">完成注册</a>
		</div>
	</div>
</section>
<section class="step3">
	<div class="account-form account-success">
		<i class="imwap-buy－success"></i>
		<h3>注册成功</h3>
		<p><span class="js-jump-timer">30</span>秒后自动跳转到首页</p>
		<div class="account-form-group">
			<a href="/" class="account-form-btn">进入首页</a>
		</div>		
	</div>
</section>
            </div>
        </div>
    
<script src="https://www.imooc.com/passport/static/scripts/ssologin.js?v=2.0"></script>
        <script type="text/javascript">
                var shareData = {
                    title:  "慕课网",
                    desc: "慕课网",
                    imgUrl: 'https://moco.imooc.com/static/base/images/logo-share.png',
                    otherImgUrl: '',
                    text: '我正在参加@慕课网的课程，很不错哦！快来一起学习吧！',
                    // url: 'https://www.imooc.com' + window.location.pathname + window.location.search
                    url: window.location.href,
                    link: window.location.href
                }
            </script>  
        <div style="display:none;">
            <!-- 百度统计 -->
            <script>
            var _hmt = _hmt || [];
            (function() {
              var hm = document.createElement("script");
              hm.src = "https://hm.baidu.com/hm.js?c92536284537e1806a07ef3e6873f2b3";
              var s = document.getElementsByTagName("script")[0];
              s.parentNode.insertBefore(hm, s);
            })();
            </script>
            <script>
            (function(){
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                }
                else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
            </script>
            <!-- 友盟统计 -->
            <script src="https://s95.cnzz.com/z_stat.php?id=1261728817&amp;web_id=1261728817" language="JavaScript"></script><script src="https://c.cnzz.com/core.php?web_id=1261728817&amp;t=z" charset="utf-8" type="text/javascript"></script><a href="http://www.cnzz.com/stat/website.php?web_id=1261728817" target="_blank" title="站长统计">站长统计</a>
        </div>
    <script type="text/javascript" src="/static/wap/static/common/js/jquery-2.1.0.min_ac9f840.js"></script><script type="text/javascript" src="/static/wap/static/common/js/common_03ec857.js"></script><script type="text/javascript" src="https://www.imooc.com/visitlog/index/user?v=1523413698426"></script><script type="text/javascript" src="https://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script><script type="text/javascript" src="/static/wap/static/common/js/moco.min_281f9ec.js"></script><script type="text/javascript" src="/static/wap/static/js/account/register_43d9aa8.js"></script>
</body>
</html>