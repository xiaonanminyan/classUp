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

    <ul>
        <?php $n=1; if(is_array($list)) foreach($list AS $k => $v) { ?>
            <li>
                <?php echo $v['catname'];?>
            </li>
        <?php $n++;}unset($n); ?>
    </ul>

</body>
</html>