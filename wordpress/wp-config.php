<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_sette' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'do0yPlwZC}mr%2#TX~nT6n?^y2-#?.h`Ly_n9$FA -*ON.(vWCB?JX^T|Uw^Va`D' );
define( 'SECURE_AUTH_KEY',  'G3UQqRCy !~.ozRI ;>/1!l~r2H.SBNc;&+KU]by;aC5zg~K?7z%iaHy`K6%5@x*' );
define( 'LOGGED_IN_KEY',    '97JFdrsDjt)5AlD$kQ8-C>cQv^L5.<+LA/PmbLf8uWTiV$fR+e>,1&9+0#9}LLjk' );
define( 'NONCE_KEY',        '/^_&>;P{/tjyD3Wpk2,+H#_@QsVy6Fa ]Y|pt5oz*hb+)oi2A(9%!21QVrU+M2o)' );
define( 'AUTH_SALT',        '(n0 E`LW;do[ 0%A8?%N!9gMCK,Go`aKh+stEq4:&?=xOa1Q9AU[AE,~^fTv-%-b' );
define( 'SECURE_AUTH_SALT', 'hRERy_p4Y;2JYoHJ!]*>)|R[BAOS5O]c2.DkV8c3^$N@8W{@[+5z-cH9B`$tg2@0' );
define( 'LOGGED_IN_SALT',   ' Q1$7xzQ{oR=LZ+%lcj{ u0<{y5Q2;m^i=FkJ-fjK&W(!>;t-|AUW6|w--s*-ng(' );
define( 'NONCE_SALT',       'cFam_r}B=9v<KoL^wxTGq>rC*/,X!eEJy?xi ^,:7PM$u8Q;Br;hwP1YB` 3A#s}' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
