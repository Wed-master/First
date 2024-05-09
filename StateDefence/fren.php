<?php 
$text = $_POST['text'];
$output = wordwrap($text,60,"<br>");
$num=0;
$output = explode(',', $output);
foreach($output as $file){
    echo '<span style="position:absolute;top:'.($num*21).';left:0;font-size:12;border-bottom:1px solid black;width:208;height:22;"><img src=' . explode('#', file("akaunt/".$file)[0])[1] . ' style="position:absolute;top:2;left:0;" width=20 height=20>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . explode('|', $file)[0] . '<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:9;color:gold;position:relative;top:-3;"><img src=cup.png width=8 height=8>'. explode('#', file("akaunt/".$file)[0])[15] .'</b></span><button style="position:absolute;top:'.($num*21+2).';right:20;font-size:10;background:blue;" name='.$file.' onclick=MESS(this.name)>✉</button><button style="position:absolute;top:'.($num*21+2).';right:0;font-size:10;background:blue;" name='.file("akaunt/".$file)[0].' onclick=ATAK(this.name)>⚔</button>';
        $num++;
}
?>