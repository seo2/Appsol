<?php
//$url = "http://walker.dgf.uchile.cl/Explorador/Solar/visor.php?options={\"lon\":-70.137,\"lat\":-27.994,\"action\":\"chart_anual_cycle_global\",\"rated_capacity_kW\":1,\"eff_global\":80,\"panel_eff_curve\":[[1000,100],[800,99],[600,97],[400,95],[200,90],[0,80]],\"variable\":null }";
//$opts = array(
// 'http'=>array(
//    'method'=>"GET",
//    'header'=>"Accept-language: en"
//  )
//);
//echo $url;
//print_r($opts);
//$context = stream_context_create($opts);

//$fp = fopen($url,'r', false, $context);
//fpassthru($fp);
//fclose($fp)
//$string = json_decode(file_get_contents($url));
//echo($fp);

$url = 'http://walker.dgf.uchile.cl/Explorador/Solar/visor.php?options="lon":-70.137,"lat":-27.994,"action":"chart_anual_cycle_global","rated_capacity_kW":1,"eff_global":80,"panel_eff_curve":[[1000,100],[800,99],[600,97],[400,95],[200,90],[0,80]],"variable":null}"lon":-70.137,"lat":-27.994,"action":"chart_anual_cycle_global","rated_capacity_kW":1,"eff_global":80,"panel_eff_curve":[[1000,100],[800,99],[600,97],[400,95],[200,90],[0,80]],"variable":null}';
//$url = 'http://www.google.cl';
echo(file_get_contents($url));
?>