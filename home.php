<?php
require "dbBroker.php";
//session_start();
require "suggest.php";
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BOOKCLUB</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <script src="js/sugerisi.js" type="text/javascript"></script> 
<script type="text/javascript">
function place(ele){
    document.getElementById('txt').value = ele.innerHTML;
	document.getElementById("livesearch").style.display = "none";
}
</script>

<!--
https://templatemo.com/tm-579-cyborg-gaming
-->
<style type="text/css"> 
#livesearch{ 
  margin:5px;
  width:220px;
  }
#txt{
  border: solid #A5ACB2;
  margin:5px;
  } 
</style>

  </head>

<body onload="document.getElementById('txt').focus()">

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
                    <a href="home.php" class="logo">
                        <h1>BOOKCLUB</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="livesearch">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='txt' name="searchKeyword" onkeyup="sugestija(this.value)" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        
                        <li><a href="browse.php">Browse</a></li>
                        <li><a href="details.php">Details</a></li>
                        <li><a href="#">Streams</a></li>
                        <li><a href="logout.php">Log out</a></li>
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

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>The Biggest Bookstore Ever</h6>
                  <h4><em>Find</em> Your Next Book </h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Bestsellers</em> Right Now</h4>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika1.jpg" alt="">
                      <h4>East of Eden<br><span>John Steinbeck</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika2.jpg" alt="">
                      <h4>America<br><span>Carlos Bulosan</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                       
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika3.jpg" alt="">
                      <h4>Wuthering Heights<br><span>Emily Bronte</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika4.jpg" alt="">
                      <h4>Little Women<br><span>Louisa May Acott</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika5.jpg" alt="">
                      <h4>Cane<br><span>Jen Tommer</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika6.jpg" alt="">
                      <h4>Twelve Years<br><span>Solomon Northup</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <!--<li><i class="fa fa-download"></i> 2.3M</li>-->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika7.jpg" alt="">
                      <h4>Devil on the Cross<br><span>Ngugi Wa Thiong'o</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="item">
                      <img src="assets/images/slika8.jpg" alt="">
                      <h4>Amiable<br><span>Claude Mckay</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <!--<li><i class="fa fa-download"></i> 2.3M</li>-->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="browse.html">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/slika9.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dark Tales</h4><span>Shirley Jackson</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Pages</h4><span>634</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Downloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/slika10.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>The Joy Luck Club</h4><span>Amy Tan</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Pages</h4><span>740</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Download</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/slika11.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>The Bloddy Chamber</h4><span>Angela Carter</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Pages</h4><span>457</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Downloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.php">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- *****Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Bookclub</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
<script>
  //ajax za browsere
function getXMLHTTPRequest()
{
var request = false;
if(window.XMLHTTPRequest)
   {
   request = new XMLHTTPRequest();
   } else {
   if(window.ActiveXObject)
     {
     try
         {
         request = new ActiveXObject("Msml2.XMLHTTP");
         }
     catch(err1)
         {
         try
              {
                 request = new ActiveXObject("Microsoft.XMLHTTP");
             }
         catch(err2)
             {
             request = false;
             }
         }
     }
   }
return request;
}
</script>

  </body>

</html>
