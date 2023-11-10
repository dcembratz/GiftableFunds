<?php
    class Orders_CIC extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model("admin/Orders_CIM", "orders_cim");
        }

        public function getOrders(){
			header('Content-Type: application/json');
			$result = $this->orders_cim->getOrders();
			echo json_encode($result);
		} 

        public function delOrder(){
			header('Content-Type: application/json');
			$result = $this->orders_cim->delOrderAjax(); 
			echo json_encode($result);
		} 

        public function markOrderReady(){
            header('Content-Type: application/json');
			$result = $this->orders_cim->markOrderReadyAjax();
			echo json_encode($result);
        }
    }
?>