<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function order(){
    	// $m = M("order");
    	// $m1 = M("goods");
    	// $arr = $m -> order("order_id desc") -> select();
    	// foreach ($arr as $n => $val) {
    	// 	$arr[$n]['voo']=$m1->where('goods_id='.$val['goods_id'])->select();
    	// 	$arr[$n]['total_price']=$arr[$n]['voo'][0]["goods_price"]*$arr[$n]['order_goods_amount'];
    	// }  
    	
    	// $this -> assign("data",$arr);
     //    $this->display();


        
        $m = M("order");
        $count  = $m -> count();
        $page   = new \Think\Page($count,22);
        $show   = $page -> show();
        $list   = $m -> order("order_id desc") -> limit($page->firstRow,22)->select();
        $m1 = M("goods");
        // $arr = $m -> order("order_id desc") -> select();
        foreach ($list as $n => $val) {
            $list[$n]['voo']=$m1->where('goods_id='.$val['goods_id'])->select();
            $list[$n]['total_price']=$arr[$n]['voo'][0]["goods_price"]*$arr[$n]['order_goods_amount'];
        }  
        
        $this-> assign("list",$list);
        $this->assign('page',$show);
        $this->display();

        // $m = M("user");
        // $page_c = new \Think\Page();
        // $count  = $m -> count();
        // $page   = new \Think\Page($count,2);
        // $show   = $page -> show();
        // $list   = $m -> limit($page->firstRow,2)->select();
        // $this-> assign("list",$list);
        // $this->assign('page',$show);
        // $this->display();
    }
    public function status(){
    	$order_id = $_GET['order_id'];
    	$m = M("order");
    	$arr = $m -> where("order_id =".$order_id) -> select(); 
    	$data['order_status'] = $arr['good_status']+1;
    	$m -> where("order_id = ".$order_id) ->save($data);
    	$this -> redirect("Order/order");
    }
}