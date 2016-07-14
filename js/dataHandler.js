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

		$.post("api/", data ).done( function( serverResponse ){
			console.log( serverResponse )
			console.log( typeof( serverResponse ) )
			myObj = JSON.parse( serverResponse);
			console.log( typeof( myObj ))

			console.log( myObj )

			if( myObj.status == "invalid"){
				$("#userInput").css("border", "solid 1px red")
			}else if( myObj.status == "valid"){
				$("#userInput").css("border", "solid 1px green")
			}
		})

	});


	$("#ipBtn").click( function(){
		data = { dataSource: "ip" };

		$.post("api/", data ).done( function( serverResponse ){
			console.log( serverResponse )
			myData = JSON.parse(serverResponse )
			console.log( myData )

				$("#clientIP").html( myData.data )
		} );
	})

	$("#browserBtn").click( function(){
		data = { dataSource: "browser" };

		$.post("api/", data ).done( function( serverResponse ){
			console.log( serverResponse )
			myData = JSON.parse(serverResponse )
			console.log( myData )

				$("#clientBrowser").html( myData.data )
		} );
	})




})