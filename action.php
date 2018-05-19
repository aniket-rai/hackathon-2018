<?php
  $txt= "data.txt";
  if (isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3']) && isset($_POST['c4']) && isset($_POST['c5'])) {
  $fh = fopen($txt, 'a');
   $txt=$_POST['c1'].' - '.$_POST['c2'].' - '.$_POST['c3'].' - '.$_POST['c4'].' - '.$_POST['c5'];
   fwrite($fh,$txt); // Write information to the file
   fclose($fh); // Close the file
  }
 ?>
