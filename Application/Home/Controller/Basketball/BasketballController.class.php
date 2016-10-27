<?php
namespace Home\Controller\Basketball;
use Think\Controller;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
class BasketballController extends Controller {
    public function basket($price="100元",$big="30厘米"){
        echo "<div style='height:50px;background-color:#F00'>价格是:".$price."</div>";
		echo "<div style='height:50px;background-color:#0F0'>大小是:".$big."</div>";
    }

}
?>