<?php 
$announcements = '
<strong>Welcome</strong><br />
<p>Gone too soon - Michael Jackson</p>
<p>Turn up your volume a little, and press F8.</p>
';

$currently = '	
	<li>Lazy to frequently do status updates everywhere.</li>
	<li>Will probably not status-update until a post-all solution is devised.</li>
';

$autosongcode = '
<div style="width:300px;"><object width="300" height="110"><param name="movie" value="http://media.imeem.com/m/gWwfnzAtoO"></param><param name="wmode" value="transparent"></param><embed src="http://media.imeem.com/m/gWwfnzAtoO" type="application/x-shockwave-flash" width="300" height="110" wmode="transparent"></embed></object><div style="background-color:#E6E6E6;padding:1px;"><div style="float:left;padding:4px 4px 0 0;"><a href="http://www.imeem.com/"><img src="http://www.imeem.com/embedsearch/E6E6E6/" border="0"  /></a></div><form method="post" action="http://www.imeem.com/embedsearch/" style="margin:0;padding:0;"><input type="text" name="EmbedSearchBox" /><input type="submit" value="Search" style="font-size:12px;" /><div style="padding-top:3px;"><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=0&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/152/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=1&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/153/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=2&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/154/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=3&ek=gWwfnzAtoO" rel="nofollow" ><img src="http://www.imeem.com/ads/bannerad/155/10/gWwfnzAtoO/" border="0" /></a></div></form></div></div><br/><a href="http://www.imeem.com/people/TB1n59I/music/l0Av2m2B/michael-jackson-gone-too-soon/">Gone.. too soon - Michael Jackson</a>
';

$manualsongcode = '
<div style="width:300px;"><object width="300" height="110"><param name="movie" value="http://media.imeem.com/m/gWwfnzAtoO/aus=false/"></param><param name="wmode" value="transparent"></param><embed src="http://media.imeem.com/m/gWwfnzAtoO/aus=false/" type="application/x-shockwave-flash" width="300" height="110" wmode="transparent"></embed></object><div style="background-color:#E6E6E6;padding:1px;"><div style="float:left;padding:4px 4px 0 0;"><a href="http://www.imeem.com/"><img src="http://www.imeem.com/embedsearch/E6E6E6/" border="0"  /></a></div><form method="post" action="http://www.imeem.com/embedsearch/" style="margin:0;padding:0;"><input type="text" name="EmbedSearchBox" /><input type="submit" value="Search" style="font-size:12px;" /><div style="padding-top:3px;"><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=0&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/152/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=1&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/153/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=2&ek=gWwfnzAtoO" rel="nofollow"><img src="http://www.imeem.com/ads/bannerad/154/10/" border="0" /></a><a href="http://www.imeem.com/ads/banneradclick.ashx?ep=3&ek=gWwfnzAtoO" rel="nofollow" ><img src="http://www.imeem.com/ads/bannerad/155/10/gWwfnzAtoO/" border="0" /></a></div></form></div></div><br/><a href="http://www.imeem.com/people/TB1n59I/music/l0Av2m2B/michael-jackson-gone-too-soon/">Gone.. too soon - Michael Jackson</a>
';
?>
<head>
<TITLE>Lim Yuen Hoe's Webspace</TITLE>
</head>
<body bgcolor="#ffffff" onload="init()">
<style>

