<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While and Do while</title>
</head>
<body>
    <h1>While Loop</h1>

    <?php
    $grade=0;
    //Infinite loop
    /*    while($grade <10){
            echo '<p>I AM LESS THAN 10!</P>';
        }*/

        //pre-condition loop
        while($grade <10){
            echo '<p>I AM LESS THAN 10!</P>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>

        
    <h1>Do-While Loop</h1>

    <?php
    //post-condition loop
    $grade=0;
        do{
            echo '<p>I AM DO-WHILE LOOP!</P>';
            $grade++;
        }while($grade<10);
        echo 'EXIT LOOP!';
    ?>
</body>
</html>