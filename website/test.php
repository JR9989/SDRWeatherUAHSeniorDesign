<!-- download.php -->
<!-- Author: J.R. Stooksbury, Date: 4/24/23 -->
<!-- Page for downloading the images -->
<?php $title="Download Data"; $header="Download Data"; include 'php/header.php'; ?>
    <script>
        var url = "getOutput.php";
        var runUrl = "runCommand.php";
        var stopUrl = "stopCommand.php";
        var clearUrl = "clearOutput.php";

        // ms
        var interval = 1000;

        // Function to update page with new output from shell command
        function updateOutput(cmdNum) {
            // Create new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Open GET request to fetch new output from PHP script
            xhr.open('GET', url + '?cmd=' + cmdNum);

            // Set up event listener for when request completes successfully
            xhr.addEventListener('load', function() {
                // Parse response as JSON object
                var response = JSON.parse(this.responseText);

                // Update page with new output from shell command
                document.getElementById('output' + cmdNum).textContent = response.output;
            });

            // Send request to PHP script
            xhr.send();
        }

        // Function to start shell command running in background
        function startCommand(cmdNum) {
            // Create new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Open GET request to run PHP script that starts shell command
            xhr.open('GET', runUrl + '?cmd=' + cmdNum);

            // Send request to PHP script
            xhr.send();
        }

        // Function to stop shell command running in background
        function stopCommand(cmdNum) {
            // Create new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Open GET request to run PHP script that stops shell command
            xhr.open('GET', stopUrl + '?cmd=' + cmdNum);

            // Send request to PHP script
            xhr.send();
        }

        // Function to clear output file for shell command
        function clearOutput(cmdNum) {
            // Create new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Open GET request to run PHP script that clears output file
            xhr.open('GET', clearUrl + '?cmd=' + cmdNum);

            // Send request to PHP script
            xhr.send();
        }

        // Update page with new output from each shell command
        setInterval(function() { updateOutput(1); }, interval);
        setInterval(function() { updateOutput(2); }, interval);
    </script>
    <h2>Using the buttons below to download and process images.</h2><button class="link" onclick="openPopup()">Open additional shell</button>
    <script>
    function openPopup() {
      window.open("http://192.168.42.1:4200", "_blank", "width=500,height=500");
    }
    </script>
    <br>
    <h2>Signal Receiver</h2>
    <button onclick="startCommand(1)" class="link">Start Receiver</button>
    <button onclick="stopCommand(1)" class="link">Stop Receiver</button>
    <button onclick="clearOutput(1)" class="link">Clear Output</button>
    <pre id="output1"></pre>
    <h2>Image Processor</h2>
    <button onclick="startCommand(2)" class="link">Start Processing</button>
    <button onclick="stopCommand(2)" class="link">Stop Processing</button>
    <button onclick="clearOutput(2)" class="link">Clear Output</button>
    <pre id="output2"></pre>
<?php include 'php/footer.php'; ?>