<?php

/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
* {
box-sizing: border-box;
}

body {
margin: 0;
padding: 0;
}

a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: inherit !important;
}

#MessageViewBody a {
color: inherit;
text-decoration: none;
}

p {
line-height: inherit;
}

.desktop_hide,
.desktop_hide table {
mso-hide: all;
display: none;
max-height: 0px;
overflow: hidden;
}

@media (max-width: 700px) {
.desktop_hide table.icons-inner,
.social_block.desktop_hide .social-table {
display: inline-block !important;
}

.icons-inner {
text-align: center;
}

.icons-inner td {
margin: 0 auto;
}

.fullMobileWidth,
.image_block img.big,
.row-content {
width: 100% !important;
}

.mobile_hide {
display: none;
}

.stack .column {
width: 100%;
display: block;
}

.mobile_hide {
min-height: 0;
max-height: 0;
max-width: 0;
overflow: hidden;
font-size: 0px;
}

.desktop_hide,
.desktop_hide table {
display: table !important;
max-height: none !important;
}
}


<?php
