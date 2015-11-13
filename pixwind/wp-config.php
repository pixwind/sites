<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'pixwind');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LJo:2nb+NBos_$pAo]rK@g1a++j=P-{,(41N)`Bu4>Cwu]x2%<+A-Tw1@P6Dz~rQ');
define('SECURE_AUTH_KEY',  'cR9%zfX((9>` dE|g~ePrEO|+e!I1up/f)C?bi9^eSRo>8t7(>r8x#43zaQ$>e2U');
define('LOGGED_IN_KEY',    '[O]J*[)0H#<q3m5lnO70_6VoaZt9??%>|7-iz.W(<ckc#bA:SJKQ1tb=54xQO.pL');
define('NONCE_KEY',        '>f5MO+2+YPdmCUt-:@ ?/?:s,YxTb-JU^8?b >{ 2oz,}#:ktf+8EWJf:wq$`x4Y');
define('AUTH_SALT',        'e8b>qY{7-.1[u-cNjXqLtQfoC2~~T?l8z`{+Ef*cz/%pr6a=yQ`L_v$|VV#sn7{o');
define('SECURE_AUTH_SALT', 'o?[]vn(,c<JuK0yK2DtcPrt}vY#?|2l8W V42[w4L}$BTNuM|~Ti-fbA]U~ec>Mf');
define('LOGGED_IN_SALT',   'by(<v=R{>7Lm}B|5L)$j/_3Z&!|IMC^kn@K.ZUX$ -@_Hp_8vS;l2M{J<jYi>%,I');
define('NONCE_SALT',       '&:7kSlOVgRDwP87TNZ6*61<u:[O^L=m#-tQ#gjAy>.QR5;<|P#h a=+:cSSoDah>');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'pw_';

/**
 * WordPress语言设置，中文版本默认为中文。
 *
 * 本项设定能够让WordPress显示您需要的语言。
 * wp-content/languages内应放置同名的.mo语言文件。
 * 例如，要使用WordPress简体中文界面，请在wp-content/languages
 * 放入zh_CN.mo，并将WPLANG设为'zh_CN'。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
