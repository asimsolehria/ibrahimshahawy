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
		$price = $product->get_price();
	}

?>

	<tr>
		<td class="column column-1" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="16.666666666666668%">
			<table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
				<tr>
					<td class="pad" style="
                                                                        width: 100%;
                                                                        padding-right: 0px;
                                                                        padding-left: 0px;
                                                                        padding-top: 5px;
                                                                        padding-bottom: 5px;
                                                                    ">
						<div align="center" class="alignment" style="
                                                                            line-height: 10px;
                                                                        ">
							<img alt="cherries" src="<?php echo $image_url; ?>" style="
                                                                                display: block;
                                                                                height: auto;
                                                                                border: 0;
                                                                                width: 150px;
                                                                                max-width: 100%;
                                                                            " title="cherries" width="150" />
						</div>
					</td>
				</tr>
			</table>
		</td>
		<td class="column column-2" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="16.666666666666668%">
			<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
				<tr>
					<td class="pad" style="
                                                                        text-align: center;
                                                                        width: 100%;
                                                                        padding-top: 30px;
                                                                        padding-bottom: 5px;
                                                                    ">
						<h1 style="
                                                                            margin: 0;
                                                                            color: #000000;
                                                                            direction: ltr;
                                                                            font-family: 'Lato',
                                                                                Tahoma,
                                                                                Verdana,
                                                                                Segoe,
                                                                                sans-serif;
                                                                            font-size: 16px;
                                                                            font-weight: normal;
                                                                            letter-spacing: normal;
                                                                            line-height: 120%;
                                                                            text-align: center;
                                                                            margin-top: 0;
                                                                            margin-bottom: 0;
                                                                        ">
							<strong>
								<?php
								// Product name.
								echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));

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
							</strong>
						</h1>
					</td>
				</tr>
			</table>
		</td>
		<td class="column column-3" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="16.666666666666668%">
			<table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
				<tr>
					<td class="pad" style="
                                                                        padding-bottom: 10px;
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        padding-top: 30px;
                                                                    ">
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
                                                                                color: #1b1464;
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
										<strong>$<?php echo $price; ?></strong>
									</span>
								</p>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</td>
		<td class="column column-4" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="33.333333333333336%">
			<table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
				<tr>
					<td class="pad" style="
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        padding-top: 30px;
                                                                        padding-bottom: 5px;
                                                                    ">
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
                                                                                    letter-spacing: normal;
                                                                                ">
									<span style="
                                                                                        font-size: 16px;
                                                                                    "><strong> 
											 <span style="
                                                                                                background-color: #ed1e79;
                                                                                            ">
											</span><span style="
                                                                                                background-color: #ed1e79;
                                                                                                font-size: 16px;
                                                                                            ">
												<span style="
                                                                                                    color: #ffffff;
                                                                                                ">
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
												</span>
											</span>
											<span style="
                                                                                                color: #ffffff;
                                                                                            ">
												<span style="
                                                                                                    background-color: #ed1e79;
                                                                                                "> 
												</span>
												 </span>
										</strong>
									</span>
								</p>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</td>
		<td class="column column-5" style="
                                                            mso-table-lspace: 0pt;
                                                            mso-table-rspace: 0pt;
                                                            font-weight: 400;
                                                            text-align: left;
                                                            vertical-align: top;
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="16.666666666666668%">
			<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
				<tr>
					<td class="pad" style="
                                                                        text-align: center;
                                                                        width: 100%;
                                                                        padding-top: 30px;
                                                                        padding-bottom: 5px;
                                                                    ">
						<h1 style="
                                                                            margin: 0;
                                                                            color: #000000;
                                                                            direction: ltr;
                                                                            font-family: Arial,
                                                                                Helvetica
                                                                                    Neue,
                                                                                Helvetica,
                                                                                sans-serif;
                                                                            font-size: 16px;
                                                                            font-weight: normal;
                                                                            letter-spacing: normal;
                                                                            line-height: 120%;
                                                                            text-align: center;
                                                                            margin-top: 0;
                                                                            margin-bottom: 0;
                                                                        ">
							<strong>
								<?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
							</strong>
						</h1>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php

	if ($show_purchase_note && $purchase_note) {
	?>
		<tr>
			<td colspan="3" style="text-align:left; vertical-align:middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;">
				<?php
				echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
				?>
			</td>
		</tr>
	<?php
	}
	?>


<?php endforeach; ?>