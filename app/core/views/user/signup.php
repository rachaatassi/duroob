<link rel="stylesheet" href="../../../public/css/style.css">
<body>
    <main>
        <h1>Sign Up</h1>
        <form action="/index.php?controller=user&action=signUp" method="POST" class="form">
            <div class="culmn">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" placeholder="Ex: MASHOLOU" required>
            </div>
            <br>
            <div class="culmn">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Ex: Sam" required>
            </div>
            <br>
            <div class="culmn">
                <label for="birthDate">Date of Birth:</label>
                <input type="date" id="birthDate" name="birthDate" placeholder="Ex: 15/05/1980" required>
            </div>
            <br>
            <div class="culmn">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Ex: manner@gmail.com" required>
            </div>
            <br>
            <div class="culmn">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
            </div>
            <br>
            <button type="submit">Sign Up</button>
        </form>
    </main>
</body>

