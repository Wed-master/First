<?php 
$text = $_POST['text'];
$output = wordwrap($text,60,"<br>");
$dir = 'akaunt';
$files = scandir($dir);
$num=0;
if ($output != "")foreach($files as $file){
    if(strpos($file, $output) !== false) {
        echo '<span style="position:absolute;top:'.($num*20).';left:0;font-size:12;"><img src=' . explode('#', file("akaunt/".$file)[0])[1] . ' style="position:absolute;top:2;left:0;" width=20 height=20>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . explode('|', $file)[0] . '</span><button style="position:absolute;top:'.($num*20+2).';right:0;font-size:10;background:blue;" name='.$file.' onclick=friends(this.name)>в друзья</button>';
        $num++;
    }
}
?>