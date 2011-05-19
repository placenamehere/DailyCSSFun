<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<title>~cac6982</title>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII" />

<?php
    $styles = array("19","18","17","16","15","14","13","12","11","10","09","08","07","06","05","04","03","02","01");
    $usestyle = "19"; // if all else fails we'll fall back on the first one
    
	
	// if there's a querystring check to see that its in the array of available styles, otherwise toss out a random style
	if ($_GET['sheet']) {
		$sheet = $_GET['sheet'];
	
	
		if ($sheet == "00") {
			// don't do anything
			$usestyle = null;
		} elseif (in_array($sheet, $styles)) {
			$usestyle = $sheet;
		
		} else {
		
			#srand ((double) microtime() * 10000000);
			#$usestyle = $styles[array_rand($styles, 1)];
		}
	
	} else {
		#srand ((double) microtime() * 10000000);
		#$usestyle = $styles[array_rand($styles, 1)];
	}
	
	if ($usestyle != null) {
		print "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$usestyle."/main.css\" />";
	}
	
    

?>

<?php include("../../objects/analytics.html"); ?>
</head>

<body>
<div id="myname">
	<h1>~cac6982</h1>
</div>

<div id="summary">
	<p>place name here meets neuralust</p>
</div>

<div id="feature">
	<h2>Featured</h2>
	<ol>
		<li><span class="date">2002.02:</span> <a href="../200202/" title="Daily CSS Fun">Daily CSS Fun</a> <p><span style="text-decoration:line-through">Each day in</span> Throughout the month of February I will be posting a redesign of this page using only CSS. The underlying HTML code won't change a bit. Past style sheets can be viewed using the form controls found somewhere on this page. Explanations of each of the layouts will also be posted. (updated 2/26)</p></li>
		<li><span class="date">2002.01.06:</span> <a href="../20020106/" title="Don't be frightened">i loves gmunk</a> <p>I recently came across this little gag I had started working on a few months back and polished it up for the world to see. For those living under a rock, <a href="http://www.gmunk.com/" title="pay careful attention to the loading screen">this is gmunk</a>, and these are <a href="http://placenamehere.com/2001-09-11/" title="wtc photos from Hoboken, NJ">the photos</a> that the email is referring to.</p></li>

	</ol>
</div>

<div id="history">
	<h2>Archived</h2>
	<ol>
		<li><span class="date">2001.12.20:</span> <a href="../20011220/" title="Merry Christmas">Merry Christmas To All!</a> <p>With some photos and some scaling its time to celebrate the holiday season!</p></li>
		<li><span class="date">2001.10.02:</span> <a href="http://www.chunkysoup.net/advanced/bugged/" title="Who knew I wrote in complete sentences?">You've Been Bugged!</a> <p><span style="text-decoration:line-through;">I know if you've been bad or good.</span> Oops someone else's line, but I do know how big your browser is! If you didn't view this page's source you wouldn't know this page was bugged. Here's a short explanation of why along with some results.</p></li>
		<li><span class="date">2001.07.21:</span> <a href="http://www.chunkysoup.net/advanced/nmufny01/" title="Sorry for the delay folks, but its been a busy week">NMUF Presentation Outline</a> <p>Outline of my part of the Neuralust group presentation at <!--<a href="http://www.nmuf.org/" title="hope you had as much fun as I did">-->NMUF<!--</a>--> in NYC on 7/12.</p></li>
		<li><span class="date">2001.06.12:</span> <a href="../20010612/" title="You were probably sick of this a *long* time ago">Click Three Points (5)</a> <p>A DOM based port of the latest Macromedia Flash craze to sweep the world. Thanks to <!--<a href="http://www.neuralust.com/~deconcept/" title="while you're over there, tell him to get off his ass">-->~deconcept<!--</a>--> and all the other designers showcased at <a href="http://www.blankimage.com/" title="Spydr has more domain names then you!">blankimage.com</a> for the inspiration.</p></li>
		<li><span class="date">2001.05.17:</span> <a href="../20010517/" title="'HTML that's as cool as Flash' - Zeldman">Selected Photos (5)</a> <p>A fully resizable interface designed to showcase a few of my photos. I'll let the quote in the background speak for itself.</p></li>
		<li><span class="date">2001.05.05:</span> <a href="../20010505/" title="Hours of browser resizing fun!">Foundation</a> <p>The beginnings of a more concentrated effort to work with the canvas that is a browser window. Its just a shame that IE5/PC doesn't support word spacing.</p></li>
		<li><span class="date">2001.04.09:</span> <a href="../20010409/" title="Did you fall for it?">Traffic Check</a> <p>A home page with nothing to do. More CSS based typography combined with an attempt to fill space creatively. Thanks to all the folks who wrote me telling me it didn't work, and extra special thanks to those writing me telling me it <em>did</em> work.</p></li>
		<li><span class="date">2001.04.04:</span> <a href="../20010404/" title="I love my Times New Roman">Please Hold</a> <p>A semi-successful attempt at being creative with CSS based typography masquerading as an under construction page.</p></li>
	</ol>
</div>

<div id="stylechooser">
	<form action="fun.php" method="get">
		<fieldset>
		<select name="sheet">
<?php
	foreach ($styles as $x) {
		if ($x == $usestyle) {
			print "<option value=\"".$x."\" selected=\"selected\">".$x."</option>";
		} else {
			print "<option value=\"".$x."\">".$x."</option>";
		}
	}
	if ($usestyle == null) {
		print "<option value=\"00\" selected=\"selected\">none</option>";
	} else {
		print "<option value=\"00\">none</option>";
	}

?>

		</select>
		<input type="submit" value="switch style" />
		</fieldset>
	</form>
</div>

<div id="contact">
	<h2>Contact Info</h2>
	<ol>
		<li><p>Please direct all hate mail to <a href="mailto:cac6982@placenamehere.com" title="i know you want to">cac6982@placenamehere.com</a>, or visit <a href="http://placenamehere.com/" title="you probably don't want to">placenamehere.com</a> if you want more.</p></li>
	</ol>
</div>
</body>
</html>
