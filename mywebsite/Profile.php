
<!DOCTYPE html>
<html>
<head>
    <title>Welcome abord Nejib</title>
    <link rel="icon" type="image\png" href="images.png" >
    <style>
        @font-face {
            font-family: 'Friz_LOL';
            src: url('CSS/Friz\ Quadrata\ TT\ Regular.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Alexon_LOL';
            src: url('CSS/alexon.ttf') format('truetype');
        }
        @font-face {
            font-family: 'sofia_LOL';
            src: url('CSS/Sofia_Pro_SemiBol.ttf') format('truetype');
        }
        body {
            background: url(RedirectBG.jpg) no-repeat center center fixed;
            background-size: cover;
        }
        header {
            padding: 10px 50px;
            margin-top: 100px;
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        main {
            text-align: center;
            margin-top: 50px;
            position: relative;
        }
        .logo {
            width: 150px;
            height: 61px;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        h1 {
            font-size: 100px;
            font-family: 'Friz_LOL', sans-serif;
            color: rgba(255, 255, 255, 1);
            margin-bottom: 1;
        }
        a {
            font-size: 20px;
            font-family: 'Friz_LOL', sans-serif;
            color: rgba(211, 177, 108, 1);
            margin-top: 0;
            text-decoration: none;
        }
        a:hover {
            color: rgba(255, 255, 255, 0.8);
        }
        

        .button {
  background-color: rgba(21, 21, 21, 1);
  border: 2px solid #c19f5e;
  border-radius: 2px;
  color: #fff;
  font-size: 18px;
  padding: 20px 70px;
  text-transform: uppercase;
  transition: 0.2s ease;
}

  .button:hover {
  background-color:rgba(21, 21, 21, 0.7);
}
    </style>
</head>
<body>
    <header>
        <img class="logo" src="lol-logo.png" alt="Logo">
    </header>
    <main>
  <h1>Welcome aboard Legend</h1>
        <div class="h2">
          <a href="includes/logout_inc.php">LOG OUT </a>
        </div>
        <div >
        <img src="Button_Style.png" alt="Logo">
        </div>
        <a href="index.php" class="button">Home Page</a>
    </main>
</body>
</html>
