<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Language English
 * @Createdate Apr 23, 2011, 01:55:53 PM
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) )
{
	die( 'Stop!!!' );
}

$lang_translator['author'] = "";
$lang_translator['createdate'] = "";
$lang_translator['copyright'] = "";
$lang_translator['info'] = "";
$lang_translator['langtype'] = "lang_module";

$lang_module['categories'] = "Catalog";
$lang_module['topics'] = "Criteria for products";
$lang_module['sources'] = "Manufacturer";
$lang_module['comments'] = "comments";
$lang_module['save'] = "Save";
$lang_module['action'] = "Submit";
$lang_module['move'] = "Moving products";
$lang_module['save_temp'] = "Save product registration";
$lang_module['publtime'] = "Post product";
$lang_module['exptime'] = "For expired products";
$lang_module['status'] = "Status";
$lang_module['status_0'] = "Drafting";
$lang_module['status_1'] = "Display";
$lang_module['status_2'] = "Timer register";
$lang_module['status_3'] = "Expires";
$lang_module['errorsave'] = "System errors do not update the content, you check the product name may be identical";
$lang_module['saveok'] = "Updated product success";
$lang_module['alias'] = "Static Links";
$lang_module['name'] = "Product Name";
$lang_module['error_name'] = "Error: You need to enter the product name";
$lang_module['weight'] = "location";
$lang_module['numsubcat'] = "Sub products";
$lang_module['inhome'] = "Display home";
$lang_module['numlinks'] = "Number of links";
$lang_module['description'] = "Description";
$lang_module['keywords'] = "Keywords";
$lang_module['content_list'] = "Product List";
$lang_module['content_add'] = "Add Product";
$lang_module['add_cat'] = "Add catalog product";
$lang_module['add_topic'] = "Add product groups";
$lang_module['add_sources'] = "Add maker";
$lang_module['edit_cat'] = "Edit catalog product";
$lang_module['edit_topic'] = "Edit product groups";
$lang_module['edit_sources'] = "Edit maker";
$lang_module['siteinfo_publtime'] = "Total products";
$lang_module['siteinfo_pending'] = "Products awaiting registration";
$lang_module['siteinfo_comment_pending'] = "The number may be approved";
$lang_module['siteinfo_comment'] = "Number of comments posted";
$lang_module['siteinfo_order'] = "Total orders";
$lang_module['siteinfo_order_noview'] = "Orders may be considered";
$lang_module['siteinfo_expired'] = "Expired products";
$lang_module['catalog_name'] = "Name of catalog product";
$lang_module['topics_name'] = "Name of product groups";
$lang_module['add_block_cat'] = "Add a group block";
$lang_module['edit_block_cat'] = "Edit a group block";
$lang_module['content_add_items'] = "Product List";
$lang_module['content_main'] = "Information module";
$lang_module['document_payment'] = "How to pay";
$lang_module['document_payment_note'] = "This content is evident in the details of each product support payment";
$lang_module['cat_title'] = "Product catalog list";
$lang_module['link'] = "source url";
$lang_module['cat_sub'] = "The subject";
$lang_module['cat_sub_sl'] = "Is the primary concern";
$lang_module['topic_sl'] = "Select product group or self-filling";
$lang_module['delcat_msg_cat'] = "This theme is %s theme component, you need to delete or move the subject of previous";
$lang_module['delcat_msg_rows'] = "Topics are %s products, are you sure to delete or move to other topics";
$lang_module['delcat_msg_rows_select'] = "Note: subject %1\$s has %2\$s products. <br /> you delete this thread that is to delete all products within it.";
$lang_module['delcat_msg_rows_move'] = "Or choose a theme to move the product to";
$lang_module['delcatandrows'] = "Delete topics and products";
$lang_module['delcat_msg_rows_noselect'] = "You should choose a topic to move products to";
$lang_module['deltopic_msg_rows'] = "related news groups are %s products, are you sure to delete, then group related information will be removed from the product.";
$lang_module['setting'] = "Module configuration";
$lang_module['setting_indexfile'] = "Shows the home page";
$lang_module['setting_homesite'] = "The size of the home page";
$lang_module['setting_hometext'] = "Display mounted compact introduction to see product details";
$lang_module['setting_per_page'] = "Number of products displayed in a page [A]";
$lang_module['setting_per_row'] = "Number of products displayed on a row (show grid) [B]";
$lang_module['setting_per_note'] = "Note select [B] so that [A] is divisible by [B]";
$lang_module['setting_per_note_home'] = "Including home";
$lang_module['setting_idf_df'] = "Default";
$lang_module['setting_setcomm'] = "Who is entitled to be discussed";
$lang_module['setting_allow_all'] = "All";
$lang_module['setting_allow_member'] = "Members";
$lang_module['setting_auto_postcomm'] = "Automatically sign discussion without censoring";
$lang_module['setting_post_auto_member'] = "Automatically registered as members post without censoring";
$lang_module['setting_up_products'] = "Automatically sign products without censoring (members)";
$lang_module['setting_up_products_shop'] = "Automatically sign products without censoring (shop)";
$lang_module['setting_order_to_admin'] = "Order products sent to the Admin";
$lang_module['setting_order_to_member'] = "Order products sent to the registered products";
$lang_module['setting_money_all'] = "Monetary unit used";
$lang_module['setting_active_auto_check_order'] = "Automatically approved when the purchase orders submitted";
$lang_module['setting_active_order'] = "Turn out the page order display";
$lang_module['setting_active_price'] = "Display prices";
$lang_module['setting_active_order_number'] = "Enable order an unlimited number of products";
$lang_module['setting_active_order_number_note'] = "This function is used when not using the online payment functionality, this enabled online payment useless";
$lang_module['setting_active_payment'] = "Allow online payment gateways were integrated with";
$lang_module['setting_active_payment_note'] = "This function is available for payment on the shaft, if ordered with an unlimited number of effects is not";
$lang_module['setting_active_tooltip'] = "Enable tooltip for this product";
$lang_module['setup_payment'] = "Integrated payment gateway";
$lang_module['setting_stt'] = "No";
$lang_module['active_change_complete'] = "Successful change";
$lang_module['active_change_not_complete'] = "Failed to change";
$lang_module['setting_error_connect'] = "Unable to connect to Ngan luong";
$lang_module['setting_title_email_send'] = "Use module shops Nukeviet 3.0";
$lang_module['setting_error_email_send'] = "The system does not send email! Please enable email";
$lang_module['setting_error_value'] = "Parameters you enter your payment is not empty";
$lang_module['viewcat_page'] = "Show catalog products";
$lang_module['viewcat_page_list'] = "show list";
$lang_module['viewcat_page_gird'] = "Show grid";
$lang_module['setting_home_view'] = "How to display at home";
$lang_module['view_home_none'] = "Do not show products";
$lang_module['view_home_all'] = "The product shows the home page";
$lang_module['view_home_cat'] = "Display Products by Category";
$lang_module['cat_have_product_err'] = "You can not add products to the topics already inside the product";
$lang_module['cat_do_not_add'] = "No additional";
$lang_module['error_cat_name'] = "No name themes";
$lang_module['search'] = "Search";
$lang_module['search_type'] = "Search by";
$lang_module['search_id'] = "ID";
$lang_module['search_key'] = "Keyword search";
$lang_module['search_cat'] = "Product catalog";
$lang_module['search_cat_all'] = "All product catalog";
$lang_module['search_title'] = "Product name";
$lang_module['search_bodytext'] = "Content";
$lang_module['search_author'] = "Poster product";
$lang_module['search_admin'] = "Human input";
$lang_module['search_per_page'] = "Products show";
$lang_module['search_note'] = "Keyword search is not less than %d characters, not more than %d characters, not using the html code";
$lang_module['content_edit'] = "Edit product";
$lang_module['error_title'] = "Error: Product not yet named";
$lang_module['error_bodytext'] = "Error: Product not have content";
$lang_module['error_product_unit'] = "Need more product units";
$lang_module['error_cat'] = "Error: Product not have the kind of product";
$lang_module['error_product_price'] = "Error: The product prices are not negative or 0";
$lang_module['error_product_discounts'] = "Error: The discount rate is not negative";
$lang_module['sources_sl'] = "Please select or fill out";
$lang_module['content_cat'] = "Product catalog";
$lang_module['content_block'] = "Products in the block";
$lang_module['content_topic'] = "As part of the product groups";
$lang_module['content_homeimg'] = "Illustrations for the introduction";
$lang_module['content_homeimgalt'] = "Captions for illustrations (product details)";
$lang_module['content_hometext'] = "Brief introduction";
$lang_module['content_notehome'] = "(Visible to all subjects)";
$lang_module['content_keywords'] = "Keyword search for servers";
$lang_module['content_keywords_note'] = "To automatically generated, copy the entire contents of the product in the box below and click";
$lang_module['content_clickhere'] = "here";
$lang_module['content_showmore'] = "(Expand for details)";
$lang_module['content_notetime'] = "(day / month / year hour: minute)";
$lang_module['content_publ_date'] = "Date updated";
$lang_module['content_exp_date'] = "Expiration time";
$lang_module['content_extra'] = "Extended features";
$lang_module['content_inhome'] = "Displayed on the home page";
$lang_module['content_allowed_comm'] = "Allow discussions";
$lang_module['content_allowed_rating'] = "Allow ratings";
$lang_module['content_allowed_send'] = "Permission to send products";
$lang_module['content_allowed_print'] = "Allow printing products";
$lang_module['content_allowed_save'] = "Product allows saving";
$lang_module['content_allshow'] = "See all";
$lang_module['content_allcollapse'] = "Close all";
$lang_module['content_bodytext'] = "Content Details";
$lang_module['content_bodytext_note'] = "(Only visible to those who have permission to view)";
$lang_module['content_admin'] = "Creator";
$lang_module['content_author'] = "Poster";
$lang_module['content_business'] = "Enterprises belonging";
$lang_module['content_note'] = "Note";
$lang_module['content_product_number'] = "Quantity in stock";
$lang_module['content_product_number1'] = "Q.no";
$lang_module['content_product_product_price'] = "Product Price";
$lang_module['content_product_money_unit'] = "Currency Unit";
$lang_module['content_product_address'] = "Sales location";
$lang_module['content_sourceid'] = "Manufacturer";
$lang_module['content_product_discounts'] = "Discount";
$lang_module['content_copyright'] = "Copyrighted products";
$lang_module['content_archive'] = "Storage after the expiration period";
$lang_module['content_showprice'] = "Shows the price of this product";
$lang_module['content_promotional'] = "Promotional";
$lang_module['content_warranty'] = "Warranty";
$lang_module['content_showorder'] = "Allow ordering this product";
$lang_module['imgposition'] = "Product image in";
$lang_module['imgposition_0'] = "Do not show";
$lang_module['imgposition_1'] = "Display module configurations";
$lang_module['imgposition_2'] = "Displayed as an introduction";
$lang_module['addtoblock'] = "Add product to block";
$lang_module['delete_from_block'] = "Delete products from the block";
$lang_module['error_del_content'] = "Error: The system does not remove all the products, please try again";
$lang_module['msgnocheck'] = "You need to select at least one product to perform";
$lang_module['comment'] = "Management comment";
$lang_module['activecomm'] = "Enable a review for this product";
$lang_module['emailcomm'] = "Display comments email the poster";
$lang_module['comment_delete'] = "Delete";
$lang_module['comment_funcs'] = "Function";
$lang_module['comment_email'] = "Sender";
$lang_module['comment_topic'] = "Products";
$lang_module['comment_content'] = "Contents";
$lang_module['comment_status'] = "Status";
$lang_module['comment_delete_title'] = "Delete comment";
$lang_module['comment_delete_confirm'] = "Are you sure you want to delete the comments?";
$lang_module['comment_delete_yes'] = "Yes";
$lang_module['comment_delete_no'] = "No";
$lang_module['comment_delete_accept'] = "Accept";
$lang_module['comment_delete_unsuccess'] = "There are errors in the process of deleting data";
$lang_module['comment_delete_success'] = "Delete data successfully";
$lang_module['comment_enable'] = "Enable";
$lang_module['comment_disable'] = "Disable";
$lang_module['comment_checkall'] = "Checkall";
$lang_module['comment_uncheckall'] = "Uncheckall";
$lang_module['comment_nocheck'] = "Please select at least one comment to make";
$lang_module['comment_update_success'] = "Successfully updated!";
$lang_module['block'] = "Block Products";
$lang_module['adddefaultblock'] = "Select the default when post products";
$lang_module['source_logo'] = "Source logo";
$lang_module['cat_no'] = "No";
$lang_module['content_product_shop'] = "Shop";
$lang_module['prounit'] = "Product unit";
$lang_module['prounit_name_unit'] = "Product unit name";
$lang_module['prounit_name_note'] = "Note";
$lang_module['prounit_save'] = "Save content";
$lang_module['prounit_del_confirm'] = "Do you want to delete?";
$lang_module['prounit_select'] = "Select all";
$lang_module['prounit_unselect'] = "Unselect";
$lang_module['prounit_del_select'] = "Delete selected";
$lang_module['prounit_del_no_items'] = "You may select any";
$lang_module['prounit_info'] = "Product information units";
$lang_module['format_order_id'] = "Billing format code";
$lang_module['format_order_id_note'] = "(For entry form: ABC %06sDEF)";
$lang_module['order_title'] = "Order";
$lang_module['order_name'] = "Order name";
$lang_module['order_email'] = "Email order";
$lang_module['order_phone'] = "Phone";
$lang_module['order_address'] = "Address";
$lang_module['order_total'] = "Total money";
$lang_module['unit_total'] = "Unit";
$lang_module['view'] = "View";
$lang_module['order_info'] = "Order Information";
$lang_module['order_date'] = "Order date";
$lang_module['order_moment'] = "Moment";
$lang_module['order_arising'] = "Arising";
$lang_module['order_no_payment'] = "Unpaid";
$lang_module['order_update'] = "Update";
$lang_module['order_product_number'] = "Q.No";
$lang_module['order_product_price'] = "Price";
$lang_module['order_product_unit'] = "Unit";
$lang_module['order_submit'] = "Process this order";
$lang_module['order_submit_comfix'] = "You accept this order process?";
$lang_module['order_submit_pay'] = "payment confirmation";
$lang_module['order_submit_pay_comfix'] = "Are you sure the buyer has paid?";
$lang_module['order_admin_process'] = "Process person this order";
$lang_module['order_submit_pay_error'] = "This order payment is confirmed";
$lang_module['order_submit_pay_ok'] = "Confirmed paid";
$lang_module['order_payment'] = "Payment Status";
$lang_module['order_yes_payment'] = "Paid";
$lang_module['order_yes_part_payment'] = "Payment custody";
$lang_module['order_payment_cancel'] = "payment cancel";
$lang_module['order_print'] = "Order print";
$lang_module['edit'] = "Edit";
$lang_module['del'] = "Delete";
$lang_module['order_no_products'] = "No";
$lang_module['order_code'] = "Order code";
$lang_module['order_time'] = "Time";
$lang_module['order_products_name'] = "Products";
$lang_module['order_product_numbers'] = "No";
$lang_module['order_products_note'] = "Note";
$lang_module['money'] = "Currency Unit";
$lang_module['money_name'] = "Name of currency";
$lang_module['currency'] = "Name";
$lang_module['exchange'] = "exchange";
$lang_module['money_add'] = "Add monetary unit";
$lang_module['money_edit'] = "Edit monetary unit";
$lang_module['money_compare'] = "Compared with";
$lang_module['checkpayment'] = "Check transactions";
$lang_module['paymentcaption'] = "The payment gateway integration";
$lang_module['paymentcaption_other'] = "The payment gateway is not available for other integrated";
$lang_module['payment_integrat'] = "Integration";
$lang_module['payment'] = "Payment gateway";
$lang_module['paymentname'] = "Payment gateway name";
$lang_module['browse_image'] = "Choose images";
$lang_module['images_button'] = "Payment button images in cart";
$lang_module['domain'] = "Domain";
$lang_module['active'] = "Active";
$lang_module['function'] = "Function";
$lang_module['payment_id'] = "Transaction Code";
$lang_module['user_payment'] = "implementation person";
$lang_module['transaction_time'] = "Trading time";
$lang_module['payment_time'] = "Time record";
$lang_module['history_transaction'] = "Transaction History";
$lang_module['editpayment'] = "This payment gateway: %1\$s";
$lang_module['setting_intro_pay'] = "Help online Payment";
$lang_module['history_payment_wait'] = "Orders awaiting approval";
$lang_module['history_payment_no'] = "Unpaid";
$lang_module['history_payment_send'] = "Payment sent";
$lang_module['history_payment_check'] = "Paid, are temporarily kept";
$lang_module['history_payment_cancel'] = "Be refunded";
$lang_module['history_payment_yes'] = "Paid, money received";
$lang_module['product_number_all'] = "Total products updated";
$lang_module['product_number_all_noctive'] = "Total product was updated but not yet approved";
$lang_module['product_number_commet'] = "Total product review";
$lang_module['product_number_all_store'] = "Total products remaining in stock";
$lang_module['product_number_order'] = "Total orders";
$lang_module['product_number_order_new'] = "The total number of new orders";
$lang_module['product_number_order_no_active'] = "Total orders not approved";
$lang_module['product_number_order_no_payment'] = "The total number of orders outstanding";
$lang_module['product_number_order_send_payment'] = "Total orders were sent payment";
$lang_module['product_number_order_payment'] = "Total payment orders";
$lang_module['product_number_order_dis_payment'] = "Total orders have been canceled";
$lang_module['product_number_order_price'] = "The total amount set";
$lang_module['product_number_order_price_pay'] = "Total amount paid";
$lang_module['product_unit'] = "Products";
$lang_module['product_comment'] = "Comment";
$lang_module['product_order'] = "Order";
$lang_module['detail_info'] = "Detail";
$lang_module['group'] = "Group Products";
$lang_module['group_sub_sl'] = "Main group";
$lang_module['edit_group'] = "Edit group";
$lang_module['add_group'] = "Add group";
$lang_module['group_name'] = "Group name";
$lang_module['group_sub'] = "of group";
$lang_module['delgroup_msg_group'] = "This group is %s set of components, you need to delete or move the group into the prior";
$lang_module['delgroup_msg_rows'] = "This group is %s products, are you sure to delete or move to another group";
$lang_module['delgroup_msg_rows_select'] = "Note : The %1\$s has %2\$s products. <br /> you delete this group that is to delete all products within it.";
$lang_module['delgroup_msg_rows_move'] = "Or choose a group to move their products to";
$lang_module['delgroupandrows'] = "Remove group and other products";
$lang_module['delgroup_msg_rows_noselect'] = "You need to select the group to move their products to";
$lang_module['content_group'] = "Is the product of group";
$lang_module['add_otherimage'] = "Add another illustration";
$lang_module['file_selectfile'] = "Choose images";
$lang_module['group_of'] = "of catalog products";
$lang_module['group_of_none'] = "Not of any kind";

?>