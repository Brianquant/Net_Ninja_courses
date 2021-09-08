<?php  

/**
 * Properties and Methods
 */

 class User {
   public $username = 'Brian';
   public $email = 'reifferscheid.brian@outlook.com';

   public function addFriend() {
       return "$this->username added a new friend." . '<br>' . "$this->email added a new email.";
        
   }
 }

 $userOne = new User();
 $userTwo = new User();

 echo $userOne->username . '<br>'; //Access Properties bzw. Attributes
 echo $userOne->email . '<br>';
 echo $userOne->addFriend() . '<br>'; //Access or invoke a function


 echo $userTwo->username = "John" . "<br>"; 
 echo $userTwo->email = "John.Doe@email.com" . "<br>";


//  Check for what properties and methods are available in a Classes
print_r(get_class_vars('User')); // print_r() prints Arrays properly // The get_class_vars() function check for Properties of a class
print_r(get_class_methods('User')); // The get_class_methods() function checks for available methods

?>