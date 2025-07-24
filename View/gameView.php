<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamming Zone</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/logo.png">
    <script src="../script/test.js " defer></script> 
</head>
<body>
    <!-- Zone du menu, en haut de la page-->
    <nav>
        
       <img id="logo" src="../src/logo2.png" alt="Logo E2C">
    <div id="nav-bar">
    <a class="nav-button" href="../index.htm"> Accueil</a>
    <a class="nav-button" href="../pages/library.htm"> Bibliothèque</a>
    <a class="nav-button" href="../pages/game.htm">Détente</a>
</nav>

<?php
    require_once("../View/_partials/_header.php");
    ?>

<?php

?>
    <!-- En tête stylé

   Zone principale-->

    <div id="main-game">

        <div id="user-interface">
            <div>
            <label for="user-number">Wsh les gars bien entre 1 et 100</label> 

            <input id="user-number" type="number" min="1" max="100" placeholder="Proposer ici"> 
                </div> 
            <input id="send-button" type="submit" value="Proposer">

        </div>
            <div id="game-display">
            
        
   
    <!-- Zone peincipale - présentation de l'e2c et de Silence, On lit--> 
   
</body>
</html>