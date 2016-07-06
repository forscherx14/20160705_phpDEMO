<?php
	
	$dataSource = $_POST['dataSource'];
	$userInput 	= $_POST['userInput'];


	echo $userInput;

	switch( $dataSource ){
		case "demoForm":
				echo "DO DEMOFORM STUFF";
			break;
		case "donationForm":
				echo "DO DONATION FORM STUFF";
			break;
		case "logout":
				echo "LOGOUT STUFF";
			break;

	}

?>