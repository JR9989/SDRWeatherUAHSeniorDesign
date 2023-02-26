<?php
if (isset($_POST['image'])) {
  $image = $_POST['image'];
  echo '<img src="' . $image . '">';
}
?>
