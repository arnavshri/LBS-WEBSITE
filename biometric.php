<!DOCTYPE html>
<html lang="en">

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
  <title>Biometric Attendance</title>
</head>

<body>
<?php
  include ("header.php");
  ?>
 
  <div class="background-image-overlay container-fluid pt-0">
    <h1>Biometric Attendance</h1>
  </div>
  
  <!-- Biometric Attendance Data Section -->
  <div class="container">
    <h1 class="pt-5 pb-5 text-center fw-bold numh2">Biometric Attendance Data</h1>

    <!-- Links for B.Ed and D.El.Ed Attendance -->
    <div class="text-center">
      <p><a href="path-to-b-ed-attendance.pdf" class="btn btn-primary mb-3" target="_blank">Bachelor of Education (B.Ed) Attendance</a></p>
      <p><a href="path-to-d-el-ed-attendance.pdf" class="btn btn-primary" target="_blank">Diploma in Elementary Education (D.El.Ed.) Attendance</a></p>
    </div>
  </div>

  <?php
  include ("footer.php");
  ?>
</body>

</html>

<script src="js/front.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
