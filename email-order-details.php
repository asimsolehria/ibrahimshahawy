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

$text_align = is_rtl() ? 'right' : 'left'; ?>

<table>
    <tr>
        <td>
            <?php do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
        </td>
    </tr>
</table>





<!-- ad banner starts after email header -->
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
    <tbody>
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="
                                                mso-table-lspace: 0pt;
                                                mso-table-rspace: 0pt;
                                                background-repeat: no-repeat;
                                                background-position: top center;
                                                background-color: #ffffff;
                                                color: #000000;
                                                background-image: url('https://voltcandy.com/volt-stage/wp-content/uploads/2022/09/bg_light_green.png');
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
                                                            border-top: 0px;
                                                            border-right: 0px;
                                                            border-bottom: 0px;
                                                            border-left: 0px;
                                                        " width="50%">
                                <table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
                                    <tr>
                                        <td class="pad" style="
                                                                        padding-bottom: 10px;
                                                                        padding-left: 15px;
                                                                        padding-right: 15px;
                                                                        padding-top: 55px;
                                                                    ">
                                            <div style="
                                                                            font-family: sans-serif;
                                                                        ">
                                                <div class="" style="
                                                                                font-size: 14px;
                                                                                font-family: Arial,
                                                                                    Helvetica
                                                                                        Neue,
                                                                                    Helvetica,
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
                                                                                        font-size: 38px;
                                                                                    "><strong><span style="">Free shipping on orders over $150</span></strong></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="10" cellspacing="0" class="text_block block-4" role="presentation" style="
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
                                                                                color: #ed1e79;
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
                                                                                    "><strong>GET
                                                                ON
                                                                MONTHLY
                                                                GROCERY</strong></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="10" cellspacing="0" class="text_block block-6" role="presentation" style="
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
                                                                                    "> See how to

                                                            <strong>
                                                                 <span style="
                                                                                                color: #f20308;
                                                                                            ">get a 20%</span> </strong>
                                                            discount</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" class="button_block block-8" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
                                    <tr>
                                        <td class="pad" style="
                                                                        padding-bottom: 35px;
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        padding-top: 30px;
                                                                        text-align: center;
                                                                    ">
                                            <div align="center" class="alignment">
                                                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="www.example.com" style="height:44px;width:134px;v-text-anchor:middle;" arcsize="46%" strokeweight="0.75pt" strokecolor="#60BB44" fillcolor="#60bb44"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:16px"><!
                                                                        [endif]--><a href="www.example.com" style="
                                                                                text-decoration: none;
                                                                                display: inline-block;
                                                                                color: #ffffff;
                                                                                background-color: #ed1e79;
                                                                                border-radius: 20px;
                                                                                width: auto;
                                                                                border-top: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                font-weight: undefined;
                                                                                border-right: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                border-bottom: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                border-left: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                padding-top: 5px;
                                                                                padding-bottom: 5px;
                                                                                font-family: 'Lato',
                                                                                    Tahoma,
                                                                                    Verdana,
                                                                                    Segoe,
                                                                                    sans-serif;
                                                                                text-align: center;
                                                                                mso-border-alt: none;
                                                                                word-break: keep-all;
                                                                            " target="_blank"><span style="
                                                                                    padding-left: 20px;
                                                                                    padding-right: 20px;
                                                                                    font-size: 16px;
                                                                                    display: inline-block;
                                                                                    letter-spacing: normal;
                                                                                "><span style="
                                                                                        word-break: break-word;
                                                                                    "><span data-mce-style="" style=""><strong><span data-mce-style="" style="
                                                                                                    line-height: 32px;
                                                                                                ">Here Is How</span></strong></span></span></span></a>
                                                <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
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
                                                        " width="50%">
                                <table border="0" cellpadding="0" cellspacing="0" class="image_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
                                    <tr>
                                        <td class="pad" style="
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        width: 100%;
                                                                        padding-top: 50px;
                                                                        padding-bottom: 25px;
                                                                    ">
                                            <div align="center" class="alignment" style="
                                                                            line-height: 10px;
                                                                        ">
                                                <img alt="vegetables" class="fullMobileWidth" src="https://voltcandy.com/volt-stage/wp-content/uploads/2022/09/Trident-Vibes-Ooh-La-Lemon-removebg-preview.png" style="
                                                                                display: block;
                                                                                height: auto;
                                                                                border: 0;
                                                                                width: 320px;
                                                                                max-width: 100%;
                                                                            " title="vegetables" width="320" />
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



<!-- ad banner ends -->

<!-- after banner  -->

<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
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
                                <div class="spacer_block" style="
                                                                height: 20px;
                                                                line-height: 20px;
                                                                font-size: 1px;
                                                            ">
                                     
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- after banner ends -->


<!-- email order items and featured products -->
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
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
                        <!-- here email-order-items -->
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

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
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
                                <div class="spacer_block" style="
                                                                height: 20px;
                                                                line-height: 20px;
                                                                font-size: 1px;
                                                            ">
                                     
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>




