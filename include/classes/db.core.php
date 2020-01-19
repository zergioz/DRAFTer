<?php
/* start db class*/

class DBi {
	protected _DB_USERNAME;
	protected _DB_PASSWORD;
	protected _DB_HOSTNAME;
	protected _DB_NAME;

	function public __construct(){
		$conn = new mysqli(_DB_HOSTNAME, _DB_USERNAME, _DB_PASSWORD, _DB_NAME);
	}   
}


?>
