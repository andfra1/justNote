<?php
include_once ('head.php');

if(!isset($_SESSION['signinname'])) {
  header("Location: ./../index.php");
  exit();
}
?>
  <header class="header">
    <div class="wrapper">
    
    <div>
      <div>
        Logged as <?= $_SESSION['signinname'];?>
      </div>
        <ul>
          <li><a href="#">
            Notes
          </a></li>
          <li><a href="#">
           Archive
          </a></li>
          <li><a href="#">
            Settings
          </a></li>
          <li><a href="#">
            Synchro
          </a></li>
          <li>
            <a href="./inc/logout.php">
              Logout
            </a>
          </li>
        </ul>
    </div>

    <button type="button">
      Add new note
    </button>

    </div>
  </header>