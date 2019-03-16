<?php
/**
 * Οι βασικές ρυθμίσεις για to WordPress
 *
 * Το wp-config.php χρησιμοποιείται από την δέσμη ενεργειών κατά την
 * διαδικασία εγκατάστασης. Δεν χρειάζεται να χρησιμοποιήσετε τον ιστότοπο, μπορείτε
 * να αντιγράψετε αυτό το αρχείο ως "wp-config.php" και να συμπληρώσετε τις παραμέτρους.
 *
 * Αυτό το αρχείο περιέχει τις ακόλουθες ρυθμίσεις:
 *
 * * MySQL ρυθμίσεις
 * * Κλειδιά ασφαλείας
 * * Πρόθεμα πινάκων βάσης δεδομένων
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ρυθμίσεις - Μπορείτε να λάβετε αυτές τις πληροφορίες από τον φιλοξενητή σας ** //
/** Το όνομα της βάσης δεδομένων του WordPress */
define( 'DB_NAME', 'wordpress' );

/** Ψευδώνυμο χρήσης MySQL */
define( 'DB_USER', 'root' );

/** Συνθηματικό βάσης δεδομένων MySQL */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Charset της βάσηςη δεδομένων που θα χρησιμοποιηθεί στην δημιουργία των πινάκων. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Τύπος Collate της βάσης δεδομένων. Μην το αλλάζετε αν έχετε αμφιβολίες. */
define('DB_COLLATE', '');

/**#@+
 * Μοναδικά κλειδιά πιστοποίησηςη και Salts.
 *
 * Αλλάξτε τα σε διαφορετικά μοναδικές φράσεις!
 * Μπορείτε να δημιουργήσετε χρησιμοποιώντας {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Μπορείτε να τα αλλάξετε οποτεδήποτε για να ακυρώσετε τα υπάρχοντα cookies. Θα υποχρεώσει όλους χρήστες να επανασυνδεθούν.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~cz wy*sB-BZb>G}8)>EkDa:ot[fd|khe]Dz->2IN@8$O=a>GGf];,ou`#j$>KQz' );
define( 'SECURE_AUTH_KEY',  'TsH]Y=}9Q Cx*W&CQnN9RXqKSI0I^8[sbjr>Bpfq*0|nJw/f4q,&$!-eC ]>4DT@' );
define( 'LOGGED_IN_KEY',    '4pmtZ~UFbrGE!<vJT^8Yu=](ZJ7kFG5~lNAZZwMSnbpkBYc-.FPw#S$0akoNj[5R' );
define( 'NONCE_KEY',        'By2HYxLzC]sQ7<cjEWz2u)DI+!.ISIRCtD-2TUkQz;+B-Dy$,A:,qlQukupOH J6' );
define( 'AUTH_SALT',        ';m@;a=WSQP`E%HB!Th<#.qmSWpU.XO{&1A23kz+W~Xn!a ;vP)/R7x?pSpC*xO17' );
define( 'SECURE_AUTH_SALT', 'Rncv#q*:!aB%%t1!(*tS9I<{BD sKd^jL^+Z%&C>DVx9)9K}3%wk9gIE?uh@o@FB' );
define( 'LOGGED_IN_SALT',   '(&8[DW@MN7mBpAl,C%Nk&r&nvBWO_6,i((7x9H)zRUYsup !J<i#TRDD(m/`YF?Q' );
define( 'NONCE_SALT',       'B%;(&M4#r0KfrG=G<7liYfX 4r2A>gEb6-WfaDJvR<lvVtJHjPLd,`IPEU?GSt<_' );

/**#@-*/

/**
 * Πρόθεμα Πίνακα Βάσης Δεδομένων του WordPress.
 *
 * Μπορείτε να έχετε πολλαπλές εγκαταστάσεις σε μια βάση δεδομένων αν δώσετε σε κάθε μία
 * ένα μοναδικό πρόθεμα. Μόνο αριθμοί, γράμματα και κάτω παύλα παρακαλούμε!
 */
$table_prefix = 'wp_';

/**
 * Για προγραμματιστές: Κατάσταση Απασφαλμάτωσης WordPress (Debugging Mode).
 *
 * Αλλάξτε το σε true για να ενεργοποιήσετε την εμφάνισης ειδοποιήσεων για την διαδικασία ανάπτυξης.
 * Η χρήση WP_DEBUG προτείνεται για τους δημιουργούς προσθέτων και θεμάτων
 * στο περιβάλλον ανάπτυξης τους.
 *
 * Για πληροφορίες για άλλες σταθερές που μπορούν να χρησιμοποιηθούν για απασφαλμάτωση,
 * επισκευθείτε το Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Αυτό είναι όλο, σταματήστε γράφετε! Χαρούμενο blogging. */

/** Η απόλυτη διαδρομή τον κατάλογο του WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ορίζει τις μεταβλητές και τα περιλαμβανόμενα αρχεία WordPress. */
require_once(ABSPATH . 'wp-settings.php');
