<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>booking form</title>
    <link rel="stylesheet" href="book.css" />
  </head>
  <body style="color:pink; background:black;">
    <div class="container">
       <div id="load" style="width: 100%; height: 150px; background-color:">

       </div>
      <div class="title">TRIP DETAILS</div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details"></span>
              <input type="text" required />
            </div>
            <div class="input-box">
              <span class="details">Date</span>
              <input type="date" required />
            </div>
            <div class="input-box">
              <span class="details">No. of Person</span>
              <input type="number" placeholder="Enter no. of Person" required />
            </div>
            <div class="input-box">
              <span class="details">TOTAL PAYMENT</span>
              <input type="text" required />
            </div>
          </div>
        </form>
      </div>
      <br />
      <br />
      <div class="title">BOOKING DETAILS & PAYMENT METHOD</div>
      <h2>TRAVELLERS DETAILS</h2>
      <div class="content">
        <form action="#">
          <div class="user-details" style="width: 60%">
            <div class="input-box">
              <span class="details">EMAIL</span>
              <input
                type="text"
                placeholder="Enter your email address"
                required
              />
            </div>
            <div class="input-box">
              <span class="details">PHONE NUMBER</span>
              <input
                type="text"
                placeholder="Enter your email address"
                required
              />
            </div>
          </div>
        </form>
      </div>
      <h2>LEAD PASSENGER DETAILS</h2>
      <div class="content">
        <form action="#">
          <div class="user-details" style="width: 60%">
            <div class="input-box">
              <span class="details">FIRST NAME</span>
              <input type="text" placeholder="Enter your first name" required />
            </div>
            <div class="input-box">
              <span class="details">LAST MANE</span>
              <input type="text" placeholder="Enter your last name" required />
            </div>
          </div>
          <div class="border"></div>
          <h2>PAYMENT METHOD</h2>
          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" />
            <input type="radio" name="gender" id="dot-2" />
            <input type="radio" name="gender" id="dot-3" />
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">CreditCard</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">DebitCard</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">NetBanking</span>
              </label>
            </div>
            <br />
            <input type="checkbox" />
            <label class="check"
              >I agree to the price, package and passenger details shown above.
              In case any itinerary or price discount is not mentioned above,
              Adventure world is not liable to provide the same.</label
            >
            <br />
            <br />
            <input type="checkbox" />
            <label class="check"
              >I have read and accept the
              <a href="#">Terms and Conditions.</a></label
            >
          </div>
          <div class="button">
            <input type="submit" value="submit" />
          </div>
        </form>
      </div>
    </div>
    <script>
    const sbtbtn = document.getElementById('sub');
    sbtbtn.addEventListener('click',funcation() {
      var detail =  document.querySelector(".card");
      detail.style.display = "none";
      var dname = document.getElementById('#pload');
      document.getElementById('load').innerHTML = #pload;
    });
    </script>
  </body>
</html>
