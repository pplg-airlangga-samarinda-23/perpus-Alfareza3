<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Sistem Perpustakaan</h1>
    <form action="dashboard.php" method="post">
        <div class="form-item">
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-item">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>