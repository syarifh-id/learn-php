
<!-- create.php: Add a New Record -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('INSERT INTO mahasiswa_internasional (name, email) VALUES (:name, :email)');
    $stmt->execute(['name' => $name, 'email' => $email]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
</head>
<body>
    <h1>Create Record</h1>
    <form method="post">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
