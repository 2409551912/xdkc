<?php
namespace Home\Controller;
use Think\Controller;
class PostController extends Controller {

    public function post(){
        $m1 = M("post");
        $m2 = M("user");
        
        $arr = $m1 -> order('post_id desc') -> select();
        foreach($arr as $n => $val){
            $arr[$n]['voo']=$m2->where('user_account='.$val['user_account'])->select();
        }
        $this->assign("data",$arr);
        
        $m3 = M("reply");
        $arr1 = $m3 -> select();
        foreach($arr1 as $n => $val){
           $arr1[$n]['voo']=$m2->where('user_account='.$val['user_account'])->select();
        }
        $this->assign("data1",$arr1);

        if(isset($_GET['id'])){

        $post_id = $_GET['id'];
        $m = M("post");
        $post_favour = $m->where("post_id = ".$post_id)->getField('post_favour');
        $data["post_favour"] = $post_favour + 1;
        $m->where("post_id = ".$post_id)->save($data);
        $data["post_favour"] = $m -> where("post_id =".$post_id)->getField('post_favour');
         $this -> ajaxReturn($data['post_favour']);
        }
    
        $this->display();

    }

    public function post_deliver(){
        $this->display();
    }
    public function deliver_action(){

        date_default_timezone_set("PRC");
        $data['post_time']=date('m-d',mktime())."&nbsp&nbsp".date('H:i',mktime());
        $data['post_con']=$_POST['post_con'];
        $data['user_account']=$_SESSION['user_account'];
        $m = M('post');
        $m->add($data);
        $this->redirect("Post/post");

    }

     public function favour(){
        $post_id = $_GET['id'];
        $m = M("post");
        $post_favour = $m->where("post_id = ".$post_id)->getField('post_favour');
        $data["post_favour"] = $post_favour + 1;
        $m->where("post_id = ".$post_id)->save($data);
        $post_favour = $m -> where("post_id =".$post_id)->getField('post_favour');
        $this -> assign("post_favour",$post_favour);
    }
    public function reply(){

        $data['user_account'] = $_SESSION['user_account'];
        $data['post_id'] = $_GET['post_id'];
        $data['reply_con'] = $_POST['reply_con'];
        $m = M("reply");
        $result = $m -> add($data);
        $this->redirect("Post/post",array('post_id'=>"a"));
    }


}