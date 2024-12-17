<?php 
session_start();
require_once 'db.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $pdo = getConnection();
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    $action = $_POST['action'] ?? null;

    if ($username && $password) {
        
        $sql = "";

        switch ($action) {
            case'signin':
                $sql = "SELECT * FROM users WHERE username = :username";
                break;
            case'signup':
                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                break;
        }

        query([
            'action' => $action,
            'pdo' => $pdo,
            'sql' => $sql,
            'username' => $username,
            'password' => $password
        ]);
    }
}

function query($data) {

    try {
        $action = $data['action'];
        $pdo = $data['pdo'];
        $sql = $data['sql'];
        $username = $data['username'];
        $password = $data['password'];
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        if ($action == 'signup') {
            $stmt->bindParam(':password', password_hash($data['password'], PASSWORD_DEFAULT));
        }
        $executeResult = $stmt->execute();
        $msg = null;
    
        switch ($action) {
            case 'signin':
                if ($executeResult) {
                    $res = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    if ($res['username']) {                
                        if (password_verify($password, $res['password'])) {
                            $msg = 'success';
                        } else {
                            $msg = 'incorrect_password';
                        }
                    } else {
                        $msg = 'user_not_found';
                    }
                } else {
                    $msg = $stmt->errorInfo();
                }
                
                break;
            case 'signup':
                if ($executeResult) {
                    $msg = 'success';
                } else {
                    $msg = $stmt->errorInfo();;
                }
                break;  
            default:
                header('Location: ../index.php?error=invalid_action');
                break;          
        }
    
        if ($msg != 'success') {
            $_SESSION['username'] = $username;
            header('Location: ../index.php?error='.$msg);
        } else {
            $_SESSION['username'] = $username;
            echo $_SESSION['username'];
            echo 'success';
            header('Location: ../dashboard.php?username='.$username);
        }
    } catch(PDOException $e) {
        header('Location: ../index.php?error='.$e->getCode().'&username='.$username);
    }

}

?>