img.framed { max-width : 650px; padding : 2px; border : 1px solid #000000; display: block; margin-left:auto; margin-right:auto; }
.caption { display:block; font-style:italic; text-align:center; }

div.header {
	background-image : url("images/header.png");
	background-repeat : no-repeat;
	height : 330px;
	width : 1000px;
}

div.body {
	background-image : url("images/body.gif");
	background-repeat : no-repeat;
	height : 370px;
	width : 1000px;
}

div.contents {
}


a {
	text-decoration : none;
	color:#000033;
}

a:hover {
	text-decoration : underline;
	color:#000033;
}

.contents a {
	text-decoration : none;
	color:#666699;
}

.contents a:hover {
	text-decoration : underline;
	color:#666699;
}

div.linklist {
	padding-left:50px
}

div.titlebar {
	padding : 7px;
	padding-left : 25px;
	background-image : url("images/titlebar.gif");
	font-size : 170%;
	color : #ffffff; 
	font-family : Arial;
}

.titlebar a {
	color : #ffffff; 
	text-decoration : none;
}

div.comment {
	background-image : url('images/commentgradient.jpg');
	background-repeat : repeat-y;
	padding : 5px;
	padding-left : 50px;
}

div.chatboxform {
	font-size : 80%;
}

div.chatentry {
	margin : 2px;
	padding : 5px;
/*	padding-left : 50px; */
	border : 1px solid #000066;
	background-color : #EEEEFF;
}

div.chatbox {
	width : 230px;
	border : 4px groove #000000;
	margin-left : 10px;
	background-image : url("images/chatboxbg.gif");
	background-repeat : no-repeat;
	background-position:bottom left; 
}

div.cornerbox {
	position : fixed; 
	bottom : 10px ; 
	left : 10px;
	padding : 3px;
	border : 1px solid #0000DD;
	background-color : #EEEEFF;
	opacity : 0;
}

div.hoverdescription {
	padding : 10px;
	display : none;
	border : 1px solid #000055;
	background-color : #CCCCFF;
	height : 70px;
	overflow : hide;
}
</style>
<div id = "browserdiv" style="display:none; margin-bottom : 10px; background-color : #EEEEFF; padding : 2px; width : 1000px">
<a href="" style="float:right" onclick="display_browser_msg(false); return false;">(x)</a>
<span id="browsermsg"></span>
</div>
<div class="header">
<img style="float:right" src="images/reiside.jpg" id="fadeimage" />
</div>
<div class="body">
<div class="announcementbox">
<script>
<!--
var desclist = ["announcementtext","blog_desc","closet_desc","home_desc","portfolio_desc", "note_desc"];
function show_desc(id) {
	var el = document.getElementById(id);
	if(!el) return;
	hide_all_desc();
	el.style.display = "block";
}

function hide_all_desc() {
	for(var i=0; i<desclist.length; i++)
		document.getElementById(desclist[i]).style.display="none";
}
-->
</script>
<div id = "announcementtext">
<?php echo $announcements; ?>
</div>
<div id = "blog_desc" class="hoverdescription">
<p>My full Wordpress-powered weblog. Where you can find posts on all kinds of random things that interest me, including the geekier and more otakuish material that I don't publish in the front here.</p>
</div>
<div id = "home_desc" class="hoverdescription">
<p>This page. o.O</p>
</div>
<div id = "portfolio_desc" class="hoverdescription">
<p>Dedicated to my academic/technical experiences and achievements. Includes my resume and a portfolio of
projects I have completed.</p>
</div>
<div id = "note_desc" class="hoverdescription">
<p>My self-built, self-used online note-keeping application.</p>
</div>
<div id = "closet_desc" class="hoverdescription">
<p>Software I've written on the side that I consider presentable :P</p>
</div>
</div>

<div class="menu">
<div class="menu-item-selected" onmouseover="show_desc('home_desc')" onmouseout="show_desc('announcementtext')">Home</div>
<div class="menu-item" onmouseover="show_desc('note_desc')" onmouseout="show_desc('announcementtext')"><a href="notes/" style="color:#ffffff; text-decoration:none">Notes</a></div>
<div class="menu-item" onmouseover="show_desc('closet_desc')" onmouseout="show_desc('announcementtext')"><a href="blog/software/" style="color:#ffffff; text-decoration:none">Software</a></div>
<div class="menu-item" onmouseover="show_desc('blog_desc')" onmouseout="show_desc('announcementtext')"><a href="blog/index.php" style="color:#ffffff; text-decoration:none">Blog</a></div>
<div class="menu-item" onmouseover="show_desc('portfolio_desc')" onmouseout="show_desc('announcementtext')"><a href="portfolio/index.php" style="color:#ffffff; text-decoration:none">Portfolio</a></div>
</div>
<br />

<table border="0" width="100%">
<tr>
<td width="300px" valign="top">
<br />
<img src="images/Blogs.gif" />
<table border="0">
<tr><td width="10px" bgcolor="#AAAAAA"></td>
<td>
<div class="linklist">
<?php
	$result = mysql_query("SELECT * FROM wp_links WHERE link_id IN (SELECT wp_links.link_id FROM wp_links, wp_terms, wp_term_relationships, wp_term_taxonomy WHERE 
			wp_links.link_id = wp_term_relationships.object_id AND wp_term_taxonomy.term_id = wp_terms.term_id AND
			wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id AND wp_terms.name = 'Blogging Friends'
			)
				ORDER BY link_name;");
	while($link = mysql_fetch_assoc($result)) {
		echo '<li><a href="'.$link['link_url'].'" target="_blank">'.$link['link_name'].'</a></li>';
	}
?>
</div>
</td></tr></table>

<br />
<img src="images/Chatbox.gif" />
<?php include("chatbox.php"); ?>
<br />
<br />
<br /><center>
<a href="http://kde.org/"><img src="http://kde.org/stuff/clipart/klogo-official-oxygen-128x128.png" border="0" /><span class="caption">
The KDE Project</span></a>
</center>

</td>
<td valign="top">
<div>
<img src = "images/smallme.jpg" style = "float:left; border:1px solid #000000; margin:2px; margin-right:10px;">
<br>
<h2 align="left" style="background-color:#000000;color:#fff;font-family:arial">Jason "moofang" Lim Yuen Hoe . 林元豪</h2>
<strong><font color="#999999">Currently</font></strong>
<div style="border : 1px solid #000000; color:#666666">
<ul>
	<?php echo $currently; ?>
</ul>
</div>
</font>
</div>

<div class="content">
<br /><br />
From my blog...
<?php

$offset = (isset($_GET['offset'])? $_GET['offset'] : 0);
$limit = 2;

$result = mysql_query("SELECT * FROM wp_posts WHERE post_type='post' AND ID NOT IN (
			SELECT wp_posts.ID FROM wp_posts, wp_terms, wp_term_relationships, wp_term_taxonomy WHERE 
			wp_posts.ID = wp_term_relationships.object_id AND wp_term_taxonomy.term_id = wp_terms.term_id AND
			wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id AND wp_terms.name = 'closet'
		)
		ORDER BY post_date DESC LIMIT ".$limit." OFFSET ".$offset.";");

$rowcount = 0;
while($row = mysql_fetch_assoc($result)) { 
	$rowcount++;
	echo '
	<div class="titlebar">
		<a href="http://yuenhoe.co.cc/blog/?p='.$row['ID'].'">'.$row['post_title'].'</a>
	</div><br /><div class="contents">
	'.str_replace("\n","<br />", $row['post_content']).'<br /><br /></div><hr />
	Posted '.$row['post_date'].'. <a href="" onclick="togglecomment('.$row['ID'].'); return false;">Quick comment</a><br /><br />';
	echo '
	<div id="coms'.$row['ID'].'" style="display:none">
	<form action="http://yuenhoe.co.cc/blog/wp-comments-post.php" method="post" id="commentform">


	<p><input type="text" name="author" id="author" value="'.$cookieauthor.'" size="22" tabindex="1" />
	<label for="author"><small>Name (required)</small></label></p>

	<p><input type="text" name="email" id="email" value="'.$cookieemail.'" size="22" tabindex="2" />
	<label for="email"><small>Mail (will not be published) (required)</small></label></p>

	<p><input type="text" name="url" id="url" value="'.$cookieurl.'" size="22" tabindex="3" />
	<label for="url"><small>Website</small></label></p>

	<!--<p><small><strong>XHTML:</strong> You can use these tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </small></p>-->
	
	<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
	<input type="hidden" name="redirect_to" value="http://yuenhoe.co.cc/" />
	<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
	<input type="hidden" name="comment_post_ID" value="'.$row['ID'].'" />
	</p>

	</form>
	</div>';
	$result2 = mysql_query("SELECT * FROM wp_comments WHERE comment_post_ID = '".$row['ID']."' AND comment_approved = 1 ORDER BY comment_date;");
	while($comment = mysql_fetch_assoc($result2)) {
		echo "<a name=\"comment-".$comment['comment_ID']."\"></a><strong>";
		echo $comment['comment_author_url']?('<a href="'.$comment['comment_author_url'].'" target="_blank" style="color:#6666aa">'):"";
		echo $comment['comment_author'];
		echo $comment['comment_author_url']?"</a>":"";
		echo " wrote </strong>:<br />";
		echo '<div class="comment">';
		echo str_replace("\n","<br />",$comment['comment_content']);
		echo '</div><br />';

	}
	echo '<br />';
/*<center>
<script type="text/javascript"><!--
google_ad_client = "pub-0279669867389873";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_type = "text_image";
google_ad_channel = "";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center><br><br>
';*/
	echo "<br />";
}
if($rowcount == 0) {
	echo "<br />(No more posts)";
}
echo '<center><p>';
if($offset > 0) {
	echo '<a href="http://yuenhoe.co.cc/?offset='.($offset-$limit).'" /><< Newer posts</a> | ';
	echo '<a href="http://yuenhoe.co.cc/" />Front page</a> | ';
}
echo '<a href="http://yuenhoe.co.cc/blog/" />My Blog</a> | ';
if($rowcount == $limit)
	echo '<a href="http://yuenhoe.co.cc/?offset='.($offset+$limit).'" />Older posts >></a></p></center>';

?>

</div>
</td>
</tr>
</table>
<center>

<div style=";" id="player">
<?php echo $manualsongcode; ?>
</div>

Site designed by Me . 
Copyright (C) 2008<br />
<a href="http://www.co.cc" target="_blank"><img src="http://get-banner.lookup.co.cc/banner_img/cocc90_40g.gif" border="0" alt="CO.CC:Free Domain" /></a>
<a href="http://www.freedomain.co.nr/" target="_blank">
<img src="http://oszznna.4u.com.ru/soof62.gif" width="88" height="31" border="0" alt="Free Domains at .co.nr" /></a>
<!-- Begin Shinystat Free code -->
<script type="text/javascript" language="JavaScript" SRC="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=yuenhoe"></script>
<noscript>
<A HREF="http://www.shinystat.com" target="_top">
<IMG SRC="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=yuenhoe" ALT="Free blog counter" BORDER="0"></A>
</noscript>
<!-- Begin Shinystat Free code -->
</center>
</div>
<div class="cornerbox" id="cornerbox">
<em>You can hit F8 to toggle some ambient music :)</em><br />
<em>Scroll to bottom for song info.</em>
</div>
</body>
</html>

