<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function goods(){
    	$category_id = $_GET['category_id'];
    	$m=M('goods');
    	$arr=$m->where('category_id = '.$category_id)->select();
    	$this->assign('data',$arr);
    	$this->assign('category_id',$category_id);
    	$this->display();
    }
}
?>