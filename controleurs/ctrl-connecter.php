<?php
	
	$login = $_POST[ 'login' ] ;
	$mdp = $_POST[ 'mdp' ] ;
	$lf = fopen("/var/log/suivateliers/access.log", "a+");
	
	try {

		try{
			$dbName = 'sbateliers';
			$host = 'localhost';
			$utilisateur = 'sanayabio';
			$motDePasse = 'sb2021';
			$port = '3306';
			$dns = 'mysql:host='.$host.';dbname='.$dbName.';port='.$port;
			$connection = new PDO( $dns, $utilisateur, $motDePasse);
		} catch (Exception $e) {
			echo "connection failed : " . $e;
			die();
		}
		$requete = $connection->query("SELECT numero, nom_de_connexion, AES_DECRYPT(nom,SHA2('password',512)) AS nom, AES_DECRYPT(prenom,SHA2('password',512)) AS prenom, mot_de_passe FROM Responsable_Ateliers");
		$responsable = $requete -> fetchAll();

		foreach($responsable as $unResponsable){
			if($unResponsable['nom_de_connexion'] == $login){
				if(password_verify($mdp,$unResponsable['mot_de_passe'])){
					session_start();
					$_SESSION['numero'] = $unResponsable['numero'] ;
					$_SESSION['nom'] = $unResponsable['nom'] ;
					$_SESSION['prenom'] = $unResponsable['prenom'] ;
					$_SESSION[ 'login' ] = $login ;
				
					$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Ok\n" ;
					fwrite($lf, $journal);

					header( 'Location: ../vues/vue-liste-ateliers.php' ) ;
					exit;
				}
			}
		}
		$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
		fwrite($lf, $journal);
		header( 'Location: ../index.php?echec=1' );
		
		
	}catch( PDOException $e ){

		$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
		fwrite($lf, $journal);
		
		header( 'Location: ../index.php?echec=0' ) ;

	}	

?>