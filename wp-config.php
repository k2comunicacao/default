<?php
/** 
 * As configurações básicas do CMS
 *
 * @package CMS
 */
 
define('WP_MEMORY_LIMIT', '96M'); //define o limite máximo de memoria para 96M
define('WP_DEBUG', true); //ativa o debug
//define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false); //ativa para exibir os erros
define('DISALLOW_FILE_EDIT',true); //desabilita a edição de arquivos via ADMIN
define('log_errors', true); //habilita os logs de erro
@ini_set('display_errors','Off'); //desabilita para exibir os erros
define( 'WP_POST_REVISIONS', false ); //desabilita as revisões de post
define( 'AUTOSAVE_INTERVAL', 160 ); //Intervalo de tempo para salvar as reviseões
define( 'AUTOMATIC_UPDATER_DISABLED', true ); //desabilita as atualizações automáticas
define( 'WP_AUTO_UPDATE_CORE', false ); //desabilita as atualizações automáticas de CORE


// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'nome_do_banco_de_dados');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'nome_de_usuario_aqui');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'senha_aqui');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'altere cada chave para um frase única');
define('SECURE_AUTH_KEY',  'altere cada chave para um frase única');
define('LOGGED_IN_KEY',    'altere cada chave para um frase única');
define('NONCE_KEY',        'altere cada chave para um frase única');
define('AUTH_SALT',        'altere cada chave para um frase única');
define('SECURE_AUTH_SALT', 'altere cada chave para um frase única');
define('LOGGED_IN_SALT',   'altere cada chave para um frase única');
define('NONCE_SALT',       'altere cada chave para um frase única');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do CMS
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório do CMS. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do CMS e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
