<?php
#pattern 1


$n  = readline("enter a number: \n");
    
#pattern 1
     
         echo "Pattern 1:\n";

         for($i=0; $i<$n; $i++){
            echo "* ";
            echo "\n";
              
          }
         
#pattern 2
     
         echo "pattern 2:\n";

         for($i=0; $i<$n; $i++)
           echo "* * * * *\n";
     
#pattern 3     
    
      echo "pattern 3:\n";

         for($i=0; $i<$n; $i++) {
           for($j=0; $j<$n; $j++){
               if((($i==0)||($j==0))||(($i==$n-1)||($j==$n-1))) 
              {
                echo "* ";
               }
               else{
                echo "  ";
               }
            
             }
          
           echo "\n";
         }
    
 #pattern 4      
          
          echo "pattern 4:\n";

             for($i=$n; $i>0; $i--) {
               for($j=1; $j<$i; $j++){ 
                echo " ";
                 }
                 for($k=$n; $k>=$i; $k--){
                 echo "* ";
               }
               echo "\n";
             }
      

#pattern 5
     
         echo "pattern 5:\n";
         
         for($i=1; $i<=$n; $i++){
            for($j=0; $j<$i; $j++){
             echo "* ";
             }
             echo "\n";
         }
     
#pattern 6
    
         echo "pattern 6:\n";
         
         for($i=$n; $i>0; $i--){
             for($j=0; $j<$i; $j++){
             echo "* ";
             }
             echo "\n";
         }

    
#pattern 7
      
         echo "pattern 7:\n";
            
         for($i=0; $i<$n; $i++){
             for($j=0; $j<$n; $j++){ 
              if($j<$i)
                {
                 echo "  ";
                }
                else
                {
                 echo "* ";
                }
             }
              echo "\n";
         
          }

#pattern 8         
     
         echo "pattern 8:\n";
            
         for($i=$n; $i>0; $i--){
             for($j=1; $j<=$n; $j++){ 
              if($j<$i){
                   echo "  ";
                  }
                  else{
                   echo "* ";
                  }
             }
               echo "\n";
        
          }
    

#pattern 9

     echo "pattern 9:\n";

     for($i=0; $i<$n; $i++) {
       for($j=0; $j<$n; $j++){
         if(($i==0) || ($i==$n-1) || ($j==$n-$i-1))
           {
             echo "# ";
            }
            else{
             echo "  ";
            }
        
        }
      
       echo "\n";
     }  

#pattern 10     
     echo "pattern 10:\n";

     for($i=0; $i<$n; $i++) {
       for($j=0; $j<$n; $j++){
         if(($i==0) || ($i==$n-1) || ($j==$i))
           {
             echo "# ";
           }
            else{
             echo "  ";
           }
        
        }
      
         echo "\n";
      }
     
#pattern 11     

     echo "pattern 11:\n";

     for($i=0; $i<$n; $i++) {
       for($j=0; $j<$n; $j++){
        if(($i==0)||($i==$n-1)||($j==$i)||($j==$n-$i-1))
           {
             echo "# ";
           }
            else{
              echo "  ";
           }
        
        }
      
        echo "\n";
      }

# pattern 12      

      echo "pattern 12:\n";

      for($i=0; $i<$n; $i++) {
        for($j=0; $j< $n; $j++){
         if(($i==0)||($i==$n-1)||($j==$i)||($j==$n-$i-1)||($j==0)||($j==$n-1))
            {
              echo "# ";
            }
             else{
               echo "  ";
            }
         
         }
       
         echo "\n";
       }
       
?>
