<?
$DB->Query("DELETE FROM b_event_type WHERE EVENT_NAME in (
	'CATALOG_PRODUCT_SUBSCRIBE_LIST_CONFIRM', 
	'CATALOG_PRODUCT_SUBSCRIBE_NOTIFY',
	'CATALOG_PRODUCT_SUBSCRIBE_NOTIFY_REPEATED'
	)");

$DB->Query("DELETE FROM b_event_message WHERE EVENT_NAME in (
	'CATALOG_PRODUCT_SUBSCRIBE_LIST_CONFIRM', 
	'CATALOG_PRODUCT_SUBSCRIBE_NOTIFY',
	'CATALOG_PRODUCT_SUBSCRIBE_NOTIFY_REPEATED'
	)");
?>