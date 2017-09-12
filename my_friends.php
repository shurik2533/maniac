<html>
<head>
  <title>Test</title>
  <meta http-equiv=Content-Type content="text/html;charset=UTF-8">
  <script src='http://code.jquery.com/jquery-1.7.1.js'></script>
  <script src="https://vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>
  <script type="text/javascript">
    VK.init(function() {

    }, function() {
      alert(':(');
      // API initialization failed
      // Can reload page here
    }, '5.68');
  </script>
  <script type="text/javascript">
    VK.api("users.get", {"user_id":210700286}, function (data) {
      alert('!!!');
    });
  </script>
</head>
<body>
</body>
</html>

<?php
//echo var_dump($_SERVER);
//echo $_GET['access_token'];
//echo $_GET['vkuser'];
//https://api.vk.com/method/friends.get?v=5.52&access_token=c32c0954fbc60ea2148d7a970a0c081ddd742ed26566638ff1d1910189ca1ce5fef3e94d73f1e42cb5699
