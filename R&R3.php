<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>R&R</title>
  <link rel="stylesheet" href="style2.css">
  <script src="https://kit.fontawesome.com/fdd870ea48.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
</head>
<style>
  .cards {
    width: 20%;
    background-color: darkgrey;
    border-radius: 5px;
    margin: 21px;
    display: inline-block;
    margin-left: 40px;
}
  .cards:hover {
    box-shadow: 2px 2px 10px black;
  }

  .image img {
    width: 100%;
    border-radius: 5px;
  }

  .title {
    padding: 10px;
    font-size: 23px;
  }

  .works {
    margin: 0px;
    width: 15%;
    border-radius: 10px;
    background-color: white;
    display: inline-block;
    margin-left: 195px;
}

  .gallery img {
    width: 100%;
    border-radius: 5px;
  }
  
  .benefits{
    background-color:black;
    margin: 0px;
    width: 12%;
    border-radius:20px;
    display: inline-block;
    margin-left: 230px;
  }

  .picture img{
    width:100%;
    /* border-radius:50%; */
  }

  .caption{
   font-size:22px;
   padding:5px;
   color:white;
  }
  .footer{
    display:-webkit-flex;
    display:-moz-flex;
    display:-ms-flex;
    display: -o-flex;;
    flex-flow: row wrap;
    display:flex;
    padding:50px;
    color:#fff;
    background-color:black;
  }

  .footer > * {
    flex: 1 100%;
  }
  .footer-left{
    margin-right:1.25em;
    margin-bottom:2em;
  }
  .footer-left img{
    width:25%;;
    border-radius:50%;
    margin-left:24%;
    display: block;
   }
  h2{
    font-weight: 600;
    font: size 17px;
  }
  .footer ul{
    list-style:none;
    padding-left:0;
  }  
  .footer li{
    line-height: 2em;
  }
  .footer a{
    text-decoration: none;
  }
  .footer-right{
    display:-webkit-flex;
    display:-moz-flex;
    display:-ms-flex;
    display: -o-flex;;
    display:flex;
    flex-flow: row wrap;
  }
  .footer-right{
    flex:1 50%;
    margin-right:1.25em;
  }
  .footer-bottom{
    text-align: center;
   }
  .footer-left p{
    padding-right:15%;
  }
  .socials a{
    background-color: black;
    width:40px;
    height:40px;
    display:inline-block;
    margin-right: 10px;
  }
  .socials a i{
    background-color: white;
    color:black;
    padding:10px 12px;
    font-size:21px;
  }
  @media screen and (min-width:600px){
    .footer-right> *{
      flex:1;
    }
    .footer-left{
      flex:1 0px;
    }
    .footer-right{
      flex:2 0px;
    }
  }
 .footer-left h4{
  margin-left:23%;
 }
 .rentals{
  background-color:black;
  padding:4px;
  color:#fff;
  border-radius:20px;
  margin-left:2%;
  width:160%;

}
 .background{
  background-color:white;
  padding:30px;
  display: flex;
  
 }
 .background img{
  width:108%;
  height:100%;
  margin-left:78%;
  border-radius:20%;
  border: 5px solid black;
 }
 .Thank{
  text-align: center;
 }
 .Thank h2 b{
  font-family:Imprint MT Shadow;
 } 
 .navbar ul li a button {
   background:#ff004f;
   color:#fff;
   border:0;
   border-radius:5px;
   cursor:pointer;
   font-size:22px;
   margin:20px 0;
   padding:6%;
 }
