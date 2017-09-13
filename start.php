<html>
<head>
  <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
  <script type="text/javascript">
    var re = /#access_token=([a-z0-9]+)&expires_in=([0-9]+)&user_id=([0-9]+)/g;
    var s = re.exec(window.location.hash);
    document.cookie = "token=" + s[1];
    document.cookie = "expires_in=" + s[2];
    document.cookie = "user_id=" + s[3];
  </script>
</head>
<body>
<form action="/friends.php" method="post">
  <input type="text" name="vkuser">
  <input type="submit" name="sbmt" value="Всё узнать!">
</form>
</body>
</html>
