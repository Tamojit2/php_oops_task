<?php  

	/* 
		PHP Namespaces are the way of encapsulating items so that same names can be reused without name conflicts.
    • It can be seen as an abstract concept in many places. It allows re-declaring the same functions/classes/interfaces/constant functions 	in the separate namespace without getting the fatal error.
    • A namespace is a hierarchically labeled code block holding a regular PHP code.
    • A namespace can contain valid PHP code.
	*/

/* namespace MyNamespace1 { 
   function hello()  
    { 
        echo "Running from A namespace!"; 
    } 
} 
    
namespace MyNamespace2 { 
   function hello()  
    { 
        echo "Running from B namespace!"; 
    } 
} 
    
namespace {              //we can also declare globally
   function hello()   
    { 
        echo "Running from C namespace!"; 
    } 
} */

namespace MyNamespaceName; 
function hello()  
    { 
        echo "Hello I am Running from a namespace!"."<br >"; 
    } 
    
// Resolves to MyNamespaceName\hello 
hello(); 
  
// Explicitly resolves to MyNamespaceName\hello 
namespace\hello(); 

?>