</style>
<body>

   <DIV style="position: fixed;top: 0;left: 0;z-index: 1; width: 100%;">
   

    <div class="navbar">
      <img src="Image/logo3.jpg" class="logo">
      <ul>
        <li class="Active"><a href="#"><b><u>Home</u></b></a></li>
        <li class="Active"><a href="Aboutus.html"><b><u>About Us</u></b></a></li>
        <li class="Active"><a href="#Category"><b><u>Category</u></b></a></li>
        <li class="Active"><a href="Contactus.html"><b><u>Contact Us</u></b></a></li>
        <li class="Active"><a href="#Process"><b><u>Process</u></b></a></li>
        <li class="Active"><a href="login.php"><i class="fa-sharp fa-solid fa-user"></i></a></li>
        <li class="Active"><a href="feedback.html"><i class="fa-sharp fa-solid fa-face-smile"></i></a></li>
        <li class="Active"><a href="search.html"><i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li class="Active"><a href="subscribe.html"><Button style="background-color:cadetblue;">Subscribe</Button></a></li>
      </ul>
    </div>
  </DIV>
    <div style="margin-top: 150px;">
      <center>
        <h1 style="font-family:Brush Script MT">Rent & Run</h1>
      </center>
      <center>
        <h3 style="font-family:Blackadder ITC">Did you know you can make money from your wardrobe? Earn with us!!</h3>
      </center>
    </div>

  
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Image/img4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Image/image1.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Image/img3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script><br>

      </header>

      <!-- Now coding for Steps  -->
      <div>
        <center><u><b>
              <h2 style="font-family: Imprint MT Shadow">How R&R Works</h2>
            </b></u></center>
      </div>
      <div class="time">

        <div class="works">
          <div class="gallery">
            <img src="Image/img17.jpg">
          </div>
          <div>
            <center>
              <p style="font-size:22px;"><b>1. Visit our Website</b></p>
            </center>
            <center>
              <p>Pick your perfect style from our collection of designer outfits and accessories.</p>
            </center>
          </div>
        </div>

        <div class="works">
          <div class="gallery">
            <img src="Image/img14.jpg">
          </div>
          <div>
            <center>
              <p style="font-size:22px;"><b>2. Select a Style</b></p>
            </center>
            <center>
              <p>Pick your perfect style from our collection of designer outfits and accessories.</p>
            </center>
          </div>
        </div>

        <div class="works">
          <div class="gallery">
            <center><img src="Image/img15.png"></center>
          </div>
          <div>
            <center>
              <pre style="font-size:22px;"><b>3. Book your Outfit</b></pre>
            </center>
            <center>
              <p>Book your look for 3, 5, 7 or 10 days.Outfit will be altered to your size and dry cleaned before
                delivery.</p>
            </center>
          </div>
        </div>

        <div class="works">
          <div class="gallery">
            <img src="Image/img16.jpg">
          </div>
          <center>
            <p style="font-size:22px;"><b>4. Flaunt it</b></p>
          </center>
          <div>
            <center>
              <p>Flaunt your look with that perfect outfit chosen by you and enjoy the compliments</p>
            </center>
          </div>
        </div>

        <div class="works">
          <div class="gallery">
            <img src="Image/img18.jpg">
          </div>
          <div>
            <center>
              <p style="font-size:19px;"><b>5. Look stunning and collect compliments!</b></p>
            </center>
            <center>
              <p>Own your look and turn heads wherever you go.</p>
            </center>
          </div>
        </div>

        <div class="works">
          <div class="gallery">
            <img src="Image/img19.jpg">
          </div>
          <div id="Category">
            <center>
              <p style="font-size:22px;"><b>6. Return It</b></p>
            </center>
            <center>
              <p>Pack the outfit and we'll pick it up a day after your occasion or the dates chosen by you..</p>
            </center>
          </div >
        </div>
      </div><br>

      <!-- Now coding for Category -->
      <div>
        <center><u><b>
              <h1 style="font-family: Imprint MT Shadow">Category</h1>
            </b></u></center>
      </div><br>

      <div class="cards">
        <div class="image">
          <a href="lehenga.php"><img src="Image/img5.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Lehengas</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="saree.php"><img src="Image/img6.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Saree</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="#"><img src="Image/img13.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Suit</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="indowestern.php"> <img src="Image/img8.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Indo Western</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="gown.php"><img src="Image/img9.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Gowns</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="anarkali.php"> <img src="Image/img10.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Anarkalis</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="#"></a><img src="Image/img11.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Dresses</center>
          </b>
        </div>
      </div>

      <div class="cards">
        <div class="image">
          <a href="prewedding.php"><img src="Image/img12.jpg"></a>
        </div>
        <div class="title">
          <b>
            <center style="font-family:Imprint MT Shadow">Pre Weeding</center>
          </b>
        </div>
      </div>
      </div><br><br>

      <!-- Now coding for Benefits -->
      <div>
        <center><u><b>
              <h1 style="font-family: Imprint MT Shadow">Benefits</h1>
            </b></u></center>
      </div>
      <div class="benefits">
        <div class="picture">
          <img src="Image/img20.jpg"> 
        </div>
        <div class="caption"><b><center style="font-family:Footlight MT Light">Sustainable Development</center></b></div>
      </div>

        <div class="benefits">
          <div class="picture">
            <img src="Image/img21.jpg"> 
          </div>
          <div class="caption"><b><center style="font-family:Footlight MT Light">Helps the Environment</center></b></div>
        </div>

        <div class="benefits">
          <div class="picture">
            <img src="Image/img22.jpg"> 
          </div>
          <div class="caption"><b><center style="font-family:Footlight MT Light">Time Saver</center></b></div>
        </div>

        <div class="benefits">
          <div class="picture">
            <img src="Image/img23.jpg"> 
          </div>
          <div class="caption"><b><center style="font-family:Footlight MT Light">No fear of Repitition</center></b></div>
        </div>

        <div class="benefits">
          <div class="picture">
            <img src="Image/img24.jpg"> 
          </div>
          <div class="caption"><b><center style="font-family:Footlight MT Light">Saves Money</center></b></div>
        </div>

        <div id="Process" class="benefits">
          <div class="picture">
            <img src="Image/img25.jpg"> 
          </div>
          <div class="caption"><b><center style="font-family:Footlight MT Light">Try New Brands</center></b></div>
        </div><br><br><br>

        <!-- Now code for Rental Process -->
        <div>
            <center><u><b>
                  <h1 style="font-family: Imprint MT Shadow">Rental Process</h1>
                </b></u></center>
        </div><br>
        <div class="background">
           <div>
           <div class="rentals ">
               <h3><pre >1. Bookings via Website.</pre></h3>
           </div><br>
           <div class="rentals">
             <h3><pre>2. Doorstep Delivery.</pre></h3>
           </div><br>
           <div class="rentals">
              <h3><pre>3. 4 Day rentals at 10% of the MRP. </pre></h3>
           </div><br>
           <div class="rentals">
              <h3><pre>4. In store trials and customizations.</pre></h3>
           </div>
          </div>
          <div>
              <img src="Image/img26.jpg">
           </div>
         </div>
        <br>

       <!--  Now the code for footer -->
    <footer class="footer">
      <div class="footer-left">
              <img src="Image/logo3.jpg"><h4 style="font-family:Imprint MT Shadow">Rent & Run</h4>
              <p>So if you wish to look your best on your next occasion and want to experience the suave taste of our fashion industry, then hop straight to Rent And Run and we will do the rest!</p>
              <div class="socials">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </div>
      </div>

      <ul class="footer-right">
             
            <li>
              <h2 style="font-family:Imprint MT Shadow">Our Company</h2>
              <ul class="box">
               <li> <a href="#">Our Profile</a></li>
               <li> <a href="Terms&condition.html">Terms and Condition</a></li>
               <li> <a href="Aboutus.html">About Us</a></li>
              </ul>
            </li>  
             <li class="features">
                 <h2 style="font-family:Imprint MT Shadow">Contact Us</h2>
                 <ul class="box">
                  <li> <a href="#">anishajain553@gmail.com</a></li>
                  <li> <a href="#">jagratrimehta410@gmail.com</a></li>
                  <li> <a href="#">jain.divya2708@gmail.com</a></li>
                 </ul>
             </li>
             <li>
                <h2 style="font-family:Imprint MT Shadow">Careers</h2>
                <ul class="box">
                <p>Drop you Enquiry<br><a href="#">carees@rentandrun.com</a></p>
                 </ul>
             </li>
      </ul>
      <div class="footer-bottom">
        <p>All rights reserved by &copy;creative 2023</p>
      </div>
    </footer><br>
    <div class="Thank">
      <h2><b>Thank you For Visiting Our Website</b></h2>
    </div><br>
    </body>

    </html>
   </section>
  </body>
  </html>