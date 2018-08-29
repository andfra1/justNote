<?php
  include_once ('inc/header-html.php');
?>
  <div class="wrap">
    <form action="./index2.php?view" method="post" class="form signin" id="signin">
      <h2>Signin</h2>
      <div class="form__row">
        <div class="form__row__field">
          <input required type="text" name="signinname" id="signinname" class="form__row__fieldInput" autocomplete="username" spellcheck="false"
            autocapitalize="off" autocorrect="off">
          <label required for="signinname" class="form__row__fieldLabel">
            Login
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
          <input type="password" name="signinname" id="signinpass" class="form__row__fieldInput" autocomplete="current-password" spellcheck="false"
            autocapitalize="off" autocorrect="off">
          <label for="signinpass" class="form__row__fieldLabel">
            Password
          </label>
        </div>
      </div>
      <button type="submit" class="btn">Signin</button>
    </form>


    <form action="./index2.php?view" method="post" class="form signup" id="signup">
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
          <input required type="password" name="signuprepass" id="signuprepass" class="form__row__fieldInput" autocapitalize="off"
            autocorrect="off" aria-autocomplete="list" autocomplete="new-password">
          <label for="signuprepass" class="form__row__fieldLabel">
            Password
          </label>
        </div>
      </div>

      <div class="form__row">
        <div class="form__row__field">
          <input required type="password" name="signuppass" id="signuppass" class="form__row__fieldInput" autocapitalize="off" autocorrect="off" autocomplete="new-password">
          <label for="signuppass" class="form__row__fieldLabel">
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
      <button type="submit" class="btn">Signup</button>
      <button type="reset" class="btn">Clear</button>
    </form>
  </div>
  <?php
    include_once ('inc/footer.php');
  ?>