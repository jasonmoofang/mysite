<?php 

session_start();

error_reporting("E_ALL");
$read_protect_greeting = "This note is read protected. <br />
                          Not because it's got
                          Yuen Hoe's <em>hazukashi hanashi</em>,<br />
                          but probably 
                          because it contains some third party <em>kinsoku jikou</em>.";
$write_protect_greeting = "Editting/Deleting are <em>kinshi</em> unless you're me.<br />
                           Yuen Hoe, that is.";
$baseurl = "http://yuenhoe.co.cc/notes/";
require_once "note.php";
require_once "session.php";

$file_handle = fopen('test.txt', 'w');
function temp($zzz) {
  global $file_handle;
  fwrite($file_handle, $zzz);
}
temp("TEST\n");
?>
<?php

// import from session if necessary
session_import();

if(!isset($_REQUEST['note'])) $_REQUEST['note'] = "Root note";

$_REQUEST['note'] = trim(urlencode($_REQUEST['note']));

// hack to check if we logged out in the current run
$recent_logout = false;

switch($_REQUEST['mode']) {
case 'edit':
  if(is_read_protected($_REQUEST['note']))
    session_authorize($read_protect_greeting);
  theme_default('show_edit_form', array($_REQUEST['note']));
  break;
case 'post':
  session_authorize($write_protect_greeting); // access check
  $newnotename = update_note($_REQUEST['note'], 
		urlencode(trim($_REQUEST['newnotename'])),
		$_REQUEST['content'],
                $_REQUEST['protected']);
  theme_default('show_note_html', array($newnotename));
  break;
case 'delete':
  session_authorize($write_protect_greeting);
  theme_default('delete_note', array($_REQUEST['note']));
  break;
case 'readonly':
  if(is_read_protected($_REQUEST['note']))
    session_authorize($read_protect_greeting);
  theme_readonly('stub', array(urldecode($_REQUEST['note']), get_note_contents($_REQUEST['note'])));
  break;
case 'plain':
  if(is_read_protected($_REQUEST['note']))
    session_authorize($read_protect_greeting);
  echo get_note_contents($_REQUEST['note']);
  break;
case 'logout':
  session_logout();
  $recent_logout = true;
  echo '<div class="msg_div">You have been logged out!</div>';
case 'normal':
default :
  if(is_read_protected($_REQUEST['note']))
    session_authorize($read_protect_greeting);
  theme_default('show_note_html', array($_REQUEST['note']));
  break;
}

function stub($title, $out) { // REPLACE THIS!!!
  echo '<center><h1>' . $title . '</center></h1>';
  echo str_replace("\n", '<br />', $out);
}

function theme_readonly($callback, $args) {
?>
  <div style="padding:5px; border:#ffffff 5px double; background-color:#000022;color:#ffffff">
<?php
  call_user_func_array($callback, $args);
?>
  <center><h2>Other notes</h2></center>
<?php
  $list = get_existing_note_list();
  $flag = true;
  foreach($list as $item) {
?>
<div style="<?php echo ($flag?'background-color:#CCC;':'background-color:#FFF;'); ?>padding:5px;">
  <a href="<?php echo $baseurl; ?>index.php?mode=readonly&note=<?php echo $item; ?>"><?php echo urldecode($item); ?></a>
</div>
<?php
    $flag = !$flag;
  }
?>
  </div>
<?php
}

function theme_default($callback, $args) {
  global $baseurl, $recent_logout;
?>
<style>
  .msg_div {
    background-color : #AAFFAA;
    padding : 5px;
    border : 1px solid #00AA00;
  }
</style>
<table width="1000px">
<tr><td valign="top" width="750px">
<div style="background-color:#FFFFAA;padding:10px; border:5px double #000000">
<?php
  call_user_func_array($callback, $args);
?>
</div>
</td>
<td valign="top">
<div style="border:1px solid #000000; padding:5px; height:500px; overflow:auto">
<h3 align="center">My notes</h3>
<?php
$list = get_existing_note_list();
$flag = true;
foreach($list as $item) {
?>
<div style="<?php echo ($flag?'background-color:#CCC;':''); ?>padding:5px;">
  <a href="<?php echo $baseurl; ?>index.php?note=<?php echo $item; ?>"><?php echo urldecode($item); ?></a>
</div>
<?php
  $flag = !$flag;
}
?>
</div>
<p align="center" style="color:#AAAAAA">
<?php 
  if(session_logged_in() && !$recent_logout) {
    echo "You are now <strong>logged in</strong><br />";
    echo "<a href=\"".logout_url($_REQUEST['note'])."\">";
    echo "Log me out</a><br /><br />";
  }
?>
MakeNotes v0.3<br />
by Lim Yuen Hoe<br />
<a href="changelog.html">Changelog</a><br />
<a href="http://yuenhoe.co.cc/">yuenhoe.co.cc</a>
</p>
</center>
</td>
</tr>
</table>
<?php
}