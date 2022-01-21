<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/gouriproject.css" />
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>patagliding</title>
    <style>
      .slide-div {
        width: 100%;
        height: 600px;
        background-image: url("../images/air-a/p1.jpg");
        background-size: 100% 100%;
        animation: slider 9s infinite linear;
        display: flex;
      }
      @keyframes slider {
        0% {
          background-image: url("../images/air-a/p1.jpg");
        }
        35% {
          background-image: url("../images/air-a/p2.jpg");
        }
        75% {
          background-image: url("../images/air-a/p3.jpg");
        }
      }
    </style>
  </head>
  <body>
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
                    <li>
                      <a href="../adventures/trekking.php">trekking</a>
                    </li>
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
                    <li><a href="../adventures/skiing.html"> skiing</a></li>
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
    <div class="slide-div"><h3>paragliding</h3></div>
    <div class="adventure-about">
      <div class="adventure-about1">
        <p>
          White water rafting, commonly known as rafting, is an excitement
          filled adventure activity which is quite popular among adventure
          enthusiasts. This fun filled water activity makes use of inflatable
          raft which is used for navigating on a water body having windy
          current. Rafting is usually done on a river. <br />
          <br />
          Rafting can be done by anybody who is over the age of 12 years.
          However, it is not recommended for people who have fear of water,
          blood pressure issues, and heart problems or have breathing problems.
          It is recommended to pursue the activity under a supervisor or a
          rafting coach. The coach or supervisor can guide the first time rafter
          as well as experienced rafter in best possible way and also ensure
          water rescue in case of any emergency. <br />
          <br />
          While pursuing rafting, one needs to make use of different type of
          safety gears. Some of them are –rafts, kayaks, inflatable rafts etc.
          There is a variety of rafting gear and equipment available in the
          market these days and one can use them accordingly. <br />
          <br />
        </p>
      </div>
    </div>
    <div class="alag-card">
      <h1>best destination for paragliding</h1>
    </div>
    <section class="all-cards">
      <section class="all-cards1">
        <a href="../destination_city/himachal-predesh.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/himachal/hp2.jpeg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">
                paragliding in bir Billing(himachal-pradesh)
              </div>
              <div class="card-content"><br />₹1,100(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/rishikesh.php ">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/rishikesh/6.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">paragliding in rishikesh</div>
              <div class="card-content">
                Duration : 1H <br />₹4,400(per person)
              </div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/manali.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/manali/m1.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">Paragliding in manali</div>
              <div class="card-content"><br />₹1,280(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/himachal-predesh.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/himachal/hp5.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">
                paragliding in barot (himachal-pradesh)
              </div>
              <div class="card-content"><br />₹2,100(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/ladakh.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/ladakh/l14.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">paragliding in ladakh</div>
              <div class="card-content"><br />₹8,100(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/himachal-predesh.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/himachal/hp101.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">
                paragliding in khajjar(himachal-pradesh)
              </div>
              <div class="card-content"><br />₹1,440(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>

        <a href="../destination_city/rajasthan.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/rajasthan/r5.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">paragliding in jodhpur(rajasthan)</div>
              <div class="card-content">
                Duration : 1H <br />₹2,500(per person)
              </div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/kerala.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/kerala/k11.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">paragliding in kerala</div>
              <div class="card-content"><br />₹3,500(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
        <a href="../destination_city/near-mumbai.php">
          <div class="card 1Day all">
            <div class="card-img">
              <img src="../images/near-mumbai/nm6.jpg" alt="" />
            </div>
            <div class="gouri">
              <div class="card-titel">kamshet paragliding (near-mumbai)</div>
              <div class="card-content"><br />₹2,300(per person)</div>
              <button class="book-now-btn">Book Now</button>
            </div>
          </div>
        </a>
      </section>
    </section>
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
  </body>
</html>
