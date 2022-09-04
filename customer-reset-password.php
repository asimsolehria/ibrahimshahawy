<?php

/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>

<?php do_action('woocommerce_email_header', $email_heading, $email); ?>

<tr>
	<td class="side-pad" align="center">&nbsp;</td>
</tr>
<tr>
	<td align="center"></td>
</tr>
<tr>
	<td align="center"></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
	<td align="center"></td>
</tr>
<tr>
	<td align="center"></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
	<td align="center" valign="top" bgcolor="#f7f7f7">
		<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; background-color: #fff; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
			<tbody>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
							<tbody>
								<tr>
									<td class="column" align="center" style="padding-bottom: 20;">
										<?php /* translators: %s: Customer username */ ?>
										<p><?php printf(esc_html__('Hi %s,', 'woocommerce'), esc_html($user_login)); ?></p>
										<?php /* translators: %s: Store name */ ?>
										<p><?php printf(esc_html__('Someone has requested a new password for the following account on %s:', 'woocommerce'), esc_html(wp_specialchars_decode(get_option('blogname'), ENT_QUOTES))); ?></p>
										<?php /* translators: %s: Customer username */ ?>
										<p><?php printf(esc_html__('Username: %s', 'woocommerce'), esc_html($user_login)); ?></p>
										<p><?php esc_html_e('If you didn\'t make this request, just ignore this email. If you\'d like to proceed:', 'woocommerce'); ?></p>
										<p>
											<a class="link" href="<?php echo esc_url(add_query_arg(array('key' => $reset_key, 'id' => $user_id), wc_get_endpoint_url('lost-password', '', wc_get_page_permalink('myaccount')))); ?>"><?php // phpcs:ignore 
																																																										?>
												<?php esc_html_e('Click here to reset your password', 'woocommerce'); ?>
											</a>
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" bgcolor="#f7f7f7">&nbsp;</td>
</tr>



<tr>
	<td align="center" valign="top" bgcolor="#f7f7f7" class="side-pad">
		<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; ; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
			<tbody>
				<tr>
					<td align="center" bgcolor="#f7f7f7">
						<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
							<tbody>

								<tr>
									<td style="font-family: 'open-sans',sans-serif ;font-size: 14px ; color: #777777 ; line-height: 18px ; ">

										<br />
										<br />
										<strong style="color: #181818"><img src="https://www.flinqproducts.nl/wp-content/uploads/2021/12/arrow.png" width="6" height="17" alt="" /> Additional Note:</strong><br />
										<?php

										/**
										 * Show user-defined additional content - this is set in each email's settings.
										 */
										if ($additional_content) {
											echo wp_kses_post(wpautop(wptexturize($additional_content)));
										}

										?>
									</td>
								</tr>
								<tr>
									<td class="column" align="center">&nbsp;</td>
								</tr>


								<?php


								do_action('woocommerce_email_footer', $email); ?>