<?php 

    require_once ('PDOconnect.php');
    require_once ('generateFormStage.php');

    if(isset($_POST['submit']))
    {
        $form->Hydrate($_POST);

        // On commence par récupérer les champs
        if(isset($_POST['date_debut']))   $date_debut = $_POST['date_debut'];
        if(isset($_POST['heure_debut']))  $heure_debut = $_POST['heure_debut'];
        if(isset($_POST['tarif_stage']))  $tarif_stage = $_POST['tarif_stage'];

        if( empty($date_debut) OR empty($heure_debut) OR empty($tarif_stage) )
        {
            $missingField = true;
            $error = "Veuillez remplir tous les champs";
            $form->setMessage($error);         
        }

        if(!$missingField){
            try {


                //Ajout du stage à la base de donnée    
                $stmt = $bdd->prepare('INSERT INTO Stage(DATE_DEBUT, TIME_STAGE, TARIF_STAGE) VALUES (?, ?, ?);');

                //Tentative d'ajout du stage dans la base de données
                try{
                    $bdd->beginTransaction();
                    $stmt->execute(array($date_debut, $heure_debut, $tarif_stage ));
                    $inserted_id = $bdd->lastInsertId();
                    $bdd->commit();
                    header('location: AddStageSucessWindow.php?stgid='.$inserted_id.'');
                }
                //Echec d'ajout du stage dans la base de données
                catch(PDOExecption $e) {
                    $bdd->rollback();
                    print "Error!: " . $e->getMessage() . "</br>";
                }    
            }
            catch (PDOExecption $e) {
                print "Error!: " . $e->getMessage() . "</br>";
            }
        }
    }
    
?>