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

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'a/H~s%]70EJG/u[s?~8jcIHIZ0}X/z]eZ@7L[ICnT~}F8+#zkp{b]$e>Bha95K*!' );
define( 'SECURE_AUTH_KEY',  'pPl xf#NE*O[);o]KnT_A1vSTd]=?0s!0,)48xiWe:1Kvm2Ny:tTLICtojBa>4>s' );
define( 'LOGGED_IN_KEY',    '[nSb]Y0><urv!:n!?bg{p;$9@@ WR^6OpFI{h>LRMbu6YoyQ2^d~qCl%k$;E,e`$' );
define( 'NONCE_KEY',        'avCxUjow:_p <K|klopB)U{-ZFw{Ta*2+5g-3x8cWj$ZnY2D)Ld{)[0#p7}v-g4y' );
define( 'AUTH_SALT',        ')*dKdG-sICu&+YW}pf>e$RA%GEeGni=4yZap!6ti|PL6pnu@OM!K_zW>i1cl#_MR' );
define( 'SECURE_AUTH_SALT', '2OIvLtlOYE4.oU4th75sL8Pa8Wai&c.{,_Xt8t[5^Dpa}CLN^UT1 >G9sULQ2-N@' );
define( 'LOGGED_IN_SALT',   'n0tk,=[.3*ek&c_/CWKWL!O_1;IY^?VQMXdi%*g7Ngx>ifJ2KfvthcB8Io5C3{E]' );
define( 'NONCE_SALT',       'CwX]d!]5V^I^Q1$QD04ioy~}~fof`17*Pq`kW&([oT~P;~O6:wj%*G1TJ}2&,CQ,' );

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
