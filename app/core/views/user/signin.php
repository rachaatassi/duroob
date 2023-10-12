<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
<link rel="stylesheet" href="../../../public/css/style.css">
</head>
<main>
    <h1>Sign In</h1>
    <form action="/index.php?controller=user&action=signIn" method="POST" class="form">
        <div class="culmn">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <br>
        <div class="culmn">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <br>
       <button type="submit">Sign In</button>
    </form>
</main>
</html>
