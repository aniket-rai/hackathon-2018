<?php
  $file = "export/data.txt"; //rename file according to UPI
  if (isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']) && isset($_POST['c4']) && isset($_POST['c5'])) {
  $handle = fopen($file, 'a');
   $content=$_POST['c1'].PHP_EOL.$_POST['c2'].PHP_EOL.$_POST['c3'].PHP_EOL.$_POST['c4'].PHP_EOL.$_POST['c5'];
   fwrite($handle,$content); // Write information to the file
   fclose($handle); // Close the file
  }
?>
