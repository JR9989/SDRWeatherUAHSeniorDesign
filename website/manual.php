<!-- index.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Main landing page for web server -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php include 'style.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
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
</head>
<body>
  <div class="homeDiv">
    <h1>Manual</h1>
    <img src="images/satellites.png" alt="Satellites" class="imageTitle">
    <br>
    <a href="downloadImages.php" class="link">Download Images</a>
    <br>
    <a href="index.php" class="link">Home</a>
    <br>
    <a href="calculate.php" class="link">Determine Satellite Azimuth</a>
    <br>
    <a href="images.php" class="link">Generated Images</a>
    <br><br>
    <p class="notice">Is simple, point antenna at satellite, satellite go brrr. Boom, radar image.</p>
  </div>
</body>
</html>