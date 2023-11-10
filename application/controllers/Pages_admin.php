<?php 

    class Pages_admin extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model("admin/Orders_CIM", "orders_cim"); 
        }

        public function page($page = 'signin')
        {
            if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){

				//echo 'Page not exist!';
				show_404();  
			}            

            if($this->session->userdata('admin_id')){

                switch($page){
                    case 'orders': {
						$this->session->unset_userdata('orders');
						$orders = $this->orders_cim->getOrders(false);   
						$this->session->set_userdata($orders);                        
                    }
                    break;
                    case 'manage-products':{
                        $this->session->unset_userdata('AllProducts');
						$AllProducts = $this->orders_cim->AllProducts(true);   
						$this->session->set_userdata($AllProducts);   
                    }
                    case 'sales-history': {
						$this->session->unset_userdata('orders');
						$orders = $this->orders_cim->getOrders(true);   
						$this->session->set_userdata($orders);                        
                    }
                    break;
                    default:
                    break;
                }

            }

            $this->load->view('admin/'.$page);
        }        
    }
?>