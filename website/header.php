<!-- header.php -->
<!-- Author: J.R. Stooksbury, Date: 2/28/23 -->
<!-- Acts as a global header for the entire website -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="normalize.css">
  <?php include 'style.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
</head>
  <body>
  <script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Loop through each nav link and check if its URL matches the current URL
    var navLinks = document.getElementsByClassName("nav-link");
    for (var i = 0; i < navLinks.length; i++) {
      var linkUrl = navLinks[i].querySelector("a").getAttribute("href");
      if (currentUrl.indexOf(linkUrl) !== -1) {
        navLinks[i].classList.add("active-link");
      }
    }
  </script>
  <img src="images/<?php echo $logo; ?>" alt="<?php echo $altText; ?>" class="imageTitle"><br>
  <header>
    <ul>
      <li class="nav-link"><a href="index.php">Home</a></li>
      <li class="nav-link"><a href="downloadImages.php">Download Images</a></li>
      <li class="nav-link"><a href="calculate.php">Determine Azimuth</a></li>
      <li class="nav-link"><a href="images.php">Generated Images</a></li>
      <li class="nav-link"><a href="manual.php">User Manual</a></li>
    </ul>
  </header>