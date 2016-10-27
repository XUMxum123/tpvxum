<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分页数据</title>
<link rel="stylesheet" type="text/css" href="/Thinkphp/Public/Home/css/style.css" />
</head>

<body>
<div>分页数据<?php echo ($NowRow); ?>&nbsp;&nbsp;<?php echo ($listRows); ?>&nbsp;&nbsp;<?php echo ($pagenow); ?></div>
<?php $i = '0'; ?>
<table border="1px">
<tr>
<th>序列</th>
<th>赛事名</th>
<th>组织模式</th>
<th>准备状态</th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
<td>第<?php echo ($key+1+$NowRow); ?>条</td>
<td><?php echo ($vo[DB_SERIES_NAME]); ?></td>
<td><?php echo ($vo[DB_SERIES_MODE]); ?></td>
<td><?php echo ($vo[DB_SERIES_STATE]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr><td colspan="4" align="center"><?php echo ($page); ?></td></td>
</table>
<div></div>
</body>
</html>