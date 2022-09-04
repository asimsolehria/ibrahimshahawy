<?php

/**
 * Customer on-hold order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-on-hold-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>



<tr>
	<td class="side-pad" align="center">
		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; ">
						<?php /* translators: %s: Customer first name */ ?>
						<p><?php printf(esc_html__('Hi %s,', 'woocommerce'), esc_html($order->get_billing_first_name())); ?></p>
						<p><?php esc_html_e('Thanks for your order. It’s on-hold until we confirm that payment has been received. In the meantime, here’s a reminder of what you ordered:', 'woocommerce'); ?></p>


					</td>
					<td width="19%" valign="top" style="padding-top: 5px ; ">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td width="45%" style="font-size: 14px ; color:  ; font-family: 'open-sans',sans-serif ;">Order</td>
													<td width="55%" bgcolor="#000000" style="padding: 5px ; font-size: 14px ; color: #FFFFFF ; font-family: 'open-sans',sans-serif ; border-radius: 10px ;  " align="center"><strong><?php echo $order->get_order_number(); ?></strong></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>


				<?php

				/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
				do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

				/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
				do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);


				?>
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

												/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
												do_action('woocommerce_email_footer', $email);
