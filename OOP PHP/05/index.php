<?php

class User
{
    public $userName;
    protected $email;
    public $role ='member';

    public function __construct($userName, $email)
    {
        $this->userName = $userName;
        $this->email = $email;
    }

    public function __destruct()
    {
        echo "the user $this->userName was removed. <br>";
    }

    public function __clone()
    {
        $this->userName = $this->userName.'(cloned)<br>';
    }

    public function addFriend(){
        return "$this->email added a new friend";
    }


    public function message(){
        return "$this->email sent a new message";
    }

    //getters
    public function getEmail(){
        return $this->email;
    }

    //setters
    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
    }
}

class AdminUser extends User{
    public $level;
    public $role = 'admin';
    

    public function __construct($userName, $email, $level)
    {
        $this->level = $level;
        parent :: __construct($userName, $email);
        
    }

    public function message(){
        return "$this->email an admin, sent a new message";
    }
}


$userOne = new User('Sajee', 'sajee.thamanga@gmail.com');
$userTwo = new User('Randuni', 'ran12@yahoo.com');
$userThree = new AdminUser('yoshi', 'yoshi@gmail.com', 5);

//unset($userOne);
$userFour = clone $userOne;
echo $userFour->userName;

?>

<html lang="en">

<head>
    <title>Clone and Destruct</title>
</head>

<body>


</body>

</html>