<?php

namespace Test\Model;
use Think\Model;

class NbateamModel extends Model {
    //protected $autoCheckFields =false;

	protected $trueTableName = 'nbateam';

	public function _get_nbateam_infor(){
		$field = array(DB_NBATEAM_NAME,DB_NBATEAM_LOGO,DB_NBATEAM_WIN,DB_NBATEAM_PARTITION);
		$order = array(DB_NBATEAM_ID => "DESC");
		$data = $this->field($field)->order($order)->limit(0,20)->select();
		return $data;
	}

 }