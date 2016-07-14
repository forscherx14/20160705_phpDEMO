<?php
	
	include("utilities/global.php");
	include("obj/dbCon.php");

	$conn = new dbCon('localhost', 'root', '', 'olsen_section2_demo');

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

				//use dbcon to insert data


				$result['data']  = $conn->insertRecords( "demotable", "email", $userInput);
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