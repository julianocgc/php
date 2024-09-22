<?php
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
define('DB_NAME', 'exemplo_bd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%ReCOTW91g!80XQi) Au%Jn#,Qe^moxT2EvMRqQi_?r&<@o,j~nJmSong2Ngg3UE');
define('SECURE_AUTH_KEY',  'zH7N^~V#,}QSiBCg<8v 0KD|{KYpu:ob#v&`+4hjg+K1L]}W$oksd(jY:k6_90Z$');
define('LOGGED_IN_KEY',    '/<g!(iQ-p}6Z,z/M=fMeax._NqH)8.N^ Cg~pgAGQ)@KJiik3w!Tj2/qM|#5IH?3');
define('NONCE_KEY',        ')&H].V=.Y(p${OnKe==KZ9h$-}Ekzl1emS?,tD$IEAb3bDCNza%Ys-qh0sll/@pE');
define('AUTH_SALT',        'JdtWM$:,`QE7kNyRbVu`[ARp4q-mSsh5(-mZn4OwM7k3?kyhg;7[}2op2+oU-2MT');
define('SECURE_AUTH_SALT', 'u5a9P^@O{1yVkIyZ12q$^`j+[8^!L{)ln2nSwn>QH/Spf#nlSS[m%v7`DEE,L5kv');
define('LOGGED_IN_SALT',   'Z_&0>A[3e;iy+[OGc#UrleNXU?hJd[;XGb5qjHE8O3J_rHBqWP+ QpJtbH`jGu!@');
define('NONCE_SALT',       'TUx0|BJuLZSAh{;OxA?mBVorJJ2?w$&L`;(v-=s2IX>Y&AqpK``?!B<+:]o3gbNs');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
