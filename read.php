
<?php
include 'db_connection.php';
global $db;

$query = $db->prepare("SELECT * FROM cars");
$query->execute();
$car = $query->fetchAll(PDO:: FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title></title>
</head>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td {
        border: 1px solid black;
        width: 300px;
        text-align: center;
    }
</style>
<body>
<table>
    <h1>cars CRUD</h1>
    <tr>
        <th>merk</th>
        <th>type</th>
        <th>Details</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($car as $data): ?>
        <tr>
            <td><?= $data ['merk'] ?></td>
            <td><?= $data ['type'] ?></td>
            <td><a href="details.php?id=<?= $data ['id'] ?>"><i class="bi bi-search"></i>DEtail</a></td>
            <td><a href="update.php?id=<?= $data ['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="delete.php?id=<?= $data ['id'] ?>"><i class="bi bi-trash"></i></a></td>
        </tr>
    <?php endforeach; ?>
    <td><a href="insert.php"><i class="bi bi-plus-square"></i></a></td>
</table>
</body>
</html>
