<?php
// set the expiration time to one hour ago
setcookie("jnam", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>