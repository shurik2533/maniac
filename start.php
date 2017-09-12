<?php
/**
 * Created by IntelliJ IDEA.
 * User: shurik2533
 * Date: 12.09.17
 * Time: 22:19
 */
if (isset($_POST['vkuser']) && preg_match('#^http[s]*://vk.com/(.+)#', $_POST['vkuser'], $res)) {
  header('Location: http://oauth.vk.com/authorize?client_id=6181561&display=page&redirect_uri=http://maniac.s2533.ru/my_friends.php?vkuser=' . $res[1] . '&scope=friends&response_type=token&v=5.52');
  exit;
} else {
  echo 'Плохая ссылка';
}