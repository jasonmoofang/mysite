<?php
// this file implements the nitty-gritty session wizardry
// used for access control

define('DEFAULT_PASSWORD_HASH', '615d3a5362526d85a8f708ecbf41166f');
define('WRONG_PASSWORD_MSG', "Incorrect password! Please try again!");

function logout_url($notename) {
  return $baseurl.'index.php?mode=logout&note='.$notename;
}

function session_logged_in() {
  return $_SESSION['logged_in'] == 1;
}

function session_logout() {
  session_destroy();
}

function session_import() {
  if(isset($_SESSION['to_import']) && should_import())
    $_REQUEST += $_SESSION['to_import']; // don't we love PHP?
  unset($_SESSION['to_import']);
}

function should_import() {
  if(isset($_REQUEST['cancel_import']))
    return false;
  return true;
}

function session_authorize($msg = "") {
  temp("inside session authorise\n" . print_r($_REQUEST, TRUE));
  if(!isset($_SESSION['logged_in']) && 
      !isset($_REQUEST['auth_password'])) {
    session_save();
    show_password_form_and_die($msg);
  } else if(!isset($_SESSION['logged_in'])) {
    if(md5($_REQUEST['auth_password']) == DEFAULT_PASSWORD_HASH) {
      temp("auth succeeded!\n");
      $_SESSION['logged_in'] = 1;
      temp("session ok!\n");
    } else {
      temp("auth phailed for password *" . $_REQUEST['auth_password'] . "*!\n");
      session_save();
      show_password_form_and_die($msg, WRONG_PASSWORD_MSG);
    }
  }
}

function session_save() {
  $_SESSION['to_import'] = $_REQUEST;
  // Since $_REQUEST['note'] got urlencoded earlier, we need to decode it back
  $_SESSION['to_import']['note'] = urldecode($_SESSION['to_import']['note']);
}

function show_password_form_and_die($greeting = "", $msg = "") {
?>
<style>
  .pwd_div {
    background-color : #FFFFDD;
    width : 800px;
    border-top : 4px double #000000;
    border-bottom : 4px double #000000;
    padding : 5px;
    margin-top : 20px;
  }
</style>
<?php
  if($msg != "") {
    echo '<div class="msg_div">'.$msg.'</div>';
  }
?>
  <center>
  <div class="pwd_div">
  <p><?php echo $greeting; ?></p>
  <center><h3>Please enter password</h3></center>
  <form method="post" action="<?php echo $baseurl; ?>index.php">
  <input type="password" name="auth_password" />
  <input type="submit" name="submit" value="Submit" />
  <input type="submit" name="cancel_import" value="Cancel" />
  </form>
  </div>
  </center>
<?php
  die();
}