<?php 
  
  $AllProducts = array();

  if($this->session->userdata('AllProducts')){    
    $AllProducts = $this->session->userdata('AllProducts');     
  }

  //echo '<pre>';
  //print_r($AllProducts);
  //echo '</pre>';
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

  <title>GiftableFunds | Products</title>

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
  <link rel="stylesheet" type="text/css" href="path-to-dark-theme.css">
  <!-- CSS styles -->
  <!-- font style -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
  <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
  <!-- font style close -->

  <style>
    /* Mobile styles */
@media (max-width: 768px) {
  .banner_part {
    height: auto; /* Adjust the header's height as needed for mobile */
    padding: 20px; /* Add some spacing on the banner for better mobile readability */
  }

  .banner_text_iner {
    margin-top: 20px; /* Adjust the margin-top for the text */
  }

  .item {
    width: 100%; /* Full width for product boxes on mobile */
    margin: 10px 0; /* Add margin between product boxes */
  }

  .box_container {
    width: 100%; /* Full width for product containers on mobile */
  }

  .orderProduct {
    font-size: 16px; /* Increase the font size for the "Order Now" button */
  }

  /* Adjust other styles as needed for better mobile usability */
}

    .number_format{
  background-color: #110101;
  color: #e74c3c;
  margin-bottom: 50px;
   }
    /* Header styles */
    .header_section {
      background-color: #ffff; /* Dark background color */
    }

    .navbar-brand span {
      color: #555; /* White text color */
    }

    .navbar-toggler .s-1 {
      background-color: #ecf0f1; /* White color for the mobile menu button */
    }

    .navbar-nav .nav-item .nav-link {
      color: #ecf0f1; /* White text color for links in the header */
    }

    /* Product section styles */
    .product_section {
      background-color: #0E121A; /* Dark background color */
    }

    .heading_container h2 {
      color: #ecf0f1; /* White text color for the heading */
    }

    /* .item {
      background-color: #2c3e50; 
    }

    .box_container {
      background-color: #2c3e50; 
    } */

    .box {
      border: 2px solid #110101; /* light blue Border color for product boxes */
    }

    .box:hover {
      background-color: #3498db; /* Lighter background color on hover */
    }

    /* .orderProduct {
      
      background-color: #194c02; 
      color: #ecf0f1; 
      
    } */

    /* Info section styles */
    .info_section {
      background-color: #2c3e50; /* Dark background color */
    }

    .info_container h5 {
      color: #ecf0f1; /* White text color for section headings */
    }

    .info_contact i {
      color: #e74c3c; /* Red color for contact icons */
    }

    .info_detail p {
      color: #ecf0f1; /* White text color for info details */
    }

    .social_box a {
      color: #e74c3c; /* Red color for social media icons */
    }

    /* Modal styles */
    .modal-content {
      background-color: #2c3e50; /* Dark modal background color */
    }

    .modal-title {
      color: #ecf0f1; /* White title color in the modal */
    }

    .form-control {
      background-color: #34495e; /* Slightly darker input fields in the modal */
      color: #ecf0f1; /* White text color in input fields */
    }

    /* Footer styles */
    .footer_section {
      background-color: #2c3e50; /* Dark background color for the footer */
    }

    .footer_section p a {
      color: #e74c3c; /* Red color for footer links */
    }
    .info_section{
  background-color: #555;
}
  </style>
<!-- End of CSS Style -->

<!-- check out cart style -->
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
      margin-top: 30px;
    }

    .login_btn:hover {
      background-color: #ffffff;
      color: #356e7f;
    }
    .small-box-container {
    /* Define your desired width and height */
    width: 300px;
    height: 500px;
    /* Add any other styling you prefer */
}
.transparent_box{
  margin-top: 150px;
  opacity: 150%;
  width: 220px;
  height: 100px;
}
.product_name{
  margin-bottom: 50px;
  color: #110101;
}
.banner_part::before,
.banner_part::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 40px; /* Adjust the width of the border as needed */
    background: linear-gradient(to right, rgba(0,0,0,0.5), transparent);
}

.banner_part::before {
    left: 0;
}

.banner_part::after {
    right: 0;
}
/* .header_section{

} */

/* <!-- end of cart style --> */
  </style>
  
</head>

<body class="sub_page">
  
      <!-- header -->
	<div id="menu"  class="fixed-header">
		<ul>
			<li class="current_page_item"><a href="index">Home</a></li>
			<li><a href="insert_contact_request">contact us</a></li>
			<li><a href="orderingsection">View Gift Cards</a></li>
			<li><a href="aboutus">About</a></li>
			<li><a href="admin/signin">Admin</a></li>
      <li><a class="nav-link" id="myCart" href="#">My Cart (<span id="cartAmt"></span>)</a></li>
		</ul>
	</div>
  <button id="menu-button">&#9776;</button>
  <div id="menu-dropdown">
	<!-- header end -->
  </div>


<!-- product section -->
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Products
        </h2>
        <!-- <p style="#0080FF;">click at the bottom of the images to view more</p> -->
      </div>
    </div>
    <div class="product_container col-md-12">
    <input type="hidden" id="base" value="<?php echo base_url(); ?>">
    <?php 
