<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="../login-page/register/style.css">

</head>
<body>

<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h2>Etoile D'élégance</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		</div>
	</div>
	
	
		<form class="right" method="POST" action="../Models/inscription.php">
		<h5>Register</h5>
		<p>Vous avez déjà un compte ? <a href="login">Cliquez ici pour vous connecter</a>et ainsi acceder a notre site !qsqsfqsfqsfqsfqgggg</p>
		<div class="inputs">
			<input type="text" placeholder="Nom" name="nom">
			<br>
			<input type="text" placeholder="Prenom" name="prenom">
			<br>
			<input type="text" placeholder="Adresse" name="adresse">
			<br>
			<input type="tel" id="phone" name="phone" placeholder="+33">
			<br>
			<input type="text" placeholder="Email" name="email">
			<br>
			<input type="password" placeholder="Mot de passe" name="mdp">
			<br>
			<input type="password" placeholder="Confirmation du mot de passe">
		</div>
			
			<br><br>
			
			<br>
			<button type="submit">S'inscrire</button>
</form>
	
</div>
<!-- partial -->
  
</body>
</html>
