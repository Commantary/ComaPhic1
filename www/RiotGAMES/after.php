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
		#header {
		position: relative;
		width: 500px;
		margin: 0 auto;
			margin-top: 0px;
			margin-right: auto;
			margin-bottom: 0px;
			margin-left: auto;
		padding: 20px 0 0 0;
			padding-top: 10px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
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
		#summonerName {
			color: #242929;
			font-size: 20px;
			font-family: sans-serif;
		}
		#div2 {
			display: inline-block;
			width: 100px;
			padding-left: 30px;
			vertical-align: top;
		}
		#p2 {
			text-align: center;
		}
		#profileIcon {
			position: relative;
		}
		#img {
    	display: block;
    	width: 100px;
   	 	height: 100px;
		}
		#level {

		}
		#level {
    	position: absolute;
    	top: 100%;
    	left: 50%;
    	margin-top: -14px;
    	margin-left: -22px;
    	width: 44px;
    	height: 24px;
    	padding-top: 3px;
    	box-sizing: border-box;
    	background: url('http://opgg-static.akamaized.net/images/site/summoner/bg-levelbox.png');
        background-size: auto auto;
    	background-size: 100%;
    	line-height: 17px;
    	font-family: Helvetica,AppleSDGothic,"Apple SD Gothic Neo",AppleGothic,Arial,Tahoma;
    	font-size: 14px;
    	text-align: center;
    	color: #eabd56;
		}
	</style>
<body>


<div id="mep">
	<p id="mepp">INFORMATIONS A PROPOS D'UN COMPTE LEAGUE OF LEGENDS</p>
</div>

<div id="div1">

	<div id="header">

		<div id="div2">

			<div id="profileIcon">
				<img id="img" src="" alt="image profile" height="80">
				<span id="level" title=""></span>
			</div>
			<span id="p2"></span>
		</div>

		<div id="infos">
			<p id="summonerName">&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $_POST['pseudo']; ?></strong></p>
			<hr noshade size=3 width=155 align=left>

			<div id="infoRank">
				<img id="imgRank" src="">
				<p id="rank"></p>
			</div>
			
		</div>
		
	</div>

</div>

<script>
			var info = {};
			var api_key = "RGAPI-1c869ecf-112f-4871-9686-7e4fadf78d62";
			var cors_url = "https://cors-anywhere.herokuapp.com/";
			var name = "<?php echo $_POST['pseudo']; ?>";
		  $.get(cors_url + "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/" + name + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
		  		var lvl = data.summonerLevel;
		  		var iconId = data.profileIconId;
		  		var accId = data.id;
				$('#level').text(data.summonerLevel)

					let image = document.getElementById("img")
					image.src="http://opgg-static.akamaized.net/images/profile_icons/profileIcon" + iconId + ".jpg"

				<!-- Url pour le rank -->
				$.get(cors_url + "https://euw1.api.riotgames.com/lol/league/v3/leagues/by-summoner/" + accId + "?api_key=" + api_key, function(data, textStatus, jqXHR) {
					var json = JSON.parse(data)
					if(json[0]==undefined) {
						
						$('#rank').text('Unranked');
					} else {
						


                            
						$('#rank').text('Ranked');
					}
				})
				
			});
		</script>
</body>

</html>
