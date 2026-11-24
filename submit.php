<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Validate data

    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address!");
    }

    // Hash password

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    try {

        $sql = "INSERT INTO users (name, email, password)
                VALUES (:name, :email, :password)";

        $stmt = $conn->prepare($sql);

        $stmt->execute([
            ":name" => $name,
            ":email" => $email,
            ":password" => $hashedPassword
        ]);

        echo "Registration Successful!";

    } catch(PDOException $e) {

        if ($e->getCode() == 23000) {
            echo "Email already registered!";
        } else {
            echo "Something went wrong!";
        }

    }

}
?>