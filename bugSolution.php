```php
<?php
class User {
    public $firstName;
    public $lastName;
    public $email; // New property

    public function __construct($firstName, $lastName, $email = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}

// Simulate previous session data (without email)
$_SESSION['user'] = serialize(new User('Jane','Doe'));

// Function for safe unserialization, accounting for added email property
function unserializeUser(){
    $user = unserialize($_SESSION['user']);
    if($user instanceof User){
        if(!isset($user->email)){ // Handle backward compatibility 
            $user->email = null; // or some default value
        }
        return $user;
    }else {
        return null;
    }
}

// Unserialize user and access new and old properties
$user = unserializeUser();
var_dump($user); // Check if email is correctly handled

?>
```