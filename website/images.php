<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Image Gallery</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello</title>
  <script>
    function runCommand() {
      // Get the command entered by the user
      var command = document.getElementById("commandInput").value;

      // Get the element where the output will be displayed
      var outputElement = document.getElementById("output");

      // Create a new XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Set up the request
      xhr.open("POST", "runCommand.php");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      // Define what happens when the response is received
      xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
          outputElement.innerHTML = xhr.responseText;
        }
      }

      // Send the request with the command as a parameter
      xhr.send("command=" + encodeURIComponent(command));
    }
  </script>
  <style>
    .inputBox {
      font-size: 18px;
      padding: 10px;
      background-color: rgba(0,0,0,0.75);
      border: 5px solid azure;
      color: white;
    }
    #output {
      padding: 10px;
      background-color: rgba(255,255,255,0.75);
      color: rgb(52,113,235);
      border: solid 10px rgb(52,113,235);
      margin-bottom: 25px;
    }
    .link {
      font-size: 24px;
      padding: 5px;
      background-color: rgba(52,133,235,0.75);
      border: white solid 5px;
      color: white;
      font-weight: bold;
    }
    .link:hover {
      background-color: rgba(0,0,0,0.75);
      color: white;
      border-color: rgb(52,133,235);
    }
    .thumbnail {
        height: 100px;
        width: 100px;
        margin: 10px;
        border: 1px solid #ccc;
        float: left;
      }
  </style>
</head>
<body>
  <div>
    <img src="images/satellites.png" alt="Satellites" height="200px"><br>
    <a href="calculate.php" class="link">Determine Satellite Azimuth</a>
    <br><br><br>
    <a href="index.php" class="link">Home</a>
    <br><br>
    <?php
      $image_names = glob("generatedImages/*.{jpg,png,gif}", GLOB_BRACE);
      foreach ($image_names as $image_name) {
        echo '<a href="' . $image_name . '">';
        echo '<img class="thumbnail" src="' . $image_name . '">';
        echo '</a>';
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