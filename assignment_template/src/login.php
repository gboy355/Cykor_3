<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $_POST['username']);
    $stmt->execute();
    $stmt->bind_result($id, $hashed);

    if ($stmt->fetch() && password_verify($_POST['password'], $hashed)) {
        $_SESSION['user_id'] = $id;
    } else {
        echo "아이디 또는 비밀번호가 일치하지 않습니다.";
    }
}
?>
