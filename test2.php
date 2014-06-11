<?php
 $user = !empty($_POST['user'])?$_POST['user']:die("POST was empty");
 $link = get_headers("https://graph.facebook.com/".$user."/picture?type=large",1)["Location"]or die("Connection Error");
 $link = preg_replace("/\d{3}x\d{3}/i", "720x720", $link);
 echo "<center><img src=\"".htmlspecialchars($link)."\"></center>";
?>
