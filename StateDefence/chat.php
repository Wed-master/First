
<?php
$text = $_POST['text'];
$output = wordwrap($text, 60, " ");
$f = fopen("chats/".explode('🧙‍♂️🧕👰👨‍🚒👨‍🚀👩‍🚒👩‍🚒👩‍🚀👩‍💻', $output)[1].".txt","a");
fwrite($f, explode('🧙‍♂️🧕👰👨‍🚒👨‍🚀👩‍🚒👩‍🚒👩‍🚀👩‍💻', $output)[0] . PHP_EOL);
fclose($f);
?>