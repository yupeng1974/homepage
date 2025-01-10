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
$network = $_GET["network"];
if (!isset($sat)) {
  $sat = "GOESR";
  $mode = "2KMFD";
  $product = "LST";
  $network = "All";
}
if (!in_array($sat, $choices_sat) & isset($sat)) $sat = $choices_sat[0];
if (!in_array($mode, $choices_mode) & isset($mode)) $mode = $choices_mode[0];
if (!in_array($product, $choices_product) & isset($product)) $product = $choices_product[0];
if (!in_array($network, $choices_network) & isset($network)) $network = $choices_network[0];
$action = 'rbased';
require('includes/prepara.inc');
$modes = array("CONUS", "2KMFD");
$sats = array("GOESR", "GOEST");
$title = "{$sat2} {$sensor} ${mode} {$product} R-based Validation Results";
$mydir = "__products/{$product}/{$sat}/{$mode}/rbased";
$myfiles = glob("{$mydir}/*.png");
$networks = array();
for ($i = 1; $i <= count($myfiles); $i++) {
  $dummy = explode('-', $myfiles[$i]);
  if (count($dummy) <= 2) {
    continue;
  }
  if ($sensor == 'ABI') {
    $dummy = $dummy[2];
  } else {
    $dummy = $dummy[1];
  }
  if (!in_array($dummy, $networks)) {
    array_push($networks, $dummy);
  }
}
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
require('includes/smenu.inc');
require('includes/caveat.inc');
$myfiles = glob("{$mydir}/*{$network}*.png");
if (count($myfiles) == 0) {
  print "<p>The results are currently unavailable and will be updated once they are ready.</p>";
}
sort($myfiles, SORT_STRING | SORT_FLAG_CASE);
foreach ($myfiles as $myfile) {
   $dummy = explode('-', $myfile);
   if ($sensor == 'ABI') {
     $sit = implode('-', array($dummy[3], $dummy[6]));
   } else {
     $sit = implode('-', array($dummy[2], $dummy[5]));
   }
   if (substr($sit, -1) == '-') {
     $sit = substr($sit, 0, -1);
   }
   if (isset($mode)) {
     $sit = $dummy[3];
   } else {
     $sit = $dummy[2];
   }
   if (strpos($myfile, 'color') !== false) {
     $sit = implode('-', array($sit, 'color'));
   }
   print "<a class='lightbox' href='#{$sit}'>";
   print "<img class ='img-fluid rounded' src='{$myfile}' style='max-height:340px;'/>";
   print "</a>";
   print "<div class='lightbox-target' id='{$sit}'>";
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
