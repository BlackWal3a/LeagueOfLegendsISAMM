<?php
include_once 'header.php';
?>

<style>
      @font-face {
            font-family: 'sofia_LOL';
            src: url('CSS/Sofia_Pro_SemiBol.ttf') format('truetype');
        }

  .login-form { 
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 500px;
    margin: 0 auto;
    margin-top: 40apx;
    font-size: 1.2rem;
    padding: 2rem;
    background-color: rgba(26, 26, 26, 0.9);
    border-radius: 5px;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
    color: #fff;
    text-align: center;
  }

  .login-form h2 {
      font-family: 'Friz_LOL', sans-serif;
    font-size: 2rem;
    margin-bottom: 2rem;
    color: #b48442;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  }

  .form-group {
  position: relative;
  margin-bottom: 1.5rem;
}

.form-group label {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 16px;
  line-height: 24px;
  color: #6c757d;
  transform-origin: top left;
  transition: all 0.2s ease-out;
}

.form-group input {
  padding: 8px 16px;
  font-size: 16px;
  line-height: 24px;
  border: 1px solid #ced4da;
  padding : 10px; 
  line-height: 1.5;
  box-sizing: border-box;
  text-align: center;
  border-radius: 4px;
  transition: all 0.2s ease-out;
}

.form-group input:focus,
.form-group input:not(:placeholder-shown) {
  padding-top: 24px;
  border-color: #1b1f23;
}

.form-group input:focus + label,
.form-group input:not(:placeholder-shown) + label {
  top: -16px;
  font-size: 12px;
  line-height: 16px;
  color: #1b1f23;
  background-color: #fff;
  padding: 0 4px;
  transform: scale(0.75);
}


  label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
  }

  input[type="text"],
  input[type="password"] {
    display: block;
    width: 100%;
    padding: 0.75rem;
    font-size: 1.2rem;
    border-radius: 5px;
    border: 1px solid #fff;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    transition: all 0.3s ease-in-out;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    outline: none;
    background-color: rgba(255, 255, 255, 0.3);
  }

  button[type="submit"] {
  margin: 0 auto;
  display: block
    display: block;
    margin-top: 2rem;
    padding: 0.75rem 2rem;
    font-size: 1.2rem;
    border-radius: 5px;
    background-color: #b48442;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }

  button[type="submit"]:hover {
    background-color: #ffd100;
    color: #1a1a1a;
  }

  .error-msg {
    color: #ff0000;
    margin-top: 1rem;
  }
  .main{
    width: 100%;
    min-height: 100vh;
    align-items: center;
    background: url(LogSignBG.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: scroll;
}

a {
  color: white;
  font-family: 'sofia_LOL', sans-serif;
  text-decoration: none;
  font-size: 12px;
  display: ;

}

a:hover {
color: rgba(255, 255, 255, 0.7);

}

</style>
<main class="main">
<section class="login-form">
  <h2>Login</h2>
  <form action="includes/login.inc.php" method="post">
    <div class="form-group">
      <label for="username"></label>
      <input type="text" name="username"  id="username" placeholder="Enter your username" required>
    </div>
    <div class="form-group">
      <label for="password"></label>
      <input type="password" name="password" id="password" placeholder="Enter your password" minlength="8" required>
    </div>
    <?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p style='color:red;'>Fill all fields !</p>";
    }
    else if($_GET["error"] == "wronglogins"){
      echo "<p style='color:red;'>user doesn't exist !</p>";
  }
    else if($_GET["error"] == "wronglogin"){
        echo "<p style='color:red;'>wrong password !</p>";
    }
}
?>
    <div>
    <a href="http://localhost/mywebsite/sign-up.php">CREATE AN ACCOUNT</a>
    </div>
    <button type="submit" name="submit"><i class="fa-solid fa-right-to-bracket"></i></button>
    
  </form>
</section>
</main>