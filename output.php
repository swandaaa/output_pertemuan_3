<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Identitas Diri</title>
		<link  rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="header">
			<h1>Output Pertemuan 3</h1>
		</div>
		<?php 
			$_SESSION["name"]=$_POST["name"];
			$_SESSION["fakultas"]=$_POST["fakultas"];
			$_SESSION["prodi"]=$_POST["prodi"];
			$_SESSION["nim"]=$_POST["nim"];
			$_SESSION["email"]=$_POST["email"];
			$_SESSION["github"]=$_POST["github"];
			$_SESSION["education"]=array($_POST["education1"],$_POST["education2"],$_POST["education3"]);
			$_SESSION["profile"]=$_POST["profilDiri"];
		?>
		
		<div class="left">
			<div class="name">
				<?php 
					echo $_SESSION["name"];
				?>
			</div>
			
			<br>
			
			<div class="identity">
				<?php
					echo ("Nama : " . $_SESSION["name"] . "<br>");
					echo ("NIM : " . $_SESSION["nim"] . "<br>");
					echo ("Fakultas : " . $_SESSION["fakultas"] . "<br>");
					echo ("Program Studi : " . $_SESSION["prodi"] . "<br>");
					echo ("Email : " . $_SESSION["email"] . "<br>");
					echo ("Github : " . $_SESSION["github"] . "<br>");
				?>
			</div>
		</div>
		
		<div class="profile">
			<h2>Profile</h2>
				<?php echo ("<p>".$_SESSION["profile"]."</p>")?>
			<h2>Education</h2>
			<ul>
				<?php
					for($i=0; $i<3; $i++){
						echo ("<li>" . $_SESSION["education"][$i] . "</li><br>");
					}
				?>
			</ul>
			<div>
				<a href="uji_session.php" target="_blank">Uji Session</a>
			</div>
		</div>
		<br>
	</body>
</html>