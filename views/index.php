<?php

require_once('../db_connect.php');
require_once('../controllers/user.php'); // Assuming a User model class

$user_id = 1; // Assuming user ID is passed in the URL

$user = new User();
$user_data = $user->getUserById($user_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>
<body>
<h1>User Details</h1>
<?php if ($user_data) : ?>
    <p>Name: <?php echo $user_data['nom'] . ' ' . $user_data['prenom']; ?></p>
    <p>Email: <?php echo $user_data['email']; ?></p>
<?php else : ?>
    <p>User not found.</p>
<?php endif; ?>
</body>
</html>
