<?php
$file = 'data.txt';
$email = $_POST['c1'];
$fp = fopen("data.txt", "a");
$savestring = $email . "\n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>Thank you, we will be in touch as soon as possible!</h1>";

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
