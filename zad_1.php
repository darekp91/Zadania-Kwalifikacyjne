<?php


function kwadratowa(){
    
$s =["a"=>$_POST["liczba1"], "b"=>$_POST["liczba2"], "c"=>$_POST["liczba3"]];

   if ($s["a"]==0){
       echo 'Równanie nie kwadratowe';
   }
   else {
       $d = $s["b"]*$s["b"] - 4*$s["a"]*$s["c"];
       if ($d<0){
           echo 'Nie ma pierwiastków rzeczywistych';
       }
       else {
           if ($d == 0){
               $x = -$d/(4*$s["a"]);
               echo 'Jedno miejsce zerowe x: '.round($x,2);
           }
           else{
               $x1= (-$s["b"]+sqrt($d))/(2*$s["a"]);
               $x2= (-$s["b"]-sqrt($d))/(2*$s["a"]);
               echo 'Dwa miejsca zerowe: <br/>X1: '.round($x1,2).'<br/>X2: '.round($x2,2);
           }
       }
   }
    
}

kwadratowa();
?>