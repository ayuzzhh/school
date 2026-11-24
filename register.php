
<!DOCTYPE html>
<html>
<head>
    <title>YMCA Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
    <header>
        <h1>YMCA SCHOOL</h1>
        <p>Student Registration Portal</p>
    </header>

    <section>
        <h2>Student Registration Form</h2>

        <form action="submit.php" method="POST">

            <label>Full Name:</label><br>
            <input type="text" name="name" required>
            <br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required>
            <br><br>

            <label>Phone Number:</label><br>
            <input type="text" name="phone" required>
            <br><br>

            <label>Select Class:</label><br>
            <select name="class" required>
                <option value="Class 1">Class 1</option>
                <option value="Class 2">Class 2</option>
                <option value="Class 3">Class 3</option>
                <option value="Class 4">Class 4</option>
                <option value="Class 5">Class 5</option>
                <option value="Class 6">Class 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
                <option value="Class 9">Class 9</option>
                <option value="Class 10">Class 10</option>
                <option value="Class 11">Class 11</option>
                <option value="Class 12">Class 12</option>
            </select>
            <br><br>

            <label>Address:</label><br>
            <textarea name="address" required></textarea>
            <br><br>

            <button type="submit">Register Now</button>

        </form>
    </section>
</div>

</body>
</html>