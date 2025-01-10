
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

// insert gray link bar
require('includes/toolBar.inc');
?>
<tr>
<td id="navCell">
<?php
// insert navigation div
require('includes/NavDiv.inc');
?>
</td>
<title> Test </title>
<td class="mainPanel"><a name="skipTarget"></a>
<div class="padding" >
<h2 align="center" style="font-size:20px;"> Prototype multi-Satellite Land Surface Temperature Global Mosaic</h2>
<br>
<p> The land team is working to extend its footprint to geostationary satellites other than NOAA’s own GOES series. The LST retrieval algorithm currently in operation for GOES satellites was adapted and applied to Himawari-8 and and Meteosat-8 (11). The experimental product from the three and NOAA's GOES-16 and GOES-17 were used to derive a prototype multi-geostationary satellite LST mosaic. Different from the global coverage by polar-orbit satellites, the measurement was taken simultaneously with global coverage. This result is considered experimental and for demonstration purpose only at the current stage.</p>
<br>
<a class="lightbox" href="#aaa">
<img class ="img-fluid rounded" src="__products/LST/others/global_geo_lst_20200315.gif" alt="NOAA Center for Satellite Applications and Research Banner" title="NOAA Center for Satellite Application and Research" style=" overflow:hidden; max-width:720px; " />
</a>
<div class="lightbox-target" id="aaa">
<img class ="img-fluid rounded" src="__products/LST/others/global_geo_lst_20200315.gif" />
<a class="lightbox-close" href="#"></a>
</div>
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

