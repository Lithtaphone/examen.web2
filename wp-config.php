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
define('DB_NAME', 'mingmuong');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3SHo_4aQ&G97UM@Z}pkGR`:E};Z6BKX&E}OsnfVEY9pNw%pdA52<h}y$SCqUE(T)');
define('SECURE_AUTH_KEY',  'an>.0CWlm!R|j)d,Do_/U Ob+A&}e|)pFO>I>-.orpX6 RH1,.o)si81`*PANfg{');
define('LOGGED_IN_KEY',    '[f=6(QsmOF,Ddo}1Z%m,>>E|T.S,6k+qsI9`zbYgR@(.GxT]xJs5^l??}6n{ey]D');
define('NONCE_KEY',        'g9_m4nPLEVy`rbsQ2iYe0[6RioA8<B7`u!]sS~uK(6o!cg[pG]tBDa075F4N~S,.');
define('AUTH_SALT',        '5{jvw6r:kD9{(T^)xOybpVGUu6$:MMo2a1Z]A 4 f5iVaK`1f=VZsOclhSL6,|,G');
define('SECURE_AUTH_SALT', 'Sp[Th%%0^=QCP~~|oS*}T9Wm|?#]9(lMuy_$2bt={vqBfy`jpj.porzS3:@2eTHt');
define('LOGGED_IN_SALT',   'i/{fdS<NA-Sc3MN.>-n;3yw^/Ma4PIUY-M_p/Ae=:cbj~=45oFB/yHI]v%Frf22e');
define('NONCE_SALT',       'q]y{Ib>+H>00$vwS|36A+#1t.^eyl7Y$DzJLMD1e10tilpvYelmWb 5$Lg6^X{%:');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '2k17_wp_examen';

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