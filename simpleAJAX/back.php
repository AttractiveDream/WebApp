<?php
header("Content-Type:application/json");

function search( $condition ) {
	if ( strlen( $condition ) > 0 ) {
		// TODO	
		$return_value = true;
		$output = 'this is sample results of '.$condition;
		
	} else {
		$return_value = false;
		$message = 'input is empty';
	}

	return [ 'result'=>$return_value, 'out'=>$output, 'message'=>$message ];
}

echo json_encode(search($_POST['msg']));

?>
