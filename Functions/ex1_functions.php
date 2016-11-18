
<?php
if (!empty ($_POST)){
    $name = $_POST["firstName"];
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <form method="POST" action="">
            Pease enter your name:<input type="text" name="firstName"/>
            <input type="submit" type="submit">
        </form>
        <?php
        if (isset($name) && $name != Null){
            
            function welcome($name){
                echo "Hello" . " " . $name;
            }
          welcome($name);
        }
        
        
        ?>
    </body>
</html>
