<?php
date_default_timezone_set("Asia/Bangkok");
$mydate=getdate(date("U"));
$randomfile = "$mydate[weekday].$mydate[month].$mydate[mday].$mydate[year].$mydate[hours].$mydate[minutes].$mydate[seconds]";
?>
