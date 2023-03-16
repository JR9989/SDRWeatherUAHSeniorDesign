<!-- displayImage.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Displays images as full size for easy viewing -->
<!DOCTYPE html>
<html>
  <head>
    <?php include 'css/background.php'; ?>
    <?php include 'css/style.php';?>
    <title>Image Viewer</title>
  </head>
  <!-- star background -->
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <!-- end star background -->
  <body>
    <div class="fullSizeImage">
      <?php
        if (isset($_GET['image'])) {
          $image = $_GET['image'];
          $image_title = str_replace('generatedImages/', '', $image);
          echo '<h1>' .$image_title . '</h1>';
          echo '<img class="full-size" src="' . $image . '">';
          echo '<br><a class="link" href="images.php">Back</a>';
        }
      ?>
    </div>
  </body>
</html>
