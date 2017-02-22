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
define('DB_NAME', 'wp-coopfem');

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
define('AUTH_KEY',         'g!c+m+N]%3k t31:pd(CmVR__i(O#b7yE~;)v]7!8#g/c5w)]TFTD$Be1.GZPz-@');
define('SECURE_AUTH_KEY',  '!jP`t9XeG;.,B|m<WK_kek}eZH8yfach{YP0?q0wTxP6&Axb9j/?uhY&`$Fe+~&F');
define('LOGGED_IN_KEY',    'dr-*:-DoN_yk*q^r?IeTrT|;PFXgCF5q19m6pXHJtaQ[&(B(fg/+VHk.P2 aVDF$');
define('NONCE_KEY',        ',y)f_k,9:A_r%l|!O#/5*ucZkOc/,8~WZ^X(24o d1ZjbA%_p4xKp.{k_[ljsf8x');
define('AUTH_SALT',        '9NUKHmRGB,<yW!dTAU=C!nC+LCPkuG9,!oXyvq&X{BqbPk?PI@zZqVqBOEA0gvRq');
define('SECURE_AUTH_SALT', 's`=Kj, ]TQ@3%vbnq9%(|ok9?@bgc`:f>hT))PuLm9u8>k@#H$Wd7fQUoqGs{KG2');
define('LOGGED_IN_SALT',   'u%o[H[q%WwqU<xqg1$8-l6JxQIJE/ue+Ih{E8 &x7=V6SBG1FSObIwLnO4Xs9ZVW');
define('NONCE_SALT',       'YphxuzFh%>F&;j{G@R%5/[uekjoA?-.R#e)x;9[?; J(orl`<4~F.>L4l*c3Ao(@');
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