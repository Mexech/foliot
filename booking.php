<?
  //$disabled = ["","","","","","","","","","","","","","","","","","","","","","","",""];
  include_once("connect.php");
  include_once("functions.php");
  $capchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret=6LdeRUoUAAAAACFNAPMYojxOz9taUBa6ouxB7nk4&response=".$_POST['g-recaptcha-response'];
  $capchaAnswer = json_decode(file_get_contents($capchaUrl), true);
  if ($capchaAnswer['success'] != 1){
    $phoneNumber = $_POST['phoneNumber'];
    $name = $_POST['name'];
  } else {
    include("redirect_to_main.php");
  }


    print_r($_POST);
    writeArrayToBase($_POST["date"], $bookingData, $link);

  //  makeTableForDay($_POST["date"], $link);
  //  writeArrayToBase($_POST["date"], $bookingData, $link);
?>
<script type="text/javascript">
//document.location = '//foliot.su/success.php';
</script>
