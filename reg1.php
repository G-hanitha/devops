<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
 die('could not connect:'.mysql_error());
}
mysql_select_db('vit',$conn);
echo 'connect ok';
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$g=0;

$i=0;
$j=0;
if(isset($_POST['uname']))
{
$a=$_POST['uname'];
}
if(isset($_POST['ln']))
{
$b=$_POST['ln'];
}
if(isset($_POST['fname']))
{
$c=$_POST['fname'];
}
if(isset($_POST['mname']))
{
$d=$_POST['mname'];
}
if(isset($_POST['roll']))
{
$e=$_POST['roll'];
}

if(isset($_POST['pass']))
{
$g=$_POST['pass'];
}

if(isset($_POST['gender']))
{
 $i=$_POST['gender'];
}
if(isset($_POST['add']))
{
$j=$_POST['add'];
}
$sql="insert into reg1(fn,ln,father,mother,roll,password,gender,address)values('$a','$b','$c','$d','$e','$g','$i','$j')";
 $result=mysql_query($sql,$conn);
if($result)
{
echo 'one row inserted';
} 
 else
echo mysql_error();
?>