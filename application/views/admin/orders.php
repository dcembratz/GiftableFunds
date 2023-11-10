<?php 

    if($this->session->userdata('admin_id')){
        
      $orders = array();

      if($this->session->userdata('orders')){    
        $orders = $this->session->userdata('orders');     
      }

      // echo '<pre>';
      // print_r($orders);
      // echo '</pre>';

    }
    else {
        redirect('admin/signin');
    }

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Heavenly Pastries | Orders</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />

  <!-- toastr Notifications -->      
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>      

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- font awesome style -->
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />

  <style>
    .hiddenRow {
        padding: 2px 10px !important;
    }
  </style>
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="../index">
            <span>
             GiftableFunds
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="orders"> Orders</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manage-products"> Manage Products </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="sales-history"> Sales History </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="view_contact_requests">Reports From Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link last_link" href="../auth/logout"> Logout </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="" style="background-color: #ffffff; min-height: 900px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              
            <br/><br/><br/>

            <input type="hidden" id="base" value="<?php echo base_url(); ?>">
            <table class="table table-condensed table-striped" id="ordersMTable">
              <thead id="ordersTHead">
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Sub total</th>
                    <th>Options</th>
                  </tr>
              </thead> 

              <tbody id="orderMainTBody">

                <?php 
                    if(isset($orders)){
                      if(count($orders)>0){
                        for($i = 0; $i < count($orders); $i++){ 

                          $status = 'Done';

                          if($orders[$i]['status'] == '0'){
                            $status = 'Pending';
                          }

                          echo '<tr id="order'.$orders[$i]['cid'].'">'.
                                '<td><button class="btn btn-outline-dark btn-xs" data-toggle="collapse" data-target="#demo'.$orders[$i]['cid'].'" class="accordion-toggle">+</button></td>'.
                                '<td>'.$orders[$i]['name'].'</td>'.
                                '<td>'.$orders[$i]['phone'].'</td>'.
                                '<td>'.$status.'</td>'.
                                '<td>$ '.number_format((float)$orders[$i]['subtotal'],2,'.','').'</td>'.
                                '<td>'.
                                    '<button data-fnx="msg" data-phone="'.$orders[$i]['phone'].'" data-c_name="'.$orders[$i]['name'].'" class="btn btn-warning msg"><i class="fa fa-envelope"></i></button>&nbsp;'.
                                    '<button data-fnx="cal" data-phone="'.$orders[$i]['phone'].'" class="btn btn-info"><i class="fa fa-phone"></i></button>&nbsp;'.
                                    '<button data-fnx="orderReady" data-orderdbid="'.$orders[$i]['id'].'" data-orderid="'.$orders[$i]['cid'].'" class="btn btn-success"><i class="fa fa-check"></i></button>&nbsp;'.
                                    '<button  data-fnx="delOrder" data-deldbid="'.$orders[$i]['id'].'" data-delid="'.$orders[$i]['cid'].'" class="btn btn-danger del"><i class="fa fa-close"></i></button>'.
                                '</td>'.
                               '</tr>';

                          echo '<tr><td colspan="12" class="hiddenRow">
                                  <div class="accordian-body collapse" id="demo'.$orders[$i]['cid'].'"> 
                                    <table class="table table-striped">
                                      <thead>
                                        <tr class="info" style="background-color: #d9edf7;">
                                          <th>Product</th>
                                          <th>Price</th>
                                          <th>Amount</th>		
                                          <th>Total</th>	
                                        </tr>
                                      </thead>                                      
                                      <tbody>';

                                        $cart = $orders[$i]['cart'];
                                        for($p = 0; $p < count($cart); $p++){
                                          echo '<tr>'.
                                                  '<td>'.$cart[$p]['product_name'].'</td>'.
                                                  '<td>$ '.number_format((float)$cart[$p]['price'],2,'.','').'</td>'.
                                                  '<td>'.$cart[$p]['amount'].'</td>'.
                                                  '<td>$ '.number_format((float)$cart[$p]['total'],2,'.','').'US</td>'.
                                                '</tr>';
                                        }

                          echo        '</tbody>
                                    </table>
                                  </div> 
                                </td></tr>';
                        }
                      }
                    }

                ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- footer section -->
  <section class="container-fluid footer_section" style="border-top: 4px solid #e8f0ee;">
    <div class="container">
      <p>
        &copy; <span id="currentDate"></span> All Rights Reserved. 
        <a href="../index">GiftableFunds</a>
      </p>
    </div>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/orders.js"></script>

</body>

</html>