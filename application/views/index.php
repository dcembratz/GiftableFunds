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
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <!-- Add hreflang tags for language and regional versions -->
     <link rel="alternate" href="https://example.com/br/" hreflang="pt-br" />
    <link rel="alternate" href="https://www.example.com/" hreflang="en" />
    <link rel="alternate" href="https://www.example.com/es-ES/" hreflang="es-ES" />
    <link rel="alternate" href="https://www.example.com/es-LA/" hreflang="es-LA" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GiftableFunds</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lobster|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- font awesome style -->
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
  <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
  <!-- styles -->
</head>
<body class="sub_page">
    <!-- header -->
	<div id="menu"  class="fixed-header">
		<ul>
			<li class="current_page_item"><a href="index">Home</a></li>
			<li><a href="insert_contact_request">contact us</a></li>
			<li><a href="indexx">View Gift Cards</a></li>
			<li><a href="aboutus">About</a></li>
			<!-- <li><a href="#">Links</a></li> -->
			<li><a href="admin/signin">Admin</a></li>
      <li><a class="nav-link" id="myCart" href="#">My Cart (<span id="cartAmt"></span>)</a></li>
		</ul>
	</div>
  <button id="menu-button">&#9776;</button>
  <div id="menu-dropdown">
	<!-- header end -->
  
<!-- welcome page secttion -->
<section class="banner_part" style="background-image: url('assets/images/banner_bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 700px;  position: relative;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-8">
                <div class="banner_text">
                    <div class="banner_text_iner" style="margin-top: 200px;"> <!-- Adjust margin-top as needed -->
                    <h1 style="font-family: 'Courgette', cursive; color: white; font-size: 60px;">GiftableFunds</h1> <!-- Adjust font-size as needed -->
                        <p style="color: white; font-size: 15px;"> <!-- Adjust font-size as needed -->
                        Elevate your gifting game with our affordable variety of gift cards! Perfect for any occasion, 
                        our selection has something for everyone. Shop now for the best deals. And for movie lovers, we 
                        have a fantastic range of cinema gift cards that will make their movie-going experience unforgettable. 
                        Top up today and delight your loved ones
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- welcome page end -->

<!-- to insert more contents below  -->
<!-- end of intserting more info -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; <span id="currentDate"></span> All Rights Reserved.
        <a href="index">GiftableFunds</a>
      </p>
    </div>
  </section>
  <!-- footer end -->

  <!-- display button when in mobile use -->
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


  <!-- footer section -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/index.js"></script>
</body>

</html>