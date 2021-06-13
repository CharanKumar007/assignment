<html>
<head><meta http-equiv="refresh" content="1"/></head>
<body>
<p>
<?php
 echo "Server time: ";
 echo date(" h: i : s A");
?>
<br>
<?php
 echo "System time: ";
 date_default_timezone_set("Asia/Kolkata");
 echo date('h:i:s A');
?> 

</p>
</body>
</html>
