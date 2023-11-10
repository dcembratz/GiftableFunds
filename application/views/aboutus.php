<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>GiftableFunds | About Us</title>
  <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
  <!-- x -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 0px 0;
  
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}
  </style>
</head>
<body>
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

  <section class="about-us">
    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2>About Us</h2>
        <!-- <h5>Full Stack Developer & <span>Designer</span></h5> -->
          <p>Welcome to GiftableFunds, your go-to destination for affordable gift cards and top-up services. We understand the importance of giving and receiving thoughtful gifts, and we're here to make it easier, more convenient, and cost-effective for you. Our mission is to provide our customers with a wide selection of gift cards while considering your financial needs and striving to offer the best service possible.</p>
          <h2>Our Vision</h2>
          <p>At GiftableFunds, we believe that everyone should be able to enjoy the pleasure of giving and receiving gift cards without breaking the bank. We envision a world where the joy of gifting is accessible to all, where you can share your love and appreciation through gift cards without worrying about excessive fees and taxes.</p>
          <h2>Why Choose Us?</h2>
      </div>
    </div>
         <!-- footer section -->
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
  </section>
</body>
</html>