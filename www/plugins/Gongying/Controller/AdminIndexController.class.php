<?php

namespace plugins\Gongying\Controller; //Demo���Ӣ�������ĳ���Ĳ��Ӣ�ľ�����
use Api\Controller\PluginController;//�������������

class AdminIndexController extends PluginController{
	
	function _initialize(){
		$adminid=sp_get_current_admin_id();//��ȡ��̨����Աid�����ж��Ƿ��¼
		if(!empty($adminid)){
			$this->assign("adminid",$adminid);
		}else{
			//TODO no login
		}
	}
	
	function index(){

		$plugin_toupiao_model=M("gying");//��ȡ���ݿ�

		$Gongyingpiao_Question=$plugin_toupiao_model->select();
		
		$this->assign("Gongyingpiao_Question",$Gongyingpiao_Question);
		$this->display(":admin_index");
	}
	
	
	
	
	

	
}