<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-13" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
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
                                <table border="0" cellpadding="0" cellspacing="0" class="button_block block-2" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
                                    <tr>
                                        <td class="pad" style="
                                                                        padding-bottom: 10px;
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        padding-top: 30px;
                                                                        text-align: center;
                                                                    ">
                                            <div align="center" class="alignment">
                                                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="www.example.com" style="height:44px;width:196px;v-text-anchor:middle;" arcsize="46%" strokeweight="0.75pt" strokecolor="#60BB44" fillcolor="#60bb44"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:16px"><!
                                                                        [endif]--><a href="<?php echo $order->get_view_order_url(); ?>" style="
                                                                                text-decoration: none;
                                                                                display: inline-block;
                                                                                color: #ffffff;
                                                                                background-color: #ed1e79;
                                                                                border-radius: 20px;
                                                                                width: auto;
                                                                                border-top: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                font-weight: undefined;
                                                                                border-right: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                border-bottom: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                border-left: 1px
                                                                                    solid
                                                                                    #ed1e79;
                                                                                padding-top: 5px;
                                                                                padding-bottom: 5px;
                                                                                font-family: 'Lato',
                                                                                    Tahoma,
                                                                                    Verdana,
                                                                                    Segoe,
                                                                                    sans-serif;
                                                                                text-align: center;
                                                                                mso-border-alt: none;
                                                                                word-break: keep-all;
                                                                            " target="_blank"><span style="
                                                                                    padding-left: 20px;
                                                                                    padding-right: 20px;
                                                                                    font-size: 16px;
                                                                                    display: inline-block;
                                                                                    letter-spacing: normal;
                                                                                "><span style="
                                                                                        word-break: break-word;
                                                                                    "><span data-mce-style="" style=""><strong><span data-mce-style="" style="
                                                                                                    line-height: 32px;
                                                                                                ">VIEW
                                                                        ORDER</span></strong></span></span></span></a>
                                                <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" class="text_block block-4" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
                                    <tr>
                                        <td class="pad" style="
                                                                        padding-bottom: 30px;
                                                                        padding-left: 20px;
                                                                        padding-right: 20px;
                                                                        padding-top: 60px;
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
                                                                                ">
                                                        <span style="
                                                                                        font-size: 30px;
                                                                                    "><strong><span style="">Featured
                                                                    products</span></strong></span>
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
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-14" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt" width="100%">
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


                            <?php
                            // remove_all_filters('posts_orderby');
                            $products = new WP_Query(array(
                                'post_type' => 'product',
                                'posts_per_page' => 3,
                                'orderby' => 'rand',
                                'meta_key' => '_price',
                                'meta_query' => array(
                                    array(
                                        'key' => '_price',
                                        'value' => 0,
                                        'compare' => '>',
                                        'type' => 'NUMERIC'
                                    )
                                )
                            ));
                            $counter = 1;
                            while ($products->have_posts()) : $products->the_post();
                                $product_object = wc_get_product(get_the_ID());
                            ?>











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
                                                        " width="33.333333333333336%">
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
                                                                    ">
                                                <div align="center" class="alignment" style="
                                                                            line-height: 10px;
                                                                        ">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img alt="corn" src="<?php echo get_the_post_thumbnail_url(); ?>" style="
                                                                                display: block;
                                                                                height: auto;
                                                                                border: 0;
                                                                                width: 227px;
                                                                                max-width: 100%;
                                                                            " title="corn" width="227" />
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-3" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                            " width="100%">
                                        <tr>
                                            <td class="pad" style="
                                                                        text-align: center;
                                                                        width: 100%;
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
                                                    <strong><?php the_title(); ?></strong>
                                                </h1>
                                            </td>
                                        </tr>
                                    </table>
                                    <table border="0" cellpadding="0" cellspacing="0" class="text_block block-4" role="presentation" style="
                                                                mso-table-lspace: 0pt;
                                                                mso-table-rspace: 0pt;
                                                                word-break: break-word;
                                                            " width="100%">
                                        <tr>
                                            <td class="pad" style="
                                                                        padding-bottom: 15px;
                                                                        padding-left: 10px;
                                                                        padding-right: 10px;
                                                                        padding-top: 10px;
                                                                    ">
                                                <div style="
                                                                            font-family: Tahoma,
                                                                                Verdana,
                                                                                sans-serif;
                                                                        ">
                                                    <div class="" style="
                                                                                font-size: 12px;
                                                                                font-family: 'Lato',
                                                                                    Tahoma,
                                                                                    Verdana,
                                                                                    Segoe,
                                                                                    sans-serif;
                                                                                mso-line-height-alt: 14.399999999999999px;
                                                                                color: #60bb44;
                                                                                line-height: 1.2;
                                                                            ">
                                                        <p style="
                                                                                    margin: 0;
                                                                                    font-size: 14px;
                                                                                    text-align: center;
                                                                                    mso-line-height-alt: 16.8px;
                                                                                ">
                                                            <strong>$<?php echo $product_object->get_price(); ?></strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            <?php
                                $counter++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- email order item and featured products ends-->




<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>