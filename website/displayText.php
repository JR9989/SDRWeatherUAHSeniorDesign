<!-- displayText.php -->
<!-- Author: J.R. Stooksbury, Date: 4/4/23 -->
<!-- Displays text as full size for easy viewing -->
<!DOCTYPE html>
<html>
  <head>
    <?php include 'css/background.php'; ?>
    <?php include 'css/style.php';?>
    <title>Text File Viewer</title>
  </head>
  <!-- star background -->
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <!-- end star background -->
  <body>
    <div class="fullSizeTextFile">
      <?php
        if (isset($_GET['text_file'])) {
          $text_file = $_GET['text_file'];
          $text_file_title = str_replace('generatedText/', '', $text_file);
          $text_file_contents = file_get_contents($text_file);
          echo '<h1>' .$text_file_title . '</h1>';
          echo '<div class="textDisplay">';
          echo '<pre class="full-size">' . $text_file_contents . '</pre>';
          echo '</div>';
          echo '<br>';
        }
      ?>
    </div>
    <a class="link" href="text.php">Back</a>
  </body>
</html>