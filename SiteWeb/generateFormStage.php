<?php

    $f_nom    = new Input("date_debut", "date", "");
    $f_prenom = new Input("heure_debut", "time", "");
    $f_age      = new Input("tarif_stage", "number", "");
    $f_submit = new Input("submit", "submit", "Envoyer");
    $f_nom->AddLabel(new Label('Date du stage'));
    $f_prenom->AddLabel(new Label('Heure du stage'));
    $f_age->AddLabel(new Label('Tarif'));
    $f_nom->setClass('input');
    $f_prenom->setClass('input');
    $f_age->setClass('input');
    $f_submit->setClass('submit');

    $form = new Form('AddStageWindow.php');
    $form->setTitle("Bienvenue,");
    $form->setSubtitle("remplissez les champs suivants");
    
    $form->Add($f_nom);
    $form->Add($f_prenom);
    $form->Add($f_age);
    $form->Add($f_submit);
    
?>