<!DOCTYPE html>
<html>
<head>
	<title>RitoPommes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			border-top: 8px solid;
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
		#img {
    		display: block;
    		margin: auto;
    		vertical-align: center;
    		line-height: 10px;
		}
		#p2 {
			color: #585858;
			text-align: center;
			line-height: 5px;
			font-family: sans-serif;
		}
		#div2 {
			width: 500px;
			margin: auto;
			background-color: #D8D8D8;
		}
		#p2 {
			text-align: center;
		}
	</style>
<body>


<div id="mep">
	<p id="mepp">COMA.GG</p>
</div>

<div id="div1">
	<p id="p1">Informations du compte <strong><?php echo $_POST['pseudo']; ?></strong></p>
	
		<script>
			var info = {};
			var api_key = "RGAPI-1c869ecf-112f-4871-9686-7e4fadf78d62";
			var cors_url = "https://cors-anywhere.herokuapp.com/";
			var name = "<?php echo $_POST['pseudo']; ?>";
		  $.get(cors_url + "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" + name + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
		  		info.lvl = data.summonerLevel;
		  		var iconId = data.profileIconId;
				$('#p2').text('niveau: ' + data.summonerLevel)

				$.get(cors_url + "https://euw1.api.riotgames.com/lol/static-data/v3/realms?api_key=" + api_key, function(data, textStatus, jqXHR) {
					var image = document.getElementById("img")
					image.src="http://ddragon.leagueoflegends.com/cdn/" + data.v + "/img/profileicon/" + iconId + ".png"
				});
				
			});
		</script>
		
		<div id="div2">
			<img id="img" src="" alt="image profile" height="80">
			<span id="p2"></span>
		</div>
	
</div>

</body>

</html>
