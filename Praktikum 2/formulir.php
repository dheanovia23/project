<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulir Pendaftaran Politeknik Purbaya</title>
</head>
<body>
	<h2>Formulir Pendaftaran</h2>
    <form action="proses.php" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>