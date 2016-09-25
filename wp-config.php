<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_4d747nohg2');

/** MySQL database username */
define('DB_USER', 'JZSb4D498ccALLM');

/** MySQL database password */
define('DB_PASSWORD', 'UKxANgRMgHjuuQJg');

/** MySQL hostname */
define('DB_HOST', 'bambootechnologies.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'RCOZzFd(H{U+KAlC-(JVvQCFdq*galg^xlcjYJMfRi}&MwbMTKtjTitk@dhU?&lQubNY/svZJoEiqAYFaN|p!Q$rZjbWUk!U|S](-Zx)fDp^|C]a>@xq>JAQlaxGtU!D');
define('SECURE_AUTH_KEY', 'bf[P&r)_OcsJ_TGd+|W+-vx-OLksqifq=-g?h!@/shjh!N]><+ur_BSUipD;aFQjU&Izb[fAlxW!jCdmFq/dC$aNqPl}Q{?MJTbDtHhnnA$T${y}fLAcKf(nKlc$J^UU');
define('LOGGED_IN_KEY', '+_Qd?*X-hnH[S[(x|T$h<;^h+|=bjs;kw;ZuLm/mI|!POlNRduOrBiExg@(an*FRv$CNgNJqMyCNAm<)&ICnoqvs_PBrm;Y-!RSIN}DMsBgj@?cbhl}&kNI+oR!RqY+R');
define('NONCE_KEY', 'qzhl[Gx%$F@=(ILoq>Vm*]b!h<kDJ+GzR%y%^B!OB=W_^C^G_l$NRbeX?_?S@_%|TFL>yG+L@kvvymELc*BtmamSgG^YMD*xjcAeB/alrvPyVTk?nHR$MQ|?+y_FxmOl');
define('AUTH_SALT', '-j(?fUJzipD/x&@Ra{*B(A*CWqfkA=N;?/MSQz(/?@Sdak*fBefJZbBfH-yKVb{HlowpFAuA%D<WY?S*&lCf)!fO)pJ|iF<r%!CWt!&Wwj%d^JoS$fa;JqqjM?XSULmh');
define('SECURE_AUTH_SALT', '_(loyh{GAPUTQhZ{UJgAgWRwa%_*hk-u$|}fshFU<)>}Ak+R{OrS==xy?}ACKgoRlw[<?qrgE$fw)|Lxawp(WYMmmB}!ENdhGoeFPakRbYScXNrDspOh+wtH)[jz-%Dq');
define('LOGGED_IN_SALT', '<%F@NTE+gtbKBRi/G^>Qea;pzF^<{B}TMO?kt}(CgP/rX<mO*nkheQ;nD/&B-QVP;R*FaRn&J%|ylF(TInE/dWhg<>U&sh-YRv-PunO?j@rJ%&)*Zd}C!-{ANxj$Est+');
define('NONCE_SALT', 'D&n%RCkliC{{<zZ?H>L=L=jn$u%>tS/SHcN>^|U@p(L?^r$NKP>hjp$;@><Ll_VNQT;)[yP{?vOD?/mH!ZgghkeHl=J+qmt!/{pSv|q@tfoWhS-ef*}O|zjdKjW$_Poz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yviz_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
