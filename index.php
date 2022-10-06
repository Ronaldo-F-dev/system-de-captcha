<?php
	session_start();
	if(isset($_POST['code']) && $_POST['code'] == $_SESSION['code'])
		{
			echo "Code Valide";
		}else
		{
			$erreur =  "Code Invalide";
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Système de captchat</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<section class="main">
			<div class="title">
				<h1>Système de Captchat</h1>
			</div>
			<div class="form">
				<form method="post" action="">
					<p>
						<label for="message">Message:</label><br/>

						<textarea name="message" id="message"></textarea><br/>

						<label for="code">Saisir le code suivant:</label>

						<img src="capchat.php" alt="captchat">
						<br/>
						<input type="text" name="code" id="code"><br/>

						<input type="submit" name="envoyer" value="envoyer" id="envoyer"><br/>
						<?php if(isset($erreur)){
							echo '<p style="color:red;font-weight:bold;">'.$erreur.'</p>';
						} ?>
					</p>
				</form>
			</div>
		</section>
	</body>
</html>

<style type="text/css">
	

</style>