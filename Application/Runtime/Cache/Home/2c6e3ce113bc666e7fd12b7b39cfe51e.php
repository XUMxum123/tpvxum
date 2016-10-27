<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分页数据</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/style.css" />
</head>

<body>
<div>分页数据<?php echo ($NowRow); ?>&nbsp;&nbsp;<?php echo ($listRows); ?>&nbsp;&nbsp;<?php echo ($pagenow); ?></div>
<?php $i = '0'; ?>

<div>
<div><?php echo ($aa); ?></div>
<div><?php echo ($bb); ?></div>
</div>

<div>
<table border="1px">
<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr>
<?php if(is_array($vo1)): $i = 0; $__LIST__ = $vo1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><td><?php echo ($vo2); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>

<table border="1px">
<tr>
<th>序列</th>
<th>赛事名</th>
<th>组织模式</th>
<th>准备状态</th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
<td>第<?php echo ($key+1+$NowRow); ?>条</td>
<td>
<a href="<?php echo U('Test/Matches/get_series_matches',array('Id'=>$vo[DB_SERIES_ID]));?>">
<?php echo ($vo[DB_SERIES_NAME]); ?>
</a>
</td>
<td><?php echo ($vo[DB_SERIES_MODE]); ?></td>
<td><?php echo ($vo[DB_SERIES_STATE]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr><td colspan="4" align="center"><?php echo ($page); ?></td></td>
</table>
<div></div>
</body>
</html>