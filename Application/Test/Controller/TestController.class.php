<?php
namespace Test\Controller;
use Think\Controller;
class TestController extends Controller {
/*
 *         mkrqcrevhlss.mysql.sae.sina.com.cn:10224
 * 服务器： mkrqcrevhlss.mysql.sae.sina.com.cn via TCP/IP
      服务器类型： MySQL
      服务器版本： 5.6.23-72.1-log - Source distribution
      协议版本： 10
      用户： demo@10.67.15.151
      服务器字符集： UTF-8 Unicode (utf8)
   Database：app_xuxu --> User表的数据如下(只有一行)
      Id    0f1068eafbeb1e13138c2f778937bc4c
      Name  xum
      Age   80
      Sex   boy
 * */
    public function index(){
         $name = "xum-xum";
		 $this->assign("name",$name);
/* 		 echo DB_UESR_TAB."<BR />";
		 echo C(DB_HOST)."<BR />";
         $userlist = D(DB_UESR_TAB);
         $data = $userlist->limit(0,5)->select();
         var_dump($data);
        echo "database: ".SAE_MYSQL_DB."<br />";
        echo "username: ".SAE_MYSQL_USER."<br />";
        echo "password: ".SAE_MYSQL_PASS."<br />";
        echo "port: ".SAE_MYSQL_PORT."<br />";
        echo "zhu: ".SAE_MYSQL_HOST_M."<br />";
        echo "fu: ".SAE_MYSQL_HOST_S."<br />"; */
		 //$data = $nbateam->_get_infor();
		 //$this->assign("data",$data);
		 $target = "Test/index";
		 $this->display($target);
    }

    public function show(){
    	$userList = D(DB_UESR_TAB);
    	$userInfo = $userList->_get_infor();
    	//var_dump($userInfo);
    	$this->assign("userInfo",$userInfo);
    	$target = "Test/show";
    	$this->display($target);
    }

    public function query(){
    	$nbateamList = D(DB_NBATEAM_TAB);
    	$nbateamInfo = $nbateamList->_get_nbateam_infor();
    	$this->assign("nbateamInfo",$nbateamInfo);
    	$target = "Test/query";
    	$this->display($target);
    }

    public function curd(){
    	$target = "Test/curd";
    	$this->display($target);
    }
}
