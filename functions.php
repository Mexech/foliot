<?
  include_once("connect.php");
  include_once("payment_connect.php");

  function get_day_in_mysql($day){
    return 'day_'.substr($day,0,4).'_'.substr($day,5,2).'_'.substr($day,8,2);
  }

  function postRequest($data, $url){
    $params = array(
        'data' => $data
    );
    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params)
        )
    )));
  }

  function get_all_data($choosedDay, $link){
  $sql = "SELECT * FROM ".get_day_in_mysql($choosedDay);
  $result = mysqli_query($link, $sql);
  $data = mysqli_fetch_all($result);
  return $data;
  }

  function get_all_orderdata($orderNum, $paymentLink){
  $sql = "SELECT * FROM ".get_day_in_mysql($choosedDay);
  $result = mysqli_query($link, $sql);
  $data = mysqli_fetch_all($result);
  return $data;
  }

   function makeTableForDay($day, $link){
     $query = 'CREATE TABLE '.get_day_in_mysql($day).'(
       id       VARCHAR(2),
       booking  VARCHAR(1)
     )';
     mysqli_query($link, $query);
   }

   function checkCurrentlyOfBooking(){

   }

   function writeArrayToBase($choosedDay, $data, $link){
     ////  $choosedDay = get_day_in_mysql($choosedDay);

     $previouslyDay = date_create($choosedDay);
     date_add($previouslyDay, date_interval_create_from_date_string('-1 days'));
     $previouslyDay = date_format($previouslyDay, 'Y-m-d');

     $nextlyDay = date_create($choosedDay);
     date_add($nextlyDay, date_interval_create_from_date_string('+1 days'));
     $nextlyDay = date_format($nextlyDay, 'Y-m-d');
     makeTableForDay($nextlyDay, $link);
     makeTableForDay($previouslyDay, $link);

     for ($i=0; $i < 31; $i++) {
       $array[$i] = 0;
     }
     for ($i=0; $i < 31; $i++)
     {
      //mysqli_query($link, "INSERT INTO `".$choosedDay."` (`id`, `booking`) VALUES ('".$i."', '".$array[$i]."')");
      $bookingData = get_all_data($previouslyDay, $link);
      if(!(isset($bookingData[$i][0]))){
        mysqli_query($link, "INSERT INTO `".get_day_in_mysql($previouslyDay)."` (`id`, `booking`) VALUES ('".$i."', '".$array[$i]."')");
      }
      $bookingData = get_all_data($nextlyDay, $link);
      if(!(isset($bookingData[$i][0]))){
        mysqli_query($link, "INSERT INTO `".get_day_in_mysql($nextlyDay)."` (`id`, `booking`) VALUES ('".$i."', '".$array[$i]."')");
      }
      $bookingData = get_all_data($choosedDay, $link);
      if(!(isset($bookingData[$i][0]))){
        mysqli_query($link, "INSERT INTO `".get_day_in_mysql($choosedDay)."` (`id`, `booking`) VALUES ('".$i."', '".$array[$i]."')");
      }

    }
      for ($i=0; $i < 7; $i++) {
        $l = $i + 24;
        if ($bookingData[$i][1] == 0) {
          mysqli_query($link, "UPDATE `".get_day_in_mysql($choosedDay)."` SET booking = ".$data[$i]." WHERE id = ".$i."");
          mysqli_query($link, "UPDATE `".get_day_in_mysql($previouslyDay)."` SET booking = ".$data[$i]." WHERE id = ".$l."");
      }
    }
      for ($i=7; $i < 25; $i++) {
        //$bookingData = get_all_data($choosedDay, $link);
        if ($bookingData[$i][1] == 0) {
          mysqli_query($link, "UPDATE `".get_day_in_mysql($choosedDay)."` SET booking = ".$data[$i]." WHERE id = ".$i."");
      }
    }
      for ($i=25; $i < 31; $i++) {
        //$bookingData = get_all_data($choosedDay, $link);
        $l = $i - 24;
        if ($bookingData[$i][1] == 0) {
          mysqli_query($link, "UPDATE `".get_day_in_mysql($choosedDay)."` SET booking = ".$data[$i]." WHERE id = ".$i."");
          mysqli_query($link, "UPDATE `".get_day_in_mysql($nextlyDay)."` SET booking = ".$data[$i]." WHERE id = ".$l."");
      }
    }
   }

/*
$nameOfTab = "lol";
$sql = "CREATE TABLE ".$nameOfTab." (id INT, booking INT)";
mysqli_query($link, $sql);
*/


//////////////////////////////////////////
  function divineForThree($num){
    if (($num % 6) == 0) {
      echo "<br>";
    }
  }
//////////////////////////////////////////
  function enterTimeTable($day, $link){
////// <----------          CHOOSED DAY          --------->
    $bookingData = get_all_data($day, $link);
    for ($j=0; $j < 31; $j++) {
      if ($bookingData[$j][1] == 1) {
        $disabled[$j] = "disabled";
      } else {
        $disabled[$j] = "";
      }
    }
////// <----------          END CHOOSED DAY          --------->

    for ($i=1; $i < 24; $i++) {
      $time = ($i - 1)." - ".$i;
      echo '<input type="checkbox" id="c'.$i.'" name="c'.$i.'" '.$disabled[$i].' />
      <label for="c'.$i.'"><span></span>'.$time.'</label>';
      divineForThree($i);
    }
    echo '<input type="checkbox" id="c24" name="c24" '.$disabled[$i].' />
    <label for="c24"><span></span>23 - 0</label> <br> <br>';
    for ($i=25; $i < 31; $i++) {
      $time = ($i - 25)." - ".($i - 24);
      echo '<input type="checkbox" id="c'.($i).'" name="c'.($i).'" '.$disabled[$i].' />
      <label for="c'.($i).'"><span></span>'.$time.'</label>';
      divineForThree($i);
    }
  }
  /////
  function agreePayment($id){

  }
  /////
  function getNewOrderNumber($paymentLink){
    $contain = mysqli_fetch_all(mysqli_query($paymentLink, "SELECT * FROM `orders`"));
    mysqli_query($paymentLink, "INSERT INTO `orders` (`id`) VALUES (".count($contain).")");
    return count($contain);
  }
  /////
  function addOrder($orderNum, $date, $data, $username, $phoneNumber, $paymentLink, $link){
    $query = 'CREATE TABLE order_'.$orderNum.'(
      id       VARCHAR(2),
      booking  VARCHAR(1),
      date     VARCHAR(12),
      username VARCHAR(50),
      phone    VARCHAR(12),
      paid     VARCHAR(3),
      time     VARCHAR(10),
      authType VARCHAR(3),
      vkAccount VARCHAR(30)
    )';
    mysqli_query($paymentLink, $query);
    writeArrayToBase($date, $data, $link);
    $timeNow = date("H:i");
    echo $timeNow;
    echo $date;
    mysqli_query($paymentLink, "INSERT INTO `order_".$orderNum."` (`id`, `booking`, `date`, `username`, `phone`, `paid`, `time`) VALUES ('0', '".$data[0]."', '".$date."', '".$username."', '".$phoneNumber."', 'no', '".$timeNow."')");
    for ($i=1; $i < 31; $i++)
    {
      mysqli_query($paymentLink, "INSERT INTO `order_".$orderNum."` (`id`, `booking`) VALUES ('".$i."', '".$data[$i]."')");
    }
  }
?>
