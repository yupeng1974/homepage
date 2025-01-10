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
$sat = "HIMAWARI8";
$sat2 = "Himawari-8";
$mode = "FLDK";
$product = "LST";
$variable = "LST";
$sensor = "AHI";
$freq = "Daily";
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
<br>
<?php
$mydir = "__products/{$product}/{$sat}/{$mode}/images";
$myfiles = glob("{$mydir}/{$sat}_{$sensor}_{$mode}_${product}_{$variable}.gif");
foreach ($myfiles as $myfile) {
   $dummy = explode('_', $myfile);
   $dummy2 = $dummy[count($dummy)-2];
   if ($dummy[count($dummy)-2] == 'np' or $dummy[count($dummy)-2] == 'sp') {
      $psz = 357;
   } else {
      $psz = 720;
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
