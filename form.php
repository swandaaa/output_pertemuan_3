<!DOCTYPE html>
<html lang="id">
	<head>
		<title>Form Identitas Diri</title>
		<link  rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="header">
			<h1>Output Pertemuan 3</h1>
		</div>
		<br>
		<div class="form">
			<div class="judul">
				Identitas Diri
			</div>
			<br><br>
			<form action="output.php" method="post">
				<div class="input">
					<label for="name">Name:</label> 
					<br>
					<input id="name" type="text" name="name" size="30">
				</div>
				
				<div class="input">
					<label for="email">E-mail:</label>
					<br>
					<input id="email" type="text" name="email" size="30">
				</div>
				
				<div class="input">
					<label for="github">Github:</label>
					<br>
					<input id="github" type="text" name="github" size="30">
				</div>
				
				<br><br><br><br>
				<div class="input">
					<label for="fakultas">Fakultas:</label>
					<br>
					<input id="fakultas" type="text" name="fakultas" size="30">
				</div>
				
				<div class="input">
					<label for="prodi">Program Studi:</label>
					<br>
					<input id="prodi" type="text" name="prodi" size="30">
				</div>
				
				<div class="input">
					<label for="nim">NIM:</label>
					<br>
					<input id="nim" type="text" name="nim" size="30">
				</div>

				<br><br><br><br>
				Pendidikan Terakhir: <br><br>
				<input id="len1" type="text" name="education1" placeholder="SMPN 1 BANGKALAN (2015-2018)" size="50"><br><br>
				<input id="len2" type="text" name="education2" placeholder="SMAN 1 BANGKALAN (2018-2021)" size="45"><br><br>
				<input id="len3" type="text" name="education3" placeholder="Universitas Trunojoyo Madura (2021-Sekarang)" size="45">
				
				<br><br>
				<label for="profil">Tentang Anda:</label><br><br>
				<textarea id="profil" name="profilDiri"></textarea>
				<br><br>
				
				<input type="submit">
			</form>
		</div>
	</body>
</html>