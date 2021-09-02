<?php

class User
{

    //where properties and methods are defined
    public $userName;
    private $email;

    public function __construct($userName, $email)
    {
        $this->userName = $userName;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->email added a new friend";
    }

    //getters
    public function getEmail()
    {
        return $this->email;
    }


    //setters
    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class AdminUser extends User
{
    public $level;

    public function __construct($userName, $email, $level)
    {
        $this->level = $level;
        parent::__construct($userName,$email);
    }
}



$userOne = new User('Sajee', 'sajee.thamanga@gmail.com');
$userTwo = new User('Randuni', 'ran12@yahoo.com');
$userThree = new AdminUser('yoshi', 'yoshi@gmail.com', 5);

echo $userThree->userName . '<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level.'<br>';



?>

<html lang="en">

<head>
    <title>Inheritance</title>
</head>

<body>


</body>

</html>