<!-- calculate.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Allows user to calculate satellite's azimuth, not presently functional -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php include 'style.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculate</title>
  <script>
    function runCommand() {
      // Get the command entered by the user
      var latitude = document.getElementById("latInput").value;
      var longitude = document.getElementById("longInput").value;
      var echo = "echo " + latitude + " " + longitude;

      // Get the element where the output will be displayed
      var outputElement = document.getElementById("output");

      // Create a new XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Set up the request
      xhr.open("POST", "azimuthCalculate.php");
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
  <div>
    <img src="images/azimuth.gif" alt="Azimuth Calculate" class="imageTitle"><br><br>
    <a href="index.php" class="link">Home</a>
    <br><br><br>
    <input type="text" id="latInput" class="inputBox" placeholder="Latitude">
    <input type="text" id="longInput" class="inputBox" placeholder="Longitude">
    <button id="runButton" class="link" onclick="runCommand()">Run</button>
    <br><br>
    <p id="output"></p>
  </div>
</body>
</html>