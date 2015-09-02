<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function show(){
        $m = M("goods");
        if(isset($_GET['category_id'])){
            $arr = $m ->where("category_id = ".$_GET['category_id']) -> select();
        }else{
    	   $arr = $m -> select();
        }
        $m1 = M("category");
        $arr1 = $m1 -> select();
        $this->assign("data",$arr);
        $this->assign("data1",$arr1);
        $this->display();
    }

    public function consult(){

    	$category_id = $_GET['category_id'];
    	$m = M("goods");
    	$m1 =M("category");
    	$category_name = $m1 -> where("category_id=".$category_id) ->getfield("category_name");
    	$arr = $m ->where("category_id=".$category_id) -> select();
    	$this->assign("data",$arr);
    	$this->assign("category_name",$category_name);
        $this->display();

    }

    public function edit_view(){

    	$goods_id = $_GET['goods_id'];
    	$m = M("goods");
    	$arr = $m -> where("goods_id=".$goods_id) -> select();
    	$this -> assign("data",$arr);
        $this -> display();

    }

    public function edit(){

    	$goods_id = $_GET['goods_id'];
    	$m = M("goods");
    	$category_id = $m ->where("goods_id=".$goods_id) -> getfield('category_id');
 	   	$data['goods_id'] = $_POST['goods_id'];
	   	$data['goods_name'] = $_POST['goods_name'];
	   	$data['goods_price'] = $_POST['goods_price'];
    	$arr = $m -> where('goods_id='.$goods_id) -> save($data);
        $this->redirect("Goods/consult",array('category_id'=>$category_id));

    }

    public function add_view(){

    	$m = M("category");
    	$arr = $m -> select();
    	$this -> assign("data",$arr);
    	$this -> display();

    }

    public function delete(){

        $goods_id = $_GET['goods_id'];
        $m = M("goods");
        $category_id = $m ->where("goods_id=".$goods_id) -> getfield('category_id');
        $arr = $m -> where('goods_id='.$goods_id) -> delete();
        $this->redirect("Goods/consult",array('category_id'=>$category_id));

    }

    public function add(){

    	$upload = new \Think\Upload();
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg','png', 'jpeg');// 设置附件上传类型
		$upload->autoSub  = false;
        $upload->rootPath ="./Public/";// 设置附件上传目录
        $upload->savePath = "images/";// 设置附件上传目      
		if(!$arr = $upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getError());
 		}else{// 上传成功 获取上传文件信息
        $data['goods_pic'] =$arr['goods_img']['savepath'].$arr['goods_img']['savename'];
        $data['goods_id'] = $_POST['goods_id'];
        $data['goods_name'] = $_POST['goods_name'];
        $data['goods_price'] = $_POST['goods_price'];
        $data['category_id'] = $_POST['category_id'];
        $m = M("goods");
        $arr = $m -> add($data);
		$this->success('上传成功！');
 		}

        // $this -> redirect("Category/show");
    }

}