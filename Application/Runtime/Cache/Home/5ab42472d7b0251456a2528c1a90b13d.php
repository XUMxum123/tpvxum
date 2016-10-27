<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/style.css" />
</head>

<body>
<table border="1px">
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo[DB_MATCH_NAME]); ?></td>
<td><?php echo ($vo[DB_MATCH_STARTTIME]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div><a href="<?php echo U('Home/Series/ShowGoto',array('Id'=>1234567,'Name'=>'thinkphp'));?>">跳转到哪里？</a></div>
</body>
</html>