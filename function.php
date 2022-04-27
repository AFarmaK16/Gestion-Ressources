<?php

// *******************INSERTION ALEATOIRE***************
    function Insertion($con,$req)
    {
      
        return mysqli_query($con,$req);
    }
// *******************INSERTION ALEATOIRE***************


    
//********************ADDITION HEURES******************
    function additioneheure($heure1,$heure2)
    {
        //initialisation
        $s=0;
        $m=0;
        $h=0;
        $heure1=$heure1.":".$s;
        $heure2=$heure2.":".$s;
        //recuperation des données
        list ($h1,$m1,$s1) = explode (":",$heure1);
        list ($h2,$m2,$s2) = explode (":",$heure2);
        //calcul des secondes
        $s=$s1+$s2;
        if($s>59){$s=$s-60;$m=1;}
        //calcul des minutes
        $m=$m+$m1+$m2;
        if($m>59){$m=$m-60;$h=1;}
        //calcul des heures
        $h=$h+$h1+$h2;
        if($h>23){$h=$h-24;}
        //on remet au bon format
        if(strlen($h)==1){$h="0".$h;}
        if(strlen($m)==1){$m="0".$m;}
        if(strlen($s)==1){$s="0".$s;}

        return($h.":".$m.":".$s);

    }
//********************ADDITION HEURES******************



//****************DIFFERENCE HEURES****************
    function diff_time($t1 , $t2){
        //Heures au format (hh:mm:ss) la plus grande puis le plus petite 
        
        $tab=explode(":", $t1); 
        $tab2=explode(":", $t2); 
        
        $h=$tab[0]; 
        $m=$tab[1]; 
        $s=$tab[2]; 
        $h2=$tab2[0]; 
        $m2=$tab2[1]; 
        $s2=$tab2[2];  
        
        if ($h2>$h) { 
        $h=$h+24; 
        }  
        if ($m2>$m) { 
        $m=$m+60; 
        $h2++; 
        } 
        if ($s2>$s) { 
        $s=$s+60; 
        $m2++; 
        } 
        
        $ht=$h-$h2; 
        $mt=$m-$m2; 
        $st=$s-$s2; 
        if (strlen($ht)==1) { 
        $ht="0".$ht; 
        }  
        if (strlen($mt)==1) { 
        $mt="0".$mt; 
        }  
        if (strlen($st)==1) { 
        $st="0".$st; 
        }  
        return $ht.":".$mt.":".$st;  
        
    }
//****************DIFFERENCE HEURES****************




?>