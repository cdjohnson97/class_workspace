<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Création de compte</title>
</head>
<body>
<div class="container">
    <div class="box form-box">
        <header>Rejoignez notre bilbliothèque </header>
        <form action="../controllers/register.php" method="post">
            <div class="field input">
                <label for="username">Nom et prenom</label>
                <input type="text" name="nom" id="username" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="email">Adresse mail</label>
                <input type="email" name="mail" id="username" autocomplete="on" required>
            </div>
            <div class="field input">
                <label for="number">telephone</label>
                <input type="tel" name="telephone" id="email" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" autocomplete="on" required>
            </div>
            <div class="field input">
                <input type="hidden" name="status" value="visiteur" required>
            </div>
            <div class="field input">
                <label for="password">Mots de pass</label>
                <input type="password" name="mots_de_pass" id="password" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="password">Confirmer le mots de pass</label>
                <input type="password" name="confirm_password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Enregistrez-vous" required>
            </div>
            <div class="links">
                Vous avez déja un compte ? <a href="index.php">Connectez-vous</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>