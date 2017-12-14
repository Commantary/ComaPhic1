<!DOCTYPE html>
<html>
<head>
	<title>RitoPommes</title>
</head>
	<style type="text/css">
		#mep {
			border: 8px solid;
			border-color: #8A0829;
			background-color: #DF013A;
			margin: auto;
		}
		#mepp {
			font-family: monospace;
			font-weight: bold;
			color: white;
			font-size: 32px;
			text-align: center;
		}
		#div1 {
			border-right: 8px solid;
			border-bottom: 8px solid;
			border-left: 8px solid;
			border-color: #E6E6E6;
			width: 50%;
			height: 500px;
			margin: auto;
			background-color: #BDBDBD;
		}
		body {
			background-color: #424242;
		}
		#p1 {
			color: #585858;
			text-align: center;
			line-height: 250px;
			font-family: sans-serif;
		}
	</style>
<body>


<div id="mep">
	<p id="mepp">BIENVENUE SUR LE SITE DE COMMENTARY!</p>
</div>

<div id="div1">
	<p id="p1">
		Informations du compte <strong><?php echo $_POST['pseudo']; ?></strong>
	</p>
</div>

</body>

</html>