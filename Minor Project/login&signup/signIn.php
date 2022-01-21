<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signin</title>
    <link rel="stylesheet" href="../css/gouriproject.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <div class="nav-space">
      <!-- navigation -->
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
                        <a href="../destination_city/rishikesh.php"
                          >RISHIKESH</a
                        >
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
                      <li>
                        <a href="../adventures/trekking.php">trekking</a>
                      </li>
                      <li><a href="../adventures/camping.php">camping</a></li>
                      <li>
                        <a href="../adventures/motorsports.php">
                          motorsports</a
                        >
                      </li>
                      <li><a href="../adventures/cycling.php"> cycling</a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <header>air activities</header>
                    <ul class="activities">
                      <li>
                        <a href="../adventures/paragliding.php">
                          paragliding</a
                        >
                      </li>
                      <li>
                        <a href="../adventures/parasaling.php">parasaling</a>
                      </li>
                      <li>
                        <a href="../adventures/hot air balloon.php">
                          Hot Air Balloon</a
                        >
                      </li>
                      <li>
                        <a href="../adventures/zip-line.php"> zip line</a>
                      </li>
                    </ul>
                  </div>
                  <div class="row">
                    <header>water activities</header>
                    <ul class="activities">
                      <li>
                        <a href="../adventures/rafting.php"> water rafting</a>
                      </li>
                      <li>
                        <a href="../adventures/kayaking.php"> Kayaking</a>
                      </li>
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
    </div>
    <!-- Login form -->
<div class="login-page">
      <div class="box">
        <div class="left">
          <h3>Create Account</h3>
          <p>"SignUp and get the best adventure deals"</p>
          <button type="button" class="register-btn">Signup</button>
        </div>
        <div class="right">
          <h3>Have an Account ?</h3>
          <p>"LogIn to your Adventurenation account"</p>
          <button type="button" class="login-btn">Login</button>
        </div>

        <div class="form">
          <!-- Login form Start -->
          <form action="login.php" method="post">
            <div class="login-form">
              <h3>Log In</h3>
              <div class="form-group">
                <input
                  name="email"
                  type="email"
                  placeholder="Email Address*"
                  class="form-control"
                  required
                />
              </div>
              <div class="form-group">
                <input
                  name="password"
                  type="password"
                  placeholder="Password*"
                  class="form-control"
                  required
                />
              </div>
              
                <label><input type="checkbox" class="check_btn"/>Remember Me </label>
              
              <button type="submit" class="submit-btn" name="send">
                Login
              </button>
              
            </div>
          </form>
          <!-- Login form End -->

          <?php
 include 'register.php';
         if(isset($_POST['submit'])){
           $name = mysqli_real_escape_string($con, $_POST['name']);
           $email = mysqli_real_escape_string($con, $_POST['email']);
           $password = mysqli_real_escape_string($con, $_POST['password']);
           $Cpassword = mysqli_real_escape_string($con, $_POST['Cpassword']); 

           $pass = password_hash($password, PASSWORD_BCRYPT);
           $Cpass = password_hash($Cpassword, PASSWORD_BCRYPT);

           $emailquery = " select * from registration where email='$email'";
           $query = mysqli_query($con,$emailquery);

           $emailcount = mysqli_num_rows($query);

           if($emailcount>0){ //echo"email already exists"; ?>
          <script>
            alert("email already exists ");
          </script>
          <?php
           }else{
             if($password === $Cpassword){
              
    $insertquery = "insert into registration(name, email, password, Cpassword)
    values('$name','$email','$pass','$Cpass ')";

                $query = mysqli_query($con, $insertquery);

                if($query){
                  ?>
          <script>
            alert("insearted successfully");
            
          </script>
          <?php
                  } else{
                   ?>
          <script>
            alert("no connection ");
          </script>
          <?php
                  }

             }else{
              ?>
          <script>
            alert(" passward are not matching");
          </script>
          <?php
             }
           }

         }
      
?>

          <!-- Register form Start -->
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="register-form form-hidden">
              <h3>SignUp</h3>
              <div class="form-group">
                <input
                  type="text"
                  placeholder="Full Name*"
                  class="form-control"
                  required
                  name="name"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  placeholder="Email Address*"
                  class="form-control"
                  required
                  name="email"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  placeholder="Create Password* "
                  class="form-control"
                  required
                  name="password"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  placeholder="Conform Password*"
                  class="form-control"
                  required
                  name="Cpassword"
                />
              </div>

              <button type="submit" class="submit-btn" name="submit">
                SignUp
              </button>
            </div>
          </form>
          <!-- Register form End -->
         </div>
      </div>
    </div>
    <!--footer start-->
    <footer class="footer">
      <div class="logo-footer"></div>
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
    <script src="../js/myaccount.js"></script>
  </body>
</html>
