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
require('includes/params.inc');
// insert gray link bar
require('includes/toolBar.inc');
$msat = $_GET["msat"];
$product = $_GET["product"];
$variable = $_GET["variable"];
if (!isset($product)) {
  $product = "LST";
}
if (!in_array($product, $choices_product)) $product = $choices_product[0];
require('includes/prepara.inc');
if (!isset($variable)) {
  $variable = $product;
}
if (!in_array($variable, $choices_variable)) $variable = $choices_variable[0];
?>
<title> Comparison between GOES </title>
<tr>
   <td id="navCell">
      <?php
         // insert navigation div
         require('includes/NavDiv.inc');
      ?>
   </td>
   <td class="mainPanel"><a name="skipTarget"></a>
      <div class="padding" >
         <h2 align="center" style="font-size:20px;">Inter-sensor <?= $variable ?> Comparison </h2>
         <br>
         <p> NOAA's operational GOES-East (GOES-16) and GOES-West (GOES-18) are observing the earth from 75&#186; W and 137&#186; W, respectively. Besides, GOES-Test (GOES-19) is currently deployed at 89.5&#186; W. Despite their different locations and viewing geometry, they share common spatial coverage at land mainly in North America. In order to monitor the Advanced Baseline Imager (ABI) land products' performance and study the difference between these two platforms, their co-located retrievals in a region of interest (ROI) between 30&#186; N and 40&#186; N, and between 90&#186; W and 100&#186; W are routinely compared. The ROI is selected to minimize the uncertainty from terrain caused parallax effect and view zenith angle difference. Given the difference in their viewing geometry, a reprojection of the product from one satellite to the other is applied before the comparison region is subset to achieve an accurate geolocation match. The mean and the standard deviation of their difference are then assessed and demonstrated in the following figure(s). </p>
<?php
print "<br>";
$mydir = "__products/{$product}/comparison";
$dummys = glob("{$mydir}/*");
$msats = [];
foreach ($dummys as $dummy) {
  $sdir = basename($dummy);
  if (strpos($sdir , 'G17') === False) {
    $msats[] = $sdir;
  }
}
if (!isset($msat) || !in_array($msat, $choices_msat)) {
  $msat = 'G16_G18';
}
$mydir = "__products/{$product}/comparison/{$msat}";
$myfiles = glob("{$mydir}/Diff_{$msat}_*_{$product}*{$variable}*.png");
$tmps = glob("{$mydir}/Diff_{$msat}_*_{$product}_*.png");
$variables = [];
foreach ($tmps as $tmp) {
  $dummy = explode('.', $tmp);
  $dummy = explode('_', $dummy[0]);
  $dummy = substr($dummy[count($dummy)-1], 0, 3);
  if (!in_array($dummy, $variables)) {
    array_push($variables, $dummy);
  }
}
if (count($variables) == 1) {
  unset($variables);
}
unset($sats);
if (count($variables) > 1 || count($msats) > 1) {
  require('includes/smenu.inc');
}
require('includes/caveat.inc');
if (count($myfiles) == 0) {
  print "<p style='font-size:14px; font-weight:bold;'>The results are currently unavailable and will be updated once they are ready.</p>";
}
foreach ($myfiles as $myfile) {
   $dummy = explode('_', $myfile);
   $dummy2 = $dummy[count($dummy)-2];
   if ($dummy[count($dummy)-2] == 'np' or $dummy[count($dummy)-2] == 'sp') {
      $psz = 357;
   } else {
      $psz = 720;
   }
   print "<a class='lightbox' href='#{$myfile}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' style='max-width:{$psz}px; ' />";
   print "</a>";
   print "<div class='lightbox-target' id='{$myfile}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' />";
   print "<a class='lightbox-close' href='#'></a>";
   print "</div>";
}
print "<br>";
print "<br>";
print "<p> Two indices are provided:</p>";
print "<ul style='list-style-type:disc;'; class='tighter'> ";
print "<li> Mean difference: the average of {$variable} difference over all matchups with all qualified retrievals to show the bias between two products; </li>";
print "<li> Standard deviation: the standard deviation of {$variable} difference over all qualified matchups with valid retrievals to show the scattering of the difference; </li>";
print "</ul>";
if ($variable == "LST") {
  print "<p> Note: Land surface temperature product behaves differently during daytime and nighttime, the comparison are separated by these two scenario: UTC hours 7-9 are used to demonstrate the nighttime case while 19-21 the daytime one. All valid LST retrievals from both satellites during these hours of the same day count as qualified retrievals.</p>";
} elseif ($variable == "LSA") {
  print "<p> Note: Land surface albedo is a daytime product available under SZA<70°. Matchups at UTC hour 19 are used to for the comparison. All LSA retrievals at this hour with retrieval path of 0 count as qualified retrievals.</p>";
} elseif ($variable == "BRF") {
  print "<p> Note: Land surface bidirectional reflectance factor is a daytime product available under SZA<70°. Matchups at UTC hour 19 are used to for the comparison. All BRF retrievals at this hour with retrieval path of 2 count as qualified retrievals.</p>";
} else {
}
if ($variable != "BRF") {
  print "<p> For users interested in difference between GOES-18 and GOES-17, please refer to their <a href='comparison_g17_g18.php?product=$product'>historical comparison results</a> before the latter was put on storage.</p>";
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
