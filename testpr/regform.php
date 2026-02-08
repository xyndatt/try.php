<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id"><br>
        <label for="email">email</label><br>
        <input type="text" name="email" id="email"><br>

        <label for="pw">Password</label>
        <input type="password" name="password" id="pw"><br>
        <input type="submit" value="Register">
        <a href="updateform.php">update</a>
    </form>
    <?php include "retrieve.php"; ?>
</body>
</html>