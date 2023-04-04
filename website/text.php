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
    <form method="post">
      <input type="submit" name="clearText" class="link" value="Clear Text">
      <input type="submit" name="addText" class="link" value="Add Sample Text">
    </form>
    <br><br>
    <?php
    $text_names = glob("generatedText/*.{txt,TXT}", GLOB_BRACE);

    if(empty($text_names)){
      echo '<p class="notice">No text found in the directory.</p>';
    }
    else {
      foreach ($text_names as $text_file_name) {
        $text_file_title = str_replace('generatedText/', '', $text_file_name);
        $text_file_contents = file_get_contents($text_file_name);
        echo '<a class="textFileLink" href="displayText.php?text_file=' . $text_file_name . '">';
        echo $text_file_title;
        echo '</a>';
      }
    }
    ?>
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