<?php
namespace Home\Controller\Football;
use Think\Controller;
class FootballController extends Controller {
    public function index($footid='1003'){ 
         echo "\$footid=".$footid;
		 //$this->show("<div style=\"height:50px;background-color:#FF0;\">足球模板</div>");
    }
}
