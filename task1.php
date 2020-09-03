<?php

$name = 'irena';
$reverse = strrev($name);
$alphabet =  'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabet = str_replace(',', '', $alphabet);

for($i=0;$i<strlen($name);$i++){
    for($j=0;$j<strlen($alphabet);$j++) {
        if($alphabet[$j] == $name[$i] && $alphabet[$j] == $reverse[$i]){
            echo "<b><u>$reverse[$i]</u></b>";
            continue;
        }
        if($alphabet[$j] == $name[$i]){
            echo "<b>$name[$i]</b>";
            continue;
        }
        else if($alphabet[$j] == $reverse[$i]){
            echo "<u>$reverse[$i]</u>";
            continue;
        }

        echo $alphabet[$j];
    }
    echo '<br/>';
}