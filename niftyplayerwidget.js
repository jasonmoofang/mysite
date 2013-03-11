<script type="text/javascript" language="javascript" src="http://yuenhoe.com/niftyplayer.js"></script>
<script type="text/javascript">
document.onkeyup = togglePlayer;
var playing = false;
function togglePlayer(e)
{
   var KeyID = (window.event) ? event.keyCode : e.keyCode;
   switch(KeyID)
   {
      case 119:
           if (playing) {
niftyplayer('niftyPlayer1').stop();
           } else {
niftyplayer('niftyPlayer1').play();
           }
           playing = !playing;
      break; 
    }
}
</script>
Koi Boudou<br />
~ Binbougami Ga<br />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="165" height="38" id="niftyPlayer1" align="">
<param name=movie value="http://yuenhoe.com/niftyplayer.swf?file=http://yuenhoe.com/mp3/koiboudoutv.mp3">
<param name=quality value=high>
<param name=bgcolor value=#FFFFFF>
<embed src="http://yuenhoe.com/niftyplayer.swf?file=http://yuenhoe.com/mp3/koiboudoutv.mp3" quality=high bgcolor=#FFFFFF width="165" height="38" name="niftyPlayer1" align="" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed>
</object>
