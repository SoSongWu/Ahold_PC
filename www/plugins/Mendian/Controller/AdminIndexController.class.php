<?php

namespace plugins\Mendian\Controller; //Demo���Ӣ�������ĳ���Ĳ��Ӣ�ľ�����
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

		$plugin_toupiao_model=M("mendian");//��ȡ���ݿ�

		$Mendianpiao_Question=$plugin_toupiao_model->select();
		
		$this->assign("Mendianpiao_Question",$Mendianpiao_Question);
		$this->display(":admin_index");
	}
	
	
	
	
	

	
}