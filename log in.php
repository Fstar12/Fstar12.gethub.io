<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?PHP
?>
<script>
function abc()
{
x=document.forms["check"]["uemail"].value
if (x=="")
{
alert("Please Enter Your Email");
return false}
y=document.forms["check"]["upass"].value
if (y=="")
{
alert("Please Enter Your password");}

return false}
</script>
<style>

body
{background-image:url(images/background.jpg);
background-repeat:no-repeat;
background-size:1280px 1024px;}

a:link 
{
background-color:#33FFFF;}
a:hover
{background-color:#FFCC99;
}
a:visited
{
background-color:#CCCC33;
border:#6633FF;}

</style>
</head>

<body>
<table width="990" height="300"  align="center">
<tr>
<td><img src="images/slideshow1.jpg">
</td>
</tr>
</table>
<table  width="990" height="50" align="center" >
<tr>
<td align="center"><font size="5" color="#33FFFF"  ><a href="index.php">Home</a></font>
</td>
<td align="center"><font size="5" color="#33FFFF"><a href="Gallery.php">Gallery</a></font>
</td>
<td align="center"><font size="5" color="#33FFFF"><a href="Sign up.php">Sign Up</a></font>
</td>
<td align="center"><font size="5" color="#33FFFF"><a href="Staff.php">Staff</a></font>
</td>
<td align="center"><font size="5" color="#33FFFF">Contact us </font>
</td>
<td align="center"><font size="5" color="#33FFFF">
Booking</font>
</td>
</tr>
</table>
<table align="center" width="990" height="200" background="images/bg.jpg" border="1" bordercolor="#0099FF">
<tr>
<td valign="top"><h1 align="center"><font size="7">Log in</font>
</h1>
<table align="center" border="1" bordercolor="#666666" width="400" height="150">
<form name="check">
<tr>
<td align="center" width="200" height="50"><font size="4">Email </font></td>
<td align="center" height="50" ><input type="email" size="20" placeholder="e.g Fizza1046@gmail.com" name="uemail" /></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Password</font></td>
<td align="center"><input type="password"  placeholder="e.g ptcl123" name="upass"/></td>
</tr>
<tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="confirm" onclick="return(abc())"/>
</td>
</tr>
</form>
</table>




</td>
</tr>

</table>













</body>
</html>
