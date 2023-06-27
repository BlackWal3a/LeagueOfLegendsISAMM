<?php
include_once 'header.php';
?>

<style>
  @font-face {
            font-family: 'sofia_LOL';
            src: url('CSS/Sofia_Pro_SemiBol.ttf') format('truetype');
        }
  .signup-form {
    position: absolute;
    top: 10%;
    margin: auto;
    max-width: 500px;
    font-size: 1.2rem;
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 2rem;
    background-color: rgba(26, 26, 26, 0.9);
    border-radius: 5px;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
    color: #ffff;
    text-align: center;
  }

  .signup-form h2 {
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
.form-group1 {
  display: flex;
  align-items: center;
}

.form-group1 input[type="checkbox"] {
  margin-right: 10px;
  vertical-align: middle;
}

.form-group1 label {
  font-family: 'sofia_LOL', sans-serif;
  font-size: 12px;
  color: rgba(255, 255, 255, 1);
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

.centered{
  margin-top: 5px;
}

  label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  textarea {
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
  input[type="email"]:focus,
  input[type="password"]:focus,
  textarea:focus {
    outline: none;
    background-color: rgba(255, 255, 255, 0.3);
  }

  input[type="checkbox"] {
    margin-right: 0.5rem;
    vertical-align: middle;
  }

  button[type="submit"] {
    display: block;
    margin-top: 2rem;
 
  margin: 0 auto;
  display: block;
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
  .start{
    width: 100%;
    min-height: 100vh; 
    overflow: hidden; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.p1 {
  font-family: 'sofia_LOL', sans-serif;
  font-size: 12px;
  color: rgba(255, 255, 255, 1);
}
body {
     background: url(LogSignBG.jpg) no-repeat center center fixed;
     background-size: cover;
     }

</style>

<main class="start">
<section class="signup-form">
  <h2>Sign up</h2>
  <form action="includes/signup.inc.php" method="post" class="form">
    <div class="form-group">
      <label for="name"></label>
      <input type="text" name="name" id="name" placeholder="Full Name" required>
    </div>
    <div class="form-group">
      <label for="email"></label>
      <input type="email" name="email" id="email" placeholder="Enter Your E-Mail" required>
    </div>
    <div class="form-group">
      <label for="username"></label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
    </div>
    <div class="form-group">
      <label for="password"></label>
      <input type="password" name="password" id="password"  placeholder="Enter Your Password" minlength="8" required>
    </div>
    <div class="form-group">
      <label for="password-confirm"></label>
      <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirm Password" minlength="8" required>
    </div>
    <div class="form-group1">
      <input type="checkbox" name="terms" id="terms" required>
      <label for="terms" class="form-group1">I AGREE TO THE TERMS AND CONDITIONS</label>
    </div>
    <?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p style='color:red;   '>Fill all fields</p>";
  }
  else if($_GET["error"] == "invaliduid"){
    echo "<p style='color:red; 
    '>Invalid Uid</p>";
  }
  else if($_GET["error"] == "invalidemail"){
      echo "<p style='color:red; 
      '>Invalid Email</p>";
  }
  else if($_GET["error"] == "passwordsdontmatch"){
      echo "<p style='color:red;'>Passwords Don't Match !</p>";
  }
  else if($_GET["error"] == "stmtfailed"){
      echo "<p style='color:red;'>there's a problem !</p>";
  }
  else if($_GET["error"] == "usernametaken"){
      echo "<p style='color:red;'>Username Already Taken !</p>";
  }
  else if($_GET["error"] == "none"){
      echo "<p style='color:green;'>Signed Up !</p>";
  }
}

?>
    <button type="submit" name="submit" class="centered">
    <i class="fa-solid fa-user-plus"></i>
    </button>
  </form>
</section>
</main>




