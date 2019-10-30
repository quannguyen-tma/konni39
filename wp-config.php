<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://localhost/konni39');
define('WP_SITEURL','http://localhost/konni39');

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'konni39' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zI]~%M0V];<^tFM9-Ejwv:4J7FO~Sg-|I@YH+=R$+1Y96CeE04ZmWjgu)FiOi/((' );
define( 'SECURE_AUTH_KEY',  'fVJaEKeL:~=dA3x$$Q=5{4.,xD#bj]1)tMgv &q4}2arMm*8Yo[M@}. 4*wXJc;G' );
define( 'LOGGED_IN_KEY',    'US+4Z);f5MX?jaZf@u=?^W@J4 j}I3$bXYe^>Z.m9UAwMog2St^*T^f}E3p&el@9' );
define( 'NONCE_KEY',        'h&F<v^[cs+R!J A+;t-Y5EOZH|PSSG6$fsGW*|C)1Yshf 4o3_j>6SS99+?hvgqc' );
define( 'AUTH_SALT',        '*fbcU_!NR!__J6TG+9?_:(#(7EIIz9CCS5[W_2JV,_k#xRn_~FtVQ,7}*_z^FV#j' );
define( 'SECURE_AUTH_SALT', 'UrX2}/LjjX,L.82w2HVPW]LTn2+Df;wujgqS+aBReo_g/ 22uL8P0[+RcI)`CE9N' );
define( 'LOGGED_IN_SALT',   'Lv&qlKK+~FwWGn5e=0KobR++gc$qDCKzTM@&3:@uYfUGumBZmx;/[aAtuZJ}ha{s' );
define( 'NONCE_SALT',       '0G=atkv+1dRo{cuG?#w~cby?D)I!:,Y`t)gZzJC-Wen2<CYMWXOPy@TR[D3VV^!+' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
