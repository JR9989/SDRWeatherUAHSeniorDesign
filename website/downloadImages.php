<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 3/1/23 -->
<!-- Page for downloading the images -->
<?php $title="Download Images"; $header="Download Images"; include 'php/header.php'; ?>
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
    <input type="text" id="commandInput" class="inputBox" placeholder="Enter command">
    <button id="runButton" class="link" onclick="runCommand()">Run</button>
    <br><br>
    <p id="output"></p>
  </div>
<?php include 'php/footer.php'; ?>