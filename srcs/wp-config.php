<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '+C$A!n[-^wV{5J@kk8/{z&Sk%jnK6uKbqXN}[MT[6D}lGI&5-c+5rgPXPW#loR$-');
define('SECURE_AUTH_KEY',  'j`Cf+-POL_r5HMx3L1rv)^1DiBn]PKeA|CI?n=y!cD?}X{[|-n,g=c(^o<<.)BMR');
define('LOGGED_IN_KEY',    'Lg1A*d!O&Tp72QFHMXl.OU8,{Lk9op0ZofJw6UQx*N-,]2lZqG+a4)>T!+5A]Vdp');
define('NONCE_KEY',        '*>umtp)$QUM9my1E,|>|GS[b-+[W6z]fs5geCzegXQ9CtARAD~iq24G?Nm)Nx0(x');
define('AUTH_SALT',        'OP.~MahA8ZQn=D:bB{K1f4#[9zC=bJ?aRO2+xzdV8=Fsm XhuE`fi_Xh|niof_YC');
define('SECURE_AUTH_SALT', 'bBCrko%aw@m[AjxlUfGQ72^ +vaf`Lru$]j,:2/-BxHA;hYOQ*n1b:.$-xe3/Z6y');
define('LOGGED_IN_SALT',   '$X,0:7b,7P,VRYKNrWa~1X%ar_x)+YVq [s}.-u^OO4e 9KA<.@}4,mKemUFylzD');
define('NONCE_SALT',       'x`k]V]/b[~yyffXix@|!U-pK+IA_mY/nz&NA/#SJE@V|47>Ll#U=JnCM([@Zsd?%');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
