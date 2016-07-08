$(document).ready( function(){

	//$.get()

	//$.post()

	//$.ajax()

	var userInput;
	var dataSrc;
	var data

	$("#submitBtn").click( function(){
		userInput = $("#userInput").val();
		dataSrc = "demoForm";
		data = { dataSource : dataSrc, userInput: userInput };

		$.post("backend.php", data ).done( function( serverResponse ){
			//console.log( serverResponse )

			console.log( typeof( serverResponse) )

			//myObj = JSON.parse( serverResponse )

			console.log( serverResponse.status )


		})

	});


})