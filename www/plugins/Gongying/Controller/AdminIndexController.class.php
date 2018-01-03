<?php

namespace plugins\Gongying\Controller; //Demo插件英文名，改成你的插件英文就行了
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

		$plugin_toupiao_model=M("gying");//读取数据库

		$Gongyingpiao_Question=$plugin_toupiao_model->select();
		
		$this->assign("Gongyingpiao_Question",$Gongyingpiao_Question);
		$this->display(":admin_index");
	}
	
	
	
	
	

	
}