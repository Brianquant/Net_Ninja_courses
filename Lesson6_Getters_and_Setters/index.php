<?php  

/**
 * Getters and Setters
 * Use case: Getters and Setters are usefull for acccess a private property and update the value but in a strict manner
 */

 class User {
// Removed hard coded values
   public $username;
   private $email;

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
            echo "Email is not valid";
        }

    }
 }


// Implemented arguments
 $userOne = new User('mario', 'mario@email.com');
 $userTwo = new User('luigi', 'luigi@email.com');

 $userOne->setEmail('browser@email.com'); // Overwrite the property $email if condition is true

 echo $userOne->getEmail() . '<br>'; // Invoke the get function and returns the value of the property $email
 echo $userTwo->getEmail() . '<br>';





?>