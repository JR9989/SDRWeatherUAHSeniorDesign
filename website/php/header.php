<!-- header.php -->
<!-- Author: J.R. Stooksbury, Date: 2/28/23 -->
<!-- Acts as a global header for the entire website -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <?php include 'css/style.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  
</head>
  <body>
  <img src="images/<?php echo $logo; ?>" alt="<?php echo $altText; ?>" class="imageTitle"><br>
  <header>
    <ul class="navigation">
      <li><a href="index.php">Home</a></li>
      <li><a href="downloadImages.php">Download Images</a></li>
      <li><a href="calculate.php">Determine Azimuth</a></li>
      <li><a href="images.php">Generated Images</a></li>
      <li><a href="manual.php">User Manual</a></li>
    </ul>
  </header>
  <script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Select all <a> elements with an href attribute
    var links = document.querySelectorAll("a[href]");

    // Loop through the links and modify their color if the href matches the current URL
    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      
      // Check if the link's href matches the current URL
      if (link.href === currentUrl) {
        // Set the link's color to red
        link.classList.add("active");
      }
    }
  </script>
