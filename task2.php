<?php

$alphabet =  'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabet = str_replace(',', '', $alphabet);
$m = 12;

for($i=0;$i<strlen($alphabet);$i++){
    for($j=$i;$j<strlen($alphabet);$j++) {
        if($j == $m){
            echo '<b>'.$alphabet[$j].'</b>';
            continue;
        } else if($j == ($i*2)-$m) {
            echo '<b>'.$alphabet[$j].'</b>';
            continue;
        }
        echo $alphabet[$j];
    }
    for($k=0; $k<=$i-1; $k++){
        if($k ==(($i*2)-(26+$m))){
            echo '<b>'.$alphabet[$k].'</b>';
            continue;
        }
        echo $alphabet[$k];
    }
    echo '<br/>';
}