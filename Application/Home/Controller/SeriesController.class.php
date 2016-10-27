<?php
namespace Home\Controller;
use Think\Controller;

class SeriesController extends Controller{
	
	
	public  function GetSFcache(){
		$data = S("data");
		dump($data);
	}
	
	
	   public function ShowSeries(){
	         $name = "ShowSeries";
			 $this->assign("name",$name);
			 $name = "1234567890123456789";
			 $Doseries = M(DB_SERIES_TAB);
			 $data[DB_SERIES_ID] = "1234567890";
			 $data[DB_SERIES_VENUE] = "团体个人加油";
			 $data[DB_SERIES_NAME] = $name;
			 $Doseries->add($data);
			/* 
			 $data[DB_SERIES_VENUE] = "好的好的好的";
			 $Doseries->where(array(DB_SERIES_ID=>"1234567890"))->save($data);
			 
			 $Doseries = M(DB_SERIES_TAB);
			 $where =array(DB_SERIES_ID => 1234567890);
			 $data[DB_SERIES_VENUE] = "团体个人加油";
			 $data[DB_SERIES_NAME] = "我添加的";
			 $field = array(DB_SERIES_VENUE,DB_SERIES_NAME);
             $Doseries->where($where)->field($field)->save($data);
			 
			 $series = D(DB_SERIES_TAB); 
			 $count = $series->count();
			 $this->assign("count",$count);
			 $content = $series->_get_content_infor_series();
			 $cou = count($content);
			 $this->assign("cou",$cou);
			 $this->assign("content",$content);
			 
			 //$Test = A("Test://Matches");
			 //$Test = R('Test://Matches');
			 //$Test = new \Test\Controller\MatchesController();
			 //$contents = $Test->ShowTest();
			 //$this->assign("contents",$contents);
			// $this->assign("num","5");
			// $this->assign("numnum","5");
			// $this->assign("isempty","");
			 
			 $this->display(); 	 */  
		   }	
	  
	     //显示分页
	    public function ShowPage(){
			G("begin");
			
			$a = I("aa","error");
			$b = I("bb","error");
			$this->assign("aa",$a);
			$this->assign("bb",$b);
			
			$series = D(DB_SERIES_TAB); 
			import('ORG.Util.Page'); // 导入分页类
		    $count = $series->count(); // 查询满足要求的总记录数
			$Page = new \Think\Page($count,2); // 实例化分页类 传入总记录数和每页显示的记录数
			$Page->setConfig('header','共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
			//$Page->lastSuffix = false;
			//$Page->setConfig('header','条记录');
            $Page->setConfig('first','第一页');
			$Page->setConfig('prev','上一页');
            $Page->setConfig('next','下一页');            
            $Page->setConfig('last','末页');
			$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
			$show = $Page->show();// 分页显示输出
			$limit = $Page->firstRow.','.$Page->listRows;
			$field = array(DB_SERIES_ID,DB_SERIES_MODE,DB_SERIES_LEVEL,DB_SERIES_STATE,DB_SERIES_NAME);
			$list = $series->limit($limit)->field($field)->select();
			$this->assign('list',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
			
			//$Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
			//$area = $Ip->getlocation('192.168.1.119'); // 获取某个IP地址所在的位置
			//dump($area);
			//echo $series->getLastSql();//测试SQL语句是否正确
			//dump($list); // 变量调试	
			/*$config = array(  'fontSize' => 30,    // 验证码字体大小   
			                     'length' => 3,     // 验证码位数   
			                     'useNoise' => false, // 关闭验证码杂点
			            );	
			$Verify = new \Think\Verify($config);
			$Verify->entry();*/
			
			$pagenow = $Page->firstRow/$Page->listRows;
			$this->assign('NowRow',$Page->firstRow);
			$this->assign('listRows',$Page->listRows);
			$this->assign('pagenow',$pagenow);
			
			$matches = A("Test/Matches");
			$content = $matches->ShowTest();
			$this->assign("content",$content);
			
			G("end");
			echo "<br>".G('begin','end',6).'s';
            
			$this->display(); // 输出模板
			}
			
		public function ShowMany(){
			 $ID = "3b5c723454ced02d1e9ad794f043714f";
			 $series = D(DB_SERIES_TAB);
			 $data = $series->_get_matches_infor_by_seriesId($ID);
			 $this->assign("data",$data);
			 //$targed = T('test/test');
			 //$this->display($targed);
			 $this->display();
			}	
			
		public function ShowGoto(){
			$arr = I('get.','','htmlspecialchars');
			//$second = I('param.2');
			//$thinkphp = $this->_param(1);
			//$arr["Id"] = $Id;
			//$arr["thinkphp"] = $thinkphp;
			//$this->assign("thinkphp",$thinkphp);
			$this->assign("content",$arr);
			//$this->assign("second",$second);
			$this->display();
			}	
			
		public function ShowImage(){
			$image = new \Think\Image();
			$imgsrc = "Public/Home/images/1.jpg";
			$imgtar = "Public/Home/images/2.jpg";
			$imgwater = "Public/Home/images/3.jpg";
			$image->open($imgsrc);
			$width = $image->width(); // 返回图片的宽度
			$height = $image->height(); // 返回图片的高度
			$type = $image->type(); // 返回图片的类型
			$mime = $image->mime(); // 返回图片的mime类型
			$size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
			$image->thumb(50, 50,\Think\Image::IMAGE_THUMB_CENTER)->save($imgtar);
			$image->open($imgsrc)->water($imgtar,\Think\Image::IMAGE_WATER_SOUTHEAST,100)->save($imgwater);
			//dump($width);
			//dump($height);
			//dump($type);
			//dump($mime);
			//dump($size);
			$test = array();
			$str = "";
			$tt = "1234567";
			$ss = "很好";
			for($i=0;$i<5;$i++){
                $str .= "<br>"."<br>";	
				$test[$i] = array();
				}
			$this->assign("test",$test);
			$test[0] = "<div style=\"background-color:#F00\">传递过去</div>";
			dump($test);	
			dump($str);
			$string = "<div style='background-color:#F00'>".$tt;
			$string2 = "</div>";
			$string3 = "<div style=\"background-color:#FF0\">234567$ss</div>";
			$string .= $string2.$string3;
			
			$st = array("ABC安琥","DEF大家","GHI中国");
			$sstt = "";
			for($k=0;$k<count($st);$k++){
				$sstt .= $st[$k];
				}
			dump($sstt);	
			$this->assign("string",$string);
			$this->assign("a",false);
			$this->assign("b",TRUE);
			$this->assign("region","马翔");
			$this->display();
			}	
	}