<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Uji_Session</title>
		<link  rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="header">
			<h1>Halaman Uji Session</h1>
		</div>
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
		</div>
	</body>
</html>