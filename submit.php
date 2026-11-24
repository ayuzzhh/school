
<?php

include "db.php";

// Receiving form data

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$class = $_POST['class'];
$address = $_POST['address'];

// Preparing SQL query

$sql = "INSERT INTO students (name, email, phone, class, address)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssss",
    $name,
    $email,
    $phone,
    $class,
    $address
);

// Executing query

if (mysqli_stmt_execute($stmt)) {

    echo "<h2>Registration Successful!</h2>";
    echo "<p>Welcome to YMCA School.</p>";
    echo "<a href='index.html'>Go to Home</a>";

} else {

    echo "Error: " . mysqli_error($conn);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>