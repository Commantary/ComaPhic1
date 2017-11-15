<!DOCTYPE html>
<HTML lang="fr">
	<HEAD>

		<meta charset="utf-8" />
		
		<LINK rel="stylesheet" type="text/css" href="style.css">

		<title>Titre du site</title>
		<meta name="Description" content="Description du site"/>
		<meta name="author" content="Bob l'éponge" />
		<meta name="Keywords" content="a, b, c"/>

		<!-- déclaration des fichiers de scripts -->
		<script type="text/javascript" src="js/commonscripts.js"></script> <!-- Le fichier commonscripts.js contenant nos scripts est dans le sous-répertoire js -->
		
	</HEAD>

	<BODY>

		<div id="bloc_page">
<?php

	//Tiré de http://www.siteduzero.com/informatique/tutoriels/les-magic-quotes-ou-guillemets-magiques/desactiver-les-magic-quotes
	//Cette option permet de retirer les magic quotes sur un serveur où c'est activé et où vous n'avez pas la main. C'est importante lorsque l'on poste récupère des valeurs de champs Input et textarea faute de quoi, par exemple, "C'est" deviendra "C\'est"
	function stripslashes_r($var) // Fonction qui supprime l'effet des magic quotes
	{
		if(is_array($var)) // Si la variable passée en argument est un array, on appelle la fonction stripslashes_r dessus
		{
			return array_map('stripslashes_r', $var);
		}
		else // Sinon, un simple stripslashes suffit
		{
			return stripslashes($var);
		}
	}

	if(get_magic_quotes_gpc()) // Si les magic quotes sont activés, on les désactive avec notre super fonction ! ;)
	{
		$_GET = stripslashes_r($_GET);
		$_POST = stripslashes_r($_POST);
		$_COOKIE = stripslashes_r($_COOKIE);
	}
				

	
?>
		</div> <!-- div bloc_page -->
	</BODY>
</HTML>