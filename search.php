<? include "niceurl.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>The Xapian Project : Search</title>
<? include "styleandmeta.txt"; ?>
</head>

<body>

<div id="Content">
<?php 
putenv('REQUEST_METHOD=GET');
putenv('SERVER_PROTOCOL=INCLUDED');
putenv('QUERY_STRING=' . $_SERVER['QUERY_STRING']);
putenv('SCRIPT_NAME=');
system("/srv/www/xapian.org/omega.cgi"); ?>
</div>

<?php
include "cssnav.php";
?>

</body>
</html>
