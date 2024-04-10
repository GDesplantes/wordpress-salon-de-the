<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_salon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5 ;T1z&HBVt1bBa7>|tfpvecv!ho`5x69u.<-Pv9I[BB2)Lf$b0tcSVe M7H])x;' );
define( 'SECURE_AUTH_KEY',  'urD_4ug`o5ecJ9D`wT<0vlt6gqt.b@jAl@7gBc>BKDp4?$T,{$YW[4Ok5b:UZ(U5' );
define( 'LOGGED_IN_KEY',    '@~vF{q|g,Eyy!ijeD@gD&;C7~/-AXms:Br$IX)&&.Ct%M,X|uKBiH8X!fDH2.Q9)' );
define( 'NONCE_KEY',        'h]~=Wlf:,W<bYG*9nRNpochA93>x`[0iWS0UgIZ#@Z,-O%7MYviku=O(qo9Q+-Eg' );
define( 'AUTH_SALT',        'vhmv{:?PcahomViY/]zz6.~vie33oU$b.I@3-C$*IoGe:/=(3h!{Q$AOt3Ep!O2V' );
define( 'SECURE_AUTH_SALT', '~5uY!G{[a%%;`E2]`q)OU;g7JRt D W+M#p4z}lo >6Q7HAQf1jduaIQh:]@`Im.' );
define( 'LOGGED_IN_SALT',   'r}G_mk{SN?UVdD`X?sv6B, i)5%9;jZ-2eS%@Jm,2,D QU@6(&U6AqXLV3qJs1u;' );
define( 'NONCE_SALT',       '/+=}x+#wPvgUp:@X8lRq~.%=<&I)T i!/DKP2c;%qh>B}f&{?g$c9+{UyJw$u@{r' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
