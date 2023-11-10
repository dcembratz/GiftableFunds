<?php
// Include the necessary PHPMailer files
require 'application/views/PHPMailer.php';
require 'application/views/SMTP.php';
require 'application/views/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Database settings
$db_host = "localhost"; // Your database server host
$db_user = "root"; // Your database username
$db_pass = ""; // Your database password
$db_name = "h_pastry"; // Your database name

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Basic form validation (you can add more validation as needed)

    $sql = "INSERT INTO contact_requests (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Data inserted successfully.
        // echo '<script>showSuccessToast();</script>';

        // PHPMailer integration for sending confirmation email

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Update with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'giftablefunds@gmail.com'; // Gmail email address
            $mail->Password = 'ulpo ouno fzwb jadu'; // Gmail password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL/TLS
            $mail->Port = 465; // 587 Port for TLS // 465 port for SSL

            // Recipient
            $mail->setFrom('giftablefunds@gmail.com', 'giftablefunds');
            $mail->addAddress($email, $name);
            // $mail->setFrom( $mail. $name.$message);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Thank you for contacting us';
            $mail->Body = 'Dear ' . $name . ',<br><br>Thank you for reaching out to us. Our dedicated team is committed to addressing your concern promptly and efficiently. We will make every effort to resolve your issue during the course of the day.<br><br>sincerely,<br>GiftableFunds';
            // $mail->isHTML=(true);
            // $mail->setFrom(.$mail.);


            $mail->send();
        } catch (Exception $e) {
            echo "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
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
  <!-- font style close -->
 <!-- Include Toastr.js CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />

<!-- Include jQuery (required for Toastr.js) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Toastr.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <style>
    .footer_section {
  margin-top: 0px; /* Adjust this value as needed */
  background-color: #ffff; /* You can specify your desired background color */
  color: #fff; /* You can specify your desired text color */
  padding: 0px 0;
}
  </style>
<!-- End of CSS Style -->
</head>
<body>
<style>
    :root {
      --primary-color: #010712;
      --secondary-color: #818386;
      --bg-color: #FCFDFD;
      --button-color: #3B3636;
      --h1-color: #3F444C;
    }
    .cd__main {
      position: relative;
    }
    [data-theme="dark"] {
      --primary-color: #FCFDFD;
      --secondary-color: #818386;
      --bg-color: #010712;
      --button-color: #818386;
      --h1-color: #FCFDFD;
    }
    * {
      margin: 0;
      box-sizing: border-box;
      transition: all 0.3s ease-in-out;
    }
    .contact-container {
      display: flex;
      width: 100vw;
      height: 100vh;
      background: var(--bg-color);
    }
    .left-col {
      width: 45vw;
      height: 100%;
      background-image: url("https://www.well-played.com.au/wp-content/uploads/2016/08/TeslaCrypt-el-virus-que-roba-las-partidas-guardadas-b.jpg");
      background-size: cover;
      background-repeat: no-repeat;
    }
    .logo {
      width: 10rem;
      padding: 1.5rem;
    }
    .right-col {
      background: var(--bg-color);
      width: 50vw;
      height: 100vh;
      padding: 5rem 3.5rem;
    }
    h1, label, button, .description {
      font-family: 'Jost', sans-serif;
      font-weight: 400;
      letter-spacing: 0.1rem;
    }
    .contact-container h1 {
      color: var(--h1-color);
      text-transform: uppercase;
      font-size: 2.5rem;
      letter-spacing: 0.5rem;
      font-weight: 300;
    }
    .contact-container p {
      color: var(--secondary-color);
      font-size: 0.9rem;
      letter-spacing: 0.01rem;
      width: 40vw;
      margin: 0.25rem 0;
    }
    label, .description {
      color: var(--secondary-color);
      text-transform: uppercase;
      font-size: 0.625rem;
    }
    .contact-container form {
      width: 31.25rem;
      position: relative;
      margin-top: 2rem;
      padding: 1rem 0;
    }
    input, textarea, label {
      width: 40vw;
      display: block;
    }
    p, placeholder, input, textarea {
      font-family: 'Helvetica Neue', sans-serif;
    }
    .contact-container input::placeholder, textarea::placeholder {
      color: var(--primary-color);
    }
    input, textarea {
      color: var(--primary-color);
      font-weight: 500;
      background: var(--bg-color);
      border: none;
      border-bottom: 1px solid var(--secondary-color);
      padding: 0.5rem 0;
      margin-bottom: 1rem;
      outline: none;
    }
    textarea {
      resize: none;
    }
    button {
      text-transform: uppercase;
      font-weight: 300;
      background: var(--button-color);
      color: var(--bg-color);
      width: 10rem;
      height: 2.25rem;
      border: none;
      border-radius: 2px;
      outline: none;
      cursor: pointer;
    }
    input:hover, textarea:hover, button:hover {
      opacity: 0.5;
    }
    button:active {
      opacity: 0.8;
    }

    .theme-switch-wrapper {
      display: flex;
      align-items: center;
      text-align: center;
      width: 160px;
      position: absolute;
      top: 0.5rem;
      right: 0;
    }
    .description {
      margin-left: 1.25rem;
    }
    .theme-switch {
      display: inline-block;
      height: 34px;
      position: relative;
      width: 60px;
    }
    .theme-switch input {
      display: none;
    }
    .slider {
      background-color: #ccc;
      bottom: 0;
      cursor: pointer;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      transition: .4s;
    }
    .slider:before {
      background-color: #fff;
      bottom: 0.25rem;
      content: "";
      width: 26px;
      height: 26px;
      left: 0.25rem;
      position: absolute;
      transition: .4s;
    }
    input:checked + .slider {
      background-color: var(--button-color);
    }
    input:checked + .slider:before {
      transform: translateX(26px);
    }
    .slider.round {
      border-radius: 34px;
    }
    .slider.round:before {
      border-radius: 50%;
    }
    #error, #success-msg {
      width: 40vw;
      margin: 0.125rem 0;
      font-size: 0.75rem;
      text-transform: uppercase;
      font-family: 'Jost';
      color: var(--secondary-color);
    }
    #success-msg {
      transition-delay: 3s;
    }
    @media only screen and (max-width: 950px) {
      .logo {
        width: 8rem;
      }
      h1 {
        font-size: 1.75rem;
      }
      p {
        font-size: 0.7rem;
      }
      input, textarea, button {
        font-size: 0.65rem;
      }
      .description {
        font-size: 0.3rem;
        margin-left: 0.4rem;
      }
      button {
        width: 7rem;
      }
      .theme-switch-wrapper {
        width: 120px;
      }
      .theme-switch {
        height: 28px;
        width: 50px;
      }
      .theme-switch input {
        display: none;
      }
      .slider:before {
        background-color: #fff;
        bottom: 0.25rem;
        content: "";
        width: 20px;
        height: 20px;
        left: 0.25rem;
        position: absolute;
        transition: .4s;
      }
      input:checked + .slider:before {
        transform: translateX(16px);
      }
      .slider.round {
        border-radius: 15px;
      }
      .slider.round:before {
        border-radius: 50%;
      }
    }
  </style>
   <script>
    function showSuccessToast() {
      console.log('Success toast function called.'); // Add this line
      toastr.success('Thank you! Your request has been submitted. Please wait for a response.');
    }

    // Function to update the success message div
    function updateSuccessMessage(message) {
      const successMsg = document.getElementById('success-msg');
      if (successMsg) {
        successMsg.innerHTML = message;
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      <?php
      if(isset($_GET['success'])){
          echo 'showSuccessToast();';
          echo 'updateSuccessMessage("Thank you! Your request has been submitted. Please wait for a response.");';
      }
      ?>
    });
  </script>
        <!-- header -->
	<div id="menu"  class="fixed-header">
		<ul>
			<li class="current_page_item"><a href="index">Home</a></li>
			<li><a href="insert_contact_request">contact us</a></li>
			<li><a href="orderingsection">View Gift Cards</a></li>
			<li><a href="aboutus">About</a></li>
			<!-- <li><a href="#">Links</a></li> -->
			<li><a href="admin/signin">Admin</a></li>
      <li><a class="nav-link" id="myCart" href="#">My Cart (<span id="cartAmt"></span>)</a></li>
		</ul>
	</div>
  <button id="menu-button">&#9776;</button>
  <div id="menu-dropdown">
	<!-- header end -->
      <div class="contact-container">
         <div class="left-col">
            <img class="logo" src="https://www.well-played.com.au/wp-content/uploads/2016/08/TeslaCrypt-el-virus-que-roba-las-partidas-guardadas-b.jpg"/>
         </div>
         <div class="right-col">
            <!-- <div class="theme-switch-wrapper">
               <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <div class="slider round"></div>
               </label>
               <div class="description">Dark Mode</div>
            </div> -->
            <h1>Contact us</h1>
            <p>Get in touch with us. We're just a message away.</p>
            <form id="contact-form" method="post">
               <label for="name">Full Name</label>
               <input type="text" id="name" name="name" placeholder="Your Full Name" required>
               
               <label for="email">Email Address</label>
               <input type="email" id="email" name="email" placeholder="Your Email Address" required>
               
               <label for="message">Message</label>
               <textarea rows="6" id="message" name="message" placeholder="Your Message" required></textarea>
               <button type="submit" id="submit" name="submit">Send</button>
               
            </form>
            <div id="error"></div>
            <div id="success-msg"></div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">  
   </body>
</html>
