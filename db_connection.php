<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=cars4u",
        "root", "");
} catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>