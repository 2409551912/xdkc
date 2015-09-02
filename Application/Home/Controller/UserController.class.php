<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
session_start();
class UserController extends Controller {
    public function host(){

    	$user_account = $_SESSION['user_account'];
    	$m = M('user');
    	$arr = $m->where("user_account=".$user_account)->select();
    	$this->assign('user',$arr);
    	$m1 = M('order');
    	$m2 = M('goods');
    	$arr1 = $m1->where("user_account=".$user_account)->order('order_id desc')->select();
    	foreach($arr1 as $n => $val){
    		$arr1[$n]['voo']=$m2->where('goods_id='.$val['goods_id'])->select();
            $a=$m2->where('goods_id='.$val['goods_id'])->select();
            $c=$arr1[$n]['voo'][0]['goods_price']*$arr1[$n]['order_goods_amount'];
            
            array_push($arr1[$n]['voo'][0], $c);
            $this->assign('data',$c);
        }
    	$this->assign('order',$arr1);   			
    	$this->display();

    }
    public function user(){
        $ull ="..".__ROOT__."/Public/icon/1.jpg";   //删除文件时这路径要注意
        unlink($ull);
        $user_account = $_SESSION['user_account'];
    $m = M('user');
    $arr = $m->where("user_account=".$user_account)->select();
    $this->assign("data",$arr);
    $this->display();

    }
    public function mod(){

        $user_account = $_SESSION["user_account"];
        $m=M("user");
        $user_icon = $m -> where("user_account=".$user_account) -> getField("user_icon");
        $ull ="..".__ROOT__."/Public/".$user_icon;
        $data["user_nickname"] = $_POST['user_nickname'];
        $data["user_phone"]   = $_POST['user_phone'];
        $data["user_address"] = $_POST['user_address'];

        $upload = new \Think\Upload();
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('jpg','png', 'jpeg');// 设置附件上传类型
        $upload->autoSub  = false;
        $upload->rootPath ="./Public/";// 设置附件上传目录
        $upload->savePath = "icon/";// 设置附件上传目      
        if($arr = $upload->upload()) {// 上传错误提示错误信息
            // 上传成功 获取上传文件信息
            $data['user_icon'] =$arr['icon']['savepath'].$arr['icon']['savename'];
            if($user_icon != "icon/xdkc.jpg"){
            unlink($ull);
        }
        }
        $result = $m->where("user_account=".$user_account)->save($data);
        if ($result == 1) {
            echo "<script>alert('修改成功');</script>";
            echo "<script>location.href='".__ROOT__."/index.php/Home/User/user.html'</script>";
        }

    }

    public function register(){
        $this->display();
    }
    public function register_action(){
            $data['user_icon'] = "icon/xdkc.jpg";
            $data['user_account']=$_POST["user_account"];
            $data['user_password']=$_POST["user_password"];
            $data['user_nickname']=$_POST["user_nickname"];
            $data['user_phone']=$_POST["user_phone"];
            $data['user_address']=$_POST["user_address"];
            $m=M('user');
            $result=$m->add($data);
            $this->redirect("Login/login");
    }
}