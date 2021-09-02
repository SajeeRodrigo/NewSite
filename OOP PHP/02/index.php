<?php

class User{

    //where properties and methods are defined
   public $userName;
   private $email;

   public function __construct($userName,$email)
   {
       $this->userName = $userName;
       $this->email = $email;
   }

   public function addFriend(){
        return "$this->email added a new friend";
   }

   //getters
public function getEmail(){
    return $this->email;
}


   //setters
public function setEmail($email){
if(strpos($email,'@')> -1){
    $this->email = $email;
}
}


}



$userOne = new User('Sajee','sajee.thamanga@gmail.com');
$userTwo = new User('Randuni','ran12@yahoo.com'); 


// $userOne->email = 3;

// echo $userOne->email.'<br>';
// echo $userTwo->email.'<br>';

$userOne->setEmail('Rodri@gmail.com');

echo $userOne->getEmail().'<br>';
echo $userTwo->getEmail().'<br>';
//echo $userOne->addFriend();

?>

<html lang="en">
    <head>
        <title>Access Modifiers</title>
    </head>

    <body>


    </body>
</html>