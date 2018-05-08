<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sparoi_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j|},YgBPV_F*`%?8_.wH}wpnzPg!# jEZY@f8jJRQB[ewFCDxoGDmq[%/oki@:)&');
define('SECURE_AUTH_KEY',  '{cn1;c)Vc9s{Xe$BdtrNC8gYcax~$>d|b]1k(nvXdI(i_}DAk>bK|t3$96lahI:T');
define('LOGGED_IN_KEY',    '8RELlKl,b1!I%CH|p)ntwivDL H4{E{./G9~<WjPG9rd54ZvQm.Z##!}%mEi96wV');
define('NONCE_KEY',        'hY&:fty09V&]L]bm+g{4)TE}@W^KmEo7$PpRsJL^esJf(D?-FB}6hJSsY]lQJ[y}');
define('AUTH_SALT',        'I8Wu_,}(la~wrski[dOo5Qx[Q7Ur;7rv>TN Ds=Y]:*>OU--a]Z*Qiq>V4/g&>bO');
define('SECURE_AUTH_SALT', '@Cq$`L^yNE1Fbs$jw$7:1=P@&f9+tc}J(seV`NpiJIzWYL|(3v>Z{fgZpug$QpIB');
define('LOGGED_IN_SALT',   '|d {H(FVD-iSyY0|b=:h<[17%U]hbiAHaA}b2b-w<?wwR2g:6qD6Q@1A`(9m]YXE');
define('NONCE_SALT',       '4lV52rUrLog<5d?+oxq~fs`:6+1>eR64Me{KYjpYWMB]1>9Vo,$8(|*TSU9Lksn|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');