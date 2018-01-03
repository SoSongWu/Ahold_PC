<?php

namespace plugins\Shenqing\Controller; //Demo插件英文名，改成你的插件英文就行了
use Api\Controller\PluginController;//插件控制器基类

class AdminIndexController extends PluginController{
	
	function _initialize(){
		$adminid=sp_get_current_admin_id();//获取后台管理员id，可判断是否登录
		if(!empty($adminid)){
			$this->assign("adminid",$adminid);
		}else{
			//TODO no login
		}
	}
	
	function index(){

		$plugin_shenqing_model=M("sqdb");//读取数据库

		$Shenqingpiao_Question=$plugin_shenqing_model->select();
		
		$this->assign("Shenqingpiao_Question",$Shenqingpiao_Question);
		$this->display(":admin_index");
	}
	
	
	
	
	

	
}
