<?php
    require_once ('PDOconnect.php');

    try {
        //Requete selection du stage ajouté   
        $stmt = $bdd->prepare('SELECT DATE_FORMAT(DATE_DEBUT, "%d/%m/%Y") AS DATE_DEBUT, DATE_FORMAT(TIME_STAGE, "%H:%i") AS TIME_STAGE, TARIF_STAGE FROM STAGE WHERE NUMERO_STAGE = ?;');

        //Tentative de récupération du stage concerné
        try{
            $id = intval($_GET['stgid']);
            $stmt->execute(array($_GET['stgid']));
            $row = $stmt->fetch();
        }
        //Echec recupération du stage concerné
        catch(PDOExecption $e) {
            print "Error!: " . $e->getMessage() . "</br>";
        }    
    }
    catch (PDOExecption $e) {
        print "Error!: " . $e->getMessage() . "</br>";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style/form.css" rel="stylesheet">
    <title>Succès de l'ajout</title>
</head>
<body>
    <div class="form">
        <div class="title">Félicitations!</div>
        <div class="subtitle">Vous avez ajouté un stage</div>
        <p class="message">
            <?php 
                $date = $row['DATE_DEBUT'];
                $heure = $row['TIME_STAGE'];
                $tarif = $row['TARIF_STAGE'];
                echo 'Ce stage aura lieu le '. $date. ' à '.$heure. ' avec un tarif de '.$tarif. ' euros par participant.';
            ?>
        </p>
        <a href="AddStageWindow.php">Ajouter un autre stage</a>
    </div>
</body>
</html>