<script>

var TimeToFade = 1000.0;

var images = new Array(6);

for(var i = 0; i<images.length; i++) images[i] = new Image();
images[0].src = "images/smallrei.jpg";
images[5].src = "images/reiside.jpg";
images[1].src = "images/reilookback.jpg";
images[2].src = "images/reiside2.jpg";
images[3].src = "images/reibandage.jpg";
images[4].src = "images/reismile.jpg";

var curindex = 0;

function start_anim(flag) {
	if(!flag) {
		setTimeout("start_anim(1)", 2000);
		return;
	}
	if(flag == 2) {
		if(curindex == images.length) curindex = 0;
		document.getElementById("fadeimage").src = images[curindex].src;
		curindex++;
		fade("fadeimage");
		setTimeout("start_anim(0)", 1000);
		return;
	}
	fade("fadeimage");
	setTimeout("start_anim(2)", 1000);
}

function fade(eid)
{
  var element = document.getElementById(eid);
  if(element == null)
    return;
   
  if(element.FadeState == null)
  {
    if(element.style.opacity == null
        || element.style.opacity == ''
        || element.style.opacity == '1')
    {
      element.FadeState = 2;
    }
    else
    {
      element.FadeState = -2;
    }
  }
   
  if(element.FadeState == 1 || element.FadeState == -1)
  {
    element.FadeState = element.FadeState == 1 ? -1 : 1;
    element.FadeTimeLeft = TimeToFade - element.FadeTimeLeft;
  }
  else
  {
    element.FadeState = element.FadeState == 2 ? -1 : 1;
    element.FadeTimeLeft = TimeToFade;
    setTimeout("animateFade(" + new Date().getTime()
        + ",'" + eid + "')", 33);
  } 
}


