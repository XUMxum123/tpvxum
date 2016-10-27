<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>iScroll</title>

<link rel="stylesheet" type="text/css" href="/RemoteToLocalProject/tpvxum/Public/Test/Nbateam/css/scroll.css">
<link rel="stylesheet" type="text/css" href="/RemoteToLocalProject/tpvxum/Public/Test/Nbateam/css/scrollbar.css">
<script type="text/javascript" src="/RemoteToLocalProject/tpvxum/Public/Test/Nbateam/js/iscroll.js"></script>
<script type="text/javascript" src="/RemoteToLocalProject/tpvxum/Public/Test/Nbateam/js/scroll.js"></script>

</head>
<body>
<div id="header"><!--absolute-->
<!--
<a href="#">iScroll</a>
-->
</div>
<div id="wrapper"><!--absolute-->
	<div id="scroller"><!--relative-->
		<div id="pullDown">
			<span class="pullDownIcon"></span><span class="pullDownLabel">下拉刷新...</span>
		</div>

		<ul id="thelist">
		 <?php if(is_array($nbateamInfo)): $i = 0; $__LIST__ = $nbateamInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <table style="font-size: 16px;">
                 <tr>
                   <td style="text-align: center;width: 35px;"><img src="<?php echo ($vo[DB_NBATEAM_LOGO]); ?>" style="width: 35px; height: 35px; padding-top: 0px;" /></td>
                   <td style="width: 15px;"></td>
                   <td style="text-align: center;width: 80px;"><?php echo ($vo[DB_NBATEAM_NAME]); ?></td>
                   <td style="width: 15px;"></td>
                   <td style="text-align: center;width: 100px;"><?php echo ($vo[DB_NBATEAM_PARTITION]); ?></td>
                 </tr>
              </table>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<div id="pullUp">
			<span class="pullUpIcon"></span><span class="pullUpLabel">上拉加载更多...</span>
		</div>

	</div>
</div>

<div id="footer">
  <div style="text-align: center;font-size: 30px;color: #f00;margin-top: 5px;">
    Welcome to you!
  </div>
</div>
</body>
</html>