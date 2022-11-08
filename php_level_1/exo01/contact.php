<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>
</head>
<body>

	<form action="contact_traitement.php" method="post">
		Fullname : <input type="text" name="fullname"><br />
		Email : <input type="text" name="email"><br />
		Telephone : <input type="text" name="tel"><br />
		Message :<br />
		<textarea name="message"></textarea><br />
		<button type="submit">Envoyer le formulaire</button>
	</form>
</body>
</html>
