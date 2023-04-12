<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 3/1/23 -->
<!-- Page for downloading the images -->
<?php $title="Download Data"; $header="Download Data"; include 'php/header.php'; ?>
  <script>
    function runCommand() {
      // Get the command entered by the user
      var command = document.getElementById("commandInput").value;

      // Get the element where the output will be displayed
      var outputElement = document.getElementById("output");

      // Create a new XMLHttpRequest object
      var xhr = new XMLHttpRequest();

      // Set up the request
      xhr.open("POST", "php/runCommand.php");
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
  <div class="homeDiv">
    <h2>Use the embedded terminal to enter the commands to download data.  These commands are located in the user manual.</h2>
    <button class="link" onclick="openPopup()">Open additional shell</button>
    <script>
    function openPopup() {
      window.open("http://192.168.42.1:4200", "_blank", "width=500,height=500");
    }
    </script>
    <iframe id="output" style="margin-top: 25px;" src="http://192.168.42.1:4200"></iframe>
  </div>
<?php include 'php/footer.php'; ?>