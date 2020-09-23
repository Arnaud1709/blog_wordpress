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
define( 'DB_NAME', 'wp_blog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~-J]>sVfI;^V<G@OsyDd/5Ja=0!*{1,[}Cg|7du0I2)z[FEwvN&IdL1WIQDlb^xf' );
define( 'SECURE_AUTH_KEY',  '>-PC%F}5_4Jrs:p!6Z]8MZ2<qL<5BJx~QKv-j>i%@p2MVOp{ljW:QSf&B88N?[k7' );
define( 'LOGGED_IN_KEY',    '8rLE[?E$n&o2mN|F3q#..HA FJn|,J|)+J7F[A6Lz#suAwmclhCI?wgu>ITwg(N)' );
define( 'NONCE_KEY',        'bbyDf>Ij}oS42wGMu}b. AJ<CgQEOenww%uE$EU/#*sK1(H!lr/8;eYwMS,P/(3a' );
define( 'AUTH_SALT',        'MG6PdUgHu2EM9mjdQwR5b8Z|L)-Us:]m<.$3l`-,n$oxLEF.j0n9}|IT;o?{$/(1' );
define( 'SECURE_AUTH_SALT', '?Yl3^jKa0VQrs/wK$`E)#]Oupw7UK)=/zyH,>K8WTLRF/hUXt0I_e:}/g8N:HHJc' );
define( 'LOGGED_IN_SALT',   'n/4jggcI>z(|N9@Oiu~wue|~_wjSK(k/7S:o !9J6jwue7q9Y(@wBFv`y%fPxH~?' );
define( 'NONCE_SALT',       'ajgKi$s5triH0gl&WURmy?(jT$Cz{3N]?X>Mva3Et1j!X[#|ar 5A;a~XK;56F7=' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
