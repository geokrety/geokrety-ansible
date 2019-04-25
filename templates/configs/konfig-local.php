<?php

// Site url
$config['adres'] = 'https://geokrety.org/';

// Password hashing
// Crypt alorythms https://en.wikipedia.org/wiki/Crypt_(C)#Key_derivation_functions_supported_by_crypt
$config['sol'] = '"{{ params.password_hash | default(geokrety_params.password_hash) | regex_replace('\$\$', '$') }}"'; # crypt() hash
$config['sol2'] = '{{ params.password_hash_legacy | default(geokrety_params.password_hash_legacy) }}'; # some random string

// Api2login hashes
$config['md5_string1'] = '{{ params.api2login_md5_str1 | default(geokrety_params.api2login_md5_str1) }}'; # hex chars
$config['md5_string2'] = '{{ params.api2login_md5_str2 | default(geokrety_params.api2login_md5_str2) }}'; # hex chars

// Cryptographic vectors
define('SWISTAK_KEY', '{{ params.swistak_key | default(geokrety_params.swistak_key) }}'); # some random string
define('SWISTAK_IV32', '{{ params.swistak_iv32 | default(geokrety_params.swistak_iv32) }}'); # 32 hex chars

// Create news password
$config['news_password'] = '{{ params.news_password | default(geokrety_params.news_password) }}';

// jRating access token
$config['jrating_token'] = '{{ params.jrating_token | default(geokrety_params.jrating_token) }}';

// admin users
$config['superusers'] = array('1', '6262', '26422', '35313');

// export day limit bypass
$kocham_kaczynskiego = '{{ params.export_bypass_token | default(geokrety_params.export_bypass_token) }}';

// Google map Api key
$GOOGLE_MAP_KEY = '{{ params.google_map_key | default(geokrety_params.google_map_key) }}';
$GOOGLE_RECAPTCHA_PUBLIC_KEY = '{{ params.google_recaptcha_public_key | default(geokrety_params.google_recaptcha_public_key) }}';
$GOOGLE_RECAPTCHA_SECRET_KEY = '{{ params.google_recaptcha_secret_key | default(geokrety_params.google_recaptcha_secret_key) }}';

// Email gateway
$config['pop_hostname'] = '{{ params.pop_hostname | default(geokrety_params.pop_hostname) }}';
$config['pop_port'] = {{ params.pop_port | default(geokrety_params.pop_port) }};
$config['pop_tls'] = {{ params.pop_tls | default(geokrety_params.pop_tls) }};
$config['mail_username'] = '{{ params.mail_username | default(geokrety_params.mail_username) }}';
$config['mail_password'] = '{{ params.mail_password | default(geokrety_params.mail_password) }}';

// Sentry integration
$config['sentry_dsn'] = '{{ params.sentry_dsn | default(geokrety_params.sentry_dsn) }}';
$config['sentry_env'] = '{{ params.sentry_env | default(geokrety_params.sentry_env) }}';

// Piwik conf
$config['piwik_url'] = '{{ params.piwik_url | default(geokrety_params.piwik_url) }}';
$config['piwik_site_id'] = '{{ params.piwik_site_id | default(geokrety_params.piwik_site_id) }}';
$config['piwik_token'] = '{{ params.piwik_token | default(geokrety_params.piwik_token) }}';

// Disable errors
// error_reporting(0);
