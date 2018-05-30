<?php

$server_url = "https://mercante.network/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "root";
$db_pass = "berniboo";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "8667";
$rpc_user = "mercanterpc";
$rpc_pass = "uvCgny5boRWx3eisixaZ3f9qcgcDARy5R2GtDnD42QR";

$fullname = "MERCANTE"; //Website Title (Do Not include 'wallet')
$short = "<b>MRC</b>"; //Coin Short (BTC)
$blockchain_tx_url = "http://blockchain.info/tx/"; //Blockchain Url
$support = "support@yourwebsite.com"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = ""; //Donation Address

$reserve = "0.0001"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

?>
