<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'mywebsite' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'saja' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '123456' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uu,e6mP^ip$7% q $lt?vD_Kqr1`GrD[w<qYcAl^JxKc34/x2l+s25uwu,Kw{J%;' );
define( 'SECURE_AUTH_KEY',  'f[4su^bK15NF|)KoCf/pr0AxM,a~WE,K&%cA`umk5OMkN|z N1<FvNo75iS(G9F+' );
define( 'LOGGED_IN_KEY',    '>z@n!?9h|NN^i(l^a8y5(2-9a 6@|<G&xFB?,=]SDfpsR6PNaA,>PifOVnnNuN5E' );
define( 'NONCE_KEY',        'i-jktY}|},K0^%nKu<9((KcEG#frui M&&F9w*PQ>@?+%@e1)oa9O`5Wx]2^>!<A' );
define( 'AUTH_SALT',        '.]dRzs32`Be$@)Jx&3Z??, X{qGcqsX:H|Df6ZwLhgLzp.CIaoAMl>w~wdy4aQ@w' );
define( 'SECURE_AUTH_SALT', 'bp^T8X![Kq4!fp4i3vB;H6`&)()=%wrqpSXFiJT~?g%1l o2-(o*F+YO8Ei()Vwe' );
define( 'LOGGED_IN_SALT',   '{ML/SO)SJphXY8}CbmyCTnGhgyF* qQ*+2MI?4B|brOyMD?qoxC[h#9-*j@}/~XX' );
define( 'NONCE_SALT',       'BkhqUVZ]opuIkWv)LcA>Ee]Ayq08xb2}*W,IB|kWW7:h{3$<B4Rs:$7-=nJQ..-&' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
