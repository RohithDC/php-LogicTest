<?php

//This is for ternary operation
 for ($a=1; $a <=100; $a++) {
 echo (($a%3==0)? (($a%5==0)? 'Linianos ':'Linio'):(($a%5==0)? (($a%3==0)? 'Linianos ':'IT '):$a))." ";
 }

?>
