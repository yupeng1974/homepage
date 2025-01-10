<?php
if ($product == "LST" and $sat == "GOESS") {
  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: some GOES-17 results may be degraded due to overheating of its ABI sensor. </p>";
}

//if ($sat == "GOEST") {
//  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: The results are based on GOES-18 Preliminary, Non-Operational Data. </p>";
//}
//if ($sat == "JPSS2") {
//  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: The results are based on NOAA-21 Preliminary, Non-Operational Data. </p>";
//}
if (substr($sat, 0, 3) == "HIM") {
  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: The following results are experimental and non-operational. </p>";
}
if ($sat == "GOESU") {
  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: The following results are based on GOES-19 Preliminary, Non-Operational Data. </p>";
}
if (strpos($msat, 'G19') !== False) {
  print "<p style='font-size:14px; font-weight:bold; color:red'> Note: The following results are based on GOES-19 Preliminary, Non-Operational Data. </p>";
}
?>
