<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial-Index</title>
</head>
<body>
    <!-- Basic html -->
    <h1>Hello world</h1>
    <br/>
<?php
//printing to html using echo
    echo 'Hellow php!!';
    echo '<br/>';
    echo 'second line';
    echo '<br/>'
?>


<?php
//declare variable
    $name = 'Sajee Rodrigo';
    $age = 24;
    //echo variable
    echo $name;
    echo '<h1>My Name is:  '.$name.'</h1>';
    echo '<h1>My Age is:  '.$age.'</h1>';

    echo "<h1>My Name is: $name </h1>";
?>
</body>
</html>