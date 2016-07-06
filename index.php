<?php
	//Assign a string into a variable
	$greeting = "Hello World!";
	//Print variable
	echo $greeting;
	//Write HTML directly
	echo "<br><br><hr>";
	//Ask for datatype of variable
	echo "Datatype gettype(): ";
	echo gettype( $greeting );
	//Add HTML
	echo "<hr>";
	//define array
	$weekdays = array( "m", "t", "w", "th", "f" );
	//prints array
	print_r( $weekdays );
	//Add HTML
	echo "<hr>";
	//Size of array
	echo "Size of array: ";
	echo count( $weekdays );
	//Add HTML
	echo "<hr>";
	//Outputs first element of array
	echo "First Element of array: ";
	echo "<b style='color:red;'>". $weekdays[0] ."</b>";
	//Add HTML
	echo "<hr>";
	//Defining a number
	$x = 10;
	//Output the number
	echo $x;
	//
	function readArray( $arr ){
		//$length = count( $arr );
		echo "<ul>";
		for( $i = 0; $i < count( $arr ); $i++ ){
			
			echo "<li>";
			echo $arr[$i];
			echo "</li>";

		}
		echo "</ul>";
	}

	//Invoke readArray()
	readArray( $weekdays );

?>