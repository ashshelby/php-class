<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <br>

        <label for="phone">Phone number</label>
        <input type="text" id="phone" name="phone">

        <br>


        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>