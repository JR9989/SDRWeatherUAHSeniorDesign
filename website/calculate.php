<!-- calculate.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Allows user to calculate satellite's azimuth -->
<?php $title="Calculate Azimuth"; $header="Calculate Azimuth"; include 'php/header.php'; ?>
  <div>
      <h2>This page produces an approximate azimuth the GEOS 16 weather satellite for the latitude and longitude inputed.  Southern latitudes and western longitudes are signified with the negative sign.</h2>
      <input type="text" id="latInput" class="inputBox" placeholder="Latitude">
      <input type="text" id="longInput" class="inputBox" placeholder="Longitude">
      <button id="run" class="link" onclick="calculateAzimuth()">Run</button>
    <br><br>
    <div id="result" style="display: none;">
      <p>The approximate azimuth for the GEOS 16 weather satellite is <span id="azimuth"></span> degrees.</p>
    </div>
  </div>
  <script>
      function calculateAzimuth() {
        const latitude = parseFloat(document.getElementById("latInput").value);
        const longitude = parseFloat(document.getElementById("longInput").value);
        
        // Convert latitude and longitude to radians
        const latRad = latitude*Math.PI/180;
        const longRad = longitude*Math.PI/180;

        // GEOS 16 coordinates
        const geosLat = 0.0;
        const geosLong = -75.0;

        // Convert GEOS 16 coordinates to radians
        const geosLatRad = geosLat * Math.PI/180;
        const geosLongRad = geosLong * Math.PI/180;

        // Use Haversine formula to calculate azimuth
        const dLong = geosLongRad-longRad;
        const y = Math.sin(dLong)*Math.cos(geosLatRad);
        const x = Math.cos(latRad)*Math.sin(geosLatRad)-Math.sin(latRad)*Math.cos(geosLatRad)*Math.cos(dLong);
        let azimuth = Math.atan2(y, x)*180/Math.PI;

        // Convert azimuth to degrees for output
        if (azimuth < 0) {
          azimuth += 360;
        }

        // Round and display result
        azimuth = azimuth.toFixed(2);
        document.getElementById("azimuth").textContent = azimuth;
        document.getElementById("result").style.display = "block";
      }
  </script>
<?php include 'php/footer.php'; ?>