function animateFade(lastTick, eid)
{ 
  var curTick = new Date().getTime();
  var elapsedTicks = curTick - lastTick;
 
  var element = document.getElementById(eid);
 
  if(element.FadeTimeLeft <= elapsedTicks)
  {
    element.style.opacity = element.FadeState == 1 ? '1' : '0';
    element.style.filter = 'alpha(opacity = '
        + (element.FadeState == 1 ? '100' : '0') + ')';
    element.FadeState = element.FadeState == 1 ? 2 : -2;
    return;
  }
 
  element.FadeTimeLeft -= elapsedTicks;
  var newOpVal = element.FadeTimeLeft/TimeToFade;
  if(element.FadeState == 1)
    newOpVal = 1 - newOpVal;

  element.style.opacity = newOpVal;
  element.style.filter =
      'alpha(opacity = ' + (newOpVal*100) + ')';
 
  setTimeout("animateFade(" + curTick
      + ",'" + eid + "')", 33);
}

var autostart = "yes";
function catchf8(e) {
	var keycode = (window.event) ? event.keyCode : e.keyCode;
	if(keycode == 119) {
		var player = "";
		if(autostart == "yes") {
			player = '<?php echo str_replace("\n", " ", $autosongcode); ?>';
		} else {
			player = '<?php echo str_replace("\n", " ", $manualsongcode); ?>';
		}
		document.getElementById("player").innerHTML = player;
		autostart = (autostart == "yes")?"no" : "yes";
	}
}

