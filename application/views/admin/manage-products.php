<?php 

    if($this->session->userdata('admin_id')){
        
      $AllProducts = array();

      if($this->session->userdata('AllProducts')){    
        $AllProducts = $this->session->userdata('AllProducts');     
      }
      
        // echo '<pre>';
        // print_r($AllProducts);
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

  <title>Heavenly Pastries | Manage Products</title>

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
  <link href="<?php echo base_url(); ?>assets/css/manage-product.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />

  <style>
    .login_btn {
      display: inline-block;
      padding: 10px 40px;
      background-color: #356e7f;
      color: #ffffff;
      border-radius: 0px;
      border: 1px solid #ffffff;
      -webkit-transition: all .3s;
      transition: all .3s;
      margin-top: 35px;
    }

    .login_btn:hover {
      background-color: #ffffff;
      color: #356e7f;
    }

    .profilepic {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      overflow: hidden;
      background-color: #111;
    }

    .profilepic:hover .profilepic__content {
      opacity: 1;
    }

    .profilepic:hover .profilepic__image {
      opacity: .5;
    }

    .profilepic__image {
      object-fit: cover;
      opacity: 1;
      transition: opacity .2s ease-in-out;
    }

    .profilepic__content {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      opacity: 0;
      transition: opacity .2s ease-in-out;
    }

    .profilepic__icon {
      color: white;
      padding-bottom: 8px;
    }

    .fas {
      font-size: 20px;
    }

    .profilepic__text {
      text-transform: uppercase;
      font-size: 12px;
      width: 50%;
      text-align: center;
    }

  </style>
</head>

<body class="sub_page">

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
                <li class="nav-item">
                  <a class="nav-link" href="orders"> Orders</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="manage-products"> Manage Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sales-history"> all what was sold </a>
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
  </div>

  <section class="product_section layout_padding" style="background-color: #ffffff; min-height: 800px; margin: 0px 60px;">
    <div class="container">
      <div class="heading_container">
        <h2>
          All Products 
        </h2>
        <p>
              you'll have the authority to add new products by clicking the cart, 
              manage existing products for examle if it rans out you can press edit and press inactive so it doesnt shows for the customers
              , update or delete products</p>
      </div>
    </div>
    <div id="product_container" class="product_container col-md-12">

        <input type="hidden" id="base" value="<?php echo base_url(); ?>">
        <!-- Add items here... -->
       
        <?php 
          if(isset($AllProducts)){
            if(count($AllProducts)>0){
              for($i=0; $i < count($AllProducts); $i++){

                $color = 'black';
                $inactive = '';

                if($AllProducts[$i]['status'] == 0){
                  $color = 'grey';
                  $inactive = ' [Inactive]';
                }

                echo '<div id="product'.$AllProducts[$i]['id'].'" class="col-md-3 col-sm-6" style="padding: 25px 0px;">'.
                        '<div class="product-grid">'.
                            '<div class="product-image" style="">'.
                                '<a href="" class="image">'. 
                                    '<img style="height:200px" class="pic-1" src="'.base_url().$AllProducts[$i]['image'].'">'.
                                '</a>'.
                                '<ul class="product-links">'.
                                    '<li><a href="#" data-fnx="edit" data-productid="'.$AllProducts[$i]['id'].'" data-product="'.$AllProducts[$i]['product_name'].'"><i class="fa fa-pencil"></i> Edit</a></li>'.
                                    '<li><a href="#" data-fnx="del" data-productid="'.$AllProducts[$i]['id'].'" data-product="'.$AllProducts[$i]['product_name'].'"><i class="fa fa-close"></i> Delete</a></li>'.
                                '</ul>'.
                            '</div>'.
                            '<div class="product-content">'.
                                '<h3 class="title" style="color:'.$color.';">'.$AllProducts[$i]['product_name'].$inactive.'</h3>'.
                                '<div class="price">$'.number_format((float)$AllProducts[$i]['price'],2,'.','').'</div>'.
                            '</div>'. 
                        '</div>'.
                      '</div>';
              }
            }
          }
        ?>
        <div id="addProductBtn" class="col-md-3 col-sm-6" style="padding: 25px 0px;">
          <div class="product-grid">
              <div class="product-image">
                  <a href="#" class="image">
                      <img style="height:270px" class="pic-1" src="<?php echo base_url(); ?>assets/images/shopping cart.png">
                  </a>
              </div>
              <div class="product-content">
                  <h3 class="title">Add Product</h3>
                  <div class="price"></div>
              </div>
          </div>
        </div>

    </div>
  </section>
  <!-- end product section -->


  <!-- Modal -->
  <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content" style="background-color: #356e7f;">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="color:white;">Edit <span id="pastry"></span></h3> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="updateProductForm">
            <div class="row">
              <div class="col-lg-11 col-md-11 mx-auto">
                  <br/>
                  <center>      
                    <div class="profilepic">
                      <img id="productImage" class="profilepic__image" src="" width="200" height="200" alt="product_image" />
                      <div class="profilepic__content">
                        <span class="profilepic__icon" id="changeImage"><i class="fa fa-camera"></i></span>
                        <span class="profilepic__text">Change Image</span>
                      </div>
                    </div>
                  </center>            
                  <br/><br/>
                  <input name="productdbid" type="hidden" class="form-control" id="productdbid" placeholder="Product Name"/>
                  <div class="form-group">
                    <label style="color:white;">Product Name: </label>
                    <input name="product" type="text" class="form-control" id="editproduct" placeholder="Product Name" required/>
                  </div>
                  <div class="form-group">
                    <label style="color:white;">Price: </label>
                    <input name="price" type="number" class="form-control" id="editprice" min="0" step="any" placeholder="Price (without $)" required/>
                  </div>
                  <div class="form-group">
                    <label style="color:white;">Status: </label><br/>
                    <select id="editstatus" class="form-control"></select>
                  </div>
                  <div class="form-group">
                      <input name="e_image" type="file" class="form-control" id="e_image">
                  </div>
                  <div class="d-flex justify-content-center">
                   <button type="submit" class="login_btn" form="updateProductForm">Save Now</button>
                  </div>
              </div>
            </div>                
          </form>
        </div>          
      </div>
    </div>
  </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background-color: #356e7f;">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel" style="color:white;">Add Product</h3> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" id="addProductForm">              
              <br/>
              <div class="row">
                <div class="col-lg-11 col-md-11 mx-auto">                  
                  <br/>
                  <div class="form-group">
                    <input name="product" type="text" class="form-control" id="product" placeholder="Product Name" required/>
                  </div>
                  <div class="form-group">
                    <input name="price" type="number" class="form-control" id="price" min="0" step="any" placeholder="Price (without $)" required/>
                  </div>
                  <div class="d-flex justify-content-center">
                   <button type="submit" class="login_btn" form="addProductForm">Add Now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>          
        </div>
      </div>
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
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/manage-products.js"></script>


</body>

</html>