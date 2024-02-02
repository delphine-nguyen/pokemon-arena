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

<body>

    <?php include("./background.php"); ?>

    <header>
        <h2>Atelier</h2>
    </header>

    <form action="./createPokemon.php" method="post">
        <article>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="Bulbizarre">
        </article>
        <article>
            <label for="hp">HP</label>
            <input type="number" name="hp" id="hp" value="10" min="1">
        </article>
        <article>
            <label for="atk">Attack</label>
            <input type="number" name="atk" id="atk" value="2" min="1">
        </article>
        <article>
            <label for=" sprite">Sprite</label>
            <input type="url" name="sprite" id="sprite" value="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png">
        </article>
        <article>
            <label for="typePokemon">Type</label>
            <select name="typePokemon" id="typePokemon">
                <option value="normal">Normal</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="plant">Plant</option>
            </select>
        </article>
        <button type="submit">Submit</button>
    </form>
    <section class="logError">
        <?php
        session_start();
        if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
            echo "<p class='errorMsg'>" . $_SESSION["errorMsg"] . "</p>";
        }
        ?>
    </section>
</body>

</html>