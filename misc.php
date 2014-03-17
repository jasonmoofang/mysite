  <style>
    .misc {
	font-size : 80%;
	padding : 10px;
    }
  </style>
  <script>
var misc_active = "gen";
function show_misc(arg) {
    document.getElementById(misc_active).style.display="none";
    document.getElementById(arg).style.display="block";
    misc_active = arg;
}
  </script>
  <table width="100%" border="0">
  <tr>
  <td width="30%" style="border-right:1px solid #000000">
<br />
    <a href="http://www.facebook.com/people/Lim-Yuen-Hoe/630308427" onmouseover="show_misc('fb')">Social Media</a><br /><br />
    <a href="https://plus.google.com/photos/113796012946915949059/albums" onmouseover="show_misc('photoblog')">Pictures and Photos</a><br /><br />
    <!--<a href="http://sea.battle.net/sc2/en/profile/284394/1/moofaNg/" onmouseover="show_misc('sc2')">Starcraft 2</a><br /><br />-->
    <a href="http://github.com/jasonmoofang" onmouseover="show_misc('devstuff')">Dev Stuff</a><br /><br />
    <!--<a href="http://www.youtube.com/user/moofang" onmouseover="show_misc('youtube')">Youtube Channel</a><br /><br />-->
  </td><td width="70%">
    <div id="gen" class="misc">
      <p>Miscellaneous stuff, including some outhanging branches of my
	online presence. Mouse over the items for descriptions!</p>
    </div>
    <div id="fb" class="misc" style="display:none">
      <p>Most of my dents are cross-posted to all my accounts. Click away:</p>
      <ul>
		<li><a href="http://www.facebook.com/people/Lim-Yuen-Hoe/630308427">Facebook</a></li>
		<li><a href="http://identi.ca/jasonmoofang">Identi.ca/Status.net (defunct)</a></li>
		<li><a href="http://twitter.com/jasonmoofang">Twitter</a></li>
		<li><a href="https://plus.google.com/113796012946915949059/posts">Google+</a></li>
      </ul>
    </div>
    <div id="photoblog" class="misc" style="display:none">
      <p>Random photos I take generally go into my <a href="https://plus.google.com/photos/113796012946915949059/albums">Google+/Picasa Web Albums</a>.</p>
      <p>If you're looking for photos of <em>me</em>, you're likely better served hitting my <a href="http://www.facebook.com/people/Lim-Yuen-Hoe/630308427">Facebook Profile</a>.</p>
    </div>
    <div id="sc2" class="misc" style="display:none">
      <p>The game for which I sacrificed all games and on which I probably spend too much time.</p>
      <ul>
		<li><a href="http://sea.battle.net/sc2/en/profile/284394/1/moofaNg/">My Battle.net SC2 Profile</a></li>
		<li><a href="http://www.fusionslugs.hawkeyewc.net/index.php">Fusion Slugs</a> - My awesome SC2 clan</li>
      </ul>
    </div>
    <div id="devstuff" class="misc" style="display:none">
      <ul>
                <li><a href="http://github.com/jasonmoofang">My Github</a> where I store some of my random dev stuff</li>
                <li><a href="http://www.ohloh.net/accounts/yuenhoe">My Ohloh profile</a> with a summary of my open source code contributions</li>
      </ul>
    </div>
    <div id="youtube" class="misc" style="display:none">
      <p>I don't post many videos and most of them are uninteresting but what the heck :)</p>
    </div>
  </td>
  </table>

