<?php
#pattern 1


$n  = 5;
    
#pattern 1
     
         echo "Pattern 1:\n";
         for($i  = 1; $i <= 5; $i++)
         echo "* ";
         echo "\n";
     
#pattern 2
     
         echo "pattern 2:\n";
         for($i = 1; $i <= 5; $i++)
         echo "* * * * *\n";
     
#pattern 3     
    
      echo "pattern 3:\n";

         for($i = 0; $i < 5; $i++) {
           for($j = 0; $j < 5; $j++){
               if((($i==0)||($j==0)) || (($i==4)||($j==4))) 
              {
                echo " *";
               }
               else{
                echo "  ";
               }
            
             }
          
           echo "\n";
         }
    
 #pattern 4      
          echo "pattern 4:\n";

             for($i = 5; $i > 0; $i--) {
               for($j = 2; $j <= $i; $j++){ 
                echo " ";
                 }
                 for($k=5; $k>=$i; $k--){
                 echo " *";
               }
               echo "\n";
             }
      

#pattern 5
     
         echo "pattern 5:\n";
         for($i = 1; $i <= 5; $i++){
            for($j = 0;$j < $i; $j++){
             echo "* ";
             }
             echo "\n";
         }
     
#pattern 6
    
         echo "pattern 6:\n";
         for($i = 5; $i > 0; $i--){
             for($j = 0; $j < $i; $j++){
             echo "* ";
             }
             echo "\n";
         }

    
#pattern 7
      
         echo "pattern 7:\n";
            for($i = 0; $i < 5; $i++) {
             for($j = 1; $j <= 5; $j++){ 
              if(($j==$i) || ($j<$i)){
               echo "  ";
             }
               else{
              echo "* ";
             }
          }
             echo "\n";
         
         }

#pattern 8         
     
         echo "pattern 8:\n";
            for($i = 5; $i > 0; $i--) {
             for($j = 1; $j <= 5; $j++){ 
              if($j < $i){
                   echo "  ";
                  }
                  else{
                   echo " *";
                  }
             }
               echo "\n";
        
            }
    

#pattern 9

     echo "pattern 9:\n";

     for($i = 0; $i < 5; $i++) {
       for($j = 0; $j < 5; $j++){
        if((($j==0)&&($i==1)) || (($j==1)&&($i==1)) || (($j==2)&&($i==1)) || (($j==4)&&($i==1)) 
        || (($j==0)&&($i==2)) || (($j==1)&&($i==2)) || (($j==3)&&($i==2)) || (($j==4)&&($i==2))
        || (($j==0)&&($i==3)) || (($j==2)&&($i==3)) || (($j==3)&&($i==3)) || (($j==4)&&($i==3)))
          {
            echo "  ";
           }
           else{
            echo " #";
           }
        
         }
      
       echo "\n";
     }  

#pattern 10     
     echo "pattern 10:\n";

     for($i = 0; $i < 5; $i++) {
       for($j = 0; $j < 5; $j++){
        if((($j==0)&&($i==1)) || (($j==2)&&($i==1)) || (($j==3)&&($i==1)) || (($j==4)&&($i==1)) 
        || (($j==0)&&($i==2)) || (($j==1)&&($i==2)) || (($j==3)&&($i==2)) || (($j==4)&&($i==2))
        || (($j==0)&&($i==3)) || (($j==1)&&($i==3)) || (($j==2)&&($i==3)) || (($j==4)&&($i==3)))
          {
            echo "  ";
           }
           else{
            echo " #";
           }
        
         }
      
       echo "\n";
     }
     
#pattern 11     

     echo "pattern 11:\n";

     for($i = 0; $i < 5; $i++) {
       for($j = 0; $j < 5; $j++){
        if((($j==0)&&($i==1)) || (($j==2)&&($i==1)) ||(($j==4)&&($i==1)) 
        || (($j==0)&&($i==2)) || (($j==1)&&($i==2)) || (($j==3)&&($i==2)) || (($j==4)&&($i==2))
        || (($j==0)&&($i==3)) || (($j==2)&&($i==3)) ||(($j==4)&&($i==3)))
          {
            echo "  ";
           }
           else{
            echo " #";
           }
        
         }
      
       echo "\n";
     }
?>