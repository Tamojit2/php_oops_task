<?php


// PHP programming language doesn’t support the multiple inheritance/inheritances. PHP supports multiple inheritances only by using interfaces or Traits in PHP instead of classes so that we can implement it

	//echo"abcd";
	
	interface man {
		public function male();
		}
	interface woman {
		public function female();
		}
		
	class Multiple implements woman, man {
	
			// Function of the interface woman
			
		public function female() {
			echo "Here we are in the interface woman"."<br >";
		}
		
		// Function of the interface men
		
		public function male(){
		
		echo "Here we are in the interface man"."<br >";
		
		}
		
		public function insidemultiple(){
		
		echo "Here we are in the inherited class";
		}
	}
	
		
		$gender = new multiple();
		$gender->female();  //call female function
		$gender->male();    //call male function
		$gender->insidemultiple();   //call the function inside class
		
		
?>


