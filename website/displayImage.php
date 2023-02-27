<!DOCTYPE html>
<html>
  <head>
    <title>Image Viewer</title>
    <?php include 'style.php'; ?>
    <style>
      .full-size {
        max-width: 100%;
        max-height: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
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
