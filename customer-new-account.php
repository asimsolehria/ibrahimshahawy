<?php

/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 6.0.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_email_header', $email_heading, $email); ?>



<!-- here it is  -->


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
										<?php /* translators: %1$s: Site title, %2$s: Username, %3$s: My account link */ ?>
										<p><?php printf(esc_html__('Thanks for creating an account on %1$s. Your username is %2$s. You can access your account area to view orders, change your password, and more at: %3$s', 'woocommerce'), esc_html($blogname), '<strong>' . esc_html($user_login) . '</strong>', make_clickable(esc_url(wc_get_page_permalink('myaccount')))); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?></p>
										<?php if ('yes' === get_option('woocommerce_registration_generate_password') && $password_generated && $set_password_url) : ?>
											<?php // If the password has not been set by the user during the sign up process, send them a link to set a new password 
											?>
											<p><a href="<?php echo esc_attr($set_password_url); ?>"><?php printf(esc_html__('Click here to set your new password.', 'woocommerce')); ?></a></p>
										<?php endif; ?>

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

								<?php do_action('woocommerce_email_footer', $email); ?>