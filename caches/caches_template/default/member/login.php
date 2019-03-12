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
        <script type="text/javascript" src="/statics/js/flexible.js"></script>
        <meta name="viewport" content="initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no">
        <link rel="stylesheet" href="/statics/css/common_e75f96d.css">
        <link rel="stylesheet" href="/statics/css/main_5f4f57a.css">
</head>
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
        <ul class="account-tab">
            <li class="active">登录</li>
            <li><a href="index.php?m=member&c=index&a=register">注册</a></li>
        </ul>
        <div class="account-form">
            <form method="post" action="/index.php?m=member&c=index&a=login" >
                <div class="account-form-group">

                    <input type="text" autocomplete="off" id="username" name="username" size="23" class="account-form-control js-input-name" placeholder="手机号或邮箱">
                    <div class="account-form-tip errorHint" data-error-hint="请输入正确的邮箱或手机号"></div>
                </div>
                <div class="account-form-group">
                    <input type="password" name="password" class="account-form-control js-input-password"  placeholder="请输入密码">

                    <div class="account-form-tip errorHint"></div>
                </div>
                <div class="account-form-group button-row">
                    <div class="account-form-tip js-error"></div>
                    <input type="submit" name="dosubmit" value="登录" class="account-form-btn js-btn-next" style="padding:0px 45%">
                </div>
            </form>


            </div>

                </div>
        </div>

        </div>
</body>
</html>