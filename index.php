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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <title>home</title>
</head>
<body>
<?php
  include ("header.php");
  ?>
       <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/slide111.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide222.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/slide333.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  

    
     <div class=" facilitysec bg-light pb-5" data-aos="fade-right" data-aos-duration="950">
      <div class="sec-title text-center mb-3">
        <h1 class="pt-5 numh2">Facilities We Provide</h1>
      </div>
      <div class=" facilities container">
        <div class="row ffac">
          <div class="col-3 flogo">
           <a href="classrooms.php"><img src="image/multi.png" width="60" height="50"></a>
           <a href="classrooms.php"><p class="pt-1 fw-bold text">Multimedia</p></a>
          </div>
          <div class="col-3 flogo">
          <a href="facility.php"><img src="image/wifi.png" width="60" height="50"></a>
            <a href="facility.php"><p class="pt-1 fw-bold">Wifi</p></a>
          </div>
          <div class="col-3 flogo">
            <a href="library.php"><img src="image/library.png" width="60" height="50"></a>
            <a href="library.php" id="factext"><p class="pt-1 fw-bold">Central Library</p></a>
          </div>
          <div class="col-3 flogo">
            <a href="facility.php"><img src="image/bus1.png" width="60" height="50"></a>
            <a href="facility.php" id="factext"><p class="pt-1 fw-bold">Bus Facility</p></a>
          </div>
          <div class="col-3 flogo" id="flogo1">
           <a href="classrooms.php"><img src="image/auditorium.png" width="60" height="50"></a>
            <a href="classrooms.php"><p class="pt-1 fw-bold">Auditorium</p></a>
          </div>
          <div class="col-3 flogo" id="flogo2">
             <a href="facility.php"><img src="image/sports.png" width="60" height="50"></a>
            <a href="facility.php"><p class="pt-1 fw-bold">Sports Facility</p></a>
          </div>
          <div class="col-3 flogo" id="flogo3">
            <a href="facility.php"><img src="image/digital.png" width="60" height="50"></a>
             <a href="facility.php"><p class="pt-1 fw-bold">Digitally Secured Campus</p></a>
          </div>
   </div>
      </div>
    </div>

     <div class="">
      <div class="fabout pb-5" style="background-color: #0F0771;">
        <div class="quotes container pt-4 pb-4">
         <h2 class="font-italic  pb-3 px-5 mb-0 text-center text-light pt-5" data-aos="fade-up"
            data-aos-duration="950">
            Education is the Menifestation of the Perfection already in Human: <span class="fw-bold"> Swami Vivekananda</span></h2>
          <p class="bottom-line text-center text-light faboutp">
            "Education empowers the people and thus a nation with qualities and capabilities to survive and excel in their
            endeavors."
          </p>
          <hr class="fhr text-light">
          <h5 class="pt-2 fw-bold text-center fs-3 text-light">Dr. Rajeev Khare</h5>
          <p class="text-center fs-5 text-light">Founder & Chairman</p>
        
          <div class="container text-center">
          <div class="buttonbox pt-2">
            <a href="about.php" class=" fw-bold"> About Us</a>
        <a href="contact.php" class="fw-bold">Contact Us</a>
      </div> 
           </div>
      </div>
    </div>
   <div class="glryy pb-5 pt-5 mb-3 bg-light" data-aos="fade-up" data-aos-duration="990">
    <div class="sec-title text-center mb-3">
      <h1 class="pt-3 fw-bold numh2">Life At Our Campus</h1>
    </div>
  <div class="container">
  <div class="row justify-content-center image-row">
    <div class="col-md-6 col-lg-3">
      <img src="image/lpl5.jpg" alt="Image 1" class="img-fluid">
    </div>
    <div class="col-md-6 col-lg-3">
      <img src="image/glr2.jpg" alt="Image 2" class="img-fluid">
    </div>
    <div class="col-md-6 col-lg-3">
      <img src="image/lpl1.jpg" alt="Image 3" class="img-fluid">
    </div>
    <div class="col-md-6 col-lg-3">
      <img src="image/dance1.jpg" alt="Image 4" class="img-fluid">
    </div>
  </div>
</div>
    </div>
    </div>
    <div class="Numbers pb-4 pt-4" data-aos="fade-right" data-aos-duration="590">
      <div class="sec-title text-center mb-3">
        <h1 class="pt-4 fw-bold numh2">LBS Harda By Numbers</h1>
       </div>
        <div>
        <div class="container">
        <div class="groups pt-4">
          <div class="group">
            <img src="image/students.png" width="50" height="50" class="student con1">
            <div class="cr text-center pt-2 student">
              <span class="counter" data-target="2500"></span><b class="plus"><i class="fa-solid fa-plus"></i></b>
              <p>Students</p>
            </div>
          </div>
          <div class="group numc">
            <img src="image/faculty.png" width="50" height="50" class="student">
            <div class="cr text-center pt-2">
              <span class="counter  text-center" data-target="50"></span><b class="plus"><i class="fa-solid fa-plus"></i></b>
              <p class="ms-2">Faculty members</p>
            </div>
          </div>
          <div class="group numc">
            <img src="image/staff.png" width="50" height="50" class="student">
            <div class="cr ms-2 text-center pt-2">
              <span class="counter" data-target="100"></span><b class="plus"><i class="fa-solid fa-plus"></i></b>
              <p class="staff">Staff members</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/front.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>