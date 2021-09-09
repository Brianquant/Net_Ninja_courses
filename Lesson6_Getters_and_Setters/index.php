<?php  

/**
 * Getters and Setters
 * Use case: Getters and Setters are usefull for acccess a private property and update the value but in a strict manner
 */

 class User {
// Removed hard coded values
   public $username;
   private $email;
   private $password;

// The consturct method passes the arguements dynamically in the declared properties
   public function __construct($username, $email)
   {
       $this->username = $username;
       $this->email = $email;
   }

   public function addFriend() {
       return "$this->username added a new friend." . '<br>' . "$this->email added a new email.";   
   }

// getter
   public function getEmail() {
       return $this->email;
   }

// setter
    public function setEmail($email) {
        if(strpos($email, '@') > -1) {
            $this->email = $email;
        } else {
            echo "Email is invalid";
        }
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($pw) {
        if(strlen($pw) > 10) {
            $this->password = $pw;
        } else {
            echo "Password is invalid";
        }
    }
 }


// Implemented arguments
 $userOne = new User('mario', 'mario@email.com');
 $userTwo = new User('luigi', 'luigi@email.com');

$userOne->setEmail('browser@email.com'); // Overwrite the property $email if condition is true (write)
$userOne->setPassword("dnfjkbjkdfbjs"); // (write)
echo "<b>User One Email:</b> " . $userOne->getEmail() . '<br>'; // Invoke the get function and returns the value of the property $email (read)
echo "<b>User One Password:</b> " . $userOne->getPassword() . '<br>'; // (read)

$userTwo->setEmail('JohnDoe@email.com');
$userTwo->setPassword('suicideCide098@');

echo "<b>User Two Email:</b> " . $userTwo->getEmail() . '<br>';
echo "<b>User Two Password:</b> " . $userTwo->getPassword() . '<br>';

 






?>