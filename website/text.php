<!-- text.php -->
<!-- Author: J.R. Stooksbury, Date: 4/4/23 -->
<!-- Dynamically looks at specified directory and generates text thumbnail gallery based upon its contents -->
<?php $title="Generated Text"; $header="Generated Text"; include 'php/header.php'; ?>
  <div style="margin-top: 25px;">
    <?php
    if(isset($_POST['clearText'])) { // check if the button is pressed
        $command = escapeshellcmd('sh/removeText.sh');
        $output = shell_exec($command); // execute the command
    }
    if(isset($_POST['addText'])) { // check if the button is pressed
        $command = escapeshellcmd('sh/addText.sh'); 
        $output = shell_exec($command); // execute the command
    }
    ?>
    <form method="get">
    <label for="filter">Filter by Region:</label>
    <select name="filter" id="filter" class="link">
      <optgroup label="Special">
        <option value="">All</option>
        <option value="US">USA/Severe</option>
        <option value="CA">Canada</option>
        <option value="other">Other</option>
      </option>
      <optgroup label="States">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </optgroup>
      <optgroup label="Territories">
        <option value="AS">American Samoa</option>
        <option value="DC">District of Columbia</option>
        <option value="GU">Guam</option>
        <option value="MP">Northern Mariana Islands</option>
        <option value="PR">Puerto Rico</option>
        <option value="VI">U.S. Virgin Islands</option>
      </optgroup>
    </select>
    <input type="submit" value="Filter" class="link">
  </form>
  <br><br>
  <form method="post">
      <input type="submit" name="clearText" class="link" value="Clear Text">
      <input type="submit" name="addText" class="link" value="Add Sample Text">
  </form>
  <br>
  <?php
  $filter = isset($_GET['filter']) ? $_GET['filter'] : '';
  $text_names = glob("generatedText/*.{txt,TXT}", GLOB_BRACE);
  if(empty($text_names)){
  echo '<p class="notice">No text found in the directory.</p>';
  }
  else {
    foreach ($text_names as $text_file_name) {
      if ($filter == '') {
        $show_file = true;
      } 
      elseif ($filter == 'other') {
        $show_file = !preg_match('/(AL|AK|AZ|AR|CA|CO|CT|DE|FL|GA|HI|ID|IL|IN|IA|KS|KY|LA|ME|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VT|VA|WA|WV|WI|WY|AS|DC|GU|MP|PR|VI|US|CA).txt$/i', $text_file_name);
      }
      else {
        $show_file = preg_match('/'.$filter.'.txt$/i', $text_file_name);
      }
      if ($show_file) {
        $text_file_title = str_replace('generatedText/', '', $text_file_name);
        $text_file_contents = file_get_contents($text_file_name);
        echo '<a class="textFileLink" href="displayText.php?text_file=' . $text_file_name . '">';
        echo $text_file_title;
        echo '</a>';
      }
    }
  }
  ?>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
  // script to display full size text file on thumbnail click
  $(document).ready(function() {
    $('div.textFileContainer').on('click', function() {
      var text_file = $(this).parent().attr('href');
      // start AJAX request
      $.ajax({
        url: 'displayTextFile.php',
        data: {text_file: text_file},
        type: 'post',
        success: function(response) {
          $('#text-file-display').html(response);
        }
      });
      return false; 
    });
  });
</script>
<div id="text-display"></div>

<?php include 'php/footer.php' ?>