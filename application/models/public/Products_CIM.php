<?php
    class Products_CIM extends CI_Model {

        public function __construct(){
            $this->load->database();
        }

        public function submitOrderAjax(){
            
            if(count($this->input->post('order'))>0){
                $order = $this->input->post('order');

                $id         = $order['id'];
                $name       = $order['name'];
                $phone      = $order['phone'];
                $cartList   = $order['cart'];
                $subtotal   = $order['subtotal'];

                $data = array(
                    'id'  		=> $id,
                    'name'  	=> $name,
                    'phone'  	=> $phone,
                    'subtotal'  => $subtotal,
                    'status'   	=> '0',
                    'deleted'   => '0',
                );
    
                $result = $this->db->insert('orders', $data);

                if($result){
                    if(count($cartList)>0){
                        foreach($cartList as $cart_product){
    
                            $order_id = $cart_product['orderId'];
                            $product_id = $cart_product['uuid'];
                            $pastry = $cart_product['pastry'];
                            $pastry_id = $cart_product['pdbid'];
                            $price = $cart_product['price'];
                            $amount = $cart_product['amount'];
                            $total = $cart_product['total'];
    
                            $data2 = array(
                                'id'  		=> $product_id,
                                'order_id' 	=> $order_id,
                                'pastry_id' => $pastry_id,
                                'price'     => $price,
                                'amount'   	=> $amount,
                                'total'     => $total,
                            );
                
                            $result2 = $this->db->insert('product_orders', $data2);
                        }
                    }
    
                    return $result;
                }
                else {
                    return 0;
                }
            }
        }
    }
?>