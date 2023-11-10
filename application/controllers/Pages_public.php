<?php 

    class Pages_public extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model("admin/Orders_CIM", "orders_cim");
        }

        public function Page($page='index')
        {
            if(!file_exists(APPPATH.'views/'.$page.'.php')){

				//echo 'Page not exist!';
				show_404();  
			}

            switch($page){
                case 'index':{
                    $this->session->unset_userdata('AllProducts');
                    $AllProducts = $this->orders_cim->AllProducts();   
                    $this->session->set_userdata($AllProducts);   
                }
                break;
                default:
                break;
            }

            $this->load->view($page);
        }
    }
?>