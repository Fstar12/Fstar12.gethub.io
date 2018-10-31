<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title>
<script>
function abc()
{
fname=document.forms["check"]["fname"].value
if (fname=="")
{ 
document.getElementById("a").innerHTML="*Required";
return false}
lname=document.forms["check"]["lname"].value
if (lname=="")
{
document.getElementById("b").innerHTML="*Required";
return false}
email=document.forms["check"]["uemail"].value
if (email=="")
{
document.getElementById("c").innerHTML="*Required";
return false}
upass=document.forms["check"]["upass"].value
if (upass=="")
{
document.getElementById("d").innerHTML="*Required";
return false}
}
cpass=document.forms["check"]["cpass"]
if (cpass=="")
{
alert ("please Enter Your Confirm pass") ;
return false}
if (upass!==cpass)
{
alert ("Password does not match") ;
return false}
}



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
<td align="center"><font size="5" color="#33FFFF"><a href="Sign up.php">Sign up</a></font>
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
<table align="center"  width="990" height="500" background="images/bg.jpg" border="1" bordercolor="#0099FF">
<tr>
<td valign="top"><h1 align="center"><font size="7">Sign up</font>
</h1>
<table align="center" border="1" bordercolor="#666666" width="400" height="150">
<form name="check" action="php.php" method="post" enctype="multipart/form-data" >
<tr>
<td align="center" width="200" height="50"><font size="4">First Name </font></td>
<td align="center" height="50" ><input type="text" size="20" placeholder="e.g Fizza" maxlength="10" name="fname" />
<span id="a" style="color:#FF0000;" ></span></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Last Name</font></td>
<td align="center"><input type="text"  placeholder="e.g Khan" maxlength="10" name="lname" /><span id="b" style="color:#FF0000;" ></span></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Email</font></td>
<td align="center"><input type="text"  placeholder="e.g Fizza1046@gmail.com" name="uemail" /><span id="c" style="color:#FF0000;" ></span></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Password</font></td>
<td align="center"><input type="password"  placeholder="e.g ptcl123" name="upass" /><span id="d" style="color:#FF0000;" ></span></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Confirm Password</font></td>
<td align="center"><input type="password"  placeholder="e.g ptcl123" name="Cpass" /><span id="e" style="color:#FF0000;" ></span></td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Gender</font></td>
<td align="center"><font size="4"><input type="radio" value="male" name="gender"/>Male
<input type="radio" value="Female" name="gender" />Female
<span id="f" style="color:#FF0000;" ></span>
</font>
</td>
</tr>
<tr>
<td align="center" height="50"><font size="4">Upload your picture</font> </td>
<td align="center" height="50"><input type="file" name="upload"></td>
</tr>
<tr>
<td>Select Country </td>
<td align="center"><select name="country">
<option value="pak">Pakistan</option>
<option value="Aus">Australia</option>
<option value="Eng">England</option>
<option value="India">India</option>
<option value="Brazil">Brazil</option>
<option value="Turkey">Turkey</option>
<option value="Afghanistan">Afghanistan</option>
</select>
<span id="h" style="color:#FF0000;" ></span>
</td>
</tr>
<tr>


<td align="right" colspan="2"><input type="submit" value="submit" onclick="return(abc())"/>
<input type="reset" value="Reset"  />
</td>
</tr>
</form>
<tr>
<td colspan="2" align="center">
have already account?<a target="_blank" href="log in.php"> Log in</a>
</td>
</tr>
</table>




</td>
</tr>

</table>
</body>
</html>
