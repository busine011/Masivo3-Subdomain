<?php
try {
$dbPath = "../db.db";
$pdolite = new PDO('sqlite:' . $dbPath);    
$pdolite->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {die("Error: " . $e->getMessage());
}
?>