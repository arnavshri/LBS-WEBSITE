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
    <title>Land and Building</title>

    <style>
        /* Center align the certificates list */
        .certificates {
            text-align: center;
        }

        .certificates ol {
            display: inline-block; /* This makes the ol align center */
            text-align: left; /* Aligns list items to the left within the centered container */
        }
    </style>
</head>

<body>
<?php
  include ("header.php");
  ?>
   
    <div class="background-image-overlay container-fluid pt-0">
        <h1>Land and Building</h1>
    </div>

    <!-- Certificates Section -->
    <div class="container-fluid pt-5">
        <h4 class="fw-bold numh2 text-center" data-aos="fade-up" data-aos-duration="1000">Certificates</h4>
        <div class="certificates">
            <ol class="list">
                <li><a href="pdf\01 Land Registration Deed A.pdf" target="_blank">Land Registration <i class="fa-solid fa-file-pdf"></i></a></li>
                <li><a href="pdf\02 Approved Building Plan (1).pdf" target="_blank">Approved Building Plans <i class="fa-solid fa-file-pdf"></i></a></li>
                <li><a href="pdf\03 Diversion Certificate.pdf" target="_blank">Diversion Certificate <i class="fa-solid fa-file-pdf"></i></a></li>
                <li><a href="pdf\04 Khasra B1 41648 Commercial Land Use.pdf" target="_blank">Khasra B1 Nakal (Commercially Diverted) <i class="fa-solid fa-file-pdf"></i></a></li>
                <li><a href="pdf\05 Land Use Certificate A.pdf" target="_blank">Land Use Certificate <i class="fa-solid fa-file-pdf"></i></a></li>
                <li><a href="pdf\06 Building Complition A.pdf" target="_blank">Building Completion Block A, B, C & B Extension <i class="fa-solid fa-file-pdf"></i></a></li>
            </ol>
        </div>
    </div>

    <!-- College Building Section -->
    <div class="container-fluid">
        <div class="vission-mission">
            <div class="container pt-5">
                <div class="row landrow pb-5">
                    <div class="col-md-6 col-sm-12 ">
                        <div class="about-img" data-aos="fade-up" data-aos-duration="1000">
                            <div class="img">
                                <img src="image/lbs1.jpeg" class="img-fluid card_img limg" alt="..." width="450">
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 landtext">
                        <h4 class="fw-bold numh2" data-aos="fade-up" data-aos-duration="1000">College Building</h4>
                        <p class="aboutp mt-4 me-5">The college campus is spread over an acre of land, whose building is
                            built and
                            operated in an area of ​​about 90,000 square feet.</p>
                    </div>
                </div>

                <div class="row landrow pb-5">
                    <div class="col-md-6 vs col-sm-12 landtext">
                        <h4 class="fw-bold numh2" data-aos="fade-up" data-aos-duration="1000">College Building</h4>
                        <p class="aboutp mt-4 me-5">This building is divided into four different blocks.
                            The building has large, airy, common and class rooms with multi-media interactive panels.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-img" data-aos="fade-up" data-aos-duration="1000">
                            <div class="img">
                                <img src="image/lbs2.jpg" class="img-fluid card_img limg" alt="..." width="450">
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row landrow pb-5">
                    <div class="col-md-6 vs col-sm-12">
                        <div class="about-img" data-aos="fade-up" data-aos-duration="1000">
                            <div class="img">
                                <img src="image/lands8.jpeg" class="img-fluid card_img limg" alt="..." width="450">
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 vs col-sm-12 landtext">
                        <h4 class="fw-bold numh2" data-aos="fade-up" data-aos-duration="1000">College Building</h4>
                        <p class="aboutp mt-4 me-5">Within the boundary and generally as close to the centre as
                            possible will be the
                            square
                            which is an area of carefully prepared grass upon which cricket pitches can be prepared and
                            marked for the
                            matches.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/front.js"></script>
