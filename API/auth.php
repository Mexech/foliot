<?
  include('../connect.php');
  include_once('../crypt/decode.php');

  $query = "SELECT * FROM users";
  $result = mysqli_query($link, $query);
  $data = mysqli_fetch_all($result, 1);
  $DUsername = decoder($_POST['username']);
  $DPass = decoder($_POST['password']);
  for ($i=0; $i < count($data); $i++) {
    if (($data[$i]['name'] == $DUsername) && ($data[$i]['pass'] == $DPass)){
      $flag = 1;
    }
  }
    if ($flag == 1) {
        echo("yes");
    } else {
        echo("no");
    }


?>
