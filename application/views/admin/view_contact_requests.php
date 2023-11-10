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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
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
                <!-- <li class="nav-item">
                  <a class="nav-link" href="manage-products"> Manage Products </a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="sales-history"> Sales History </a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="view_contact_requests">Reports From Users</a>
                </li> -->
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
    <?php
    // Database settings
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "h_pastry";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch and display contact requests
    $sql = "SELECT * FROM contact_requests";
    $result = $conn->query($sql);

    echo "<h1>Contact Requests</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No contact requests found.</td></tr>";
    }

    echo "</table>";

    $conn->close();
    ?>
</body>
</html>
