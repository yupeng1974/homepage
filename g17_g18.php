<?php
// insert header that forbids caching and carries doctype
// and html tag;
require('includes/noCacheHeader.inc');
?>
<meta name="verify-v1" content="CwbLBcFt9+GqRTgaLZsENmPnSWNB5MStHHdYsB7U2nI=" />
<?php
// insert style links and the icon link
require('includes/styleLinks.inc');
?>
<html>
<body>
<?php
// insert banner rows
require('includes/banner.inc');

// insert gray link bar
require('includes/toolBar.inc');
$sat = "GOEST";
$product = $_GET["product"];
if (!isset($product)) {
  $product = "LST";
}
$lproduct = strtolower($product);
require('includes/prepara.inc');
?>
<title> Comparison between GOES-18 and GOES-17 </title>
<tr>
   <td id="navCell">
      <?php
         // insert navigation div
         require('includes/NavDiv.inc');
      ?>
   </td>
   <td class="mainPanel"><a name="skipTarget"></a>
      <div class="padding" >
         <h2 align="center" style="font-size:20px;">Inter-sensor <?= $product ?> Comparison: GOES-18 vs. GOES-17 </h2>
         <br>
         <p style='font-size:14px; font-weight:bold; color:red'> Note: some GOES-17 results may be degraded due to overheating of its ABI sensor.</p>
         <p> GOES-18 completed its westward drifting and stayed at 136.8&#186; W on June 7th, 2022. Its view geometry at the new location is very similar to that of the GOES-17 (located at 137.2&#186; W). Products from both platforms are operationally projected to the same GOES-WEST localtion at 137&#186; W, and thus share the same coordinate system. The following shows a direct comparison of their <?= strtolower($pnames[$product]) ?> products for the most recent week including both CONUS and Full Disk coverages.</p> 

<?php
print "<p> Three indices are provided:</p>";
print "<ul style='list-style-type:disc;'; class='tighter'> ";
print "<li> Mean difference: the average of {$product} difference over all matchups with valid retrievals to show the bias between two products; </li>";
print "<li> Standard deviation: the standard deviation of {$product} difference over all matchups with valid retrievals to show the scattering of the difference; </li>";
if ($product == "LSA") {
   print "<li> Count: the number of matchups used in the statistics. </li>";
   print "<p> Note: Albedo is a day time product available under SZA<70°, so the matchup number would decrease at early or late hours in local time with the increasing SZA. Moreover, the difference in the albedo results could be larger in these hours due to the inherent larger uncertainty in the surface reflectance and limited angle distribution in BRDF retrieval under larger SZA conditions. ";
} else {
   print "<li> FPM Temperature: the longwave infrared focal plane temperature of ABI onboard GOES-17. A high FPM temperature induces noises in infrared signals with long wavelengths, and thus degrades the LST quality and its agreement with the corresponding GOES-18 LST. </li>";
}
print "</ul>";
print "<br>";
foreach ($modes as $mode) {
   $myfile = "__products/{$product}/comparison/G17_G18/d{$lproduct}_g17_g18_{$mode}.png";
   if (!file_exists($myfile)) {
     continue;
   }
   print "</ul>";
   
   print "<a class='lightbox' href='#{$mode}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' style='max-width:720px; ' />";
   print "</a>";
   print "<div class='lightbox-target' id='{$mode}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' />";
   print "<a class='lightbox-close' href='#'></a>";
   print "</div>";
}
?>
      </div>
   </td>
</tr>
<?php
// insert footer & javascript include for menuController
require('includes/footer.inc');
?>
</body>
</html>
