<?php
// insert header that forbids caching and carries doctype
// and html tag;
require('includes/noCacheHeader.inc');
?>
<meta name="verify-v1" content="CwbLBcFt9+GqRTgaLZsENmPnSWNB5MStHHdYsB7U2nI=" />
<title>Monthly Land Surface Temperature Anomaly Summary</title>
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
$region = $_GET["region"];
$time = $_GET["time"];
$year = $_GET["year"];
$month = $_GET["month"];
$product = "LST";
$dir_root = "__products/LST/monthly";
$sats = array_map('basename', glob("{$dir_root}/*"));
if (!isset($sat) || !in_array($sat, $sats)) {
  $sat = "JPSS";
}
$years = array_map("basename", glob("{$dir_root}/{$sat}/*"));
if (!isset($year) || !in_array($year, $years)) {
  $year = max($years);
}
$months = array_map("basename", glob("{$dir_root}/{$sat}/{$year}/*"));
if (!isset($month) || !in_array($month, $months)) {
  $month = max($months);
}
$regions = array_map("basename", glob("{$dir_root}/{$sat}/{$year}/{$month}/*"));
if (!isset($region) || !in_array($region, $regions)) {
  $region = "Global";
}
$times = array_map("basename", glob("{$dir_root}/{$sat}/{$year}/{$month}/{$region}/*"));
if (!isset($time)) {
  $time = "day";
}
if (!in_array($time, $choices_time)) $time = $choices_time[0];
$sat2s = array("SNPP" => "Suomi-NPP", "JPSS1" => "NOAA-20", "JPSS" => "Merged JPSS");
$sat2 = $sat2s["$sat"];
$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F');
if ($region == "South.America" || $region == "Africa") {
  $picsize = 350;
} else {
  $picsize = 600;
}
$mydir = "{$dir_root}/{$sat}/{$year}/{$month}/{$region}/${time}"
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
            <h2 align="center"> Land Surface Temperature Anomaly (<?= $region ?>): <?= $monthName ?>, <?= $year ?> </h2>
            <br>
            <h2 align="left"> Summary </h2>
<?php
$fname_sum = "__products/LST/summary/{$year}/{$month}.inc";
if (file_exists($fname_sum)) {
  print "<p> The monthly LST analysis was based on the LST of {$monthName}, {$year}. A multi-year global monthly LST <a href='index.php?product=Climatology'>climatology</a> was generated as a reference. Monthly daytime LST, monthly daytime LST climatology, monthly LST anomaly, monthly LST variability, and monthly LST variability climatology were shown. The LST of this month is summarized as follows: </p>";
  require("__products/LST/summary/{$year}/{$month}.inc");
  print "<p> A brief summary can be accessed <a href='__products/LST/summary/{$year}/LST_Anomaly_monthly_{$year}{$month}.pdf' target='_blank'>here</a>, once it is available. ";
  print "<p> Your feedback is welcome if you find other areas/features of your interest. </p>";
} else {
  print "<p> The analysis for {$monthName} {$year} is not available. We started this since June 2021, please use the following menu to choose a month since then.</p>";
}
require('includes/smenu.inc');
if (file_exists($fname_sum)) {
  print "<a class='lightbox' href='#mean'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_mlst_{$year}{$month}_{$time}_{$region}.png' style='max-width:{$picsize}px; ' />";
  print "</a>";
  print "<div class='lightbox-target' id='mean'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_mlst_{$year}{$month}_{$time}_{$region}.png' />";
  print "<a class='lightbox-close' href='#'></a>";
  print "</div>";
  print "<a class='lightbox' href='#climatology'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/VIIRS_clim_mlst_{$month}_{$time}_{$region}.png' style='max-width:{$picsize}px; ' />";
  print "</a>";
  print "<div class='lightbox-target' id='climatology'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/VIIRS_clim_mlst_{$month}_{$time}_{$region}.png'/>";
  print "<a class='lightbox-close' href='#'></a>";
  print "</div>";
  print "<a class='lightbox' href='#anomaly'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_mlsta_{$year}{$month}_{$time}_{$region}.png' style='max-width:{$picsize}px; ' />";
  print "</a>";
  print "<div class='lightbox-target' id='anomaly'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_mlsta_{$year}{$month}_{$time}_{$region}.png'/>";
  print "<a class='lightbox-close' href='#'></a>";
  print "</div>";
  $fname_hgt = "{$mydir}/jpss_lsta_hgt_{$year}{$month}_{$time}.png";
  if (file_exists($fname_hgt)) {
    print "<a class='lightbox' href='#anomaly_hgt'>";
    print "<img class ='img-fluid rounded' src='{$fname_hgt}' style='max-width:{$picsize}px; ' />";
    print "</a>";
    print "<div class='lightbox-target' id='anomaly_hgt'>";
    print "<img class ='img-fluid rounded' src='{$fname_hgt}'/>";
    print "<a class='lightbox-close' href='#'></a>";
    print "</div>";
  }
  print "<a class='lightbox' href='#variability'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_stds_{$year}{$month}_{$time}_{$region}.png' style='max-width:{$picsize}px; ' />";
  print "</a>";
  print "<div class='lightbox-target' id='variability'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/{$sat}_VIIRS_monthly_stds_{$year}{$month}_{$time}_{$region}.png'/>";
  print "<a class='lightbox-close' href='#'></a>";
  print "</div>";
  print "<a class='lightbox' href='#clim-variability'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/VIIRS_clim_stds_{$month}_{$time}_{$region}.png' style='max-width:{$picsize}px; ' />";
  print "</a>";
  print "<div class='lightbox-target' id='clim-variability'>";
  print "<img class ='img-fluid rounded' src='{$mydir}/VIIRS_clim_stds_{$month}_{$time}_{$region}.png'/>";
  print "<a class='lightbox-close' href='#'></a>";
  print "</div>";
  print "</div>";
  print "</td>";
  print "</tr>";
}
// insert footer & javascript include for menuController
require('includes/footer.inc');
?>
</body>
</html>
