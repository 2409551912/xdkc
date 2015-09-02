<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function user(){
    	// $m = M("user");
    	// $arr = $m ->select();
    	// $this -> assign("data",$arr);
     //    $this->display();

        $m = M("user");
        // $page_c = new \Think\Page();
        $count  = $m -> count();
        $page   = new \Think\Page($count,22);
        $show   = $page -> show();
        $list   = $m -> limit($page->firstRow,22)->select();
        $this-> assign("list",$list);
        $this->assign('page',$show);
        $this->display();
    }
    public function delete(){
    	$user_account = $_GET['user_account'];
    	$m = M("user");
    	$arr = $m -> where("user_account = ".$user_account) -> delete();
        $this->redirect("User/user");
    }
}