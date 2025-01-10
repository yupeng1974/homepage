<h3 style="text-align:center">Team Members: Yunyue Yu, Jingjing Peng, and Peng Yu</h3>
<br>
<h2> Land Surface Albedo </h2>
<p> The ABI L2 LSA provides instantaneous shortwave broadband blue-sky Albedo over wavelengths between 0.4 and 3.0 μm. It is defined as the ratio between outgoing and incoming shortwave irradiance under natural illumination at the earth surface. The product includes associated data quality flags and percentage of each flag value, mean, maximum, minimum, and standard deviation of LSA. The LSA product provides spatial and temporal continuous surface albedo information. The LSA value under clear-sky condition is comparable and commits well with the ground measurements; while the LSA value under cloudy-sky conditions provides the contemporary surface status under clear-sky condition, not comparable with the simultaneous ground reference with influence from the cloud. </p>
<ul style="list-style-type:disc;"; class="tighter"> 
   <li> Measurement range: 0-1 </li>
   <li> Temporal coverage: Solar zenith angle at < 67 degrees. Daytime solar zenith angle </li>
   <li> Refresh: 10 minutes for FD, and 5 minutes for CONUS </li>
   <li> Spatial coverage: Full Disk, CONUS, Meso </li>
   <li> Spatial resolution: 2 km </li>
   <li> Quality: The requirement of ABI LSA product accuracy is 0.08 Albedo Units; and that of precision is 10%. According to the validation of the product from June-August, the products from both satellites have demonstrated a much smaller bias and higher precision. </li>
</ul>
<p> GOES-17 was placed into Mode 6 on April 2, 2019. Despite this change, its LSA product continues to be generated with the same refresh rate and spatial resolution. </p>
<p> Status of the current GOES-16 and GOES-17 LSA products and any remaining known issues that are being resolved: </p> 
<ol type="1">
   <li> Missing LSA images occur randomly due to upstream AOD input not being available for a scene, thus causing the blocks of fill data. A mitigation plan is proposed by using closest AOD within the day and an AOD climatology in development by the STAR AOD team. </li>
   <li> The algorithm uses the latest clear-sky TOA reflectance observations to simulate BRDF model being used in the following day’s LSA retrieval. Thus, there is at least a one-day lag in reflecting some surface dynamic events, such as seasonal snow or fire, depending on the length of the previous cloud coverage period. </li>
   <li> The current summertime validation results suggest a minor over-estimation of ground shortwave albedo than the in-situ measurements. </li>
   <li> The AOD related quality flag is to be refined. The current version denotes only AOD availability; however, the new version will demonstrate the AOD quality and if the AOD data source is from a real-time product or a climatology. </li>
</ol>
<br>
<h2> Land Surface Reflectance </h2>
<p> The ABI L2 BRF provides the spectral land surface reflectance, i.e., a ratio between outgoing radiance at one given direction and incoming radiance at another given direction (same or different from the incoming direction). In this product, the outgoing direction is the direction of the satellite view, while the incoming direction is the direction of solar illumination. The BRF is produced at the following wavelengths: 0.47 μm, 0.64 μm, 0.86 μm, 1.61 μm, and 2.26 μm, corresponding to bands 1, 2, 3, 5, 6. The product includes associated data quality flags and percentage of each flag value, mean, maximum, minimum, and standard deviation of BRF of each band. The ABI BRF provides spatial and temporal continuous surface reflectance information. The ABI BRF under clear-sky condition is comparable and commits well with the ground measurements; the GOES-R BRF under cloudy-sky conditions provides the contemporary surface status under clear-sky condition, thus incomparable with the ground reference influenced by the cloud. </p>
<ul style="list-style-type:disc;"; class="tighter"> 
   <li> Measurement range: 0-2 </li>
   <li> Temporal coverage: Solar zenith angle at < 67 degrees. Daytime solar zenith angle </li>
   <li> Refresh: 10 minutes for FD, and 5 minutes for CONUS </li>
   <li> Spatial coverage: Full Disk, CONUS, Meso </li>
   <li> Spatial resolution: 2 km </li>
   <li> Quality: The requirement of ABI BRF product accuracy is 0.08; and that of precision is 0.08. According to the validation of the product from June-August, the product of the both satellites have met the requirement in all bands. </li>
</ul>
<p> GOES-17 was placed into Mode 6 on April 2, 2019. Despite this change, its BRF product continues to be generated with the same refresh rate and spatial resolution. </p>
<p> Status of the current GOES-16 and GOES-17 BRF products and any remaining known issues that are being resolved: </p> 
<ol type="1">
   <li> Missing BRF images occur randomly due to upstream AOD input not being available for a scene, thus causing the blocks of fill data. A mitigation plan is proposed by using closest AOD within the day and an AOD climatology in development by the STAR AOD team. </li>
   <li> The BRF1 (blue band BRF) is more sensitive to AOD input than other bands and shows a higher relative error in comparison with reference value from atmospherically corrected BRF using AOD ground measurements, although all the channels are within the mission requirements. </li>
   <li> A relatively limited summertime validation dataset was examined, so the panel recommends continuing to add to the validation dataset with a more diverse set of observations, particularly during the wintertime to capture some snow cases. </li>
   <li> Access to BRF input intermediate product to four-level cloud conditions has inhibited the efficiency of product monitoring. It is expected that the four-level cloud mask will be written into the BRF quality flag in the future. </li>
</ol>
