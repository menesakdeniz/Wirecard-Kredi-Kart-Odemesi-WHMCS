<?php
require( '../../../init.php' );
$whmcs->load_function( 'gateway' );
$whmcs->load_function( 'invoice' );

//ini_set("error_log","Loglar");

$gatewayModuleName = basename(__FILE__, '.php');
$GATEWAY = getGatewayVariables($gatewayModuleName);


//$GATEWAY = getGatewayVariables( $GATEWAY['name'] );
////error_log("post : ".print_r($_POST,true),3,"./test");

if (!$GATEWAY['type']) {
	exit( 'Module Not Activated' );
}

$order = $_GET['order'];
$gsm = $_GET['gsm'];
$status = $_GET['status'];
$state = $_GET['state'];
$date = $_GET['date'];
$errorcode = $_GET['errorcode'];
$errormsg = $_GET['errormsg'];
$price = $_GET['price'];
$sms = $_GET['sms'];
$category = $_GET['category'];
$saletype = $_GET['saletype'];
$subscriber = $_GET['subscriber'];
$operator = $_GET['operator'];
$gsmtype = $_GET['gsmtype'];
$productid = $_GET['productid'];
$productdesc = $_GET['productdesc'];
$mpay = $_GET['mpay'];
$channel = $_GET['channel'];

//error_log("Request from ".$_SERVER['REMOTE_ADDR'],0);
//error_log(print_r($_GET,true),0);
if ($state == '100') {
	//error_log("Verilebilir",0);
	if((($_SERVER['REMOTE_ADDR'] == '46.34.90.215' || $_SERVER['REMOTE_ADDR'] == '195.46.135.110' || $_SERVER['REMOTE_ADDR'] == '46.34.90.216'))){
		//error_log("Odeme Tutari : ".$price,0);
		addInvoicePayment( $mpay, $mpay, '', '', $GATEWAY['name'] );
		logTransaction($GATEWAY['name'], $_POST,'Successful');
		//error_log("Odeme ok",0);
	}
}
logTransaction( $GATEWAY['name'], $_POST, 'Unsuccessful' );
echo 'OK';
?>
