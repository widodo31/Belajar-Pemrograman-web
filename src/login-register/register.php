<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="register-input.php" method="post" class="form">
        <p class="title">Register</p>
        <p class="message">Signup now and get full access to our app.</p>
        <div class="flex">
            <label>
                <input type="text" placeholder="" required="" class="input" name="firstname">
                <span>Firstname</span>
            </label>
            <label>
                <input type="text" placeholder="" class="input" name="lastname">
                <span>Lastname</span>
            </label>
        </div>

        <label>
            <input type="email" placeholder="" required="" class="input" name="email">
            <span>Email</span>
        </label>

        <label>
            <input type="password" required="" placeholder="" class="input" name="password">
            <span>Password</span>
        </label>

        <button class="submit" name="submit">Submit</button>
        <p class="signin">Already have an acount? <a href="login.php">Signin</a></p>
    </form>
</body>
</html>