<style>
.portfolio_image {
	border:1px solid #000000;
	float:left;
	margin-right:10px;
	width:300px;
}

.portfolio_title {
}

.category {
	padding:5px;
	padding-left:10px;
	color:#ffffff;
	background-color:#000000;
}

</style>

<h1 class="sectionHead">Portfolio</h1>

<p>This section contains a listing of the various projects and endeavours I have been involved with in my recent years,
accompanied by essential descriptive information. This section is very much a work in progress at the moment, and I am
still in the process of adding in more information and projects.</p>

<?php

$template = '
<hr />
<table border="0" width="100%" id="*PROJECT_ID*">
 <tr><td width="300px" valign="top">
  <img src="*IMG_SRC*" class="portfolio_image" />
 </td><td valign="top">
  <h3 class="portfolio_title">*PROJECT_TITLE*</h3>
  *SHORT_DESCRY*
  <a id="link*PROJECT_ID*" href="#" onclick="show_and_hide(\'content*PROJECT_ID*\', \'link*PROJECT_ID*\'); return false;">*MOAR_TEXT*</a>
  <div id="content*PROJECT_ID*" style="display:none">
   *MOAR_DESCRY*
   <a id="link*PROJECT_ID*" href="#" onclick="show_and_hide(\'link*PROJECT_ID*\', \'content*PROJECT_ID*\'); return false;">Less</a>
  </div>
 </td></tr>
</table>
';

require_once("projects.php");

foreach($category as $cat) {
	echo '<h3 class="category">'.$cat['name'].'</h3>';
	foreach($cat['projects'] as $project) {
		$entry = str_replace("*PROJECT_TITLE*" ,$project['title'], $template);
		$entry = str_replace("*SHORT_DESCRY*" ,$project['short_descry'], $entry);
		$entry = str_replace("*MOAR_DESCRY*" ,$project['moar_descry'], $entry);
		$entry = str_replace("*MOAR_TEXT*", ($project['moar_descry']=="")?"":"more", $entry);
		$entry = str_replace("*IMG_SRC*" ,$project['picture'], $entry);
		$entry = str_replace("*PROJECT_ID*" ,$project['id'], $entry);
		echo $entry;
	}
}

?>

<script>

function show_and_hide(idShow, idHide) {
	document.getElementById(idShow).style.display = "block";
	document.getElementById(idHide).style.display = "none";
}

</script>
