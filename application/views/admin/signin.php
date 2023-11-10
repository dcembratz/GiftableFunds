<?php 

    if($this->session->userdata('admin_id')){
        redirect('admin/orders');
    }

    //implement the response if the user's account is suspended or inactive...

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

  <title>GiftableFunds | Sign In</title>

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
  <!-- x -->
</head>
<style>
  /* Add responsive styles for mobile devices */
  @media (max-width: 768px) {
    /* Adjust the container and margins for smaller screens */
    .container.slider_section {
      text-align: center;
      padding: 10px;
      margin: 0;
    }

    /* Style inputs and login button for mobile screens */
    .slider_section input[type="email"],
    .slider_section input[type="password"] {
      width: 100%;
      padding: 10px;
    }

    .slider_section .btn {
      width: 100%;
      padding: 10px;
    }

    /* Remove the carousel on smaller screens */
    #carouselExampleIndicators {
      display: none;
    }

    /* Adjust font sizes for mobile readability */
    .slider_section h3 {
      font-size: 20px;
      margin-bottom: 30px;
    }

    /* You can add more specific styles as needed for mobile devices */
  }
  
  .page-wrapper {
    background-image: url('https://img.freepik.com/free-photo/abstract-luxury-gradient-blue-background-smooth-dark-blue-with-black-vignette-studio-banner_1258-52765.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional: Fixed background */
  }
 
  .header_section{
    background:#070707 ;
    opacity: 80%;
  }
  .navbar-brand span {
      color: #ecf0f1; /* White text color */
    }
   /* Common styles for both desktop and mobile */
   .detail_box {
      text-align: center;
    }
    
/* Center the login form in the middle of the page */
.container.slider_section {
  display: flex;
  /* margin-left: 50px; */
  align-items: center;
  justify-content: center;
  height: 100vh;
}
.slider_section {
  /* background-color:#7F7F7F;  */
  padding: 10px;
  margin-left: 50px;
  align-content: center;
  width: 100%;
  max-width: 2000px;
  margin: 0 auto;
  text-align: center; /* Center the content horizontally */
  position: absolute;
  top: 50%; /* Move it down by 50% from the top */
  left: 28%; /* Move it horizontally by 50% from the left */
  
  transform: translate(-50%, -50%); /* Center it both vertically and horizontally */
}

/* Style inputs and login button within the centered form */
.slider_section input[type="email"],
.slider_section input[type="password"] {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 10px 0;
  background-color: #444;
  color: #fff;
}

.slider_section input[type="email"]:hover,
.slider_section input[type="password"]:hover {
  background-color: #0f0f0f ;
}

.slider_section .btn {
  width: 50%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 10px 0;
  /* background: #0f0f0f ; */
  color: #fff;
  cursor: pointer;
  transition: background 0.3s;
}


.slider_section .btn:hover {
  animation: multicolorBorder 20s linear infinite;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}


@keyframes multicolorBorder {
  0% {
    border: 2px solid #8B0000; /* Dark red */
  }
  10% {
    border: 2px solid #FF5733; /* Orange */
  }
  20% {
    border: 2px solid #FFC300; /* Yellow */
  }
  30% {
    border: 2px solid #4CAF50; /* Green */
  }
  40% {
    border: 2px solid #0080FF; /* Blue */
  }
  50% {
    border: 2px solid #8A2BE2; /* Blue Violet */
  }
  60% {
    border: 2px solid #FF1493; /* Deep Pink */
  }
  70% {
    border: 2px solid #CD5C5C; /* Indian Red */
  }
  80% {
    border: 2px solid #32CD32; /* Lime Green */
  }
  90% {
    border: 2px solid #00CED1; /* Dark Turquoise */
  }
  100% {
    border: 2px solid #8B0000; /* Dark red */
  }
}
.slider_section input:hover {
  animation: multicolorBorder 20s linear infinite;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}


@keyframes multicolorBorder {
  0% {
    border: 2px solid #8B0000; /* Dark red */
  }
  10% {
    border: 2px solid #FF5733; /* Orange */
  }
  20% {
    border: 2px solid #FFC300; /* Yellow */
  }
  30% {
    border: 2px solid #4CAF50; /* Green */
  }
  40% {
    border: 2px solid #0080FF; /* Blue */
  }
  50% {
    border: 2px solid #8A2BE2; /* Blue Violet */
  }
  60% {
    border: 2px solid #FF1493; /* Deep Pink */
  }
  70% {
    border: 2px solid #CD5C5C; /* Indian Red */
  }
  80% {
    border: 2px solid #32CD32; /* Lime Green */
  }
  90% {
    border: 2px solid #00CED1; /* Dark Turquoise */
  }
  100% {
    border: 2px solid #8B0000; /* Dark red */
  }
}
.slider_section h3 {
  animation: multicolorBorder 20s linear infinite;
}

@keyframes multicolorBorder {
  0% {
    color: #8B0000; /* Dark red */
    /* Add other styles like border, background-color, etc. */
  }
  10% {
    color: #FF5733; /* Orange */
    /* Add other styles */
  }
  20% {
    color: #FFC300; /* Yellow */
    /* Add other styles */
  }
  30% {
    color: #4CAF50; /* Green */
    /* Add other styles */
  }
  40% {
    color: #0080FF; /* Blue */
    /* Add other styles */
  }
  50% {
    color: #8A2BE2; /* Blue Violet */
    /* Add other styles */
  }
  60% {
    color: #FF1493; /* Deep Pink */
    /* Add other styles */
  }
  70% {
    color: #CD5C5C; /* Indian Red */
    /* Add other styles */
  }
  80% {
    color: #32CD32; /* Lime Green */
    /* Add other styles */
  }
  90% {
    color: #00CED1; /* Dark Turquoise */
    /* Add other styles */
  }
  100% {
    color: #8B0000; /* Dark red */
    /* Add other styles */
  }
}
.body{
  background-color:seagreen;
}


 /* Add responsive styles for mobile devices */
 @media (max-width: 768px) {
      .container {
        display: block;
        text-align: center;
      }
    }


/* Center the form vertically and horizontally 
.img_container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; /* Add this line 
  height: 100vh; /* Use viewport height for full page height 
}*/


</style>

<body>

  <div style=" background-color:#1e1e1e;" class="hero_area">
    <!-- header section starts -->
<header class="header_section">
  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="../index">
      </a>
</a>
      <button style=color:#555; class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="s-1"></span>
      </button>
      <div  style=color:#555; class="collapse navbar-collapse" id="navbarSupportedContent">
        <div  style=color:#555; class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul   style=color:#555;style=color:#555; class="navbar-nav">
            <li class="nav-item ">
              <a style=color:#fff; class="nav-link" href="../index">Back to Main</a>
            </li>
            <!-- Modify the button styling -->
            <!-- <li class="nav-item active">
              <a class="nav-link last_link" href="signin">
                <button class="btn btn-dark">Sign in</button>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- end header section -->
   <!-- slider section -->
<section class="slider_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- <div style="text-align: center;" class="detail_box">
          <h1>
            Welcome to your<br>
            Admin Dashboard
          </h1>
          <p>
            As an administrator, you'll have the authority to add new products,
            manage existing products, update or delete products, view customers'
            orders, and adjust system settings..
          </p>

        </div> -->
        
      </div>
      
      <div class="col-lg-5 col-md-6 offset-lg-1">
        <div style="text-align: center;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <?php
            $attributes = array('class' => '', 'id' => 'login');
            echo form_open('Auth/login', $attributes);
            ?>
            <div style="text-align: center;" class="row">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div style="text-align: center;" class="heading_container">
                
                  <h3 style="color: #555;" margin-bottom: 50px;>
                    Only Administrators Are Allowed To Log In
                  </h3>
                  <!-- <p>
            As an administrator, you'll have the authority to add new products,
            manage existing products, update or delete products, view customers'
            orders, and adjust system settings..
          </p> -->
                  <br /><br />
                </div>
                <div style="text-align: center;" class="form-group col-xs-12 col-sm-12">
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required />
                </div>
                <div style="text-align: center;" class="form-group col-xs-12 col-sm-12">
                  <input type="password" name="password" class="form-control" id="formGroupExampleInput" placeholder="Password" required />
                </div>
                <div style="text-align: center;" class="d-flex justify-content-center">
                  <input type="submit" class="btn" form="login" value="Login" />
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
    if ($this->session->flashdata('user_created')) {
      echo '<br/><br/><div class="row">' .
        '<p class="alert alert-warning col-xs-12 col-sm-12 col-md-12">' .
        $this->session->flashdata('user_created') .
        '</p>' .
        '</div>';
    }

    if ($this->session->flashdata('acc_inactive')) {
      echo '<br/><br/><div class="row">' .
        '<p class="alert alert-warning col-xs-12 col-sm-12 col-md-12">' .
        $this->session->flashdata('acc_inactive') .
        '</p>' .
        '</div>';
    }

    if ($this->session->flashdata('unk_account')) {
      echo '<br/><br/><div class="row">' .
        '<p class="alert alert-warning col-xs-12 col-sm-12 col-md-12">' .
        $this->session->flashdata('unk_account') .
        '</p>' .
        '</div>';
    }
    ?>
  </div>
</section>
<!-- end slider section -->

  </div>

  <!-- footer section --> 
  <section class="container-fluid footer_section">
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
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>