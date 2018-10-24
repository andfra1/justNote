<?php
include_once ('head.php');
?>

<form action="./" method="POST" class="form signin" id="signin">
  <h2>Password Change</h2>
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
  <button type="submit" name="submit" class="btn">Signin</button>
</form>

<?php
  include_once ('footer.php');
?>