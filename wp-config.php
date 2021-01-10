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
define( 'AUTH_KEY',         'x/%*fEf :SvRhh%BHRZ+;9cu7mR-W8z<:|VrvOCEcNF<9|If{lig8?mQW^+y8:]K' );
define( 'SECURE_AUTH_KEY',  'erHKs^sB##^Z%9%@7{{g`@&^U~4YG/%n(_8A`d*<,SMG9Bg!9Y@Gz_UA_2g~$o~P' );
define( 'LOGGED_IN_KEY',    'u_?DyG<U&T/:0u|V]4(%>/T@>zQF!s9UYbdX*.O 9zn^X{|6d-X)UZ)`d%fXj6ep' );
define( 'NONCE_KEY',        ':^o|u0b%l2aRGig`SSwSVxC4Oo.|z6~T&T,cs<5MB/$rP^P=Fn;S^aNZcdb)=y]1' );
define( 'AUTH_SALT',        'x]9-H_k@xhzSgXz5CndI94pS7mT Ki(RzA`2tpSiS&((z=QUJ%#:CX1}+U0|>^/D' );
define( 'SECURE_AUTH_SALT', 'LKvEnRwK7kss#_6(KMW K0#kP($}W,s).=,WR8YuIDqLmpQ75(8_z2i*<_wtbk5?' );
define( 'LOGGED_IN_SALT',   '4L5I$cooApCx KgES>|[U_x`_}H@3|.T}{E_Icx{KRUgXV7+$-!WCA~8%@>hEr=-' );
define( 'NONCE_SALT',       '(z]5Z{-|eb3gzg$u0`}NqI=uD<dvUdkJit2Y?@af, L{qWpQX9q~3$Nzc_8+TQD$' );

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
	