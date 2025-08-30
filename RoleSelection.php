<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <label>Role:</label>
        <select name="role" required>
            <option value="Member">Member</option>
            <option value="Media Officer">Media Officer</option>
            <option value="Pastor">Pastor</option>
        </select><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
