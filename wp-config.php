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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'helena-guerra' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'phpmyadmin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'ht__localhost' );

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
define( 'AUTH_KEY',         'x<IIMK(k8zk U,@s<%9u@[i/f`j)~rH]wH:T_xo;8[;<n8j^k,syAt--npTp2p*V' );
define( 'SECURE_AUTH_KEY',  '>rub4PlI~aUk^YG5Mws`G}th?{`lU#= 9IJw}JLCrjH-0:c2s-LV&Iq[8v:E!~_?' );
define( 'LOGGED_IN_KEY',    'tHd](bmI[0T!J3UUPT|YXEP=+/AG0pJ+lLR$@NBlKEo5<HV8:C.,8q@L4-SAT@?z' );
define( 'NONCE_KEY',        'OKO9 3@pT^eNqLC^C(~-#ka}a3+~73i+,5WBrp?%c5hxoq?ZL9BN#xNNpst?/v#1' );
define( 'AUTH_SALT',        '8zRMC8gIa0O]I8g[k_;XNJ*JPFpIdqomOIFJU4K50(_+mO^1bxy>|6?-T1!lu KQ' );
define( 'SECURE_AUTH_SALT', 'S(Y;yx>t2n>LDGE!8m?y]ESz0WYetQa^`|F}#d!Wlvb#+C;Sc|iJriHS]Wj}l3b-' );
define( 'LOGGED_IN_SALT',   'X_h=`o2-[2*PC|!NbFvB0[[[jr27mP#i!$u}~5M>LC(yz;<Qu1>HH$)v+To8];Ma' );
define( 'NONCE_SALT',       'o>$3?r#eA?Lzm$x%<IG/;U?YIW50tFrf|uWtWYiSkEki=xaq32W@qQt=oP*Zy-)M' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'hg_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
