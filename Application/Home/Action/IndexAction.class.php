<?php
namespace Home\Action;

class IndexAction extends BaseAction {
	/**
	 * 跳到首页
	 */
    public function index(){
        $user = D('Home/Index');
        $data = $user->queryByList();
        $this->assign('data',$data);
        $this->display("/index");
    }
    /**
     * 导出
     */
    public function export(){
        $user = D('Home/Index');
        $data = $user->queryByList();
        $subject="Excel导出测试";
        $title=array("id","姓名","手机号码","性别","email");
        exportExcel($data,$title,$subject); 
    }
}