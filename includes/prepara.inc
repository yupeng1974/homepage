<?php
$abi = array("GOESR", "GOESS", "GOEST", "GOESU");
$ahi = array("HIMAWARI8", "HIMAWARI9");
$viirs = array("SNPP", "JPSS1", "JPSS2");
$merged_products = array("LST", "LSA");
#if ($product == "LST" and $action == "animation") {
if ($action == "animation" & in_array($product, $merged_products)) {
  array_push($viirs, "JPSS");
}
$sat2s = array("GOESR" => "GOES-East", "GOESS" => "GOES-17", "GOEST" => "GOES-West", "GOESU" => "GOES-19", "SNPP" => "Suomi-NPP", "JPSS1" => "NOAA-20", "JPSS2" => "NOAA-21", "JPSS" => "Merged JPSS", "HIMAWARI8" => "HIMAWARI-8", "HIMAWARI9" => "HIMAWARI-9");
$pnames = array("LST" => "Land Surface Temperature", "LSA" => "Surface Albedo", "VI" => "Vegetation Index", "GVF" => "Green Vegetation Fraction", "SR" => "Surface Reflectance", "Applications" => "Land Product Applications");
$mnames = array("GOESR" => "GOES-R", "GOESS" => "GOES-R", "GOEST" => "GOES-R", "GOESU" => "GOES-R", "SNPP" => "JPSS", "JPSS1" => "JPSS", "JPSS2" => "JPSS", "JPSS" => "JPSS", "HIMAWARI8" => "HIMAWARI", "HIMAWARI9" => "HIMAWARI");
$sat2 = $sat2s["$sat"];
if (in_array($sat, $abi)) {
  $sats = $abi;
  $sensor = "ABI";
  $freq = "Daily";
  if ($product == "LST") {
    $modes = array("CONUS", "2KMFD", "FD");
  } else {
    $modes = array("CONUS", "FD");
  }
} elseif (in_array($sat, $ahi)) {
  $sats = $ahi;
  $sensor = "AHI";
  $freq = "Daily";
  $modes = array("FLDK", "FLDK");
} else {
  $sats = $viirs;
  $sensor = "VIIRS";
  $freq = "Weekly";
}
?>
