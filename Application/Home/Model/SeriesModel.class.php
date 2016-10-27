<?php

namespace Common\Model;
use Think\Model;

class SeriesModel extends Model {
   
    protected $trueTableName = 'series';
    
    public function _get_content_infor_series(){
        /*$result = array(
                         DB_ARTICLECONTENT_ISSUINGUNIT,
                         DB_ARTICLECONTENT_ID,
                         DB_ARTICLECONTENT_PUBLISHTIME,
                         DB_ARTICLECONTENT_TEXTTITLE,
                         DB_ARTICLECONTENT_COVERPICTURE
                       );
       $order = array(
                         DB_ARTICLECONTENT_PUBLISHTIME=>"desc"
                     );*/
	   //$con[DB_MATCH_ID] = "10dd2a441ad2522290b700b7831f993c";				 
        $where[DB_SERIES_STARTTIME] = array("gt","2014-06-17 14:40:00");
		$where[DB_SERIES_ENDTIME] = array("lt","2014-11-27 19:00:00");
		//$con["_logic"] = "OR";
		//$con[DB_SERIES_MODE] = array("like","团体%");
		$field = array(DB_SERIES_MODE,DB_SERIES_STATE,DB_SERIES_STARTTIME);
		$order = array(DB_SERIES_STARTTIME => "DESC");
		return $this->where($where)->field($field)->order($order)->limit(0,3)->select();
    }

   public function _get_content_infor_by_id($ID){
      $where = array(DB_ARTICLECONTENT_ID => $ID); 
      return $this->where($where)->find();

   }
   
   public function _get_matches_infor_by_seriesId($ID){
	    //$where[$matches(DB_MATCH_SERIESID)] = $series(DB_SERIES_ID);
	    //$where = array($matches[DB_MATCH_SERIESID] == $series[DB_SERIES_ID]);
		$where = array(DB_MATCH_SERIESID => $ID);
		//$table = array(DB_MATCH_TAB);
		$field = array(DB_MATCH_NAME,DB_MATCH_STARTTIME);
		$order = array(DB_MATCH_STARTTIME);
		
		//$join = DB_MATCH_TAB."on".DB_MATCH_SERIESID."=".DDB_SERIES_ID;
		//$data = $this->join($join)->select();
		
		$data = $this->table(DB_MATCH_TAB)->where($where)->field($field)->order($order)->limit(0,5)->select();
		return $data;
	   }
	   
	  public function ShowTests(){
		  $content = array(
			        array(A,B,C,D),
					array(E,F,G,H),
					array(I,J,K,L)
			);
			return $content;
		  } 
    /*public function getRoleByRoleid($rid){
            return $this->find($rid);
        }
        
        public function selectDeptByName($name){
            $cond = array(DB_DEPARTMENT_NAME => $name);
            return $this->where($cond)->select();
        }*/

}