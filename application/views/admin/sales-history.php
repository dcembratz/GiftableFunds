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

  <title>Heavenly Pastries | Sales History</title>

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
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px" y="0px" viewBox="0 0 512.009 512.009" style="enable-background:new 0 0 512.009 512.009;"
              xml:space="preserve">
              <g>
                <g>
                  <path d="M370.634,395.38l4.715-0.917c5.547-1.067,136.661-26.773,136.661-95.808c0-21.461-6.933-36.8-20.651-45.611
			c-19.797-12.757-47.531-7.168-64.683-1.707v-16.683c0-17.643-14.357-32-32-32H96.009c-17.643,0-32,14.357-32,32v21.333
			c0,63.637,29.675,122.027,78.827,160H10.676c-4.309,0-8.213,2.603-9.856,6.592c-1.664,3.989-0.747,8.576,2.304,11.627
			l23.915,23.915c14.123,14.101,32.875,21.867,52.8,21.867h330.987c19.648,0,38.891-7.979,52.8-21.867l23.915-23.915
			c3.051-3.051,3.968-7.637,2.304-11.627c-1.664-3.989-5.547-6.592-9.856-6.592H347.807
			C356.02,409.673,363.593,402.783,370.634,395.38z M425.418,274.313c13.483-5.12,40.405-12.373,54.4-3.307
			c7.317,4.672,10.859,13.739,10.859,27.648c0,35.477-59.307,59.221-98.496,69.931C410.783,340.809,422.324,308.596,425.418,274.313
			z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M328.415,113.332c17.344-21.675,17.344-55.616,0-77.291c-3.733-4.608-10.432-5.312-14.997-1.664
			c-4.608,3.669-5.333,10.389-1.664,14.997c11.008,13.717,11.008,36.907-0.043,50.667c-17.365,21.653-17.365,55.616-0.021,77.291
			c2.133,2.645,5.205,4.011,8.341,4.011c2.347,0,4.715-0.768,6.677-2.347c4.608-3.669,5.333-10.389,1.664-14.997
			C317.364,150.281,317.364,127.092,328.415,113.332z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M264.308,113.332c17.365-21.675,17.365-55.616,0-77.291c-3.669-4.587-10.368-5.333-14.997-1.664
			c-4.608,3.669-5.333,10.389-1.664,14.997c10.987,13.717,10.987,36.907-0.021,50.667c-17.365,21.653-17.365,55.616,0,77.291
			c2.112,2.645,5.205,4.011,8.341,4.011c2.325,0,4.693-0.768,6.656-2.347c4.587-3.669,5.333-10.389,1.664-14.997
			C253.3,150.281,253.3,127.092,264.308,113.332z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M200.394,113.311c17.344-21.675,17.344-55.616,0-77.291c-3.669-4.587-10.389-5.355-14.997-1.643
			c-4.587,3.669-5.333,10.389-1.643,14.976c10.987,13.717,10.987,36.907-0.021,50.667c-17.387,21.675-17.387,55.637-0.021,77.312
			c2.112,2.624,5.205,3.989,8.341,3.989c2.325,0,4.693-0.768,6.656-2.347c4.608-3.669,5.333-10.389,1.664-14.997
			C189.385,150.26,189.385,127.071,200.394,113.311z" />
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
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
                <li class="nav-item">
                  <a class="nav-link" href="orders"> Orders</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="manage-products"> Manage Products </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="sales-history"> Sales History </a>
                </li>
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
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
              </thead> 

              <tbody id="orderMainTBody">

                <?php 

                    $total = 0;

                    if(isset($orders)){
                      if(count($orders)>0){
                        for($i = 0; $i < count($orders); $i++){ 

                          $status = 'Delivered';

                          if($orders[$i]['status'] == '0'){
                            $status = 'Pending';
                          }

                          $total += $orders[$i]['subtotal'];
                          $s_date = date("F j, Y", strtotime($orders[$i]['created_on']));
                          $s_time = date("h:i A", strtotime($orders[$i]['created_on']));

                          echo '<tr id="order'.$orders[$i]['cid'].'">'.
                                '<td><button class="btn btn-outline-dark btn-xs" data-toggle="collapse" data-target="#demo'.$orders[$i]['cid'].'" class="accordion-toggle">+</button></td>'.
                                '<td>'.$orders[$i]['name'].'</td>'.
                                '<td>'.$orders[$i]['phone'].'</td>'.
                                '<td>'.$status.'</td>'.
                                '<td>$ '.number_format((float)$orders[$i]['subtotal'],2,'.','').'</td>'.
                                '<td>'.$s_date.'</td>'.
                                '<td>'.$s_time.'</td>'.
                                // '<td>'.
                                //     '<button data-fnx="msg" data-phone="'.$orders[$i]['phone'].'" data-c_name="'.$orders[$i]['name'].'" class="btn btn-warning msg"><i class="fa fa-envelope"></i></button>&nbsp;'.
                                //     '<button data-fnx="cal" data-phone="'.$orders[$i]['phone'].'" class="btn btn-info"><i class="fa fa-phone"></i></button>&nbsp;'.
                                //     '<button data-fnx="orderReady" data-orderdbid="'.$orders[$i]['id'].'" data-orderid="'.$orders[$i]['cid'].'" class="btn btn-success"><i class="fa fa-check"></i></button>&nbsp;'.
                                //     '<button  data-fnx="delOrder" data-deldbid="'.$orders[$i]['id'].'" data-delid="'.$orders[$i]['cid'].'" class="btn btn-danger del"><i class="fa fa-close"></i></button>'.
                                // '</td>'.
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
                                                  '<td>$ '.number_format((float)$cart[$p]['total'],2,'.','').'</td>'.
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
          <div class="col-md-12">
            <?php 
              if(isset($orders)){
                echo '<h4>Total Sales: $'.number_format((float)$total,2,'.','').'</h4>';
              }
            ?>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- footer section -->
   <!-- <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; <span id="currentDate"></span> All Rights Reserved.
        <a href="index">GiftableFunds</a>
      </p>
    </div>
  </section> -->
  <!-- footer section -->
 


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <!-- <script type="text/javascript" src="<?php //echo base_url(); ?>assets/js/orders.js"></script> -->

</body>

</html>