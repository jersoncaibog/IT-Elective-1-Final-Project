<?php
function getConnection() {
    // Load environment variables (optional)
    $env = parse_ini_file('../../.env');
    
    $host = $env['DB_HOST'];
    $dbName = $env['DB_NAME'];
    $user = $env['DB_USER'];
    $pass = $env['DB_PASS'];

    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbName", 
            $user, 
            $pass,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
