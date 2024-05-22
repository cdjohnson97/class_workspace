<link rel="stylesheet" href="../views/register.css">
<?php
require_once("../db_connect.php");
// Check if form is submitted
if (isset($_POST["submit"])) {
    $nom = trim($_POST['nom']);
    $mail = trim($_POST['mail']);
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $mots_de_pass= $_POST['mots_de_pass'];
    $confirm_mots_de_pass = $_POST['confirm_password'];
    $fonction = 'visiteur';


    // Validation (check for empty fields, password match, etc.)
    $errors = [];
    
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Votre adresse mail n'est pas valide, verifiez-le.";
    }
    if (strlen($mots_de_pass) < 8) {
        $errors[] = "Le mots de pass doit contenir au moins 8 caractères.";
    }
    if ($mots_de_pass !== $confirm_mots_de_pass) {
        $errors[] = "Le mots de pass ne correspond pas";
    }
    // ... (add more validations as needed)

    // Connect to your database (replace with your connection logic)
    $database = new Database();
    $conn = $database->pdo;

    // Check if username or email already exists (optional)
    $sql = "SELECT * FROM utilisateur WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$mail]);


    if ($stmt->rowCount() === 1) {
        $errors[] = "L'adress mail est malheureusement déja utilisée pensez à changer";
    }



    // If no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password before storing it
        $hashed_password = password_hash($mots_de_pass, PASSWORD_DEFAULT);

        // Prepare and execute SQL statement to insert user data
        $sql = "INSERT INTO utilisateur (nom, email, telephone, mots_de_pass, fonction, age) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $mail, $telephone, $hashed_password, $fonction, $age]);

        if ($stmt->rowCount() === 1) {
            $sql = "SELECT * FROM utilisateur WHERE email=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$mail]);
            $user = $stmt;

            foreach ($user as $actuelUser) {


                echo "<div class='message_sucess'>
                      <p>Inscription réussie bienvenue cher lecteur</p>
                       {$actuelUser['nom']}
                       <img src='../assets/icon_bienvenu.gif'>
                <a href='index.php'><button class='btn'>Connectez-vous maintenant</button>
                       
                  </div>";
            }

            // Optionally, redirect to a login page
        } else {
            echo "<p>Error registering user: " . $conn->error . "</p>";
        }


    } else {
        // Display any validation errors
        echo "<ul>";
        foreach ($errors as $error) {
            echo "
               <div class='message_echec'>
                      <p>{$error}</p>
                       
                       <img src='../assets/icons8-sad.gif'>
                        <a href='javascript:self.history.back()'><button class='btn'>Revenir à la page d'inscription</button>

                       
                  </div>";

        }


    }



}
  // Display an error message if accessed directly (


