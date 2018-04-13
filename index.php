<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Cache-Control" content="no-cache">
        <title>Foliot</title>
        <?php include_once("data.php"); ?>
        <?php include_once("functions.php"); ?>
        <?php include_once("connect.php"); ?>
        <?php include_once("payment_connect.php"); ?>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <script src="/js/jquery.js"></script>
        <!-- <script src="/js/txt_change_detector.js"></script> -->


    </head>
    <body>
      <div class="main_block">
        <form action="capchapage.php" method="post" name="bookingForm">
            <p>
                <label for="phoneNumber">Телефон: +7</label>
                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="9025553535" value="<?=$_GET["phoneNumber"]?>" size="10"/>
                <label for="name">Ваше имя: </label>
                <input type="text" id="name" name="name" placeholder="Аркадий" size="10" value="<?=$_GET["name"]?>"/>
            </p>
            <p>
                <label for="date">Дата брони: </label>
                <?
                if(isset($_GET["date"])){
                  $dataValue = $_GET["date"];
                }else{
                  $dataValue = $today;
                }

                if ($dataValue > $bookingEndDay){
                  $dataValue = $bookingEndDay;
                }
                if ($dataValue < $today){
                  $dataValue = $today;
                }

                ?>
                <input type="date" id="date" name="date" max="<?=$bookingEndDay?>" min="<?=$today?>" list="date-list" value="<?=$dataValue?>"/>
                <datalist id="date-list">
                  <option value="<?=$today?>" label="Сегодня">
                  <option value="<?=$tomorrow?>" label="Завтра">
                  <option value="<?=$afterTomorrow?>" label="После завтра">
                </datalist>

                <!---->
                <br>
                <?
                makeTableForDay($dataValue, $link);

                ///

                enterTimeTable($dataValue, $link);
                //makeTableForDay($dataValue, $link);
                //makeTableForDay($dataValue, $link);
                //writeArrayToBase($dataValue, 0, $link);
                echo "<pre>";
                echo(getNewOrderNumber($paymentLink));
                echo "</pre>";

                ?>

            </p>
            <p>
                <button type="submit" >Отправить</button>
            </p>

            <script type="text/javascript">

            $('#date').change(function(){
              var form = this.form;
              //alert('Имя ' + form.name.value + ', Телефон: ' + form.phoneNumber.value);
              document.location = '//foliot.su/index.php?phoneNumber=' + form.phoneNumber.value + '&name=' + form.name.value + '&date=' + form.date.value;
            });
           </script>
        </form>
      </div>
    </body>
