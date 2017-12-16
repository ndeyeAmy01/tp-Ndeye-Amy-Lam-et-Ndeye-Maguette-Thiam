<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method = "POST"action="cutilisateur.php">
        login:<input type="text" name="log" ><br/>
        password:<input type="password" name="pass"><br/>
        <label>profil</label>
        <select name="choix">
            <option value=""></option><br>
            <option value="admin">admin</option><br>
            <option value="user">user</option>
        </select><br>

        <input type="submit"value="valider" name="valider"><br/>

        <input type="submit"value="inscription" name="inscription"><br/>

</form>
    </body>
</html>
<?php

if(isset($_POST['valider'])){
    extract ($_POST);
    if(!empty($log) AND !empty($pass))
   {
        if($log ==  "admin" AND $pass == "admin" AND $choix == "admin" )
        {
            header('location:lienadmin.php' );
            $_SESSION['$log']=$_log;
           
        }
       

        elseif($log == "user" AND $pass == "user" AND $choix == "user")
        {
            header('location:lienuser.php');
            $_SESSION['$pass']=$_pass;
        
    }
}
    else
    {
        
        echo "veuillez remplir tous les champs"; 
    }
}
?>