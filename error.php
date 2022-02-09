<?php
 
 /**Parse error**/
/*echo "Hello ";
echo "World" //parse error
x=3;			//parse error
echo $x;
*/

/**Fatal error**/
 /*function add($f1, $f2) {  
        $sum = $f1 + $f2;  
        echo "Addition:" . $sum;  
    }  
      
    $f1 = 23;  
    $f2 = 56;  
    sub();*/ // error : call funtion without defining it

    /*warning error*/      
   /* echo "Warning Error: ";  
    include ('text.php');

    echo "hhhh"; */

    /**notice error**/  
    /*$a = "A";  
    echo $a;  
    echo $b; 
    echo $a;   */  

    $n=0;
    try{
    	if ($n<=0) {
    		throw new Exception("Enter a valid numerator");
    	}
    	$div = 2/$n;
    	echo $div;
    }catch(Exception $e){
    	echo $e->getMessage();
    	echo "<br>";
    	echo $e->getLine();
    	echo "<br>";
    	echo $e->getCode();
    	echo "<br>";
    	echo $e->getFile();
    }   
?>