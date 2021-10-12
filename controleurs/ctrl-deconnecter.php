<?php

	session_start() ;
	
	$login = $_SESSION[ 'login' ] ;
	
	session_unset() ;
	session_destroy() ;
	
	header( 'Location: ../index.php' ) ;
?>