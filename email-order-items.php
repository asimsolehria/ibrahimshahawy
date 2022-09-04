<?php

/**
 * Email Order Items
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-items.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

$text_align  = is_rtl() ? 'right' : 'left';
$margin_side = is_rtl() ? 'left' : 'right';

foreach ($items as $item_id => $item) :
	$product       = $item->get_product();
	$sku           = '';
	$purchase_note = '';
	$image         = '';

	if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
		continue;
	}

	if (is_object($product)) {
		$sku           = $product->get_sku();
		$purchase_note = $product->get_purchase_note();
		$image         = $product->get_image($image_size);
		$image_id  = $product->get_image_id();
		$image_url = wp_get_attachment_image_url($image_id, 'full');
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
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tbody>
													<tr>
														<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tbody>
																	<tr>
																		<td width="22%" class="img-hide"><img src="<?php echo $image_url ?>" width="90" height="80" alt="" /></td>
																		<td width="78%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ; line-height: 18px ; ">
																			<strong>
																				<?php
																				// Product name.
																				echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));
																				?>
																			</strong>
																			<?php




																			// SKU.
																			if ($show_sku && $sku) {
																				echo wp_kses_post(' (#' . $sku . ')');
																			}

																			// allow other plugins to add additional product information here.
																			do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

																			wc_display_item_meta(
																				$item,
																				array(
																					'label_before' => '<strong class="wc-item-meta-label" style="float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
																				)
																			);

																			// allow other plugins to add additional product information here.
																			do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);

																			?>
																			<br />
																			<!-- <span style="color: #9b9b9b ">Zwart</span> -->
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
														<td width="10" class="column">&nbsp;</td>
														<td width="221" align="center" style="padding-bottom: 5px ; ">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tbody>
																	<tr>
																		<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ; color: #525252">
																			<?php
																			$qty          = $item->get_quantity();
																			$refunded_qty = $order->get_qty_refunded_for_item($item_id);

																			if ($refunded_qty) {
																				$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
																			} else {
																				$qty_display = esc_html($qty);
																			}
																			echo wp_kses_post(apply_filters('woocommerce_email_order_item_quantity', $qty_display, $item));
																			?>
																		</td>
																		<td width="50%">
																			<?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
													<tr>
														<td>
															<?php if ($show_purchase_note && $purchase_note) : ?>
													<tr>
														<td colspan="3" style="text-align:<?php echo esc_attr($text_align); ?>; vertical-align:middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;">
															<?php
																echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
															?>
														</td>
													</tr>
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
	</tbody>
	</table>
	</td>
	</tr>
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

<?php endforeach; ?>