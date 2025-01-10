
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
</head>
<body>
<?php
// insert banner rows
require('includes/banner.inc');
require('includes/params.inc');
// insert gray link bar
require('includes/toolBar.inc');
?>
<tr>
<td id="navCell">
<?php
// insert navigation div
require('includes/NavDiv.inc');
$product = $_GET["product"];
$sat = $_GET["sat"];
if (!in_array($sat, $choices_sat) & isset($sat)) $sat = $choices_sat[0];
if (!in_array($product, $choices_product) & isset($product)) $product = $choices_product[0];
require('includes/prepara.inc');
if (isset($product)) {
  $fname_inc = strtolower($product) . ".inc";
  $title = $pnames["$product"];
} else {
  $fname_inc = 'team.inc';
  $title = "Land Product Development Team";
}
if (isset($sat)) {
  $fname_inc = strtolower($sensor) . "_" . $fname_inc;
  $title = $mnames["$sat"] . " " . $title;
}
?>
</td>
<title> <?= $title ?> </title>
<td class="mainPanel"><a name="skipTarget"></a>
<div class="padding" >
<h1 style="text-align:center"> <?= $title ?> </h1>
<?php
require("includes/{$fname_inc}");
?>
</div>
</td>
</tr>
<?php
// insert footer & javascript include for menuController
require('includes/footer.inc');
?>
</table>
</body>
</html>
