<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
session_start();
class LoginController extends Controller {

    public function judge(){

    	$goods_id = $_GET["goods_id"];
    	if(!isset($_SESSION['user_account'])){
        	echo "<script>alert('请登陆再继续购买');</script>";
        	$this->redirect("Login:login");

        }else{
            $this->redirect("Order/order",array('goods_id'=>$goods_id));
        }

    }

    public function login_sub(){
    		$user_account = $_POST["user_account"];
        	$user_password = $_POST["user_password"];
        	$m = M("user");
        	$arr = $m->where("user_account='$user_account' and user_password='$user_password'")->select();
            if($arr != false){
                $_SESSION['user_account']=$user_account;
                $_SESSION['user_password']=$user_password;
                $this->display("Index:index");
        	}else{
        		echo "<script>alert('账号密码错误');
                window.location='".__ROOT__."/index.php/Home/Login/login';</script>";
            }
    }
    public function login(){
    	$this->display();
    }

    public function login_exit(){
        session_destroy();
        $this->display("Index:index");
    }

}  