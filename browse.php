<?php
require "dbBroker.php";
require "PHPmodeli/book.php";
session_start();
//if (isset($_POST["unos"])){
  
  if (isset($_POST['unosnaslova'])&&isset($_POST['unosautora'])&&isset($_POST['unosida'])){
  $name = $_POST['unosnaslova'];
  $author = $_POST['unosautora'];
  $id = $_POST['unosida'];

  $knjiga = new Book($id,$name,$author);
  $knjiga -> addBook($knjiga, $conn);
  
  if ($conn->query($q)){
  echo "<p>book is added</p>";
  } else {
  echo "<p>Nastala je greška</p>" . $conn->error;
  }
  }

  

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Bookclub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <style>form{
height: 520px;
width: 400px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}

label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
}
input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}
::placeholder{
color: #e5e5e5;
}
button{
margin-top: 50px;
width: 100%;
background-color: #ffffff;
color: #080710;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}

</style>
<!--

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>BOOKCLUB</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                  
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="browse.php" class="active">Browse</a></li>
                        <li><a href="details.php">Details</a></li>
                        <li><a href="#">Streams</a></li>
                        <li><a href="profile.php">Profile <img src="assets/images/profilna.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

        <form method="POST" action="#">
            <h3>Add a book to your library</h3>

            <label for="bookid">Book id</label>
            <input type="text" placeholder="id" name="unosid">
    
            <label for="username">Name</label>
            <input type="text" placeholder="name" name="unosnaslova">
    
            <label for="password">Author</label>
            <input type="text" placeholder="author" name="unosautora">
    
            <button type="submit" name="submit">Add</button>
           
        </form>
         
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
