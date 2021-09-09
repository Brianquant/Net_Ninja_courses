<?php  

/**
 * Overriding Properties and Methods and Protected Modifier
 */

 class User {
   public $username;
    // Hard coded property
   public $role = 'member';
   private $email; // This Property needs to be Protected, in order to access it
   private $password;
   
   public function __construct($username, $email)
   {
       $this->username = $username;
       $this->email = $email;
   }

   public function addFriend() {
       return "$this->username added a new friend." . '<br>' . "$this->email added a new email.";   
   }

   public function getEmail() {
       return $this->email;
   }
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

    public function message() {
        return "$this->email, an admin sent a message";
    }
 }

 class AdminUser extends User {
     public $level;
     private $status;
     public $role = 'admin'; // Override property
    
     public function __construct($username, $email, $level)
     {
         $this->level = $level;
         parent::__construct($username, $email);
     }

     public function getStatus() {
         return $this->status;
     }

     public function setStatus($status) {
          if($status === "visible") {
              $this->status = $status;
          } else {
            $this->status = "Hidden";
          }
     }
    //  Copy and paste the function from the parent and make sure all properties from the parent are protected or public
    // Otherwise these properties are not accessible
     public function message() {
        return "$this->email sent a message";
    }

    public function __get($name)
    {
        $this->email = $name;
    }

 }

 
$userOne = new User('mario', 'mario@email.com');
$userOne->setEmail('browser@email.com'); 
$userOne->setPassword("dnfjkbjkdfbjs");
echo "<b>User One Email:</b> " . $userOne->getEmail() . '<br>'; 
echo "<b>User One Password:</b> " . $userOne->getPassword() . '<br>'; 

$userTwo = new User('luigi', 'luigi@email.com');
$userTwo->setEmail('JohnDoe@email.com');
$userTwo->setPassword('suicideCide098@');
echo "<b>User Two Email:</b> " . $userTwo->getEmail() . '<br>';
echo "<b>User Two Password:</b> " . $userTwo->getPassword() . '<br>';
echo "<b>User Two Message:</b> " . $userTwo->message() . '<br>';

$userThree = new AdminUser('Lisa','Lisa@email.com', 5);
$userThree->setStatus('hidden');
echo "<b></b> " . $userThree->getStatus() . "<br>";
echo "Admin username: " . $userThree->username . '<br>';
echo "Admin Level: " . $userThree->level . '<br>';
echo "Admin Role: " . $userThree->role . '<br>';
echo "<b>User Three Message:</b> " . $userThree->message() . '<br>';


 






?>