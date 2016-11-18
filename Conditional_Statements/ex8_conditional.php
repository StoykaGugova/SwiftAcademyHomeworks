<?php
if (!empty($_POST)){
$number = $_POST["number"];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Type number</title>
    </head>
    <body>
        <form method="POST" action="">
        Type a number to see it written in words<input type="text" name="number" />
        <input type="submit" name="submit" value="submit">
        </from>
        <p><strong>Answer:</strong></p>
     <?php
     if (isset($number)) {
         switch ($number){
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
            default: echo "not a digit";
            break;    
        }
     }
     ?>
    </body>    
</html>        


