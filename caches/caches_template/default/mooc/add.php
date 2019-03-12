<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/index.php?m=mooc&c=index&a=insert" method="post">
    <input type="text" name="name">
    <input type="text" name="pic">
    <input type="text" name="price">
    <input type="submit" value="submit">
</form>
</body>
</html>