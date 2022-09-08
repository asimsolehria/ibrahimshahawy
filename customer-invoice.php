<?php

/**
 * Customer invoice email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-invoice.php.
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

/**
 * Executes the e-mail header.
 *
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>


<!-- email specific description e.g notification to let you know ... -->

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

																<?php /* translators: %s: Customer first name */ ?>
																<p><?php printf(esc_html__('Hi %s,', 'woocommerce'), esc_html($order->get_billing_first_name())); ?></p>

																<?php if ($order->needs_payment()) { ?>
																	<p>
																		<?php
																		printf(
																			wp_kses(
																				/* translators: %1$s Site title, %2$s Order pay link */
																				__('An order has been created for you on %1$s. Your invoice is below, with a link to make payment when you’re ready: %2$s', 'woocommerce'),
																				array(
																					'a' => array(
																						'href' => array(),
																					),
																				)
																			),
																			esc_html(get_bloginfo('name', 'display')),
																			'<a href="' . esc_url($order->get_checkout_payment_url()) . '">' . esc_html__('Pay for this order', 'woocommerce') . '</a>'
																		);
																		?>
																	</p>

																<?php } else { ?>
																	<p>
																		<?php
																		/* translators: %s Order date */
																		printf(esc_html__('Here are the details of your order placed on %s:', 'woocommerce'), esc_html(wc_format_datetime($order->get_date_created())));
																		?>
																	</p>
																<?php
																}
																?>
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

/**
 * Hook for the woocommerce_email_order_details.
 *
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/**
 * Hook for the woocommerce_email_order_meta.
 *
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);

/**
 * Hook for woocommerce_email_customer_details.
 *
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

/**
 * Executes the email footer.
 *
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
