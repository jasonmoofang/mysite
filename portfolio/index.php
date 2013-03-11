<?php
	error_reporting("E_ERROR");
	$page = "home";
	if(isset($_REQUEST['page'])) { $page=$_REQUEST['page']; }
	$link1class="link1";
	$link2class="link2";
	$link3class="link3";
	switch($page) {
	case "home":
		$link1class="link1selected";
		break;
	case "cv":
		$link2class="link2selected";
		break;
	case "portfolio":
		$link3class="link3selected";
		break;
	}
	
?>
<html>
<head>
 <style>
  body {
	background-color:#000000;
	background-image:url('images/bg.jpg');
	background-repeat:repeat-y;
	background-position:center; 
	text-align:center; /* IE workaround (it still doesn't work in IE8!????) */
  }
  A:link, A:visited {
	color:#555588;
	text-decoration:none;
  }
  A:hover {
	color:#555588;
	text-decoration:underline;
  }
  div.content {
	text-align:left; /* IE workaround */
	margin:0px auto;
	width:800px;
  }
  div.linkarea {
	padding-top:15px;
	height:30px;
	valign:center;
  }
  .link1, div.link1selected {
	text-align:center;
	width:266px;
	float:left;
  }
  .link2, div.link2selected {
	text-align:center;
	width:266px;
	float:left;
  }
  .link3, div.link3selected {
	text-align:center;
	width:266px;
	float:left;
  }
  div.link1:hover, div.link1selected {
	border-bottom:2px solid #FF99FF;
  }
  div.link2:hover, div.link2selected {
	border-bottom:2px solid #55FFFF;
  }
  div.link3:hover, div.link3selected {
	border-bottom:2px solid #99FF99;
  }
  .linkarea a:link,.linkarea a:visited,.linkarea a:hover {
	color:#000000;
	text-decoration:none;
  }
  div.displayarea {
  }
  .footer {
	text-align:center;
	margin-top:100px;
	color:#AAAAAA;
  }
  .sectionHead {
	padding:5px;
	width : 400px;
	color : #888888;
	border-bottom : 1px solid #888888;
  }
 </style>
 <title>Lim Yuen Hoe - My Online Portfolio</title>
</head>
<body>
<div class="content">
<h1>My Online Portfolio</h1>
<img src="images/banner.jpg" />
<div class="linkarea">
<div class="<?php echo $link1class; ?>"><a href="index.php">Home</a></div>
<div class="<?php echo $link2class; ?>"><a href="index.php?page=cv">Skills and Experiences</a></div>
<div class="<?php echo $link3class; ?>"><a href="index.php?page=portfolio">Portfolio</a></div>
</div>
<div class="displayarea">
<?php include($page.".php"); ?>
</div>
<p class="footer">
_________________________________________<br />
Site designed and maintained by me<br />
Built entirely with open source software!
</p>
</div>

</body>
</html>
