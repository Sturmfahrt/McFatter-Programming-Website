<!DOCTYPE html>
<html>
<body>

<?php

$name = $_POST['fname'];
$texter = $_POST['texter'].PHP_EOL;


$file = fopen("data.txt","a+");

$savestring = "From ".$name.": ".$texter;
fwrite($file, $savestring);
fclose($file);
print_r(error_get_last());

header('Location: thanks.html');
exit;

?>

</body>
</html>