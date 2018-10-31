<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?PHP
$fname=$_POST["fname"];
echo $fname;
echo "</br>";
$lname=$_POST["lname"];
echo $lname;
echo "</br>";
$email=$_POST["uemail"];
echo $email;
echo "</br>";
$pass=$_POST["upass"];
echo $pass;
echo "</br>";

if ($_FILES["upload"]["error"]>0)
{
echo "Errror:".$_FILES["upload"]["error"]."</br>";
}
else
{
$name=$_FILES["upload"]["name"];
echo $name;
echo "</br>";
$type=$_FILES["upload"]["type"];
echo $type;
echo "</br>";
$size=$_FILES["upload"]["size"] /1024;
echo $size;
echo "</br>";
$path=$_FILES["upload"]["tmp_name"];
echo $path;
echo "</br>";

$picname=pathinfo($name,PATHINFO_FILENAME);
$picext=pathinfo($name,PATHINFO_EXTENSION);


if ($size<10500)
{
if (file_exists("files/".$_FILES["upload"]["name"]))
{
echo $_FILES["upload"]["name"]."already exisits.";
}

else
{
move_uploaded_file($_FILES["upload"]["tmp_name"],
"files/".$_FILES["upload"]["name"]);
}

}



}


?>
<body>
</body>
</html>
