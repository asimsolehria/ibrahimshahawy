<?php

/**
 * Admin failed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-failed-order.php
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

if (!defined('ABSPATH')) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>



<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="
                                                mso-table-lspace: 0pt;
                                                mso-table-rspace: 0pt;
                                                background-color: #ed1e79;
                                                color: #000000;
                                                width: 680px;
                                            " width="680">
					<tbody>
						<tr>
							<td class="column column-1" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            padding-top: 5px;
                                                            padding-bottom: 5px;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="100%">
								<table border="0" cellpadding="20" cellspacing="0" class="text_block block-1" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
									<tr>
										<td class="pad">
											<div style="
                                                                            font-family: Tahoma,
                                                                                Verdana,
                                                                                sans-serif;
                                                                        ">
												<div class="" style="
                                                                                font-size: 14px;
                                                                                font-family: 'Lato',
                                                                                    Tahoma,
                                                                                    Verdana,
                                                                                    Segoe,
                                                                                    sans-serif;
                                                                                mso-line-height-alt: 16.8px;
                                                                                color: #000000;
                                                                                line-height: 1.2;
                                                                            ">
													<p style="
                                                                                    margin: 0;
                                                                                    font-size: 14px;
                                                                                    text-align: center;
                                                                                    mso-line-height-alt: 16.8px;
                                                                                ">
														<span style="
                                                                                        font-size: 16px;
                                                                                    ">
															<strong>

																<?php /* translators: %1$s: Order number. %2$s: Customer full name. */ ?>
																<p><?php printf(esc_html__('Payment for order #%1$s from %2$s has failed. The order was as follows:', 'woocommerce'), esc_html($order->get_order_number()), esc_html($order->get_formatted_billing_full_name())); ?></p>


															</strong>
														</span>
													</p>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>

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

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
// do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);

?>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-15" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="
                                                mso-table-lspace: 0pt;
                                                mso-table-rspace: 0pt;
                                                background-color: #ffffff;
                                                color: #000000;
                                                width: 680px;
                                            " width="680">
					<tbody>
						<tr>
							<td class="column column-1" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            padding-top: 5px;
                                                            padding-bottom: 5px;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="100%">
								<table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
									<tr>
										<td class="pad" style="
                                                                        width: 100%;
                                                                        padding-right: 0px;
                                                                        padding-left: 0px;
                                                                        padding-top: 40px;
                                                                    ">
											<div align="center" class="alignment" style="
                                                                            line-height: 10px;
                                                                        ">
												<?php
												/**
												 * Show user-defined additional content - this is set in each email's settings.
												 */
												if ($additional_content) {
													echo wp_kses_post(wpautop(wptexturize($additional_content)));
												}
												?>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
<?php
/*
 * @hooked WC_Emails::email_footer() Output the email footer
*/
do_action('woocommerce_email_footer', $email);
