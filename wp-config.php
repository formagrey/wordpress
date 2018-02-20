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
define('DB_PASSWORD', '@Cqnttptrpf1987');

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
define('AUTH_KEY',         'z~3aUP1(}a[7<^nIrw<lqDLV`x_qLof:$1(eYh#ns*55G~Av!zGuz(a>i?95dc53');
define('SECURE_AUTH_KEY',  '%9HD,}:55/naMuul4_Z{R<qwXJW)7uDo&{i(R E,dgQN!+93P:Z[!)NkJTY(B5sl');
define('LOGGED_IN_KEY',    '~jX.DA=kuy|~qCV:;eT=XKlLpr!M^b}DpdnOZ.$b(lWBv&83nAY>3VCmZ@sd9rRM');
define('NONCE_KEY',        'X`w#hG$#1QJy)8-(q2ley4kGi7}_f6(8iZ<&y+d}=PmM2M9 >>:wl=tD]^%jE%2F');
define('AUTH_SALT',        'J|i-MJ,0LCgC#%]8R(,!_Z$5~uR.7i]w3lZ_pvCB-_-Y,mhBLC[j9kxP1s?XytN9');
define('SECURE_AUTH_SALT', 'R,U=|bu:yJFSs[5cLadgQMvjRE+{FLWTRcT>s-v5UE-@#v|w:h{[MJT+$&u@@ &>');
define('LOGGED_IN_SALT',   'bj$.HH3$cOKJbfDeDm>Vl?2_bHLNNkpYMJiHje,O&waZ+Tq0FLYbK!y#X-#/4h.!');
define('NONCE_SALT',       ',u?n@G_SF^G9[?BiS=VnC1=5sp0I39W!dG7aKu@!m.WH2NK22};p3KSt){,~J$la');
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