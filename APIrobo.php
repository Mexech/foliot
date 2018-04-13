<?
// your registration data
$mrh_pass2 = "Th1ng2030Wa";  // merchant pass1 here

// HTTP parameters:
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);  // force uppercase

// build own CRC
$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2"));
if ($my_crc != $crc)
{
  exit();
}
agreePayment($inv_id);
echo "OK".$inv_id;
?>
