<?php
namespace plugins\Shenqing;//Demo插件英文名，改成你的插件英文就行了
use Common\Lib\Plugin;

/**
 * Shenqing
 */
class ShenqingPlugin extends Plugin{//Demo插件英文名，改成你的插件英文就行了

        public $info = array(
            'name'=>'Shenqing',//Demo插件英文名，改成你的插件英文就行了
            'title'=>'商家申请',
            'description'=>'申请',
            'status'=>1,
            'author'=>'',
            'version'=>'1.0'
        );
        
        public $has_admin=1;//插件是否有后台管理界面

        public function install(){//安装方法必须实现
            return true;//安装成功返回true，失败false
        }

        public function uninstall(){//卸载方法必须实现
            return true;//卸载成功返回true，失败false
        }
        
        //实现的footer钩子方法
        public function sqgouzi($param){

        		$config=$this->getConfig();
				cookie('config',$config);

                $shijian=time();//时间
				$this->assign("shijian",$shijian);
													
			
        	$this->display('widget');
        }


    }
