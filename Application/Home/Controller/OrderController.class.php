<?php
namespace Home\Controller;
use Think\Controller;
session_start();
header("Content-type: text/html; charset=utf-8");
class OrderController extends Controller {
    
    public function order(){
        date_default_timezone_set("PRC");
        $order_time=date('m-d',mktime())."&nbsp&nbsp".date('H:i',mktime());
        $this->assign('order_time',$order_time);
    	$goods_id = $_GET['goods_id'];
    	$m = M("goods");
    	$arr = $m->where("goods_id=".$goods_id)->select();
        $this->assign('data',$arr);
    	$this->display();
    }

    public function add_order(){
        date_default_timezone_set("PRC");
        $order['order_time'] = date('m-d',mktime())."&nbsp&nbsp".date('H:i',mktime());
        $order['goods_id'] = $_GET['goods_id'];
        $order['order_goods_amount'] = $_POST['order_goods_amount'];
        $order['user_account'] = $_SESSION["user_account"];
        $order['order_status'] = 0;
        $m=M('order');
        $arr=$m->add($order);
        if($arr != false){
            echo "<script>alert('下单成功');window.location='".__ROOT__."/index.php/Home/User/host'</script>";
        }
    }

    public function status(){
        $order_id = $_GET['order_id'];
        $m = M("order");
        $arr = $m -> where("order_id =".$order_id) -> select(); 
        $data['order_status'] = $arr[0]['order_status']+1;
        $m -> where("order_id = ".$order_id) ->save($data);
        $this -> redirect("User/host");
    }


}