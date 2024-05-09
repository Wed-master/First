<?php 
$text = $_POST['text'];
$output = wordwrap($text,60,"<br>");
$exp = explode('||', $output);
$f = fopen("akaunt/".$exp[0].".txt","w");
fwrite($f, $exp[1]);    
fclose($f);
?>