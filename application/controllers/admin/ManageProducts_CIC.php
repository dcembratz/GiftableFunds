<?php
    class ManageProducts_CIC extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model("admin/ManageProducts_CIM", "manageproducts_cim");
        }

        public function addProduct(){
			header('Content-Type: application/json');
			$result = $this->manageproducts_cim->addProductAjax(); 
			echo json_encode($result);
		} 

        public function delProduct(){
            header('Content-Type: application/json');
			$result = $this->manageproducts_cim->delProductAjax(); 
			echo json_encode($result);
        }

        public function getProductById(){
            header('Content-Type: application/json');
			$result = $this->manageproducts_cim->getProductByIdAjax(); 
			echo json_encode($result);
        }

        public function updateProduct(){
            header('Content-Type: application/json');
			$result = $this->manageproducts_cim->updateProductAjax(); 
			echo json_encode($result);
        }

        public function updateImageLink(){
            header('Content-Type: application/json');
			$result = $this->manageproducts_cim->updateImageLinkAjax(); 
			echo json_encode($result);
        }

        public function uploadProductImage(){

			if($_FILES['e_image']['name'] != '')	{

				$dots = explode(".", $_FILES['e_image']['name']);
				$type = '.' . $dots[(count($dots)-1)];

				$new_image_name = time() . $type;

				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
				$config['file_name'] = $new_image_name;
				$config['max_size'] = '10240'; 
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['$min_width'] = '0';
				$config['min_height'] = '0';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('e_image')){
					$e_image = 'assets/images/'.$new_image_name;
				}
				else {
					$e_image = '';
				}		

				echo json_encode(array('e_image'=>$e_image));		
			}
		} 
    }
?>