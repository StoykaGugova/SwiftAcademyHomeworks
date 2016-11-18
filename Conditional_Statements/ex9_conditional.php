<?php
if (!empty($_POST)){
$hundreds = $_POST["hundreds"];
$decimal = $_POST["decimal"];
$digit = $_POST["digit"];

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Type number</title>
    </head>
    <body>
        <form method="POST" action="">
        Type a digit in each field to see the three-digit number written in words<input type="text" name="hundreds" />
        <input type="number" name="decimal" />
        <input type="number" name="digit" />
        <input type="submit" name="submit" value="submit">
        </from>
        <p><strong>Answer:</strong></p>
     <?php
     if (isset($hundreds)) {
         switch ($hundreds){
            case 1: echo "one hundred and ";
            break;    
            case 2: echo "two hundred and";
            break; 
            case 3: echo "three hundred and";
            break;
            case 4: echo "four hundred and";  
            break;    
            case 5: echo "five hundred and";
            break;  
            
            case 6: echo "six hundred and";
            break;    
            case 7: echo "seven hundred and";
            break;    
            case 8: echo "eight hundre and";
            break;
            case 9: echo "nine hundred and";
            break;
            default: echo "";
            break;    
        }
       
     }
     
     echo " ";
     if (isset($decimal)){
     
            switch ($decimal){
            
            case 1: continue; 
            case 2: echo "twenty";
            break; 
            case 3: echo "thirty";
            break;
            case 4: echo "forty";  
            break;    
            case 5: echo "fifty";
            break;  
            
            case 6: echo "sixthy";
            break;    
            case 7: echo "seventy";
            break;    
            case 8: echo "eighty";
            break;
            case 9: echo "ninety";
            break;
            default: echo "";
            break;    
        }
     } 
     echo " ";
    
     if (isset($digit) && ($decimal>=2 || (empty($decimal)))) {
         switch ($digit){
            case 0: echo "zero";
            break;    
            case 1: echo "one";
            break; 
            case 2: echo "two";
            break;
            case 3: echo "three";  
            break;    
            case 4: echo "four";
            break;    
            case 5: echo "five";
            break;    
            case 6: echo "six";
            break;    
            case 7: echo "seven";
            break;    
            case 8: echo "eight";
            break;
            case 9: echo "nine";
            break;
            default: echo "";
            break;    
        }
     }else if (isset($digit) && $decimal==1) {
         switch ($digit){
            case 0: echo "ten";
            break;
            case 1: echo "eleven"; 
            break;  
            case 2: echo "twelve";
            break;
            case 3: echo "thirteen";
            break;  
            case 4: echo "fourteen";
            break;     
            case 5: echo "fifteen";
            break; 
            case 6: echo "sixteen";
            break;
            case 7: echo "seventeen";
            break;
            case 8: echo "eighteen";
            break;
            case 9: echo "nineteen";
         }
     }
     
     ?>
    </body>    
</html>        



