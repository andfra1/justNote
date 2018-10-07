<?php  
	if(isset($_SESSION['online']) && $_SESSION['online'] == true){
		header('Location: ./index2.php');
		exit();
  }
  
  $default = "admin";
?>

<?php
  include_once ('inc/head.php');
?>
  <div class="wrap">
    <form action="login.php" method="POST" class="form signin" id="signin">
    <p class="login__error">
						<?php
						//form validation
						// if($_SERVER['QUERY_STRING'] == 'login=empty') {
						// 	echo "Fill username and password.";
						// }
						// if($_SERVER['QUERY_STRING'] == 'login=error') {
						// 	echo "Username or password is not valid!";
						// }
						?>
					</p>
					<p class="login__success">
						<?php
						// if($_SERVER['QUERY_STRING'] == 'signup=success') {
						// 	echo "You're registered!<br>Now fill username and password.";
						// }
						?>
					</p>
      <h2>Signin</h2>
      <div class="form__row">
        <div class="form__row__field">
          <input required type="text" name="signinname" id="signinname" class="form__row__fieldInput" autocomplete="username" spellcheck="false"
            autocapitalize="off" autocorrect="off" value="<?= $default?>">
          <label required for="signinname" class="form__row__fieldLabel">
            Login / e-mail
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
          <input type="password" name="signinpass" id="signinpass" class="form__row__fieldInput" autocomplete="current-password" spellcheck="false"
            autocapitalize="off" autocorrect="off" value="<?= $default?>">
          <label for="signinpass" class="form__row__fieldLabel">
            Password
          </label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn">Signin</button>
    </form>


    <form action="./signup.php" method="post" class="form signup" id="signup">
      <h2>Signup</h2>
      <div class="form__row">
        <div class="form__row__field">
          <input required type="text" name="signupname" id="signupname" class="form__row__fieldInput" autocomplete="username" spellcheck="false"
            autocapitalize="off" autocorrect="off">
          <label for="signupname" class="form__row__fieldLabel">
            Login
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
        <input required type="password" name="signuppass" id="signuppass" class="form__row__fieldInput" autocapitalize="off" autocorrect="off" autocomplete="new-password">
          <label for="signuppass" class="form__row__fieldLabel">
            Password
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
        <input required type="password" name="signuprepass" id="signuprepass" class="form__row__fieldInput" autocapitalize="off"
            autocorrect="off" aria-autocomplete="list" autocomplete="new-password">
          <label for="signuprepass" class="form__row__fieldLabel">
            Re-enter password
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
          <input required type="email" class="form__row__fieldInput" id="signupemail" autocomplete="email" spellcheck="false" name="signupemail"
            autocapitalize="off" autocorrect="off">
          <label for="signupemail" class="form__row__fieldLabel">
            E-mail
          </label>
        </div>
      </div>
      <button type="submit" name="submit" class="btn">Signup</button>
      <button type="reset" class="btn">Clear</button>
    </form>
  </div>
  <?php
    include_once ('inc/footer.php');
  ?>