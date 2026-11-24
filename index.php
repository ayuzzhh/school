<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h2>Create Account</h2>

        <form action="submit.php" method="POST">

            <input
                type="text"
                name="name"
                placeholder="Full Name"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            >

            <button type="submit">Register</button>

        </form>

    </div>

</body>
</html>
