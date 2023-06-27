<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/file2.css">
    <title>LEAGUE OF LEGENDS</title>
    <link rel="icon" type="image\png" href="images.png" >
</head>
<body>

    <header>
        <h1>
            <a href="https://www.leagueoflegends.com/en-us/?_ga=2.48343919.872874526.1680814014-2136959652.1611682225&amp;_gl=1*fcbro6*_ga*MjEzNjk1OTY1Mi4xNjExNjgyMjI1*_ga_FXBJE5DEDD*MTY4MDgyMjY1OC44LjAuMTY4MDgyMjY1OC42MC4wLjA." target="_blank">
            <img src="lol-logo.png" alt="Image Title"  >
          </h1>
          <!-- Ids li yhezou lil blasa elli hachitna biha -->
        <nav class="navigation">
            <a href="index.php.# ">League of legends</a>
            <a href="index.php.#About_us " id="discover">Discover</a>
            <a href="index.php.#projects">Guides</a>
            <a href="index.php.#Champs ">Champions</a>
            <a href="index.php.#Contact">Contact</a>
            <?php
              if(isset($_SESSION["useruid"])){
                echo "<a href='Profile.php'>Profile Page</a>";
                echo "<a href='includes/logout_inc.php'>Log Out</a>";
              }
              else {
                echo "<a href='sign-up.php' id='inscrire'>Sign up</a>";
                echo "<a href='login.php' id='connecter'>Log In</a>";
              }
            ?>
            <a onclick="changeLanguage()" style="cursor:pointer;"><i class="fa-solid fa-earth-europe"></i></a>
        </nav>
    </header>
