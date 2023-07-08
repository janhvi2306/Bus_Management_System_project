<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking management system</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="home2.css">
    <link rel="stylesheet" href="home1.css">
    
    
</head>
<body>
    <header class="header">
        <img src="newlogo.png" class="logo">
      <h1>&emsp;Wanderu</h1>
        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="searchBox">
            <label for="searchBox" class="fas fa-search"></label>
        </form>
        <nav>
            <ul>
               <li>
                  <a href="index.php" style="font-size:21px;">Home</a>
               </li>
               
                  </ul>
         </nav>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-moon" id="theme-btn"></div>
            <div class="fas fa-user" id="login-btn">
            </div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
       

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="contactus.php">Contact us</a>
            <a href="#blogs">Blog</a>
        </nav>
        <nav class="navbar1">
            <a href="adminlogin.php">Admin Login</a>
            <a href="userlogin.php">User Login</a>
        </nav>
    </header><br><br><br><br><br><br><br><br>

    <section class="contact" id="contact">

        <h1 class="heading"> Contact us </h1>

    <form action="" data-aos="zoom">

        <div class="inputBox">
            <input type="text" placeholder="name" required data-aos="fade-up">
            <input type="email" placeholder="email" required data-aos="fade-up">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number"required data-aos="fade-up">
            <input type="text" placeholder="subject" required data-aos="fade-up">
        </div>

        <textarea name="" placeholder="your message" required id="" cols="30" rows="10" data-aos="fade-up"></textarea>
        
        <input type="submit" value="send message" class="btn">

    </form>

</section>
<center>
<section class="feedback" id="feedback">

    <h1 class="heading"> Feedback </h1>
    <div class="wrapper">
        <input type="radio" name="rate" id="star-1">
        <input type="radio" name="rate" id="star-2">
        <input type="radio" name="rate" id="star-3">
        <input type="radio" name="rate" id="star-4">
        <input type="radio" name="rate" id="star-5">
        <div class="content">
          <div class="outer">
            <div class="emojis">
              <li class="slideImg"><img src="emoji-1.png" alt=""></li>
              <li><img src="emoji-2.png" alt=""></li>
              <li><img src="emoji-3.png" alt=""></li>
              <li><img src="emoji-4.png" alt=""></li>
              <li><img src="emoji-5.png" alt=""></li>
            </div>
          </div>
          <div class="stars">
            <label for="star-1" class="star-1 fas fa-star"></label>
            <label for="star-2" class="star-2 fas fa-star"></label>
            <label for="star-3" class="star-3 fas fa-star"></label>
            <label for="star-4" class="star-4 fas fa-star"></label>
            <label for="star-5" class="star-5 fas fa-star"></label>
          </div>
        </div>
                
        
        <div class="footer">
          <span class="text"></span>
          <span class="numb"></span>
          
        </div>
      </div>
      <input type="submit" value="submit feedback" class="btn" onclick="submit();">
    
    </section>
</center>

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> canada </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> buses </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> trains </a>
            <a href="#"> <i class="fas fa-chevron-right"></i>  my tickets</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about us </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> contact us </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelop"></i> poonam_janhvi@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> pune, india - 411033 </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit">  all rights reserved </div>
    

</section>

<script src="home.js"></script>
</body>
</html>