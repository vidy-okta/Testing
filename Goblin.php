<!DOCTYPE html>
<html>
<head>
	<title>Belajar OOP ke-2</title>
</head>
<body style="background-color: #836539; text-align: center; font-family: Alegreya">
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1 class="judul"> Goblin Slayer</h1>
<?php 
	$player =[
		[
			"nama" => "Kolombus",
			"role" => "Tank",
			"health" => 60,
			"armor" => 40,
			"attack" => 20,
		],
		[
			"nama" => "Nostradamus",
			"role" => "Assasin",
			"health" => 30,
			"armor" => 10,
			"attack" => 40,
		]		
	];

	$goblin =[
		[
			"nama" => "Goblin Palladin",
			"health" => 10,
			"attack" => 35,
		],
		[
			"nama" => "Hobgoblin",
			"health" => 40,
			"attack" => 15,
		]		
	];
// var_dump($goblin);
	class Game{
		function scene1($player, $goblin){
		$nama_player = $player[0]["nama"];
		$goblin = $goblin [0]["nama"];
		$role_player = $player[0]["role"];
		$hp_player = $player[0]["health"] + $player[0]["armor"];
		$damage = $goblin[0]["attack"];
		$health_player = $hp_player - $damage;
		return "$goblin menyerang $nama_player [$role_player]. Health $nama_player tersisa $health_player.";
	}

	function scene2($player, $goblin){
		$nama_player = $player[1]["nama"];
		$role_player = $player[1]["role"];
		$nama_goblin = $goblin[1]["nama"];
		$health_goblin = $goblin[1]["health"] - $player[1]["attack"];
		return "$nama_player [$role_player] memberikan damage kepada $nama_goblin.".
		" Health $nama_goblin tersisa $health_goblin." ;
	}
	}
	
	$game = new Game;
	 ?>
	 <div class="show">
		 <h2 class="scene1"><?php echo $game -> scene1($player, $goblin); ?></h2>
		 <h2 class="scene2"><?php echo $game -> scene2($player, $goblin); ?> </h2>	 	
	 </div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@800&display=swap');
</style> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Alegreya&display=swap');
</style>
</body>
</html>