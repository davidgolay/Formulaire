<?php
    declare(strict_types=1);
    require_once ('Utilities/Form.php');
    require_once ('formStageLogic.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style/form.css" rel="stylesheet">
    <title>Ajouter un stage</title>
</head>
<body>   
    <?php
        echo $form->__ToString();
    ?>
</body>
</html>