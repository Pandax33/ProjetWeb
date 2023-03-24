
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <br><br>
<form class="container" method="POST" action="index.php?p=signup/connect">
   
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email">
    </div>
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  placeholder="Mot de passe" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
</form>
</body>
</html>