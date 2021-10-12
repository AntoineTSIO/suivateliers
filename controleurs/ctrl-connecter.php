<?php
	
	$login = $_POST[ 'login' ] ;
	$mdp = $_POST[ 'mdp' ] ;
	$lf = fopen("/var/log/suivateliers/access.log", "a+");
	
	try {

		$bd = new PDO(
						'mysql:host=localhost;dbname=sbateliers' ,
						'sanayabio' ,
						'sb2021'
			) ;
			
		$sql = 'select * '
			 . 'from Responsable_Ateliers '
			 . 'where nom_de_connexion = :login '
			 . 'and mot_de_passe = :mdp' ;
			 
		$st = $bd -> prepare( $sql ) ;
		
		$st -> execute( array( 
								':login' => $login ,
								':mdp' => $mdp 
						) 
					) ;
		$resultat = $st -> fetchall() ;
			
		unset( $bd ) ;
		
		if( count( $resultat ) == 1 ) {
			session_start() ;
			$_SESSION['numero'] = $resultat[0]['numero'] ;
			$_SESSION['nom'] = $resultat[0]['nom'] ;
			$_SESSION['prenom'] = $resultat[0]['prenom'] ;

			$_SESSION[ 'login' ] = $login ;
			
			$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Ok\n" ;
			fwrite($lf, $journal);

			header( 'Location: ../vues/vue-liste-ateliers.php' ) ;
		}
		else {

			$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
			fwrite($lf, $journal);
			
			header( 'Location: ../vues/vue-connexion.php?echec=1' ) ;

		}
	}
	catch( PDOException $e ){

		$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
		fwrite($lf, $journal);
		
		header( 'Location: ../vues/vue-connexion.php?echec=0' ) ;

	}	

?>