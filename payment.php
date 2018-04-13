<?
include_once("functions.php");
include_once("connect.php");
include_once("payment_connect.php");
$date = $_POST["date"];
$phoneNumber = $_POST["phoneNumber"];
$name = $_POST["name"];
$data = $_POST["data"];
$hash = $_POST["hash"];
$orderNum = $_POST["orderNum"];
$scrKey = "PanchL1ne";
//

//
if($hash != hash_hmac('md5',$_POST["phoneNumber"].$_POST["name"].$_POST["date"].$data.$orderNum, $scrKey)){
	exit();
}
$capchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret=6LdeRUoUAAAAACFNAPMYojxOz9taUBa6ouxB7nk4&response=".$_POST['g-recaptcha-response'];
$capchaAnswer = json_decode(file_get_contents($capchaUrl), true); /*
if ($capchaAnswer['success'] != 1){
	exit();
}*/
$data = str_split($data);
addOrder($orderNum, $date, $data, $name, $phoneNumber, $paymentLink, $link);
//////////////////////////////////////////////////////////////////////////////////
// your registration data
$mrh_login = "foliot";      // your login here
$mrh_pass1 = "Th1ng2030Wa";   // merchant pass1 here
$ExpirationDate = "2018-03-19T20:06";
$IsTest = 1;
for ($i=0; $i < 31; $i++) {
	if ($data[$i] == 1) {
		$out_summ++;
	}
}
$inv_desc  = "Предоплата ".$out_summ." часов в Антикафе FreshTime";
$out_summ  = ($out_summ * 100).".00";
// build CRC value
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");

// build URL
$url = "https://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&".
    "OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&SignatureValue=$crc&IsTest=$IsTest&ExpirationDate=$ExpirationDate";

// print URL if you need
echo "<a href='$url'>Payment link</a>";

?>
<script type="text/javascript">
document.location = '<?=$url?>';
</script>
