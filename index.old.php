<?php header('Content-type: text/html; charset=utf-8'); ?>

<head>
<style>
div.menu {
	margin-left:390px;
	height : 150px;
	font-size:14px
}

div.menu-item {
	width : 100px;
	padding : 5px;

	background-color : #111155;
	float:right;
	text-align : center;
	color : #ffffff;
	font-family : arial;
	margin : 1px;
}

div.menu-item-selected {
	width : 100px;
	padding : 5px;

	background-color : #AAAAAA;
	float:right;
	text-align : center;
	color : #000000;
	font-family : arial;
	margin : 1px;
}

div.announcementbox {
	margin-left : 390px;
	height : 100px;
	overflow : auto;
}

.popuparea {
	margin-left:380px;
    margin-top:-100px;
    /*border:4px solid #111144;*/
    display:none;
    padding:5px;
    display:none;
}

.popuparea a {
  text-decoration:none;
}

.popuparea a:hover {
  text-decoration:underline;
}

div.menu-item:hover {
	background-color : #000000;
}

div.topbox {
	margin-left : 390px;
	height : 180px;
	overflow : auto;
}

div.header {
	background-image : url("http://i302.photobucket.com/albums/nn91/yuenhoe/sitetop.png");
	background-repeat : no-repeat;
	height : 330px;
	width : 1000px;
}

div.body {
	background-image : url("http://i302.photobucket.com/albums/nn91/yuenhoe/sitebottom.png");
	background-repeat : no-repeat;
	height : 370px;
	width : 1000px;
}

body {
	background-image:url("http://i302.photobucket.com/albums/nn91/yuenhoe/bg.png");
	background-repeat: no-repeat;
	font-family: Arial,Helvetica,sans-serif;
	font-size: 13;
}

body a { color : #0000FF }
body a:visited { color : #0000FF }
</style>

<script>
var active = "def";
var over = 0;
function show_desc(arg) {
    if (active != "") {
	document.getElementById(active).style.display="none";
	over = 1;
    }
    document.getElementById(arg).style.display="block";
    active = arg;
    do_scroll();
}

function do_scroll() {
    if (get_offset() < 700) {
      window.scrollBy(0,5);
      scrolldelay = setTimeout('do_scroll()',10);
    }
}

function hide_desc() {
    if (active != "")
	document.getElementById(active).style.display="none";
    active = "";
}
function try_hide() {
    if (over == 0) hide_desc();
}

var prevTimeout = "";

function mouseout_do() {
    over--;
    if (prevTimeout != "")
	clearTimeout(prevTimeout);
    prevTimeout = setTimeout('try_hide()', 2000);
}

function get_offset() {
  var scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    scrOfY = window.pageYOffset;
  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    //DOM compliant
    scrOfY = document.body.scrollTop;
  } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
    //IE6 standards compliant mode
    scrOfY = document.documentElement.scrollTop;
  }
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    scrOfY += window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    scrOfY += document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    scrOfY += document.body.clientHeight;
  }

  return scrOfY;
}
</script>

<TITLE>Lim Yuen Hoe's Webspace</TITLE>
</head>

<body>
<div class="header">
<div class="topbox" style="overflow:hidden">
<span>Follow me on <a href="http://twitter.com/JasonMoofang">Twitter</a> or <a href="https://plus.google.com/113796012946915949059/posts">Google+</a>.</span>
<div class="sideblock" style="margin-left:20px"><div class="twitter_div"><!-- <h3>My Latest Dents</h3> -->
<a class="twitter-timeline" width="600" height="200" data-chrome="nofooter noheader noscrollbar transparent" href="https://twitter.com/JasonMoofang" data-widget-id="334926667925557248">Tweets by @JasonMoofang</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
</div>
</div>
<div class="body">
<div class="announcementbox">
<p>Note that I will no longer show select posts from my blog here. Please visit my blog instead if you'd like to read something!</p>
<p>Mouse over the following links to navigate around.</p>
</div>
<div class="menu">
<div class="menu-item" 
    onmouseout="mouseout_do()"
    onmouseover="over++; show_desc('misc_desc'); show_misc('gen');"><a href="misc.php" style="color:#ffffff; text-decoration:none">Misc</a></div>
<div class="menu-item" 
    onmouseout="mouseout_do()"
    onmouseover="over++; show_desc('blog_desc');"><a href="blog/" style="color:#ffffff; text-decoration:none">Blog</a></div>
<div class="menu-item" 
    onmouseout="mouseout_do()"
    onmouseover="over++; show_desc('about_desc');"><a href="about.php" style="color:#ffffff; text-decoration:none">About</a></div>
</div>
<div id="def">
<p align="right">Site design by me</p>
</div>
<div class="popuparea" id="blog_desc"
  onmouseout="mouseout_do()"
  onmouseover="over++;">
  <h3 style="font-weight:normal"><a href="blog/">Between Linux and Anime</a></h3>
    
    <p>My current blog in which I write about all sorts of random stuff, 
    though admittedly with some emphasis on geekier topics.</p>
    <p>Quick jump to:
    <!-- <a href="blog/tag/rants" >Rants</a> -->
    <a href="blog/tag/tech" >Tech</a>
    <a href="blog/tag/dev" >Dev</a>
    <a href="blog/tag/otaku" >Otaku</a>
    </p>
    <hr />
    <p>Old (now inactive) blogs: <a href="http://yuenhoe.blogspot.com">Digital Reflections of a PseudoReality</a></p>
</div>
 <div class="popuparea" id="misc_desc"
  onmouseout="mouseout_do()"
  onmouseover="over++;">
<?php include("misc.php"); ?>
 </div>
 <div class="popuparea" id="about_desc"
  onmouseout="mouseout_do()"
  onmouseover="over++;">
<?php include("about.php"); ?>
 </div>

</div>
</body>
