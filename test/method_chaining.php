<?php

//When many methods are called in a single instruction, in PHP, it is called Method Chaining

	class person{
	    private $name="";
	    private $age="";
	  
	    public function setName($name=""){
	      $this->name=$name;
	      return $this;   // returns the class instance to allow method chaining
	    }
	    public function setAge($age=""){
	      $this->age=$age;
	      return $this;
	    }
	    public function getInfo(){
	      echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
	    }

	}

	$man = new person();  //man object call the person class
	/*
	$person->setName("Tamojit Saha");
	$person->setAge("23");
	$person->getInfo();
	*/
	$man->setName("Tamojit Saha")->setAge("23")->getInfo();  //method chaining

?>
