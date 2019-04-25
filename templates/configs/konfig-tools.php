<?php

$geokrety_www="/var/www/html/";

// export day limit bypass
$kocham_kaczynskiego = '{{ params.export_bypass_token | default(geokrety_params.export_bypass_token) }}';

//~ geonames
$geonamesEndpoint='http://api.geonames.org';
$geonamesUsername='{{ params.geonames_username | default(geokrety_params.geonames_username) }}';

?>
