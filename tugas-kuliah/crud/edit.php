
<!-- edit.php: Edit a Record -->
<?php
require 'config.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM mahasiswa_internasional WHERE id = :id');
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('UPDATE mahasiswa_internasional SET name = :name, email = :email WHERE id = :id');
    $stmt->execute(['name' => $name, 'email' => $email, 'id' => $id]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h1>Edit Record</h1>
    <form method="post">
        <label>Name: <input type="text" name="name" value="<?= $user['name'] ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= $user['email'] ?>" required></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
