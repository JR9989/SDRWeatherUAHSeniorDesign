<!-- images.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Dynamically looks at specified directory and generates image thumbnail gallery based upon its contents -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Image Gallery</title>
  <?php include 'style.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Images</title>
</head>
<body>
  <div style="margin-top: 25px;">
    <img src="images/imags.gif" alt="Generated Images" class="imageTitle"><br>
    <a href="calculate.php" class="link">Determine Satellite Azimuth</a>
    <br><br>
    <a href="index.php" class="link">Home</a>
    <?php
    if(isset($_POST['clearImages'])) { // check if the button is pressed
        $command = escapeshellcmd('./removeImages.sh');
        $output = shell_exec($command); // execute the command
    }
    if(isset($_POST['addImages'])) { // check if the button is pressed
        $command = escapeshellcmd('./addImages.sh'); 
        $output = shell_exec($command); // execute the command
    }
    ?>
    <form method="post">
      <input type="submit" name="clearImages" class="link" value="Clear Images">
      <input type="submit" name="addImages" class="link" value="Add Images">
    </form>
    <br><br>
    <?php
    $image_names = glob("generatedImages/*.{jpg,png,gif}", GLOB_BRACE);

    if(empty($image_names)){
      echo '<p class="notice">No images found in the directory.</p>';
    }
    else {
      foreach ($image_names as $image_name) {
        $image_title = str_replace('generatedImages/', '', $image_name);
        echo '<div class="thumbNailContainer">';
        echo '<a class="imageLink" href="displayImage.php?image=' . $image_name . '">';
        echo '<img class="thumbnail" src="' . $image_name . '">';
        echo '<p class="thumbnailName">' . $image_title . ' </p>';
        echo '</a>';
        echo '</div>';
      }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      // script to display full size image on thumbnail click
      $(document).ready(function() {
        $('img.thumbnail').on('click', function() {
          var src = $(this).attr('src');
          var img = '<img src="' + src + '">';
          // start AJAX request
          $.ajax({
            url: 'display_image.php',
            data: {image: src},
            type: 'post',
            success: function(response) {
              $('#image-display').html(response);
            }
          });
        });
      });
    </script>
    <div id="image-display"></div>
  </div>
</body>
</html>