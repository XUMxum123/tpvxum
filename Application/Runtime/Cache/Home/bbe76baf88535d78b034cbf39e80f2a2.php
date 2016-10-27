<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片处理</title>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Home/css/style.css" />
<script type="text/javascript">
 var url = "<?php echo U('Series/ShowPage');?>";
</script>
<script type="text/javascript" src="/thinkphp/Public/Home/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/Home/js/home.js"></script>
</head>

<body>
<?php echo ($test); ?>
<?php echo ($string); ?>
<?php $c = 'false'; ?>
<?php if(!$a AND $b): ?>都正确
<?php else: ?>
至少一个错误<?php endif; ?>
<?php if($region == 马翔): ?>111111111111<?php endif; ?>
<select>
<option value="111">111</option>
<option value="222" >222</option>
<option value="333" <?php if($region == 马翔): ?>selected="selected"<?php endif; ?>>333</option>
<option value="444"  <?php if($region == 马翔): ?>selected="selected"<?php endif; ?>>444</option>
</select>
<?php if($c && $b){ echo "正确"; } ?>
<div></div><br><br><br>
<a href="<?php echo U('Series/ShowPage');?>">跳转分页</a>
<div></div><br><br><br>
<input value="跳转" type="button" id="but" onclick="goto()"><br>
</body>

</html>