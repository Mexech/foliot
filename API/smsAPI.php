<?
$login = "kirillane80@gmail.com";
$APIkey = "7LyEtr9UlgC7jEughTWhhpbvapxA";
$number = "79026705047";
$text = "Foliot+-+забронируй+будущее%2e%20%dВаш+код 02938";
//$url = "https://gate.smsaero.ru/send/?user=".$login."&password=".md5($password)."&to=".$number."&text="$text"&from=Foliot";
//$answer = file_get_contents($url);
$url = "https://".$login.":".$APIkey."@gate.smsaero.ru/v2/sms/send?number=".$number."&text=".$text."&sign=SMS%20Aero&channel=DIGITAL";
$answer = json_decode(file_get_contents($url), true);
print_r($answer);
?>
