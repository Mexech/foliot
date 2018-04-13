<?
$password = $_GET["password"];

$leinghtOfArray = strlen($password);
for ($i=0; $i < $leinghtOfArray; $i++) {
  $password[$i] = $alphabet[($i + 5 - 3) + 4];
}


echo($encriptedPass);
echo("<br>");
echo("<pre>");
echo(print_r($alphabet));
echo($password);
echo("</pre>");





?>
