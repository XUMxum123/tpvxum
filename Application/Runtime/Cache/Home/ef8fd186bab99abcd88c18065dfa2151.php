<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<link rel="stylesheet" type="text/css" href="/Thinkphp/Public/Home/css/style.css">
<script type="text/javascript" src="/Thinkphp/Public/Home/js/home.js"></script>

<link rel="stylesheet" type="text/css" href="/Thinkphp/Public/Home/css/style.css" />
<script type="text/javascript" src="/Thinkphp/Public/Home/js/home.js"></script>

<link rel="stylesheet" type="text/css" href="/Thinkphp/Public/Home/css/style.css" />
<script type="text/javascript" src="/Thinkphp/Public/Home/js/home.js"></script>

<link rel="stylesheet" type="text/css" href="/Thinkphp/Public/Home/css/style.css" />
<script type="text/javascript" src="/Thinkphp/Public/Home/js/home.js"></script>

</head>

<body>
<!--
<div>看看<?php echo ($name); ?></div>
<div>
<table>
<?php if(is_array($contents)): $i = 0; $__LIST__ = $contents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
<?php if(is_array($vo1)): $i = 0; $__LIST__ = $vo1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><td><?php echo ($vo2); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>
<div>----------------------</div>
<div>
<table>
<?php if(is_array($contents)): foreach($contents as $key=>$vo1): ?><tr>
<?php if(is_array($vo1)): foreach($vo1 as $key=>$vo2): ?><td><?php echo ($vo2); ?></td><?php endforeach; endif; ?>
</tr><?php endforeach; endif; ?>
</table>
</div>
<div>--------------------</div>
<table>
<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo[DB_SERIES_MODE]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php $__FOR_START_4092__=1;$__FOR_END_4092__=10;for($index=$__FOR_START_4092__;$index < $__FOR_END_4092__;$index+=3){ echo ($index); } ?>
<div>
<?php if(($num) == $numnum): ?><img src="/Thinkphp/Public/Home/images/1.jpg" class="img1">相等
<?php else: ?>
<img src="/Thinkphp/Public/Home/images/1.jpg" class="img2">不相等<?php endif; ?>
</div>
<div>
<?php if(in_array(($num), explode(',',"1,3,6"))): ?><img src="/Thinkphp/Public/Home/images/1.jpg" class="img1">存在
<?php else: ?>
<img src="/Thinkphp/Public/Home/images/1.jpg" class="img2">不存在<?php endif; ?>
</div>
<div>
<?php if($num == $numnum): ?><img src="/Thinkphp/Public/Home/images/1.jpg" class="img1">相等
<?php else: ?>
<img src="/Thinkphp/Public/Home/images/1.jpg" class="img2">不相等<?php endif; ?>
</div>
<input type="button" value="点击我" id="show" onclick="show()"/>
<?php $var = '我是赋值得到的'; ?>
<?php $var1 = $num; ?>
<div><?php echo ($var); ?>&nbsp;&nbsp;<?php echo ($var1); ?></div>
<?php if(empty($isempty)): ?>值为空
<?php else: ?>
值不为空<?php endif; ?>
<?php $con = "thinkphp"; $arr = array(123,xsg,y76,xuy); var_dump($arr); echo "<div class=\"think\">".$con."</div>"; ?>
-->
<div><?php echo ($count); ?></div>
<div></div>
<table border="1px">
<caption>一共查询到&nbsp;<?php echo ($cou); ?>&nbsp;条数据</caption>
<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($key); ?></td>
<td><?php echo ($vo[DB_SERIES_MODE]); ?></td>
<td><?php echo ($vo[DB_SERIES_STATE]); ?></td>
<td><?php echo ($vo[DB_SERIES_STARTTIME]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>