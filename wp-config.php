<?phpdefine('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
define('CONCATENATE_SCRIPTS', false);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}


/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'milaneguinha');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'milaneguinha');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'u6r4w7q8');

/** nome do host do MySQL */
define('DB_HOST', 'mysql.milaneguinha.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '851d84c6eefba3c8d006bafcf6793a8fb99617e07a42d1bdc8b8ca6060f4b0b7');
define('SECURE_AUTH_KEY',  'db96b0b794e920e93e12c30c928eb8942cdcef47a2c3b5b5aac4f3f29de7fc37');
define('LOGGED_IN_KEY',    '401798b1222e1f38b05801075bd180b1cae55fcb6635953d308eb64501d2cdd9');
define('NONCE_KEY',        '7fffdcde6eb22e4a03233fcd39bcca680d79e18cfdef140edc4721902cc6b1ee');
define('AUTH_SALT',        '923e350d84b75016050fde389a91acd9345e0464f989f6933e5fed07c8896190');
define('SECURE_AUTH_SALT', '5e51b42cca1e72ec6b4362a3340f327d3ffb2551188115659e7aff63a4a76e1e');
define('LOGGED_IN_SALT',   '1bc4dce5c9ad173a7f6411d0323b58e1898127f88f534ceec96fb74af9c0c638');
define('NONCE_SALT',       'ecb1fb6fda9d542520eaaeab1618ad3b18e7322f6e967ec02190a94cbf830e52');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
