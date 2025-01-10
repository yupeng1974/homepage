<div class="searchBox">
   <form method="get" action="https://search.usa.gov/search">
      <input type="hidden" name="affiliate" value="orbit.nesdis.noaa.gov_star">
      <input type="hidden" name="v:project" value="firstgov">
      <input value="Enter search term(s)" onfocus="if(this.value=='Enter search term(s)')this.value='';" type="text" name="query" id="query-field">
      <input type="submit" value="Go" title="execute search" id="Go" />
      <br />
      <input type="radio" id="STAR" name="affiliate" checked="checked" value="nesdis.noaa.gov">
      <label for="STAR">NESDIS</label>&nbsp;
      <input type="radio" id="NOAA" name="affiliate" value="noaa.gov">
      <label for="NOAA">All of NOAA</label>
   </form>
</div>
<div class="leftNav"><!--<div id="leftNav">-->
   <ul>
      <li id="index"><a href="index.php">Research Team</a> </li>
   </ul>
   <ul>
      <li id="index"><a href="index.php?product=Applications">Land Product Applications</a>
         <ul class="detailContainer">
            <li id="Events"><a href="monthly_lst.php?sat=JPSS">Monthly LST summary</a></li>
            <li id="Events"><a href="daily_lst.php">Daily LST animation</a></li>
         </ul>
      </li>
   </ul>
   <ul>
      <li id="Land Surface Temperature"><a href="index.php?product=LST">Land Surface Temperature</a>
         <ul class="detailContainer">
            <li id="GOES-R LST"><a href="index.php?sat=GOESR&product=LST">GOES-R ABI LST</a>
               <ul class="detailContainer">
                  <li id="Daily animation"><a href="animation.php">Daily Animation</a></li>
                  <li id="Validation"><a href="validation.php">Product Validation</a></li>
                  <li id="Rbased"><a href="rbased.php">R-Based Validation</a></li>
                  <li id="Comparison"><a href="comparison.php">Product Comparison</a></li>
               </ul>
            </li>
            <li id="JPSS LST"><a href="index.php?sat=JPSS1&product=LST">JPSS VIIRS LST</a>
               <ul class="detailContainer">
                  <li id="Weekly animation"><a href="animation.php?sat=JPSS&product=LST">Weekly Animation</a></li>
                  <li id="Validation"><a href="validation.php?sat=JPSS2&product=LST&network=All">Product Validation</a></li>
               </ul>
            </li>
            <li id="HIMAWARI LST"><a href="index.php?sat=HIMAWARI8&product=LST">HIMAWARI AHI LST</a>
               <ul class="detailContainer">
                  <li id="Daily animation"><a href="animation.php?sat=HIMAWARI9&product=LST&mode=FLDK">Daily Animation</a></li>
                  <li id="Other Experiments"><a href="multi-geo.php">Other Experiments</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
   <ul>
      <li id="Albedo"><a href="index.php?product=LSA">Surface Albedo</a>
         <ul class="detailContainer">
            <li id="GOES-R Albedo"><a href="index.php?product=LSA&sat=GOESR"> GOES-R ABI LSA </a>
               <ul class="detailContainer">
                  <li id="Daily animation"><a href="animation.php?sat=GOESR&mode=FD&product=LSA">Daily Animation</a></li>
                  <li id="Validation"><a href="validation.php?sat=GOESR&mode=FD&product=LSA&network=All">Product Validation</a></li>
                  <li id="Comparison"><a href="comparison.php?product=LSA">Product Comparison</a></li>
               </ul>
            </li>
            <li id="JPSS Albedo"><a href="index.php?product=LSA&sat=JPSS">JPSS VIIRS LSA</a>
               <ul class="detailContainer">
                  <li id="Weekly animation"><a href="animation.php?sat=JPSS2&product=LSA">Weekly Animation</a></li>
                  <li id="Validation"><a href="validation.php?sat=SNPP&product=LSA&network=All">Product Validation</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
   <ul>
      <li id="Surface Reflectance"><a href="index.php?product=SR">Surface Reflectance</a>
         <ul class="detailContainer">
            <li id="JPSS Surface Reflectance"><a href="https://www.star.nesdis.noaa.gov/jpss/sr.php" target="_blank" rel="noopener noreferrer">JPSS VIIRS SR</a>
               <ul class="detailContainer">
                  <li id="Weekly animation"><a href="animation.php?sat=JPSS2&product=SR&variable=SR-Land">Weekly Animation</a></li>
                  <li id="Validation"><a href="validation.php?sat=JPSS2&product=SR&network=AERONET">Product Validation</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
   <ul>
      <li id="Vegetation Index"><a href="index.php?product=VI">Vegetation Index</a>
         <ul class="detailContainer">
            <li id="JPSS Vegetation Index"><a href="https://www.star.nesdis.noaa.gov/jpss/vi.php" target="_blank" rel="noopener noreferrer">JPSS VIIRS VI</a>
               <ul class="detailContainer">
                  <li id="Weekly animation"><a href="animation.php?sat=JPSS2&product=VI&variable=TOC-EVI">Weekly Animation</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
   <ul>
      <li id="Green Vegetation Fraction"><a href="index.php?product=GVF">Green Vegetation Fraction</a>
         <ul class="detailContainer">
            <li id="SNPP Green Vegetation Fraction"><a href="https://www.star.nesdis.noaa.gov/jpss/gvf.php" target="_blank" rel="noopener noreferrer">JPSS VIIRS GVF</a>
               <ul class="detailContainer">
                  <li id="Weekly animation"><a href="animation.php?sat=JPSS2&product=GVF">Weekly Animation</a></li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
</div><!-- end of navlist -->
<div style="margin-top: 2px;">
</div>
<?php
// insert disclaimer language
require('includes/ProductDisclaimer.inc');

?>
<br />
	
