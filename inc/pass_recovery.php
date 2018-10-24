<?php
  include_once ('head.php');
?>

<form action="./" method="POST" class="form signin" id="signin">
<h2>Password Recovery</h2>
<div class="form__row">
  <div class="form__row__field">
    <input required type="text" name="signinname" id="signinname" class="form__row__fieldInput" autocomplete="username" spellcheck="false"
      autocapitalize="off" autocorrect="off" value="admin">
    <label required for="signinname" class="form__row__fieldLabel">
      Login / e-mail
    </label>
  </div>
</div>
<button type="submit" name="submit" class="btn">Signin</button>
</form>

<?php
  include_once ('footer.php');
?>