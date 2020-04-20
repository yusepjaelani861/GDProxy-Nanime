<?php 
/*|---------------------------------------------
  |     YDrive - Google Drive Video Proxy
  |  ©2017-2020 Yotsubal - YotsubalRU PROJECT 
  |---------------------------------------------
  */
  
// Demo

include("core.php");
// Init
$s = new YDrive();
// get Resolution List
//print_r($s->getResolution());
// set new ID df
$s->setID($_GET["id"] ?? "");
// set Resolution
$s->setResolution($_GET["m"]  ?? "");
// download Link 
$s->setDownload($_GET["alt"]  ?? "");
// Start Stream
$s->stream();
?>