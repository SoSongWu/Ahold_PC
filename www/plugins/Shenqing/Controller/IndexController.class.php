<?php

namespace plugins\Shenqing\Controller; //Demo插件英文名，改成你的插件英文就行了
use Api\Controller\PluginController;//插件控制器基类

class IndexController extends PluginController{
	

	
	function index(){
		$this->display("index");
	}
	
	function sqgouzi(){
		       
        if(!empty($_POST)){
			
	
         $User = M("sqdb"); // 实例化User对象
             // 根据表单提交的POST数据创建数据对象
         if($User->create()){
           $result = $User->add(); // 写入数据到数据库 
         if($result){
          // 如果主键是自动增长型 成功后返回值就是最新插入的值
          $insertId = $result;
                    }
             }
		
			header("refresh:2;url=shangjiashenqing.html");
            echo "<script language=javascript>alert('提交成功！');history.back();</script>";
            

		}
		  else{
			 cookie('shenqing'.$_POST['biaoqian'],'true',86400); // 默认一天指定cookie保存时间
			 $this->redirect("article/index?g=&id=".$_POST['biaoqian']."#shenqing","");
		}
		

	}
    public function avatar_upload(){
    	$config=array(
			'rootPath' => './'.C("UPLOADPATH"),
			'savePath' => './avatar/',
			'maxSize' => 512000000,//500K
			'saveName'   =>    array('uniqid',''),
			'exts'       =>    array('jpg', 'png', 'jpeg'),
			'autoSub'    =>    false,
    	);
    	$upload = new \Think\Upload($config,'Local');//先在本地裁剪
    	$info=$upload->upload();
    	//开始上传
    	if ($info) {
    	//上传成功
    	//写入附件数据库信息
    		$first=array_shift($info);
    		$file=$first['savename'];
    		session('avatar',$file);
    		$this->ajaxReturn(sp_ajax_return(array("file"=>$file),"上传成功！",1),"AJAX_UPLOAD");
    	} else {
    		//上传失败，返回错误
    		$this->ajaxReturn(sp_ajax_return(array(),$upload->getError(),0),"AJAX_UPLOAD");
    	}
    }	


}
