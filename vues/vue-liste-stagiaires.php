<?php 
    session_start();

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
    
    $requete = $connection->query('SELECT numero, nom, prenom, ville FROM Client INNER JOIN Participation ON Client.numero = Participation.client WHERE Participation.atelier = ' . $_SESSION['atelier']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Sanaya Bio Ateliers</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-text" href="../controleurs/ctrl-deconnecter.php">
                <h5>Déconnexion</h5>
            </a>
            <a class="navbar-brand" href="../index.php">
                <h3>Sanaya Bio Ateliers</h3>
            </a>
            <span class="navbar-text">
                <h5><?php echo $_SESSION['nom']; ?>  <?php echo $_SESSION['prenom']; ?></h5>
            </span>
        </div>
    </nav>
    
    <div class="col-sm">
    	<h1 class="text-center">Liste des Stagiaires</h1>
    	<div class="d-grid gap-2 col-6 mx-auto">
                <table>
                    <tr>
                        <th style="border: 1px solid #333">Numéro</th>
                        <th style="border: 1px solid #333">Nom</th>
                        <th style="border: 1px solid #333">Prénom</th>
                        <th style="border: 1px solid #333">Ville</th>
                    </tr>
                    <?php while($unStagiaire = $requete->fetch()){ ?>
                    <tr>
                        <td style="border: 1px solid #333;text-align: center;"><?php echo $unStagiaire[0] ?></td>
                        <td style="border: 1px solid #333;text-align: center;"><?php echo $unStagiaire[1] ?></td>
                        <td style="border: 1px solid #333;text-align: center;"><?php echo $unStagiaire[2] ?></td>
                        <td style="border: 1px solid #333;text-align: center;"><?php echo $unStagiaire[3] ?></td>
                    </tr>
                    <?php } ?>
                </table>
    	    <div class="mx-left">
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='vue-liste-ateliers.php'">Retour à la liste des Ateliers</button>
            </div>
        </div>
	</div>
	
</body>


</html>