<?php

namespace plugins\Gongying\Controller; //Demo���Ӣ�������ĳ���Ĳ��Ӣ�ľ�����
use Api\Controller\PluginController;//�������������

class IndexController extends PluginController{
	

	
	function index(){
		$this->display("index");
	}
	
	function gying(){
		       
        if(!empty($_POST)){
			
	
         $User = M("gying"); // ʵ����User����
             // ���ݱ��ύ��POST���ݴ������ݶ���
         if($User->create()){
           $result = $User->add(); // д�����ݵ����ݿ� 
         if($result){
          // ����������Զ������� �ɹ��󷵻�ֵ�������²����ֵ
          $insertId = $result;
                    }
             }
		
			header("refresh:3;url=/");
            print('�����ύ�ɹ�<br>������Զ���ת����ҳ~~~');

		}
		  else{
			 cookie('toupiao'.$_POST['biaoqian'],'true',86400); // Ĭ��һ��ָ��cookie����ʱ��
			 $this->redirect("article/index?g=&id=".$_POST['biaoqian']."#toupiao","");
		}
		

	}
	


}