<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/atelier.css">
    <title>Atelier</title>
</head>

<body class="gradient2">


    <?php include("./background.php"); ?>

    <div class="nav-container thirdColorBg">
        <?php include("./navBar.php"); ?>
    </div>

    <header>
        <h2 class="fontMain">Atelier</h2>
    </header>

    <main id="main">

        <section id="preview" class="thirdColorBg">
            <article class="card">
                <img src="./assets/img/pokeball_closed.png" alt="Closed pokeball" class="sprite">
                <h3 class="name fontMain">Pokemon</h3>
                <article class="hp">
                    <p>HP</p>
                    <p>---</p>
                </article>
                <article class="atk">
                    <p>ATK</p>
                    <p>---</p>
                </article>
                <article class="typePokemon">
                    <p>Type</p>
                    <p>---</p>
                </article>
            </article>
        </section>

        <form action="./createPokemon.php" method="post" class="thirdColorBg">

            <label for="name">Name</label>
            <input type="text" name="name" id="name">


            <label for="hp">HP</label>
            <input type="number" name="hp" id="hp" min="1">


            <label for="atk">Attack</label>
            <input type="number" name="atk" id="atk" min="1">


            <label for=" sprite">Sprite</label>
            <input type="url" name="sprite" id="sprite">


            <label for="typePokemon">Type</label>
            <select name="typePokemon" id="typePokemon">
                <option value="normal">Normal</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="plant">Plant</option>
            </select>

            <button type="submit">Create</button>
        </form>
        <section class="logError">
            <?php
            session_start();
            if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
                echo "<p class='errorMsg'>" . $_SESSION["errorMsg"] . "</p>";
            }
            ?>
        </section>
    </main>
    <script type="text/javascript" src="./assets/js/previewCreation.js"></script>
</body>

</html>