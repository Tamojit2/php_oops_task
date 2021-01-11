<?php

interface person {

  public function man();
  public function woman();
  
}

abstract class person12 implements person{
   public function man(){
     echo" function man is called from abstract class<br>";
   }
}


class Human  extends person12 {
     private $id;
     private $name;
     
     public function __construct($name){
       $this->name=$name;
    
     }
     public function woman(){
        
        echo"function woman called from abc class<br>";
     }
     public function setId($id){
        $this->id=$id;
     }
      public function getId(){
       return $this->id;
     }
     
      public function setName($name){
        $this->name=$name;
     }
     public function getName(){
        return $this->name;
     }
     
     
}
//now making object of class abc
	$obj =new human("abc");
	$obj->man();
	$obj->woman();
	$obj->setId(1);
	echo $obj->getId();
	echo "<br>";
	$obj->setName("tamojit");
	echo $obj->getName();


?>
