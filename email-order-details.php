<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
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
?>

<tr>
	<td>
		<?php do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>

	</td>
</tr>





<?php if ('customer_completed_order' === $email->id) : ?>
	<tr>
		<td style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; ">
			<br>
			<strong>Volg bestelling via onderstaande link:</strong>

		</td>
	</tr>
	<?php
	if (class_exists('WC_Advanced_Shipment_Tracking_Actions')) {

		$order_id = $order->get_order_number();

		if (function_exists('ast_get_tracking_items')) {
			$tracking_items = ast_get_tracking_items($order_id);
			foreach ($tracking_items as $tracking_item) {
				$tracking_number = $tracking_item['tracking_number'];
				$tracking_provider = $tracking_item['formatted_tracking_provider'];
				$tracking_url = $tracking_item['formatted_tracking_link'];


				$products_list = $tracking_item['products_list'];
			}
		}
	}
	?>
	<tr>
		<td style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; ">
			<br>
			<a style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; " href="<?php echo $tracking_url ?>"><?php echo $tracking_url ?></a>
		</td>
	</tr>

<?php endif; ?>

</tbody>
</table>
</td>
</tr>
<tr>
	<td class="side-pad" align="center">&nbsp;</td>
</tr>
<?php

/*
		* @hooked WC_Emails::customer_details() Shows customer details
		* @hooked WC_Emails::email_address() Shows email address
		*/
do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);

?>







<!-- Email order details -->


<tr>
	<td class="side-pad" align="center">
		<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; background-color: #fff; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
			<tbody>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
							<tbody>
								<tr>
									<td align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column">
														<table class="body" width="100%" border="0" cellspacing="0" cellpadding="0">
															<tbody>
																<tr>
																	<td class="column">
																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td style="font-family: 'open-sans',sans-serif ;font-size: 14px ; padding: 8px ; line-height: 22px ; border: 1px solid #f5b316; border-radius: 5px;  display: block   " bgcolor="#fef9e6"><img src="https://voltcandy.com/volt-stage/wp-content/uploads/2022/09/info.png" width="16" alt="" />&nbsp;<strong>Volt Candy</strong> Online is an online shop offers the lowest possible prices as we have access to the best wholesalers in <strong>Los Angeles California</strong>. We carry A wide variety range of products shipped from <strong>USA</strong></td>
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
									<td class="side-pad" align="center">&nbsp;</td>
								</tr>
								<tr>
									<td align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tbody>
																<tr>
																	<td class="column">
																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;"><strong>Item</strong></td>
																					<td width="10">&nbsp;</td>
																					<td width="221" align="center">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;"><strong>Quantity</strong></td>
																									<td width="50%"><strong>Price</strong></td>
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
									<td class="side-pad" align="center">&nbsp;</td>
								</tr>
								<tr>
									<td class="side-pad" align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column" style="border-top: 1px solid #f5f5f5 ; font-size: 10px ; ">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<?php
								echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									$order,
									array(
										'show_sku'      => $sent_to_admin,
										'show_image'    => false,
										'image_size'    => array(32, 32),
										'plain_text'    => $plain_text,
										'sent_to_admin' => $sent_to_admin,
									)
								);
								?>


								
								<!-- order item totals -->

								<?php
								$item_totals = $order->get_order_item_totals();

								if ($item_totals) {
									$i = 0;
									foreach ($item_totals as $total) {
										$i++;
										if ("Total:" === $total['label']) {
											continue;
										}
								?>
										<tr>
											<td align="center">
												<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td class="column">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tbody>
																		<tr>
																			<td class="column">
																				<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																					<tbody>
																						<tr>
																							<td class="column">
																								<table width="100%" border="0" cellspacing="0" cellpadding="0">
																									<tbody>
																										<tr>
																											<td class="column">
																												<table width="100%" border="0" cellspacing="0" cellpadding="0">
																													<tbody>
																														<tr>
																															<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">&nbsp;</td>
																															<td width="10" class="column">&nbsp;</td>
																															<td width="221" align="center">
																																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																																	<tbody>
																																		<tr>
																																			<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;"><strong><?php echo wp_kses_post($total['label']); ?></strong></td>
																																			<td width="50%"><?php echo wp_kses_post($total['value']); ?></td>
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
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>

									<?php
									}
								}
								if ($order->get_customer_note()) {
									?>
									<tr>
										<th colspan="2">Note:</th>
										<td>
											<?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?>
										</td>
									</tr>
								<?php
								}
								?>


								<!-- total -->
								<tr>
									<td class="side-pad" align="center" style="font-size: 10px ; ">&nbsp;</td>
								</tr>
								<tr>
									<td class="side-pad" align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column" style="border-top: 1px solid #f5f5f5 ; font-size: 10px ; ">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tbody>
																<tr>
																	<td class="column">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td class="column">
																										<table width="100%" border="0" cellspacing="0" cellpadding="0">
																											<tbody>
																												<tr>
																													<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">&nbsp;</td>
																													<td width="10" class="column">&nbsp;</td>
																													<td width="221" align="center">
																														<table width="100%" border="0" cellspacing="0" cellpadding="0">
																															<tbody>
																																<tr>
																																	<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;"><strong>Total:</strong></td>
																																	<td width="50%"><strong><?php echo $order->get_formatted_order_total(); ?></strong></td>
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
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
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
									<td class="column" align="center"></td>
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
	<td>
		<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
	</td>
</tr>