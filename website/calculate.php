<!-- calculate.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Allows user to calculate satellite's azimuth, not presently functional -->
<?php $title="Calculate Azimuth"; $logo="azimuth.gif"; $altText="Calculate Azimuth"; include 'php/header.php'; ?>
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
      xhr.open("POST", "php/azimuthCalculate.php");
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
  <div>
    <input type="text" id="latInput" class="inputBox" placeholder="Latitude">
    <input type="text" id="longInput" class="inputBox" placeholder="Longitude">
    <button id="runButton" class="link" onclick="runCommand()">Run</button>
    <br><br>
    <p id="output"></p>
  </div>
<?php include 'php/footer.php'; ?>