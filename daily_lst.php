<?php
// insert header that forbids caching and carries doctype
// and html tag;
require('includes/noCacheHeader.inc');
?>
<meta name="verify-v1" content="CwbLBcFt9+GqRTgaLZsENmPnSWNB5MStHHdYsB7U2nI=" />
<title>Daily Land Surface Temperature Anomaly</title>
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

$time = $_GET["time"];
$dave = $_GET["dave"];
$dir_root = "__products/LST/daily";
$daves = array_map("basename", glob("{$dir_root}/*"));
if (!isset($dave)) {
  $dave = "3days";
}
$times = array_map("basename", glob("{$dir_root}/{$dave}/*"));
if (!isset($time)) {
  $time = "day";
}
if (!in_array($dave, $choices_dave)) $dave = $choices_dave[0];
if (!in_array($sat, $choices_sat)) $sat = $choices_sat[0];
$mydir = "{$dir_root}/{$dave}/{$time}";
$picsize = 600;
?>
<tr>
   <td id="navCell">
      <?php
         // insert navigation div
         require('includes/NavDiv.inc');
      ?>
   </td>
   <td class="mainPanel"><a name="skipTarget"></a>
      <div class="padding" >
         <h2 align="center" style="font-size:20px;"><?= $dave ?>-average daily LST animations: <?= $time ?>time</h2>
         <br>

<?php
require('includes/smenu.inc');

print "<a class='lightbox' href='#dlst1'>";
print "<img class ='img-fluid rounded' src='{$mydir}/jpss_viirs_lst_{$dave}_{$time}.gif' style='max-width:{$picsize}px; ' />";
print "</a>";
print "<div class='lightbox-target' id='dlst1'>";
print "<img class ='img-fluid rounded' src='{$mydir}/jpss_viirs_lst_{$dave}_{$time}.gif'/>";
print "<a class='lightbox-close' href='#'></a>";
print "</div>";
print "<a class='lightbox' href='#dlst2'>";
print "<img class ='img-fluid rounded' src='{$mydir}/jpss_viirs_lsta_{$dave}_{$time}.gif' style='max-width:{$picsize}px; ' />";
print "</a>";
print "<div class='lightbox-target' id='dlst2'>";
print "<img class ='img-fluid rounded' src='{$mydir}/jpss_viirs_lsta_{$dave}_{$time}.gif'/>";
print "<a class='lightbox-close' href='#'></a>";
print "</div>";
?>

   </td>
</tr>
<?php
// insert footer & javascript include for menuController
require('includes/footer.inc');
?>
</body>
</html>
