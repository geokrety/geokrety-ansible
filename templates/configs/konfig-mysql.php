<?php

// MySQL config
$config['host'] = '{{ params.db_host | default(geokrety_params.db_host) }}';
$config['username'] = '{{ params.db_user }}';
$config['pass'] = '{{ params.db_password }}';
$config['db'] = '{{ params.db_name }}';
$config['charset'] = '{{ params.db_charset | default(geokrety_params.db_charset) }}';

define('CONFIG_HOST', $config['host']);
define('CONFIG_USERNAME', $config['username']);
define('CONFIG_PASS', $config['pass']);
define('CONFIG_DB', $config['db']);
define('CONFIG_CHARSET', $config['charset']);
