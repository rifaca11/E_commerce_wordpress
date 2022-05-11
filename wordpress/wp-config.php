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
define( 'DB_NAME', 'eco' );

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
define( 'AUTH_KEY',         ']E;~3b?rtZO_xQ&ewZq[xmC5AC,:W!>#72fJGx7ubGU&f=HH>T#/0(ZgL38R$w}5' );
define( 'SECURE_AUTH_KEY',  'J)gIpfZ@p3&^:O+KR3X>8I4N*<lw>VMyS=NMQ}Vgn-4|=pVAAz%@huP9}XP]5$JC' );
define( 'LOGGED_IN_KEY',    '3P7$xafn.8_q?g$;B$#C8qz5FD-dgj3TF*?:3q&~O+Lm$[7zpVHWd_#&~?YPB8j1' );
define( 'NONCE_KEY',        'W@RDyl+I~aMuOpGK$+ojz)u##PeF$w#5u9$KXxm5l,hT{#ZCto7*`O)=AzAl},uD' );
define( 'AUTH_SALT',        'F!z@bncGhYl2=;{UOVw{:@_/.KjIY>w86]1?`m)W?h,sk:`V~5ep^.lQL;-%TOc[' );
define( 'SECURE_AUTH_SALT', 'a9,N!eVLun0C:e2kO,.%weDb,g,=9[S{;UY(DedfIFN.1wdUAj&t{.#IqG6qej*C' );
define( 'LOGGED_IN_SALT',   't_>|DOe1QgJyV[q9o3=UP`VC^}L$ePcSs#cR6V+B91MZ{Zo`5?Fx6lD^t$v(@Gnn' );
define( 'NONCE_SALT',       'VAFswJ(l,VG1[@j(h530/Uw/;V?#H> m])b`v-YXE~i?1eM6hs~2mVhA>B=]#,NZ' );
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
