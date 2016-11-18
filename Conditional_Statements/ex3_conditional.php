<?php
if (!empty($_POST)){
$card = $_POST["card"];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select card</title>
    </head>
    <body>
        <form method="POST" action="">
        Is this a valid card sign? <input type="text" name="card" />
        <input type="submit" name="submit" value="submit">
        </from>
        <p><strong>Answer:</strong></p>
     <?php
     if (isset($card)) {
         switch ($card){
            case 2:
            case 3:
            case 4:    
            case 5:
            case 6:
            case 7:    
            case 8:
            case 9:
            case 10:
            case "J":
            case "Q":
            case "K":
            case "A": echo "yes";
            break; 
            default: echo "no";
            break;    
        }
     }
     ?>
    </body>    
</html>        

