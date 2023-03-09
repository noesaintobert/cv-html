<?php
	//création d'un tableau//
	$Raisons = htmlspecialchars($_POST["Raisons"]);
	$Nom = htmlspecialchars($_POST["Nom"]);
	$Mail = htmlspecialchars($_POST["Mail"]);
    $Num = htmlspecialchars($_POST["Num"]);
	$Adresse = htmlspecialchars($_POST["Adresse"]);
	$Remarques = htmlspecialchars($_POST["Remarques"]);

	echo "Bonjour, " . "le formulaire de votre entreprise " . $Nom ." a bien été envoyé, vous allez être contacté dans peu de temps  " . ' !';

	// 1 : on ouvre le fichier
	$monfichier = fopen('formulaire.txt', 'a+');
	fputs($monfichier, "==================================\n");
    fputs($monfichier, $Raisons. "\n");
	fputs($monfichier, $Nom."\n"); 
	fputs($monfichier, $Mail."\n"); 
    fputs($monfichier, $Num."\n"); 
	fputs($monfichier, $Adresse."\n"); 
	fputs($monfichier, $Remarques."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);