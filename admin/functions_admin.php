<?
include_once("../payment_connect.php");
function enterUsersBlocks($day, $paymentLink){
  $sql = "SELECT * FROM ".get_day_in_mysql($choosedDay);
  $result = mysqli_query($link, $sql);
  $data = mysqli_fetch_all($result);
  return $data;
}

?>
