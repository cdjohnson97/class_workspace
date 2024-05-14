<?php

require_once('../db_connect.php');
require_once('../controllers/user.php');

$user = new User();
$users = $user->getAllUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>
<h1>Liste des utilisateurs</h1>
<?php if ($users) : ?>
    <table>
        <thead>
        <tr>
            <th>IDs</th>
            <th>Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Fonction</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user_data) : ?>
            <tr>
                <td><?php echo $user_data['id_utilisateur']; ?></td>
                <td><?php echo $user_data['nom'] . ' ' . $user_data['prenom']; ?></td>
                <td><?php echo $user_data['email']; ?></td>
                <td><?php echo $user_data['telephone']; ?></td>
                <td><?php echo $user_data['fonction']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No users found.</p>
<?php endif; ?>
</body>
</html>
