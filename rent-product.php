<!doctype html>
<html>

<head>

  <title>Rent Product - Rentify</title>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Twitter Card-->
  <meta name="twitter:title" content="Rentify">
  <meta name="twitter:site" content="" />
  <meta name="twitter:creator" content="" />
  <meta name="twitter:description" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals.">
  <meta name="twitter:image" content="img/logo.png">
  <meta name="twitter:card" content="">
  <meta name="description" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals.">
  <meta name="keywords" content="Rentify, Rentals, Electronics, Devices, Gadgets, Favcode54" />
  <!-- Facebook card -->
  <meta property="fb:admins" content="" />
  <meta property="fb:page_id" content="" />
  <!--Open Graph-->
  <meta property="og:image" content="img/logo.png">
  <meta property="og:title" content="Rentify" />
  <meta property="og:description" content="" />
  <meta name="author" content="Rentify">
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="Rentify" />
  <meta property="og:type" content="Rentify is a virtual renting platform that allows you to rent your electronics and book rentals." />

  <!-- Add to home screen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="Rentify" />
  <link rel="apple-touch-icon" href="img/icons/icon-152x152.png" />
  <!-- Windows -->
  <meta name="msapplication-TileImage" content="/img/icons/icon-144x144.png" />
  <meta name="msapplication-TileColor" content="#007bff" />

  <link rel="manifest" href="/manifest.json" />
  <meta name="theme-color" content="#007bff" />

  <!-- Google Knowledge Graph card -->
  <script type='application/ld+json'>
    {
      "@context": "https://www.schema.org",
      "@type": "",
      "name": "Rentify ()",
      "url": "",
      "logo": "img/logo.png",
      "description": "Rentify is a virtual renting platform that allows you to rent your electronics and book rentals."
    }
  </script>

  <!--FAVICON-->
  <link rel="icon" href="img/logo.png" type="image/png">
  <link rel="shortcut icon" href="" type="img/x-icon">

  <!-- STYLESHEETS-->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/app.css" rel="stylesheet" type="text/css">


</head>

<body>

  <nav class="navbar sticky-top centered navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">
      <img src="img/logo.png" width="70" height="auto" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rent-product">Rent Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add-product">Submit Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            FAQ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav><!--Header-->
    <?php include 'includes/header.php'?>

    <!-- STYLESHEETS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">


</head>

<body>

<!--Nav Bar-->
<?php include 'includes/nav.php'?>

  <section class="rent py-5">
    <div class="publishedRentals"></div>
  </section>



  <!-- Footer -->
  <?php include '../includes/footer.php'?>
   <!-- Footer -->

  <!--==================== JavaScript ==============================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>
