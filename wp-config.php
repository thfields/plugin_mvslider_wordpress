<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mvslider' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kG~.&1c<c8CBzwoPUI,t5^2?;3u_*n#w>1fvppi9@m1S<v(]NBDNmregzSRsj`w>' );
define( 'SECURE_AUTH_KEY',  'meVCs64=HVo!<@*@2$T~t.ZJ}v8&HNmQDhY^536zRQ#?&tWC{&>buse{06$.SQ=M' );
define( 'LOGGED_IN_KEY',    'yj7G{hrjp.[5yU<K5(E:pI]m7Ug|.[+t$.YHSD-%]l_kB}/;:,K^2hU!pi>Swu!T' );
define( 'NONCE_KEY',        '6LQpUNd*v/vt.jYo@84Mb&vq:3{OzCGtQ0)-oknh#jJO=^X?lhL ,hdDy$Wm$z^T' );
define( 'AUTH_SALT',        'K&#K>jg8+*2-w+,-l[{P<5Yq4$ x+iHQD8dh=8R`Y~J+%QgZJwYymm@x((.GIc(g' );
define( 'SECURE_AUTH_SALT', '7ges8kg({IRtacw@#gDY!L7WW+9T<n lLh?67Tiu676dvw(DlIEQ}S)@6Q3h+*,=' );
define( 'LOGGED_IN_SALT',   'aKY@LtDmMQ>N+~Otr]X,`Hq4x`EfNex^SE3`wf|1W=.40vkB7UL9^TrAU60{Izcw' );
define( 'NONCE_SALT',       'J%km}Jgy:q0pxj<6/A3Ao[hI2<dd/TtG avIeZqW,cW[}P,$ zkTbs6NL#]X?H|$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
