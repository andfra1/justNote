<?php
  include_once ('head.php');
?>

<form action="./inc/signup.php" method="post" class="form signup" id="signup">
  <h2>Signup</h2>
  <div class="form__row">
    <div class="form__row__field">
      <input required type="text" name="signupname" id="signupname" class="form__row__fieldInput" autocomplete="username" spellcheck="false" autocapitalize="off" autocorrect="off">
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
      <input required type="password" name="signuprepass" id="signuprepass" class="form__row__fieldInput"
        autocapitalize="off" autocorrect="off" aria-autocomplete="list" autocomplete="new-password">
      <label for="signuprepass" class="form__row__fieldLabel">
        Re-enter password
      </label>
    </div>
  </div>

  <div class="form__row">
    <div class="form__row__field">
      <input required type="email" class="form__row__fieldInput" id="signupemail" autocomplete="email" spellcheck="false"
        name="signupemail" autocapitalize="off" autocorrect="off">
      <label for="signupemail" class="form__row__fieldLabel">
        E-mail
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn">Signup</button>
  <button type="reset" class="btn">Clear</button>
</form>

<?php
  include_once ('footer.php');
?>