
<?php
require 'koneksi.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM mahasiswa_internasional WHERE id = :id');
$stmt->execute(['id' => $id]);

header('Location: index.php');
exit;
?>
