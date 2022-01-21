<?php 

if(isset($_POST['name'])){
  $_SERVER = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($_SERVER, $username, $password);
   if(!$con){
       die("connection to this database failed due to ".mysqli_connect_error());
   }
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $other = $_POST['other'];
   $sql = "INSERT INTO `adventure_world`.`trip` (`name`, `email`, `phone`, `other`, `dt`) VALUES
   ( '$name', '$email', '$phone', ' $other ', current_timestamp());";
     
       if($con->query($sql) == true){ 
           echo"<script>alert('Thankyou :)')</script>";
     }
      else {
      echo "ERROR: $sql <br> $con->error";
       }
    $con->close();
}
?>


 <!--contact form-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="../css/gouriproject.css">
    
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- font awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <nav>
      <div class="full-nav">
        <div class="logo">
          <a href="#"><img src="../images/logos.png" alt="" /></a>
        </div>
        <input type="radio" name="slide" id="menu-btn" />
        <input type="radio" name="slide" id="cancel-btn" />
        <ul class="nav-link">
          <label for="cancel-btn" class="btn cancel-btn"
            ><i class="fa fa-remove"></i
          ></label>
          <li><a href="../index.php">HOME</a></li>
          <li>
            <a href="#" class="desktop-item">DESTINATION</a>
            <input type="checkbox" id="showcity" />
            <label for="showcity" class="mobile-item">DESTINATION</label>
            <div class="destination">
              <div class="contant1">
                <div class="row1">
                  <ul class="city">
                    <li>
                      <a href="../destination_city/rishikesh.php">RISHIKESH</a>
                    </li>
                    <li>
                      <a href="../destination_city/manali.php">manali</a>
                    </li>
                    <li><a href="../destination_city/goa.php">Goa</a></li>
                    <li>
                      <a href="../destination_city/rajasthan.php">
                        rajasthan</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="row1">
                  <ul class="city">
                    <li>
                      <a href="../destination_city/himachal-predesh.php"
                        >himachal-pradesh</a
                      >
                    </li>
                    <li>
                      <a href="../destination_city/kerala.php">Kerala</a>
                    </li>
                    <li>
                      <a href="../destination_city/ladakh.php">ladakh</a>
                    </li>
                    <li>
                      <a href="../destination_city/near-mumbai.php"
                        >near-mumbai</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#" class="desktop-item"> ADVENTURE TRIPS</a>
            <input type="checkbox" id="showdmega" />
            <label for="showdmega" class="mobile-item">ADVENTURE TRIPS</label>
            <div class="adventure">
              <div class="contant">
                <div class="row">
                  <header>land activities</header>
                  <ul class="activities">
                    <li><a href="../adventures/trekking.php">trekking</a></li>
                    <li><a href="../adventures/camping.php">camping</a></li>
                    <li>
                      <a href="../adventures/motorsports.php"> motorsports</a>
                    </li>
                    <li><a href="../adventures/cycling.php"> cycling</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>air activities</header>
                  <ul class="activities">
                    <li>
                      <a href="../adventures/paragliding.php"> paragliding</a>
                    </li>
                    <li>
                      <a href="../adventures/parasaling.php">parasaling</a>
                    </li>
                    <li>
                      <a href="../adventures/hot air balloon.php">
                        Hot Air Balloon</a
                      >
                    </li>
                    <li><a href="../adventures/zip-line.php"> zip line</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>water activities</header>
                  <ul class="activities">
                    <li>
                      <a href="../adventures/rafting.php"> water rafting</a>
                    </li>
                    <li><a href="../adventures/kayaking.php"> Kayaking</a></li>
                    <li><a href="../adventures/sailing.php"> sailing</a></li>
                    <li>
                      <a href="../adventures/scuba-diving.php">
                        scuba diving</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="row">
                  <ul class="activities">
                    <li>
                      <a href="../adventures/bungee jump.php">
                        bungee jumping</a
                      >
                    </li>
                    <li><a href="../adventures/skiing.php"> skiing</a></li>
                    <li>
                      <a href="../adventures/camel safari.php">
                        camel safari</a
                      >
                    </li>
                    <li>
                      <a href="../adventures/rock climbing,reppling.php">
                        rock climbing,reppling</a
                      >
                    </li>
                    <li>
                      <a href="../adventures/tree-house.php"> tree house</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="../login&signup/signIn.php">MY ACCOUNT</a>
          </li>
          <li><a href="../other/contact.php">CONTACT US</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn">
          <i class="fas fa-bars"></i>
        </label>
      </div>
    </nav>
      <!--contact form start-->
    <!--contact-form-->
    <div id="kanu">
        <section id="contact-form" >
          <div class="form-container">
            <div class="form-sections">
              <!-- Form left -->
              <div class="Form-left">
                <h1>Get In Touch</h1>
                <div class="line"></div>
                <!--border-bottom line-->
                <p>
                  Join us for a trip of a lifetime, if you crave for some high end
                  adventure!
                </p>
                <br />
                <!--third Heading -->
    
                <i class="fa fa-envelope" style="font-size: 24px"></i>
                <span>adventureworld@gmail.com</span>
                <hr />
                <br />
    
                <!--second Heading -->
    
                <i class="fa fa-phone" style="font-size: 24px"></i>
                <span>(+91)9755531033</span>
                <hr />
                <br /><br />
    
                <!-- social media icons -->
                <i class="fa fa-instagram" ></i>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                
              </div>
    
              <!-- form right -->
              <div class="Form-right">
                
              <!-- form -->
                <p>
                  We strive to create the best trips possible for you, with uncommon
                  professionalism, unsurpassed personal service and a commitment to
                  protect and preserve the cultures and environments through which
                  we travel. Get in touch with us to plan your next holiday.
                </p>
                
                <form action="contact.php" method="post">
                  <div class="gling">
                    <input type="text" placeholder="Name" name="name" required  />
                  
                    <input type="email" placeholder="Email" name="email" />
                  </div>
                  <div class="gling " >
                    <input type="phone" placeholder="phone no." name="phone" required/>
                 <textarea
                    name= "other"
                    cols="50"
                    rows="7"
                    placeholder="Any questions you to ask us / customised group / departure etc."
                    required
                  ></textarea><br />
                  <button name="submit">Send</button>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
        <!--contact form end-->
        <!--footer start-->
    <footer class="footer">
       <div class="logo-footer" ></div>
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <ul>
              <li><a href="../index.php">home</a></li>
              <li>
                <a href="../other/about us.php">about us</a>
              </li>
              <li>
                <a href="../other/our_team.php"> our team</a>
              </li>
              <li><a href="../other/contact.php">contact us</a></li>
              <li>
                <a href="../other/t&c.php">terms & conditions</a>
              </li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Our best adventures</h4>
            <ul>
              <li>
                <a href="../destination_city/ladakh.php"
                  >markha valley trek in ladakh</a
                >
              </li>
              <li>
                <a
                  href="../destination_city/himachal-predesh.php"
                  >Paragliding in himachal pradesh</a
                >
              </li>
              <li>
                <a href="../destination_city/manali.php"
                  >Camping in manali</a
                >
              </li>
              <li>
                <a href="../destination_city/rishikesh.php"
                  >River Rafting in rishikesh</a
                >
              </li>
              <li>
                <a href="../destination_city/ladakh.php"
                  >Motorcycle Tours in ladakh</a
                >
              </li>
            </ul>
          </div>
          <div class="footer-col">
            <ul>
              <li>
                <a href="../destination_city/goa.php"
                  >parasailing in goa</a
                >
              </li>
              <li>
                <a href="../destination_city/rajasthan.php"
                  >camel safari in rajasthan</a
                >
              </li>
              <li>
                <a href="../destination_city/rishikesh.php"
                  >bungee jumping in rishikesh</a
                >
              </li>
              <li>
                <a href="../destination_city/kerala.php">
                  tree house in kerala</a
                >
              </li>
            </ul>
          </div>
          <div class="footer-col">
            <h3>follow us on</h3>
            <div class="social-links">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <p class="copyright">
          &copy; 2021 <a href="#" class="aw_link">adventuresworld.com </a> all
          rights reserved.
        </p>
      </div>
    </footer>
    <!--footer end-->
       
       </body>
</html>
