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
define( 'DB_NAME', 'zoo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5Fhg5)]0;.=[ly/@c b}2umZ <G,9zZlpAt.y +{RGIf|.x6j PkuP)`1I(yrN$V' );
define( 'SECURE_AUTH_KEY',  'D5G7x|R[x$z=$9DDD]LQH{ErllM}Jf]5):`]K$8Ewhb]Q@H8~TNkr~:D/[-$1(Tt' );
define( 'LOGGED_IN_KEY',    'x~cfMT3:_o~:Y:b[#{k LKLh&,}(;i.`22g;4QrP}%6}nS@lVq&5:^:{vGNP?`t[' );
define( 'NONCE_KEY',        'g6(nb5^N8gLOP)Z%oIyVV`D)+GZ3(@rOS+6 -cXjfP2H-8MUV`3SQJOaA?8}h.f+' );
define( 'AUTH_SALT',        '3<zM-[n+[@N@{!cfY#Z-AHxDKVqQnYyh.Aw|THyUVrDW?$D/Q/)Q}#x+g@b~k`fa' );
define( 'SECURE_AUTH_SALT', 'm9q#r<OJz#0n:Pj9g?e4H=nbO}w&ycNfo ; 4uHx_4HH0[/Ho.>L:?Ph:;Xq V5Y' );
define( 'LOGGED_IN_SALT',   'gnU`xk6 *P67E8jV^`J{[&hZy*zBt8Bzk:_H/D8LDj9<jug%XJgdTujquvPL<Mq9' );
define( 'NONCE_SALT',       'nc7UjCpTX%}VNR_EeDP}xWh1&7p|Qj`%vVvPS~1vv]Ln*LHmRF0b_$3Lr3+1PFxE' );
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
