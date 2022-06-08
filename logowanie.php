<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie - Księgarnia Nowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require("html/header.php"); ?>

    <main class="main">

    <div class="login-container">

            <h1 class="contact-login">Logowanie</h1>

            <form action="zalogowanie.php" method="POST" class="form">

                <input type="text" name="login" minlength="1" maxlength="50" placeholder="Podaj login: " required="">

                <input type="password" name="password" minlength="1" maxlength="50" placeholder="Podaj hasło: " required="">

                <input type="submit" class="submit" value="Zaloguj się">

            </form>

    </div>

    </main>

    <?php require("html/footer.html"); ?>
</body>
</html>