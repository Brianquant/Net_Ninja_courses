<?php  

/**
 * Access Modifiers
 * How to know which Modifiers to use? : + public, # protected, - private
 * If it comes to sensiitve data like a password than you want to use the - private Modifier
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
 }


// Implemented arguments
 $userOne = new User('mario', 'mario@email.com');
 $userTwo = new User('luigi', 'luigi@email.com');

 echo $userOne->addFriend() . '<br>'; 
 echo $userTwo->addFriend() . '<br>';
 echo $userOne->email; //Fatal error: Uncaught Error: Cannot access private property User::$email



?>