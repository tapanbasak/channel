<?php
   $cp = mysql_connect("localhost", "root", "rootwdp");
   mysql_select_db("drupal_city", $cp) or die('there is a problem in database connection.');
   $q = mysql_query("SELECT `data` FROM `field_config_instance` WHERE `id`=17");
   $d = mysql_fetch_assoc($q);
   print '2223vvv<pre>';
   print_r(unserialize($d['data']));
   echo date('Y-m-d H;i:s');
?>
