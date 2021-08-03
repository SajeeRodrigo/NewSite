<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statements</title> 
</head>

<body>

    <?php
        //An If statement that will carry out an action based on the value of the variable.
        echo '<h2>IfStatement</h2>';

        $grade =80;
    //==,>,<,<=,>=,===
        if($grade >= 50){
            echo '<h3 style="color: green;">YOU HAVE PASSED!</h3>';
        }else{
            echo '<h3 style="color: red;">YOU HAVE FAILED</h3>';
        }

        //IF-Else IF-Else
        $grade='A';
        if($grade == 'A'){
            echo '<h2 style="color: purple;">YOU ARE A SUPERSTAR!</h2>';
        }elseif($grade == 'B'){
            echo '<h2 style="color: blue;">YOU DID WELL!</h2>';
        }else{
            echo '<h2 style="color: red;">YOU HAVE FAILED!</h2>';
        }
    ?>
</body>
</html>