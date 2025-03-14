<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>ECOLIFE</h1>
        <div class="form-container">
            <form action="index.php" method="POST">
                <h2>Sign Up</h2>
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
