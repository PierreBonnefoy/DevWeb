<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pokemon</title>
        <link rel="stylesheet" href="explication.css">
    </head>
    <body>
        <h1>
            Pokalculator
        </h1>
        <?php
        session_start();
        if($_SESSION['role']=="admin" || $_SESSION['role']=="client"){
        echo '<form action="" id="deco" method="POST">';
        echo '<input id="deco" type="submit" value="Deconnection" name="deco"></form>';
        }
            ?>
        <table>
            <tr class="liste">
                <td class="liste">
                    <a href="menu.php">Acceuil</a>
                </td>
                <td class="liste">
                    <a href="pokedex.php">Pokedex</a>
                </td>
                <td class="liste">
                    <a href="optimisateur.php">Optimisateur d'EV</a>
                </td>
                <td class="liste">
                    <a href="explication.php">Explication</a>
                </td>
                <td class="liste">
                    <a href="compte.php">Mon compte pokemon</a>
                </td>
            </tr>
        </table>
        <div id="exp">
            <h3>Les IV c'est quoi ?</h3>
            <p>
                Les IV sont des statistiques cachées propre à chaque pokémon définis dés son apparition. 
                Elles définissent la croissance des statistiques d'un pokémon, plus l'IV d'une statistique est haute plus le pokémon gagnera de points dans cette statistique lors d'un lv-up.
                Elles sont définits de sort à se quel ne changent pas lors d'une évolution (se sont des statistiques constantes).
                Elles sont définits de 0 à 31 pour chaque statistique.</br>
            </p>
            <h3>Les EV c'est quoi ?</h3>
            <p>
                Les EV sont statistiques cachées qui perment de booster une statistique en faisant combatre ses pokemons contre certient pokemon. </br>
                exemple : </br>
                Je veux augmenter la VIT de mon pokemon alors je vais le faire combatre des pokemons qui donne des EV VIT.</br>
                </br>À noté : 
                <ul>
                    <li>un pokémon peut donner plusieur types d'EVs (ex : 1 VIT et 1 HP)</li>
                    <li>un pokémon évoluer donne plus d'EVs (ex : 2 VIT au lieu de 1 VIT pour sa préévolution)</li>
                    <li>les EVs ne peuvent être gagnés que dans "les combats qui rapport de l'experience", donc pas dans le PvP</li>
                    <li>si plusieurs pokémons participent au combat les EVs ne sont pas divisés (comme l'exp), ils gagnerons donc tous les EVs apportés par le pokémon vaincu</li>
                    <li>le <i>Muilti Exp</i> fait aussi gagner au pokemon des EV comme s'il avait participait au combat</li>
                    <li>pour chacune des statistiques, il est possible d'obtenir un maximum de 252 EV, tout en ayant un maximum de 510 EV répartis sur le total des statistiques</li>
                </ul>
            </p></div>
            <?php
            session_start();
            if(isset($_POST['deco'])){
                session_destroy();
                header("location: http://localhost/DevWeb/menu.php");
            }
            ?>
    </body>
</html>