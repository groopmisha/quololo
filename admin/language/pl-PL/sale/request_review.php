<?php

// Heading

$_['heading_title']             = 'Power Reviews - Review Request Dashboard';



$_['breadcrumb'] = 'Power Reviews - Request Reviews';



// Button

$_['button_send']               = 'Send E-mails';

$_['button_delete_from_list']   = 'Remove from List';

$_['button_settings']           = 'Settings';

$_['button_save_settings']      = 'Save General Settings';

$_['button_save_email_text']    = 'Save E-mail Text';

$_['button_send_test_emails']   = 'Send Test E-mails';



// Column

$_['column_name']               = 'Customer Name';

$_['column_email']              = 'E-Mail';

$_['column_order_id']           = 'Order ID';

$_['column_order_total']        = 'Order Total'; // Added v1.1

$_['column_order_status_date']  = 'Order Status Updated';

$_['column_language']           = 'Language';

$_['column_store_name']         = 'Store Name';



// Tab

$_['tab_general']               = 'General';

$_['tab_email_text']            = 'E-mail Text';

$_['tab_test_center']           = 'Test Center';

$_['tab_log']					= 'Log';



// Text

$_['text_success_mail']         = 'Success: %s mail(s) sent, containing %s product links.';

$_['text_success_remove']       = 'Success: %s customer(s) removed from the list.';

$_['text_success_settings']     = 'Success: Settings for <b>Power Reviews</b> updated.';

$_['text_success_email_text']   = 'Success: E-mail Text has been updated.';

$_['text_success_mail_test']    = 'Success: %s Test E-mails sent (%s languages). %s';

$_['text_failed_validation']    = '%s of the provided E-mails failed validation!';



$_['text_success_clear_log']  	= 'Success: You have successfully cleared your log!';



$_['text_install']              = 'You have to enter your prefered settings and click Save. This message will only show once. Afterwards you will be able to toggle the Settings by clicking the button in the upper right corner.';



$_['text_order_status']         = 'Order Status Required:<br /><span class="help">Only shows orders with this status</span>'; 

$_['text_display']              = 'Days Before Request Review:<br /><span class="help">Number of days before orders with the above order status can be sent review requests either manually or automatically.</span>';

$_['text_display_before_review']              = 'Days Before Allow Review:<br /><span class="help">Number of days before orders with the above order status show up in customer\'s profile for review.</span>';

$_['text_orders_per_page']      = 'Orders Per Page:<br /><span class="help">Number of orders per page. This also determines how many mails will get sent at one time.</span>';

$_['text_fallback_language']    = 'Fallback Language:<br /><span class="help">Uses this language as fallback, to prevent sending empty mails.</span>';

$_['text_append_language_code'] = 'Append Language Code to URLs:<br /><span class="help">Will append language code to product urls in the mail. This automatically selects the correct language for your customer, when clicking the link.';

$_['text_min_amount']           = 'Order Minimum Amount<br /><span class="help">Only shows orders with a total greater than the value entered.<br />Example: 50 will only show orders with a total order value of $50, £50, €50 or greater</span>'; // Added v1.1 



$_['text_subject']              = 'Subject:';

$_['text_message']              = 'Message:';

$_['text_footer']               = 'Footer:';

$_['text_plural_placeholders']  = 'Plural Placeholders:<span class="help">Wordings used for mails with more than 1 product.</span>';

$_['text_singular_placeholders']= 'Singular Placeholders:<span class="help">Wordings used for mails with a single product.</span>';



$_['text_test_emails']          = 'Test E-mails:<br /><span class="help">Enter any email-addresses you want to receive the test mail on (comma separated)</span>';

$_['text_test_languages']       = 'Languages:<br /><span class="help">Select the languages to recieve the test email in.</span>';

$_['text_number_of_products']   = 'Number of Products:<br /><span class="help">Enter the amount of products you want shown in the test email. If left empty 4 products are chosen.</span>';

$_['text_test_store']           = 'Store:';



$_['text_legend'] = '<span class="help">{order_id} = Order ID<br/>{firstname} {lastname} = Firstname Lastname<br />{store_name} = Store Name<br />{store_url} = Store URL<br />{store_review} = Review Store URL<br />{each} {product} {link}</span>';



$_['text_test_warning'] = '<br/>WARNING: The review links in the test email will not work correctly as customers need to have bought the product for it to show in their accounts.<br/>';



$_['text_available_placeholders'] = 'Available Placeholders';



$_['text_cron_enable']        = 'Send email automatically everyday?';

$_['text_cron_key'] = 'CronJob secret key';

$_['text_cron_weekly'] = 'Weekly';

$_['text_cron_daily'] = 'Daily';

$_['text_cron_monthly'] = 'Monthly';

$_['entry_cron_update'] = 'Update Time';

$_['text_cron_command'] = '<strong>Insert this string into your server crontab:</strong>';



// Error

$_['error_no_selected']         = 'Power Reviews: No customer(s) selected.';

$_['error_no_test_mails']       = 'Test Center: No E-mails provided. Enter at least one.';

$_['error_no_language_selected']= 'Test Center: No language(s) selected.';

$_['error_permission']          = 'Warning: You do not have permission to modify or use <b>Power Reviews</b>!';

$_['entry_review_services'] = 'Add Review Services';
$_['entry_review_own_store'] = 'Own Store';
$_['entry_review_image'] = 'Service Image';
$_['entry_review_icon'] = 'Service Icon';
$_['entry_review_link'] = 'Service Link';
$_['entry_review_name'] = 'Service Name';
$_['entry_review_remove_service'] = 'Remove Service';
$_['entry_review_add_service'] = 'Add Service';
$_['entry_review_service_order'] = 'Sort Order';
$_['tab_review_services'] = 'Review Services';
$_['button_save_service_settings'] = 'Save Service Settings';
$_['text_success_services'] = 'You have modified Review Services!';
$_['help_service_icon'] = 'If there is an icon selected, then it will be displayed as a button instead of the service image.';
$_['entry_store_icon'] = 'Store Icon';

// Help
$_['help_service'] = "<strong>Where to find the correct link for reviews?</strong><br/><br/>
<strong>Facebook:</strong> Your Facebook page URL with a <strong><i>/reviews</i></strong> added to the end, e.g. https://www.facebook.com/<strong><i>YourFacebookPage</i></strong>/reviews/ <br/><br/>
<strong>Google:</strong> Go to Google Maps. Search for your organization. Click on the item/pin for your organization among results. Next, click on <strong><i>x reviews</i></strong> (e.g. 36 reviews) in the blue band that shows your organization name. Grab the URL from the browser's address bar. <br/><br/>
<strong>Tripadvisor:</strong> Visit your establishment's Tripadvisor page. Next, click on <strong><i>x reviews</i></strong> (e.g. 36 reviews) below your establishment's name in the title. Grab the URL from the browser's address bar.<br/><br/>
<strong>Trustpilot:</strong> The URL of your organization's Trustpilot page can be used directly. <br/><br/>
<strong>Yelp:</strong> The URL of your organization's Yelp page can be used directly.";

?>