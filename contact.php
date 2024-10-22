<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="image/clglogo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>contact</title>
</head>

<body>
<?php
  include ("header.php");
  ?>
 
  <div class="background-image-overlay container-fluid pt-0">
    <h1>Contact Us</h1>
  </div>

  <div class=" container container-conatct-us">
    <div class="row pt-5 pb-3">
      <div class="col-md-4 col-sm-12">
        <div class="card" style="height: 100%; background-color: #0F0771; color: #fff;">
          <div class="card-body">
            <p class="card-text fw-bold fs-3">Harda</p>
            <h5 class="card-address">LBS College.</h5>
            <h5 class="card-info">Handia Road, National Highway 59A Harda,<br> Madhya Pradesh 461331 <br> <br>
              <i class="fa-solid fa-phone"></i> 07577-292067 <br> <br>
              <i class="fa-solid fa-envelope"></i> lbsharda@gmail.com <br> <br>
              <i class="fa-solid fa-location-dot"></i> Locate us
            </h5>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <div class="card" style="height: 100%;">
          <div class="card-body">


            <p class="card-text card-text-right">Get In Touch</p>

            <form action="submit_form.php" method="post">
              <div class="row justify-content-center ">
                <div class="form-group">

                  <input type="text" id="firstname" name="name" placeholder="First Name*" required>
                </div>
                <div class="form-group">

                  <input type="text" id="lastname" name="lastname" placeholder="Last Name*" required>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group">
                  <input type="email" id="email" name="email" placeholder="Email Address*" required>
                </div>
                <div class="form-group">
                  <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number*" required>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group">
                  <textarea id="message" name="message" rows="3" placeholder="Inquiry Details*" required></textarea>
                  <label for="myCheckbox">
                    <input type="checkbox" id="myCheckbox">
                    I agree to receive other communications from LBS.
                  </label>
                  <button class="send-message-btn">Send Message</button>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group">
                  <div class="map">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29520.746886448076!2d77.0637287347656!3d22.350103400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397d713cbe241817%3A0x543a55c35627bca9!2sLal%20Bahadur%20Shastri%20Vyavsayik%20Adhyayan%20Mahavidyalaya!5e0!3m2!1sen!2sin!4v1690272244153!5m2!1sen!2sin"
                      width="520" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h4 class="map-text"><br>Handia Road, National<br>
                      Highway 59A
                      Harda,
                      Madhya Pradesh (461331)<br>
                      88895-13786
                      lbsharda@gmail.com<br></h4>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <?php
  include ("footer.php");
  ?>
</body>

</html>
<script src="https://goo.gl/maps/QV7vfrerFjVW8aFZ7" async defer></script>
<script src="js/front.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>