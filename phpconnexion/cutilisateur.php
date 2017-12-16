<?php


if (isset($_POST['submit'])) {
	extract($_POST);
	if (!empty($login) AND !empty($choix)) {
		$chaine = "A656hyffcgfBDCEF";
		$pwd=sha1($chaine);
		$generepass = substr($pwd,0,8);
		$pass = "generepass.txt";
		$f = fopen($pass, "a");
		fputs($f,"$login;$generepass;$choix. \n");
		fclose($f);
	}
}



 extract($_post);
 $chaine=fopen("generepass.txt","r+");
rewind($chaine);
$existe=false;
 while(($line=fgets($chaine)) !==false){
 $info=explode(";" , $line);
 	if($info[0]==$login){
 		$existe=true;
		break;
	}
}
if($existe){
 	echo "login déjà utilisé veuillez choisir un autre login ";
 	echo ("");
}
 else{
	fseek($chaine,2);
	fputs($chaine,$login.";".$pass.";".$profil." \n");
	
}


	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Creation d'utilisateur</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
	<fieldset>
		<legend align="center">générer mot de passe utilsateur</legend>
		<form method="POST" action ="cutilisateur.php">
			<table align="center">
			<tr class="form-group">
				<td >Login</td>
				<td><input class="form-control" type="text" name="login"></td>
			</tr>
			<tr class="form-group">
				<td>Profil</td>
				<td>
					<select name="choix">
						<option value="admin">admin</option>
						<option value="user">user</option>
					</select>
				</td>
			</tr>
			<td>
				<td align="center">
					<button name="submit">Creer</button>
				</td>
</tr>
		</table>
		</form>
	</fieldset>
</body>
</html>