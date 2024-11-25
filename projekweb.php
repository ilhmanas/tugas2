<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registrasi Mahasiswa Baru</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4:
			margin: 0;
			padding: 0;
		}
		.container {
			width: 50%;
			margin: 50px auto;
			background-color: white;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		h2 {
			text-align: flex;
			flex-direction: column;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		label { 
			margin: 10px 0 5px;
		}
		input, select {
			padding: 10px;
			margin-bottom: 15px;
			border-radius: 4px;
			border: 1px solid #ccc;
		}
		button {
			padding: 10px;
			background-color: #28a745;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		button:hover {
			background-color: #218838;
		}
	</style>
	<body>
		<div class="container">
			<h2>Registrasi Mahasiswa Baru <br> Politeknik Purbaya 2024/2025</h2>
			<form action="submit_form.php" method="POST">
				<label for="Name">Nama Lengkap:</label>
				<input type="text" id="name" name="name" required>
				
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required  >
				
				<label for="phone">Nomor Telepon:</label>
				<input type="tel" id="phone" name="phone" required >
				
				<label for="major">Jurusan:</label>
				<select id="major" name="major" required>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Mesin">Teknik Mesin</option>
				</select> <br>
				<button type="submit">Daftar</button>
			</form>
		</div>
	</body>
	</html>