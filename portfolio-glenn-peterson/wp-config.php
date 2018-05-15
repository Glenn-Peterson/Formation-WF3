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
define('DB_NAME', 'portfolio-glenn-peterson');

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
define('AUTH_KEY',         'q53,F_9X{)d[84giE!<D3Ik~?3;b+_![,#%?T|m]2xTLL1tF-vh%3`5ZNF4J,*_l');
define('SECURE_AUTH_KEY',  'JcY|YmH~.nSgL.= w}>;(iQy0Bk:}J>t_Pji&qmuN))086SwU@)^!k iXUJnH>c(');
define('LOGGED_IN_KEY',    '&7NU7m/.kM!lykNDM&fq,xwb$T<YuO#h^#Bq-WPoSZ_xeggyg[=ON^hKgvUgK@lT');
define('NONCE_KEY',        'bp/_[l#4>[Ro.MWLWG2x46K{SoBc|n:B>LK%-j*i-0v7s3!b;3m*7urV5|^9!V5Y');
define('AUTH_SALT',        'lI7dXqa_~[TLAT}m_c=H%yp{dk[v0t`.i,=-n=,GruKFxD8QP&!xb(-`wI5y%W%E');
define('SECURE_AUTH_SALT', 'jgPu%`5r4!{0I$?f1w=n?JV&b{c`.JhM.~%ZX>k$]V~4YR.R2V^|oHCU&0I-OFq<');
define('LOGGED_IN_SALT',   'kr7g8H=YG.z}@n67agi d$DoWUC592N4VYvM-ly-)?5fU,.;$UxsTJ_|LK#Vtq].');
define('NONCE_SALT',       '|Eh;1R5`gQEU]$5J(|N7QsCsE/#CktGJkCNc^c]Yuuz3v&G<R@T1S:J=*WS<?]}Y');
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