<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>longrich</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">

        <div class="container">

            <a class="navbar-brand" href="#"> <img src="logo.jpg" width="30%" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success pe-3" type="submit">Search</button>
                    </form>
                    <div class="pe-5">
                        <li class="nav-item ">
                            <a class="nav-link active " aria-current="page" href="../index.php">Acceuil</a>
                        </li>
                    </div>
                    <div class="pe-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Produit</a>
                        </li>
                    </div>
                    <div class="pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="dasboard.php">contact</a>
                        </li>
                    </div>

                </ul>
            </div>

        </div>


        </div>


    </nav>
    <br> <br><br> <br>
    <div class="container text-center">
        <a href="#connexion" class="text-center"> connexion</a>
        <hr>
        <br> <br><br>
        <div class="row">

            <form action="process-login.php" method="POST">
                <label for="login">Nom d'utilisateur</label> <br>
                <input type="email" class="col-sm-7" placeholder="votre email" id="login" name="login" required>
                <br> <br>
                <label for="password">Mot de passe</label> <br>
                <input type="password" class="col-sm-7" id="password" placeholder="password" name="password" required>
                <br> <br>
                <input type="submit" value="Se connecter">
            </form>

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom d'utilisateur"];
            $password = $_POST["password"];


        } ?>

    </div><br> <br><br> <br>
    <div style="color: blue; text-align: center;">
        <h3>contact</h3>
    </div>
    <hr>
    <footer>
        <div class="ok">
            <h3>+226 70 48 50 44</h3>
        </div>
        <div class="container">
            <p>&copy; 2023 longrich: better life better future.</p>

            <a href=""><img src="twitter.webp" class="rounded-top" width="50px" height="50px" alt="..."></a>
            <a href=""><img src="Facebook.webp" class="rounded-end" width="50px" height="50px" alt="..."></a>
            <a href=""></a> <img src="wha.webp" class="rounded-bottom" width="50px" height="50px" alt="..."></a>
            <a href=""> <img src="google.webp" class="rounded-start" width="50px" height="50px" alt="..."></a>
            <a href=""> <img src="loca.webp" class="rounded-circle" width="50px" height="50px" alt="..."></a>

        </div>
    </footer>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>