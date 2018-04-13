<html>
<head>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <? include_once("functions.php"); ?>
</head>
<body>
  <?
  for ($i=0; $i < 32; $i++) {
    if (isset($_POST["c".$i])) {
      $bookingData[$i] = 1;
    } else {
      $bookingData[$i] = 0;
    }
  }
  $scrKey = "PanchL1ne";
  $stringData = implode($bookingData);
  echo $stringData;
  $orderNum = getNewOrderNumber($paymentLink);
  ?>
  <form action="payment.php" method="post" name="bookingForm">
    <div class="g-recaptcha" data-sitekey="6LdeRUoUAAAAAFXPw7mFsKUUgpYbP3otz1RW9SL3"></div>
    <style type="text/css"> .sidebar {display: none;} </style>
    <div class="sidebar">
      <input type="text" id="phoneNumber" name="phoneNumber" value="<?=$_POST["phoneNumber"]?>"/>
      <input type="text" id="name" name="name" value="<?=$_POST["name"]?>"/>
      <input type="date" id="date" name="date" value="<?=$_POST["date"]?>"/>
      <input type="text" id="hash" name="hash" value="<?=hash_hmac('md5',$_POST["phoneNumber"].$_POST["name"].$_POST["date"].$stringData.$orderNum, $scrKey)?>"/>
      <input type="text" id="data" name="data" value="<?=$stringData?>"/>
      <input type="text" id="orderNum" name="orderNum" value="<?=$orderNum?>"/>
    </div>
    <button type="submit">Отправить</button>
  </form>
</body>
</html>
