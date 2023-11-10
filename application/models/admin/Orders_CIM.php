<?php
    class Orders_CIM extends CI_Model {

        public function __construct(){
            $this->load->database();
        }

        public function getOrders($all){

            //$index = $this->input->post('index');

			$orders = array();	
            $cart   = array();

            if($all){
                $result = $this->db->get_where('orders',array('deleted'=>'0', 'status'=>'1'));
            }
            else {
                $result = $this->db->get_where('orders',array('deleted'=>'0', 'status'=>'0'));
            } 

			if($result->num_rows() >= 0){
				$orders['orders'] = $result->result_array();
			}

            foreach($orders['orders'] as $index=>$order){


                $this->db->select('p.id, po.pastry_id, p.product_name, po.price, po.amount, po.total');
                $this->db->from('product_orders po');
                $this->db->join('products p', 'po.pastry_id = p.id', 'left');
                $this->db->where('po.order_id', $order['id']);
                $result2 = $this->db->get(); 

                if($result2->num_rows() >= 1){
                    $cart['cart'] = $result2->result_array();
                }

                $cart = $cart['cart'];
                $orders['orders'][$index]['cart'] = $cart;
                $cart = array();
            }

			return $orders;
		}

        public function AllProducts($ignoreStatus = false){

            $AllProducts = array();

            if($ignoreStatus){
                $result = $this->db->get_where('products',array('deleted'=>'0'));
            }
            else {
                $result = $this->db->get_where('products',array('deleted'=>'0', 'status'=>'1'));
            }          

			if($result->num_rows() >= 1){
				$AllProducts['AllProducts'] = $result->result_array();
			}

            return $AllProducts;
        }

        public function delOrderAjax(){

            $id = $this->input->post('orderId');
			$data = array(
				'deleted' => '1'
			);
				
			$this->db->where('id', $id);
			$deleted = $this->db->update('orders', $data);		

			return $deleted;
        }

        public function markOrderReadyAjax(){
 
            $id = $this->input->post('orderId');
			$data = array(
				'status' => '1'
			);
				
			$this->db->where('id', $id);
			$updated = $this->db->update('orders', $data);		

			return $updated;           
        }
    }

?>