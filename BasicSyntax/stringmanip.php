<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    //concatenation of strings
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "sajee rodrigo";
    echo $phrase1 ." ,named Sajee ," . $phrase2;
  //  echo $phrase2;
    echo '<br/>';
    echo '<hr/>';
  //string transformation
    echo "Uppercase first letter:" . ucfirst($name) . '<br/>';
    echo "Uppercase first letter of each word:" . ucwords($name) . '<br/>';
    echo "Uppercase :" . strtoupper($name) . '<br/>';
    echo "Lowercase :" . strtolower("THIS WAS ALL UPPER CASE!") . '<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('a',6) . '<br/>';
    echo 'Repeat String: ' . strtoupper(str_repeat('a',6)) . '<br/>';
    echo 'Get a Substring:' . substr($name, 3,5).'<br/>';

    echo 'Get position of string:'. strpos($name,'r').'<br/>';
    //Returns NULL
    //echo 'Get position of string:'. strops($combine,'z').'<br>';

    echo 'Find Character "R":'. strchr($name,'R').'<br/>';
    echo 'Find Character "r":'. strchr($name,'r').'<br/>';
    echo 'Find Character "s":'. strchr($name,'s').'<br/>';
    echo 'Find Character "e":'. strchr($name,'e').'<br/>';

    echo 'Find Length of String :'. strlen($name).'<br/>';

    echo 'Without Trim: '."A"."B C D"."E".'<br/>';
    echo 'Trim spaces on both sides: '."A".trim(" B C D ")."E".'<br/>';
    echo 'Trim spaces to the left: '."A".trim(" B C D ")."E".'<br/>';
    echo 'Trim spaces to the right: '."A".trim(" B C D ")."E".'<br/>';

    echo 'Replace string with another:'.str_replace("stand", "sit", $phrase2).'<br/>';
    ?>
</body>
</html>