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
define( 'DB_NAME', 'wordpress_capgemini' );

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
define( 'AUTH_KEY',         'EIJwE$X3XMmYbC(WQ6JfBvUa%uN^`b+SCy.:>:<(RC/l,zEt,Qe nS)5K5aeH$Q}' );
define( 'SECURE_AUTH_KEY',  '5SFM8dQ5.6UUI:5w-+&1aZ%zFYTiHKGUo=;wl6rsh~2xBxs#YWA`]os]x!al ZQd' );
define( 'LOGGED_IN_KEY',    '-=8,,DX9A~6k ]}clg{Z5pp)glpG=cgo15S_y-3yI@.(_i])/|YaGr@QOQykrc8b' );
define( 'NONCE_KEY',        'zuU}L7mxA9#.|nr0)C/DEupux|:QvO$ZOV7D`31*gUSi0</,T<pBO6-WzKI1]x`E' );
define( 'AUTH_SALT',        '3WV:7iIcEudaFmA=x_V<6ZPz:p2rL*j(X)WP$6}C_L?/~3RR6PfU267Lu.-F!Fi4' );
define( 'SECURE_AUTH_SALT', '*4t+V3C0-mQ5UXk&Gng??g0/?|C/eFe+~/<Z,^@dHDA^[@``j2%}q7_dI;ybk+g=' );
define( 'LOGGED_IN_SALT',   'gtQ}h+e*2ARU[r}>5{(PZI59<%|n8^,S+7 #DL P;MHw}7=PqB)VQY4tCK8!HNGp' );
define( 'NONCE_SALT',       '&6(q[G6ZXTtsG64I_W=O.]wNT|XT!7ej1$TE}d>lNbp;Mp8Be!i=gci|fAtge{<j' );

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
