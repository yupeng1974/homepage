	<tr>
		<td colspan="2">
			<div id="bottomBanner">
				<div class="left">
				<?php
				$unixts = getlastmod(); //last modified date/time for this web page as Unix timestamp
				echo "Modified: " . date ("F j, Y",$unixts); //ex: January 15, 2004 10 AM 
				echo "<br />";
				// echo "http://www.orbit.nesdis.noaa.gov" . $_SERVER['PHP_SELF'];
				// echo "<br />";
				?>
				<a href="http://www.commerce.gov/">Dept. of Commerce</a>&nbsp;|&nbsp;<a 
					href="http://www.noaa.gov/"
					title="National Oceanographic and Atmospheric Administration">NOAA</a>&nbsp;|&nbsp;<a 
					href="http://www.nesdis.noaa.gov/"
					title="National Environmental Satellite, Data, and Information Service">NESDIS</a>&nbsp;|&nbsp;<a 
					href="https://www.star.nesdis.noaa.gov/star/index.php"
					title="Center for Satellite Applications and Research">STAR</a>&nbsp;</div>

				<div class="right"><a href="http://www.w3.org/WAI/WCAG1A-Conformance"
      		title="Explanation of Level A Conformance"><img 
          src="http://www.w3.org/WAI/wcag1A.gif"
          alt="Level A conformance icon, W3C-WAI Web Content Accessibility Guidelines 1.0" 
          /></a><a href="http://validator.w3.org/check/referer"
      		title="This page validates as HTML 4.01 Transitional."><img 
          src="http://www.w3.org/Icons/valid-html401"
          alt="Valid HTML 4.01" 
          /></a>&nbsp;<a href="http://www.noaa.gov/privacy.html">Privacy&#160;Policy</a>&nbsp;|&nbsp;<a 
					href="https://www.star.nesdis.noaa.gov/star/productdisclaimer.php">Link&nbsp;&amp; Product&nbsp;Disclaimers</a>&nbsp;|&nbsp;<a 
					href="https://www.noaa.gov/node/6009">Information&nbsp;Quality</a>&nbsp;<br />
					<a href="https://www.star.nesdis.noaa.gov/star/accessibility.php">Accessibility</a>&nbsp;|&nbsp;<?php 

// make the webmaster e-mail slightly spam resistant

	echo "<a href='mailto:&#78;&#69;&#83;&#68;&#73;&#83;&#46;&#83;&#84;&#65;&#82;&#46;&#87;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;";
	echo "@";
	echo "&#110;&#111;&#97;&#97;&#46;&#103;&#111;&#118;'>";
	echo "&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#032;&#119;&#101;&#098;&#109;&#097;&#115;&#116;&#101;&#114;</a></div>";
	
?>
<div class="clearing"></div>
			</div>
			<script language="JavaScript" src="js/contentOnlyTitleSetter.js" type="text/javascript"></script>
			<script language="JavaScript" src="js/menuControllerPHP.js" type="text/javascript"></script>
		</td>
  </tr>


