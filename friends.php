<?php
if (isset($_POST['vkuser']) && preg_match('#^http[s]*://vk.com/(.+)#', $_POST['vkuser'], $res)) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.vk.com/method/friends.get?v=5.52&access_token=" . $_COOKIE["token"]);
  //return the transfer as a string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  echo $output;
} else {
  echo 'Плохая ссылка';
}
?>

<html>
<head>
  <title>Test</title>
  <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
</head>
<body>
</body>
</html>

<?php
//echo var_dump($_SERVER);
//echo $_GET['access_token'];
//echo $_GET['vkuser'];
//
