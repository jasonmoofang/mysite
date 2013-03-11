 <?php

function edit_url($notename) {
  return $baseurl.'index.php?mode=edit&note='.$notename;
}

function delete_url($notename) {
  return $baseurl.'index.php?mode=delete&note='.$notename;
}

function delete_note($notename) {
  unlink($notename.".note");
  echo "<h1>Deleted</h1>... the note is. Or we hope ;)";
}

function get_note_contents($notename) {
  $file_handle = fopen($notename.".note", "r");
  if(!$file_handle) {
    return false;
  }
  $content = "";
  while (!feof($file_handle)) {
    $line_of_text = fgets($file_handle);
    $content = $content . $line_of_text;
  }
  fclose($file_handle);
  return $content;
}

function show_note_html($notename) {
  echo '<title>Showing note : '.urldecode($notename).'</title>';
  $content = str_replace("\n", '<br />', get_note_contents($notename));
  if(!$content) {
    echo "<h1>Oops!</h1>I can't seem to find this note : <em>".$notename.
	'</em>. <a href="'.edit_url($notename).'">create it now</a>!';
    return;
  }
?>
<script>
  function showcontent() {
    document.getElementById("content").style.display = "block";
    document.getElementById("theform").style.display = "none";
  }
  
  function showform() {
    document.getElementById("content").style.display = "none";
    document.getElementById("theform").style.display = "block";
  }
</script>
<div id="content">
<?php
  echo '<h1>'.urldecode($notename).'</h1><hr />';
  echo str_replace('  ', ' &nbsp;', add_hyperlinks($content));
  echo '<hr />
	<div>
	<div style="float:left"><a href="'.edit_url($notename).'" 
	  onclick="showform();return false;">Edit this note</a> ';
  echo '<a href="'.edit_url("").'">Create new note</a></div>';
  echo '<div style="float:right">
	<form method="POST">
	<input type="hidden" name="note" value="'.urldecode($notename).'" />
	<input type="hidden" name="mode" value="delete" />
	<input type="submit" value="Delete this note" /></form>
	</div><br /></div>';
//<a href="'.delete_url($notename).'">Delete this note</a>';
?>
</div>
<div id="theform" style="display:none">
<?php show_edit_form($notename);?>
<a href="#" onclick="showcontent(); return false;">Cancel</a>
</div>
<?php
}

function show_edit_form($notename, $contents="") {
  echo '<title>Editting note</title>';
  $existing = get_note_contents($notename);
  if($existing) {
    $contents .= $existing;
  }

?>
<form method="post" action="<?php echo $baseurl; ?>index.php">
 <input type="hidden" name="mode" value="post" />
 <input type="hidden" name="note" value="<?php echo urldecode($notename); ?>" />
 <strong>Editting note</strong>
 <input type="text" name="newnotename" value="<?php echo urldecode($notename); ?>" />
 <hr />
 <input type="checkbox" name="protected" <?php echo (is_read_protected($notename))?"CHECKED":""; ?> /> Read-protect this note<br />
 <textarea name="content" cols=80 rows=30><?php echo $contents; ?></textarea>
 <input type="submit" value="Save" />
</form>
<?php
}

function update_note($notename, $newnotename, $content, $protect = false) {
  if(trim($newnotename) == "") {
    echo '<strong><p style="color:#ff0000">Please specify a note title!</p></strong>';
    show_edit_form("", $content);
    return;
  }
  $notebackupname = "!".$notename;
  $newnotebackupname = "!".$newnotename;
  $content = get_magic_quotes_gpc()?stripslashes($content):$content;
  if($notename != $newnotename) {
    rename($notename.'.note', $newnotename.'.note');
    rename($notebackupname.'.note', $newnotebackupname.'.note');
  }
  $file_handle = fopen($newnotename.'.note', 'w');
  $backup_file_handle = fopen($newnotebackupname.'.note', 'w');
  fwrite($file_handle, $content);
  fwrite($backup_file_handle, $content);
  fclose($file_handle);
  fclose($backup_file_handle);
  remove_from_read_protected($notename);
  if($protect)
    add_to_read_protected($newnotename);
  return $newnotename;
}

function add_hyperlinks($string) {
  $ex_nt = get_existing_note_list();
  foreach($ex_nt as $nt) {
    $string = str_ireplace(urldecode($nt), 
	'<a href="'.$baseurl.'index.php?note='.$nt.'">'.urldecode($nt).'</a>', $string);
  }
  return $string;
} 

function get_existing_note_list() {
  $dir = scandir(".");
  $retval;
  foreach($dir as $file)
    if(preg_match('/\.note$/',$file) && !preg_match('/^!/',$file)) {
      $retval[] = substr($file,0,(strlen($file)-5));
    }
  return $retval;
}

function add_to_read_protected($notename) {
  $file_handle = fopen('protected_notes.dat', 'a');
  fwrite($file_handle, $notename . "\n");
  fclose($file_handle);
}

function is_read_protected($notename) {
  $retval = false;
  $file_handle = fopen('protected_notes.dat', 'r');
  while ($file_handle != false && !feof($file_handle)) {
    $entry = fgets($file_handle);
    if(trim($entry) == trim($notename)) {
      $retval = true;
      break;
    }
  }
  fclose($file_handle);
  return $retval;
}

function remove_from_read_protected($notename) {
  $newcontents = "";
  $file_handle = fopen('protected_notes.dat', 'r');
  while ($file_handle != false && !feof($file_handle)) {
    $entry = fgets($file_handle);
    if(trim($entry) == trim($notename))
      continue;
    $newcontents .= $entry . "\n";
  }
  fclose($file_handle);
  $file_handle = fopen('protected_notes.dat', 'w');
  fwrite($file_handle, $newcontents);
  fclose($file_handle);
}