document.onkeyup = catchf8;

function init() {
	display_browser_msg(true);
	self.focus(); 
	start_anim(0);
	setTimeout(showcornerbox,1000);
}

function showcornerbox() {
	document.getElementById("cornerbox").FadeState = -2;
	fade('cornerbox'); 
	setTimeout("fade('cornerbox')", 6000);
}

function display_browser_msg(flag) {
	if(flag) {
	var msg = false;
	if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)){ //test for Firefox/x.x or Firefox x.x (ignoring remaining digits);
	 var ffversion=new Number(RegExp.$1); // capture x.x portion and store as a number
	 if (ffversion<2)
	  msg = 'This page is best viewed with  <a href="http://www.mozilla.com/en-US/firefox/" style="color:#ff0000" target="_blank">Firefox</a>!';
	} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
	 var ieversion=new Number(RegExp.$1); // capture x.x portion and store as a number
	 if (ieversion>=7)
	  msg = 'I try HARD to make this place IE-friendly, but it\'s harder than you think. Consider getting  <a href="http://www.mozilla.com/en-US/firefox/" style="color:#ff0000" target="_blank">Firefox</a>!';
	 else
	  msg = 'Things will not look pretty for your browser. Really. Consider getting  <a href="http://www.mozilla.com/en-US/firefox/" style="color:#ff0000" target="_blank">Firefox</a>!';
	} else
	 msg = 'This page is (probably) best viewed with  <a href="http://www.mozilla.com/en-US/firefox/" target="_blank">Firefox</a>!';
	if (msg == false) return;
	document.getElementById("browsermsg").innerHTML = msg;
	document.getElementById("browserdiv").style.display = "block";
	} else {
		document.getElementById("browserdiv").style.display = "none";		
	}
}

</script>

