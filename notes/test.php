<pre>
<?php
  $file_handle = fopen('test.txt', 'w');
  fwrite($file_handle,   print_r($_POST,TRUE));
  fclose($file_handle);

?>
</pre>