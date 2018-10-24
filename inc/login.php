<?php
  include_once ('head.php');
?>

<form action="./" method="POST" class="form signin" id="signin">
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

<?php
  include_once ('footer.php');
?>