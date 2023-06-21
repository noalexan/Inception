
<?php

define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', '6379');
define('WP_REDIS_PASSWORD', '${REDIS_PASSWORD}');
define('WP_REDIS_SELECTIVE_FLUSH', true);

define('DB_NAME', '${MYSQL_DATABASE}');
define('DB_USER', '${MYSQL_USER}');
define('DB_PASSWORD', '${MYSQL_PASSWORD}');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY', 'B8D0($O}}<E,xb2yNaBU~+CaN=[O+o$g-]F1lUTG0+|S;;WD5*WIfno<6C`:&_`b');
define('SECURE_AUTH_KEY', '>6B]V$D>xSK&sz/yik)26]Uwq}nEt5X+Me1OUpYN$$r`_5VU_Q%vE!HquLY,S1/2');
define('LOGGED_IN_KEY', '8LzeDyGt|By<;]S&7(1eME@8~xK+xm^v1FJ2[#SgQ0V6xhwd-D-Yn*tPw_x7qfWS');
define('NONCE_KEY', '=zm_b0Lp>1g|VM-|S:;|z<$).F!4s%3%)N8?Pxoa.I7; +C3wXgS:)-2s^?)G<xk');
define('AUTH_SALT', '=j~S_`(+2[-Gh&+C1,,^|W/f1qvt[wX@;zXOGGMpAvl^HM||FG25Ci;0p_7YoV~|');
define('SECURE_AUTH_SALT', '1!DJZeVF-|(|ETO?9o}/;@XT8IwW~JM gX>ageed+f5=P%blHp:f@p>sJ`WyUFwZ');
define('LOGGED_IN_SALT', 'Lz@+4i^fJ4EDu4M9;_+TUc3KJpn?+7=n/BGs70=av.SaCGK9G;Vfwb8PzSa53RTC');
define('NONCE_SALT', 's=F)!Jn7:m0`]4_@BuJ``)SvmIyyHDk+js.Wkh22XG#hzsMwgP*-|Oiy*_vtSq:{');

?>
