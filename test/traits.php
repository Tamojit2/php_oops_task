<?php

	//Traits are used to declare methods that can be used in multiple classes. 
	//Traits can have methods and abstract methods that can be used in multiple classes
	//Due to trait, we are able to access multiple functions in a single class
	
	
  trait sum {
     public function text() {
         echo "Here the Sum"."<br >";
      }
   }	

   trait Reader{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   trait writer {
      public function multiplication($var1,$var2){
         return $var1*$var2;
      }
   }
   
   class Welcome {
      use sum; //by use function we can use traits
 }
   
   class File {
   
      use Reader;  //by use function we can use traits
      use writer;
      
      public function calculate($var1,$var2){
      
         echo "Ressult of addition:".$this->add($var1,$var2)."<br >";
         echo "Ressult of multiplication:".$this->multiplication($var1,$var2);
      }
   }
   
   $ob = new Welcome();
   $ob->text();
   
   $ob2 = new File();  //declaering object
   $ob2->calculate(5,3);
   
?>
