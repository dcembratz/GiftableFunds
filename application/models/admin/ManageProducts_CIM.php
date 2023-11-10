<?php
    class ManageProducts_CIM extends CI_Model {

        public function __construct(){
            $this->load->database();
        }

        public function addProductAjax(){
            $data = array(
				'product_name'		=> $this->input->post('product'), 
				'price'  		    => $this->input->post('price'),		
                'image'  		    => 'assets/images/placeholder1.jpg',				
				'status'  			=> '1',
				'deleted'   		=> '0',
			);

			$result = $this->db->insert('products', $data);
            
			return $result;
        }

        public function updateProductAjax(){
            $id = $this->input->post('productId');
			$data = array(
                'product_name' => $this->input->post('product_name'),
                'price'         => $this->input->post('price'),
				'status'        => $this->input->post('status'),
			);
				
			$this->db->where('id', $id);
			$updated = $this->db->update('products', $data);		

			return $updated;
        }

        public function delProductAjax(){
            $id = $this->input->post('orderId');
			$data = array(
				'deleted' => '1'
			);
				
			$this->db->where('id', $id);
			$deleted = $this->db->update('products', $data);		

			return $deleted;
        }

        public function getProductByIdAjax(){  
            $productId = $this->input->post('productId');

            $product = array();	
			$result = $this->db->get_where('products',array('id'=>$productId, 'deleted'=>'0'));

			if($result->num_rows() >= 0){
				$product['product'] = $result->result_array();
			}

            return $product;
        }

        public function updateImageLinkAjax(){ 

			$id = $this->input->post('id');

			$data = array(
				'image'    => $this->input->post('image')
			);

            $this->db->where('id', $id);
            $updated = $this->db->update('products', $data);		
    
            return $updated; 
		}
    }
?>