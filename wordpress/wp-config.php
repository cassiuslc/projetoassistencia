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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '%,`&{5s&Hn1_ti-@*yGt$eaNq#`LY=X`~Jv^2af>VegYlTx?&rk P xsCVdo.,x2' );
define( 'SECURE_AUTH_KEY',  'R4F4X5>@?^o-lLU02q~+TCc5.Beg+#!?sFwBH`a,ZZjLs=TGF-@H=k>AF{>#)Flk' );
define( 'LOGGED_IN_KEY',    '}n@fTfI[nj_]8tW/t&(,a:g^t==,v&5#vB6nTsa+P>Q+@i*v!#;[(5.io. ~(&Rk' );
define( 'NONCE_KEY',        'c#ag-?)+@J@Z,W6j6Qt2Ga{yeEoZi~5XsW.rZe3vvXiY|?!c!s!pGiSGHf!auUgy' );
define( 'AUTH_SALT',        'emD,2d>+D!9;zJiT4VwQL$0J([)NatIT?&d$usyYLS,Gb/B4k3tFh 4a*V*2]RqR' );
define( 'SECURE_AUTH_SALT', '/Q!r?m =F1Dm5L0x7-Qv]Ofg-mOX1yWQskZu`P%V$P9n6lz[_Ga5$^L`0J_}#(7]' );
define( 'LOGGED_IN_SALT',   'MF){6^Ac!3tic$uOU ~ {% <q=iF1]WX5y>.rtML_*YS@AA7}J?tR&A)-V}TO=2n' );
define( 'NONCE_SALT',       'gly .Gl{1oDyKK~F[5R^whkrUQXgoa@#PY8tCfcWZ||erCqWf:9i(],q&vlmlNgf' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
