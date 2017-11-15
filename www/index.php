<?php
$dir_nom = '.'; // dossier listé (pour lister le répertoire courant : $dir_nom = '.'  --> ('point')
$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
$fichier= array(); // on déclare le tableau contenant le nom des fichiers
$dossier= array(); // on déclare le tableau contenant le nom des dossiers

while($element = readdir($dir)) {
	if($element != '.' && $element != '..') {
		if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
		else {$dossier[] = $element;}
	}
}

closedir($dir);

if(!empty($fichier)){
	sort($fichier);// pour le tri croissant, rsort() pour le tri décroissant
	echo "Some links: \n\n";
	echo "\t\t<ul>\n";
			echo "\t\t\t<li><a href=\"$dir_nom/link_of_my_application.php \">link of my application</a></li>\n"; 
      		echo "\t\t\t<li><a href=\"$dir_nom/riot.txt \">riot.txt</a></li>\n"; 
		
	echo "\t\t</ul>";
 }
?>