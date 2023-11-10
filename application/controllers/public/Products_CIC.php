<?php
    class Products_CIC extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model("public/Products_CIM", "products_cim");
        }

        public function submitOrder(){
			header('Content-Type: application/json');
			$result = $this->products_cim->submitOrderAjax();
			echo json_encode($result);
		} 
    }
?>