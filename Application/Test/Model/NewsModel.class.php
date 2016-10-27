<?php

namespace Test\Model;
use Think\Model;

class NewsModel extends Model {
    //protected $autoCheckFields =false;

	protected $trueTableName = 'news';

	public function _get_infor(){
		//$field = array(DB_NBATEAM_NAME,DB_NBATEAM_LOGO);
		//$order = array(DB_NBATEAM_ID => "DESC");
		//$data = $this->field($field)->order($order)->limit(0,5)->select();
		$data = $this->limit(0,5)->select();
		return $data;
	}

 }