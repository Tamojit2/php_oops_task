Dependency injection is a procedure where one object supplies the dependencies of another object. Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time.

<?php
	echo "<br >";
   class Fruit {
      private $qualities;
      public function __construct($qualities){
         $this->qualities = $qualities;
      }
      public function totalQualities(){
         return count($this->qualities);
      }
   }
   $newQualities = array("vitA", "vitB", "vitC");  //here 3 vitamins are here
   $f = new Fruit($newQualities);
   echo $f->totalQualities(); //show 3
   
   
//another example

/* There are three ways you can inject dependencies:

Constructor Injection
Setter Injection
Interface Injection   */

/*
class User 
{
    private $database = null;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUsers() {
        return $this->database->getAll('users');
    }
}

$database = new Database('host', 'user', 'pass', 'dbname');
$user = new User($database);
$user->getUsers();
*/


?>
