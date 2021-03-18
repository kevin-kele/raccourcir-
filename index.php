<?php

if (isset($_POST['url'])  && !empty($_POST['url'])) {
    $url = $_POST['url'];

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        header('location:./?error=true&message=Adresse url non valide');
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/style.css">
    <link rel="icon" href="pictures/favico.png" type="image/png">
    <title>Raccourcisseur d'url express</title>
</head>

<body>
    <section id="hello">
        <div class="container">
            <header>
                <img src="pictures/logo.png" alt="logo" id="logo">
            </header>
            <h1>
                Une url trop longue ? raccourcissez-la ?
            </h1>
            <h2>Largement meilleur et plus court que les autres .</h2>
            <form action="index.php" required method="post">
                <table>
                    <tr>
                        <td>
                            <input type="text" name="url" required placeholder="Collez un lien à raccourcir ..." id="urlInput">
                            <button type="submit">RACCOURCIR</button>
                        </td>
                    </tr>

                </table>
            </form>
            <?php
            if (isset($_GET['error']) && isset($_GET['message'])) {
                $error = $_GET['message']; ?>
                <div class="center">
                    <div id="result">
                        <b>
                            <?php echo htmlspecialchars($error); ?>
                        </b>
                    </div>
                </div>

            <?php
            }

            ?>
        </div>
    </section>

</body>

</html>