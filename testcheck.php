<?php
 for($i=1; $i<= 100; $i++) {
			 switch($i%15) {
					 case 0: 
						 echo "Linianos"."\n";
						 break;
					 case 3:
					 case 6:
					 case 9:
					 case 12:
						 echo "Linio"."\n";
						 break;
					 case 5:
					 case 10: 
						 echo "IT"."\n";
						 break;
					 default:
						 echo $i."\n";  
			 }
 }


?>
