<?php
	
	include("global.php");

	$result = array();
	
	$dataSource = $_POST['dataSource'];

	switch( $dataSource ){
		case "browser":
			$result['status'] = 'success';
			$result['data']  = $_SERVER['HTTP_USER_AGENT'];
			break;
		case "ip":
				$result['status'] = 'success';
				$result['data']  = get_client_ip();
			break;
		case "demoForm":

			$userInput 	= $_POST['userInput'];

			if (!filter_var($userInput, FILTER_VALIDATE_EMAIL) === false) {
				$result['status'] = 'valid';
				$result['data']  = ":)";
			}else{
				$result['status'] = 'invalid';
				$result['data']  = ":(";
		
			}

			//header("Location:frontend.php");


			break;
		case "donationForm":
				echo "DO DONATION FORM STUFF";
			break;
		case "logout":
				echo "LOGOUT STUFF";
			break;

	}

	echo json_encode( $result );

?>