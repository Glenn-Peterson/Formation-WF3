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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '=[sE|9k6&_H*yK>&O>&P>y(ln^>>6(x}tB86Jw#,es|j`gG~py2}~6$1f1WF9[AS');
define('SECURE_AUTH_KEY',  'abPo qeruhsB`Gua&cE2m]MpS# G.eGJ(SIuGfjo8+!O@t*5ol!Nmdx1,)LpIUZp');
define('LOGGED_IN_KEY',    'R<`i[18#o_lGSf=ap:7<qVEe=eu[z$tM1|Y@v/M+^7J<>~|Z&ug ZnU%=*`[{2[_');
define('NONCE_KEY',        '%AT4$44qD?=m6q`5YYN6/#u60ia5Gt.jcYT ^~FCibx9~R95)lJ_L}j64?#^S<|<');
define('AUTH_SALT',        '(}e?j4M:y<g}go#;c:KFK#2lh`djj2scxN[p]IK/>G#p[yP:bMUX;M8yROA6Y,FH');
define('SECURE_AUTH_SALT', 'OV%/^y&!,*N&GB&Q&g9mD3F6jN2Kdaaj?3a*ymy~>sF<0#YEL`b%s2x)0Z<`;m%D');
define('LOGGED_IN_SALT',   'Dl?5^ECvE/O/8W3C(rl!4cjoyq;&e]W?jZok+E8k8 1HGjVH{L@TD6Sn.Klt<q+B');
define('NONCE_SALT',       '`O#W?H}75xnPS23V*m1mB: =>i~aEI!%]:1VD*lQKK6P:JrVA3ism40.0yfEB&F2');
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