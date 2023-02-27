<!DOCTYPE html>
<html>
  <head>
    <title>Image Viewer</title>
    <style>
      .full-size {
        max-width: 100%;
        max-height: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <?php
      if (isset($_GET['image'])) {
        $image = $_GET['image'];
        echo '<img class="full-size" src="' . $image . '">';
        echo '<br><a href="images.php">Back</a>';
      }
    ?>
  </body>
</html>
