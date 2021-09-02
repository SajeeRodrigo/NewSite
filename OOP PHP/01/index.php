<?php

class User{

    //where properties and methods are defined
   public $userName;
   public $email;

   public function __construct($userName,$email)
   {
       $this->userName = $userName;
       $this->email = $email;
   }

   public function addFriend(){
        return "$this->userName added a new friend";
   }

}



$userOne = new User('Sajee','sajee.thamanga@gmail.com');
$userTwo = new User('Randuni','ran12@yahoo.com'); 

// echo "the class is ".get_class($userOne);

echo $userOne->userName.'<br>';
echo $userOne->email .'<br>';
echo $userOne->addFriend() .'<br>';

// $userTwo->userName = 'Rodrigo';
// $userTwo->email= 'rodrigol@yahoo.com';

echo $userTwo->userName.'<br>';
echo $userTwo->email .'<br>';
echo $userTwo->addFriend() .'<br>';

//echo 'the class is '. get_class($userOne);

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