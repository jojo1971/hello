<?php

 $dayinpass = "2016-05-13 05:09:12";
 $today = time();
 $dayinpass= strtotime($dayinpass);
 echo round(abs($today-$dayinpass)/60/60);
?>