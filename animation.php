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
$sat = $_GET["sat"];
$mode = $_GET["mode"];
$product = $_GET["product"];
$variable = $_GET["variable"];
#$version = $_GET["version"];
if (!isset($sat)) {
  $sat = "GOESR";
  $mode = "2KMFD";
  $product = "LST";
}
if (!in_array($sat, $choices_sat) & isset($sat)) $sat = $choices_sat[0];
if (!in_array($mode, $choices_mode) & isset($mode)) $mode = $choices_mode[0];
//if (strpos($sat, "HIMAWARI") == 0 & isset($mode)) $mode = "FLDK";
if (!in_array($product, $choices_product) & isset($product)) $product = $choices_product[0];
if (!in_array($variable, $choices_variable) & isset($variable)) $variable = $choices_variable[0];
if (!in_array($version, $choices_version) & isset($version)) $version = $choices_version[0];
$action = 'animation';
require('includes/prepara.inc');
if (!isset($variable)) {
  $variable = $product;
}
$title = "{$sat2} {$sensor} ${mode} {$variable} ${freq} Animation";
?>
<title> <?= $title ?> </title>
   <tr>
      <td id="navCell">
         <?php
            // insert navigation div
            require('includes/NavDiv.inc');
         ?>
      </td>
      <td class="mainPanel"><a name="skipTarget"></a>
         <div class="padding" >
            <h2 align="center" style="font-size:20px;"> <?= $title ?> </h2>
            <br>
<?php
$mydir = "__products/{$product}/{$sat}/{$mode}/images";
if (isset($mode)) {
   $myfiles = glob("{$mydir}/{$sat}_{$sensor}_{$mode}_${product}_{$variable}.gif");
} else {
   $myfiles = glob("{$mydir}/{$sat}_{$sensor}_*${product}*_{$variable}.gif");
}
$tmps = glob("{$mydir}/{$sat}_{$sensor}_*${product}_*.gif");
foreach ($tmps as $tmp) {
   $dummy = explode('.', $tmp);
   $dummy = explode('_', $dummy[0]);
   $vvv = $dummy[count($dummy)-1];
   if (!isset($variables)) {
      $variables = array($vvv);
   } else {
      if (!in_array($vvv, $variables)) {
         array_push($variables, $vvv);
      }
   }
}
if (!in_array($variable, $choices_variable) & isset($variable)) $variable = $variables[0];
#if ($product == "LSA" and $sensor == "VIIRS") {
#   $versions = array("v1r4(Operational)");
#   array_push($versions, "v2r2");
#} 
if (!in_array($version, $choices_version) & isset($version)) $version = $versions[0];
require('includes/smenu.inc');
require('includes/caveat.inc');
if (count($myfiles) == 0) {
  print "<p style='font-size:14px; font-weight:bold;'>The results are currently unavailable and will be updated once they are ready.</p>";
}
foreach ($myfiles as $myfile) {
   $dummy = explode('_', basename($myfile));
   $dummy2 = $dummy[count($dummy)-2];
   if ($dummy[count($dummy)-2] == 'np' or $dummy[count($dummy)-2] == 'sp') {
      $psz = 357;
   } else {
      $psz = 720;
   }
   if (isset($version)) {
      if ($version == "v1r4(Operational)") {
         if ($dummy[3] == "v2r2") { 
            continue;
         }
      } else {
         if ($dummy[3] != $version) { 
            continue;
         }
      }
   }
   print "<a class='lightbox' href='#{$dummy2}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' style='max-width:{$psz}px; ' />";
   print "</a>";
   print "<div class='lightbox-target' id='{$dummy2}'>";
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
