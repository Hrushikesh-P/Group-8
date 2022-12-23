<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<!-- </head>
<link rel="stylesheet" href="css/loader_style.css">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(window).ready(function() {
        $(".loader").fadeOut(9000);
});
</script>
</head> -->

<head>
<style>
   img{

      width:300px;
      height :280px;
      
   }
.dropbtn {
  background-color: #8e44ad;
  color: white;
  padding: 16px;
  font-size: 16px;
  border-radius: 10px;
   
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-radius: 10px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #8e44ad;}



</style>
</style>
</head>

<header class="header">


   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <p> New <a href="login.php">Login</a> | <a href="register.php">Register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
      <img src="logo.gif"></img>
                <a href="home.php" class="logo"></a>
         <nav class="navbar">
		
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <div class="dropdown">
            <button class="dropbtn">Our Services</button>
                   <div class="dropdown-content">
                   <a href="Caterers.php">Caterers</a>
                   <a href="Decoraters.php">Decoraters</a>
                   <a href="Pandit.php">Pandit</a>
                   </div>
            </div>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>