if(isset($AllProducts)){
    if(count($AllProducts) > 0){
        for($i = 0; $i < count($AllProducts); $i++){
            echo '<div class="item col-sm-6 col-md-3">'.
                '<div class="box_container small-box-container">'.
                '<div class="box" style="background-image: url(\''.base_url().$AllProducts[$i]['image'].'\'); background-repeat: no-repeat; background-size: cover;">'.
                '<div class="detail-box">'.
                '<div>'.
                '<h4 style="font-size: 14px; color: black; margin-top: 150px;">' . " " . $AllProducts[$i]['product_name'] . " " . '</h4>'.
                '<h5 style="font-size: 14px;  color: black; margin-top: 10px;">$' . number_format((float)$AllProducts[$i]['price'], 2, '.', '') . ' - $500US </h5>'.
                '<button class="btn btn-outline-dark orderProduct" data-productid="'.$AllProducts[$i]['id'].'" data-pastry="'.$AllProducts[$i]['product_name'].'" data-price="'.$AllProducts[$i]['price'].'" style="font-size: 12px;">Order Now</button>'.
                '</div>'.
                '</div>'. 
                '</div>'.
                '</div>'.
                '</div>';
        }
    }
}
?>
</div>
  </section>
  <!-- end product section -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background-color: #356e7f;">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color:white;">Order</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <center>
                                <div class="form-group">
                                    <a href="" class="login_btn" id="minus">-</a>
                                    <label for="" id="pCounter" style="font-weight: 600; color: #ffffff; font-size: 100px; padding: 0px 20px;">1</label>
                                    <a href="" class="login_btn" id="plus">+</a>
                                </div>
                            </center>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-lg-11 col-md-11 mx-auto">
                            <br/>
                            <hr/>
                            <br/>
                            <!-- <h4 style="color: #ffffff;">Select a Price</h4> -->
                            <div class="btn-group" data-toggle="buttons">
                                <!-- <label class="btn btn-primary">
                                    <input type="radio" name="priceOption" value="5" id="option5">$5
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="priceOption" value="10" id="option10">$10
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="priceOption" value="15" id="option15">$15
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="priceOption" value="20" id="option20">$20
                                </label>
                                <label class="btn bxtn-primary">
                                    <input type="radio" name="priceOption" value="25" id="option25">$25
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="priceOption" value="other" id="optionOther">Other
                                </label> -->
                            </div>
                            <!-- <br/>
                            <div class="form-group">
                                <input type="text" class="form-control" id="customPrice" placeholder="Enter custom amount">
                            </div>
                            <br/> -->
                            <label for="" style="color: #ffffff;">Total: <span id="total"></span></label>
                            <br/>
                            <div class="d-flex justify-content-center">
                                <a href="" class="login_btn" id="addToCart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background-color: #356e7f;">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel" style="color:white;">My Cart</h3> 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" id="checkoutForm">              
              <br/>
              <div class="row">
                <div class="col-lg-11 col-md-11 mx-auto">    

                  <br/>
                  <table class="table" id="cartTable" style="color:#ffffff;">
                    <!-- <caption>List of users</caption> -->
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Price US</th>
                        <th scope="col">Amount US</th>
                        <th scope="col">Total US</th>
                        <th scope="col">Options</th>
                      </tr>
                    </thead>
                    <tbody id="cartTableBody"></tbody>
                  </table>

                  <br/>
                  <hr/>                
                  <br/>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" placeholder="Phone" required/>
                  </div>

                  <div class="d-flex justify-content-center">
                   <button type="submit" class="login_btn" id="checkout">Checkout &nbsp; (<span id="totalCost">$ 26</span>)</button>
                   &nbsp;&nbsp;
                   <a href="" class="login_btn" id="clearCart">Clear Cart</a>
                  </div>
                </div>
              </div>
            </form>
          </div>          
        </div>
      </div>
    </div>

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; <span id="currentDate"></span> All Rights Reserved.
        <a href="index">GiftableFunds</a>
      </p>
    </div>
  </section>
  <!-- footer section -->
  
  <script>
      // JavaScript to toggle the menu when the button is clicked
document.getElementById("menu-button").addEventListener("click", function() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
});
// end of button to display when in mobile use

// JavaScript to ensure the menu is shown on larger screens when switching from mobile mode
window.addEventListener("resize", function() {
    var menu = document.getElementById("menu");
    var menuButton = document.getElementById("menu-button");
    
    if (window.innerWidth > 768) {
        menu.style.display = "block"; // Show the menu on larger screens
        menuButton.style.display = "none"; // Hide the button on larger screens
    } else {
        menuButton.style.display = "block"; // Show the button on mobile screens
    }
});
// end the menu is shown on larger screens when switching from mobile mode
</script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script>
$(document).ready(function() {
    var prevScrollPos = window.pageYOffset;
    $(window).scroll(function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            // Scroll up, show the header
            $(".header_section").css("top", "0");
        } else {
            // Scroll down, hide the header
            $(".header_section").css("top", "-100px");
        }
        prevScrollPos = currentScrollPos;
    });
});
</script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    var prevScrollPos = window.pageYOffset;
    $(window).scroll(function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            // Scroll up, show the header and set a dark theme
            $(".header_section").css("bottom", "0").removeClass("dark-theme");
        } else {
            // Scroll down, hide the header and set a dark theme
            $(".header_section").css("bottom", "-100px").addClass("dark-theme");
        }
        prevScrollPos = currentScrollPos;
    });
});
</script> -->


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/index.js"></script>


</body>

</html>