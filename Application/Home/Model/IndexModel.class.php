<?php
namespace Home\Model;

use Think\Model;
class IndexModel extends Model {
    /**
	  * 分页列表
	  */
     public function queryByList(){
        $m = M('excel');
	 	$sql = "select * from __PREFIX__excel order by user_id asc";
		return $m->query($sql);
	 }
	
}