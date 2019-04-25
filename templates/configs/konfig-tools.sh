GEOKRETY_WWW=/var/www/html/

KOCHAM_KACZYNSKIEGO={{ params.export_bypass_token | default(geokrety_params.export_bypass_token) }}
GOOGLE_MAP_KEY={{ params.google_map_key | default(geokrety_params.google_map_key) }}
