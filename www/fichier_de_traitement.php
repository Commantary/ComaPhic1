<!DOCTYPE html>
<html>
<head>
	<title>RECEPTION des donn&eacute;es - M&eacute;thode POST</title>
</head>
<body>

<h1>R&eacute;ception des donn&eacute;es</h1>

<P>Bonjour petit d&eacute;veloppeur, voici les informations que je viens de r&eacute;cup&eacute;rer</P>
	<ul>
		<li>Ton pr&eacute;nom est : <?php echo
			$_POST['prenom']; ?></li>
		</li>Ton nom est : <?php echo
		$_POST['nom']; ?></li>
		<li>Ton email est : <?php echo $_POST['email']; ?></li>
	</ul>
</p>
</form>

</body>
</html>