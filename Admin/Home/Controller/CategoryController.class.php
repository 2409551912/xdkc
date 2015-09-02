<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {

    public function show(){
    	$m = M("category");
    	$arr = $m -> select();
    	$this -> assign("data",$arr);
        $this -> display();
    }

    public function delete(){
    	$category_id = $_GET['category_id'];
    	$m = M("category");
    	$arr = $m -> where('category_id='.$category_id) -> delete();
        $this -> redirect("Category/show");
    }

    public function edit_view(){
    	$category_id = $_GET['category_id'];
    	$m = M("category");
    	$arr = $m -> where("category_id=".$category_id) ->select();
    	$this -> assign("data",$arr);
    	$this -> display();
    }

    public function edit(){
	   	$data['category_id'] = $_POST['category_id'];
	   	$data['category_name'] = $_POST['category_name'];
    	$m = M("category");
    	$arr = $m -> where('category_id='.$data['category_id']) -> save($data);
        $this -> redirect("Category/show");
    }

    public function consult(){
	   	$category_id = $_GET['category_id'];
    	$m = M("goods");
    	$m1 = M("category");
    	$category_name = $m1 -> where('category_id='.$category_id) -> getfield("category_name");
    	$arr = $m -> where('category_id='.$category_id) -> select();
    	$this -> assign("data",$arr);
    	$this -> assign("category_name",$category_name);
        $this -> display();
    }

    public function add_view(){
        $this -> display();
    }

    public function add(){
	   	$data['category_id'] = $_POST['category_id'];
	   	$data['category_name'] = $_POST['category_name'];	 	
    	$m = M("category");
    	$arr = $m -> add($data);
        $this -> redirect("Category/show");
    }

}
