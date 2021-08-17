<?php

class User{

    //where properties and methods are defined
   public $userName = 'Sajee';
   public $email = 'sajee.thamanga@gmail.com';

   public function addFriend(){
        return "$this->userName added a new friend";
   }

}



$userOne = new User();
$userTwo = new User('Randuni','ran12@yahoo.com');

echo $userOne->userName.'<br>';
echo $userOne->email .'<br>';
echo $userOne->addFriend() .'<br>';

$userTwo->userName = 'Rodrigo';
$userTwo->email= 'rodrigol@yahoo.com';

echo $userTwo->userName.'<br>';
echo $userTwo->email .'<br>';
echo $userTwo->addFriend() .'<br>';

echo 'the class is '. get_class($userOne);

//print_r(get_class_vars('User'));
//print_r(get_class_methods('User'));

?>

<html lang="en">
    <head>
        <title>PHP oop Tutorial</title>
    </head>

    <body>


    </body>
</html>