	<tr>
		<td colspan="2">
 			<div id='bottomBanner'>
				<div class="left">
 					<a href="https://www.doc.gov/">Dept.&#160;of&#160;Commerce</a>&#160;|&#160;<a 
					href="https://www.noaa.gov/"
					title="National Oceanic and Atmospheric Administration">NOAA</a>&#160;|&#160;<a 
					href="https://www.nesdis.noaa.gov/"
					title="National Environmental Satellite, Data, and Information Service">NESDIS</a>&#160;|&#160;Website&#160;owner:&#160;<a 
					href="https://www.star.nesdis.noaa.gov/"
 					title="Website owner: Center for Satellite Applications and Research">STAR</a>&#160;|&#160;<a 
					href="https://www.star.nesdis.noaa.gov/star/productdisclaimer.php">Link&#160;&amp;&#160;product&#160;disclaimers</a>&#160;|&#160;<a 
					href="https://www.star.nesdis.noaa.gov/star/accessibility.php">Accessibility</a>&#160;|&#160;<a href='http://search.usa.gov/search?affiliate=orbit.nesdis.noaa.gov_star'>Search</a>&#160;|&#160;<br>
					<a href='https://www.star.nesdis.noaa.gov/star/survey.php'>Customer&nbsp;Survey</a>&#160;|&#160;<a 
					href="https://www.star.nesdis.noaa.gov/star/privacy.php">Privacy</a>&#160;|&#160;<a 
 					href="https://www.noaa.gov/office-of-chief-information-officer/it-policy-oversight/information-quality">Information&#160;quality</a>&#160;|&#160;<a 
 					href="mailto:<?php include($localPath.'includes/localWebmasterAddr.inc'); ?>">Questions&#160;about&#160;this&#160;site</a>&#160;|&#160;<a
					href="mailto:NESDIS.STAR.Webmaster&#064;noaa.gov">STAR webmaster</a>&#160;|&#160;<?php
 					$unixts = getlastmod(); 
					echo "Modified: " . date ("j F Y",$unixts); ?>
		</td>
  </tr>
				<div class="right"><img usemap='#validation' id='valid' 
					src='https://www.star.nesdis.noaa.gov/star/global/images/validation/validationCombo.png'
					style='border: 0px;'
					alt='Level A conformance icon, W3C-WAI Web Content Accessibility Guidelines 1.0 and Valid HTML 4.01 Icon'></div>
				<div class="clearing"></div>
				</div>
			<?php	// don't disturb the following javascript includes, they make the navigation menu expand / contract and set the title attribute on external links ?>
 			<script src="https://www.star.nesdis.noaa.gov/star/global/js/nonGovTitleSetter.js"></script>
	 		<script src="https://www.star.nesdis.noaa.gov/star/global/js/menuControllerPHP.js"></script>
 			<script src="https://www.star.nesdis.noaa.gov/star/global/js/imageDivWidthSetter.js"></script>
			<!--// test LKB //-->
 			<map name='validation'>
				<area shape='rect' coords='0,0,70,25' href='https://validator.w3.org/check/referer' title='This page validates as HTML 4.01 Transitional.' alt='icon: valid HTML 4.01 transitional.'>
				<area shape='rect' coords='74,0,147,25' href='https://www.w3.org/WAI/WCAG1A-Conformance' title='Explanation of Level A Conformance' alt='Level A conformance icon, W3C-WAI Web Content Accessibility Guidelines 1.0'>
			</map>
		</div>
		<!--// added 2/20/2020 to make updated jquery available to all global sites //-->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
		<script src='https://code.jquery.com/jquery-migrate-1.4.1.min.js'></script>
		<script src="https://www.star.nesdis.noaa.gov/star/global/js/cycle2/jquery.cycle2.min.js"></script>
		<script src="https://www.star.nesdis.noaa.gov/star/global/js/cycle2/jquery.easing.min.js"></script>
		<script src="https://www.star.nesdis.noaa.gov/star/global/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
<script>
// tabs from: http://inspirationalpixels.com/tutorials/creating-tabs-with-html-css-and-jquery
$(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });

// CUSTOMIZED captioning call for fancybox
// the enclosing anchor tag can have a title, or not
// we will give it the alt value of the image as the fancybox caption; the image has to have an alt tag
// if the anchor tag wraps around text (it's a plain link), popup caption becomes the text from inside the link.

	$(".fancybox").fancybox({
		helpers: {
			title: {
					type : 'inside'
				},
		},

		beforeShow: function(){
			var fancyAlt = $(this.element).find('img').attr('alt');  // find the alt value of the image inside the clicked link
			$(".fancybox-inner").find("img").attr("alt",fancyAlt);   // assign that value to the alt of the image in the popped up box
		},
		 
		afterShow: function() {
			// take the alt of the image and make it the title of the fancybox (why isn't it already?)
			images = $(this.element).find('img');
				if (images.length == 0) {
					fancyAlt = $(this.element).text();
				} else {
					fancyAlt = $(this.element).find('img').attr('alt');
				}
			
			// is there an existing title?  <div class="fancybox-title fancybox-title-inside-wrap">
			// if no, create one! If yes, get the first element w/ that classname and empty it and replace the contents
			existingTitles = document.getElementsByClassName('fancybox-title');
			existingTitle = existingTitles[0];  // there's never more than 1

			if (typeof existingTitle == 'undefined') {
				titleContainers = document.getElementsByClassName('fancybox-skin');
				titleContainer = titleContainers[0];
				var titleElement = document.createElement('DIV');
				titleElement.className = "fancybox-title";
				var pl = document.createTextNode('placeholder');
				titleElement.appendChild(pl);
				titleContainer.appendChild(titleElement);
				existingTitle = titleElement;
			}

			LTN = existingTitle.childNodes[0];
			existingTitle.removeChild(LTN);  // dump out the existing title, which is nonsense
			newTitle = document.createElement('span');
			newTitle.id = 'dls';
			newTitle.style.zIndex = '50000';
			var t = document.createTextNode(fancyAlt);
			newTitle.appendChild(t);
			existingTitle.appendChild(newTitle);
		}	 
	}); // end of fancybox

});

$(window).on("load", function() {
	//  this handles the tab behaviors for links arriving here from other pages
	currentHash = window.location.hash;
	currentHashTab = currentHash + "L";
	if ((currentHash !== "") && (currentHash.indexOf('tab')) !== -1) {
		$(currentHash).show().siblings().hide();
		// Change/remove current tab to active
		$(currentHashTab).parent('li').addClass('active').siblings().removeClass('active');
			if (location.hash) {
				setTimeout(function() {
					window.scrollTo(0, 0);
				}, 1);
			}
		}
});

</script>
