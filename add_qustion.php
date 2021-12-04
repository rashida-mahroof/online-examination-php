<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
include("company_menu_form.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function valid()
{
if(document.getElementById("status").value=="-1")
	{
		alert("Select Category!");
		document.getElementById("status").focus();
    	return false;
	}
	if(document.getElementById("qstn").value=="")
	{
		alert("Enter question!");
		document.getElementById("qstn").focus();
    	return false;
 	}
	if(document.getElementById("a").value=="")
	{
		alert("Field is empty!");
		document.getElementById("a").focus();
    	return false;
 	}
	if(document.getElementById("b").value=="")
	{
		alert("Field is empty!");
		document.getElementById("b").focus();
    	return false;
 	}
	if(document.getElementById("c").value=="")
	{
		alert("Field is empty!");
		document.getElementById("c").focus();
    	return false;
 	}
	if(document.getElementById("d").value=="")
	{
		alert("Field is empty!");
		document.getElementById("d").focus();
    	return false;
 	}
	if(document.getElementById("ansr").value=="-1")
	{
		alert("choose answer!");
		document.getElementById("ansr").focus();
    	return false;
	}
	if(document.getElementById("dur").value=="")
   	{
     	alert("Enter duration!");
     	document.getElementById("dur").focus();
     	return false;
 	}
	if(/[^0-9 ]/gi.test(document.getElementById("dur").value))
	{
		alert("Special characters are not allowed in this field");
		document.getElementById("dur").focus();
		return false;
	}
	if(document.getElementById("mark").value=="")
   	{
     	alert("Enter mark!");
     	document.getElementById("mark").focus();
     	return false;
 	}
	if(/[^0-9 ]/gi.test(document.getElementById("mark").value))
	{
		alert("Special characters are not allowed in this field");
		document.getElementById("mark").focus();
		return false;
	}
	
	
}	
		
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/styleform.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>Add Question
    </h1>
  </div>
  <table width="507" border="0" align="center" cellpadding="20" cellspacing="10">
  <div align="center">
    <tr>
      <td width="198">Category </td>
      <td width="199"><select name="category" id="status">
        <option value="-1">Select</option>
		<option value="GK">GK</option>
        <option value="Computer">Computer</option>
        <option value="English">English</option>
        <option value="Maths">Maths</option>
        <option value="Other">Other</option>
         <option value="C">C</option>
          <option value="Java">Other</option>
      </select>      </td>
    </tr>
    <tr>
      <td colspan="" >Enter Question : 
      <textarea name="question" cols="300" rows="5" id="qstn"></textarea></td>
    </tr>
    <tr>
      <td><p>Choices : </p>
        <p>a
          <textarea name="answer1" cols="43" style="width:200" rows="3" id="a"></textarea>
        </p></td>
      <td>
        <p>&nbsp;</p>
        <p>b
          <textarea name="answer2" cols="43" rows="3" id="b"></textarea>
</p>      </td>
    </tr>
    <tr>
      <td>c      
      <textarea name="answer3" cols="43" rows="3" id="c"></textarea ></td>
      <td>
        <p>d
          <textarea name="answer4" cols="43" rows="3" id="d"></textarea>
</p>        </td>
    </tr>
    <tr>
      <td>Answer : </td>
      <td><select name="ans" id="ansr">
        <option value="-1">Select</option>
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
      </select>      </td>
    </tr>
    <tr>
      <td>Duration : </td>
      <td><input name="dur" type="text" size="5" maxlength="5" id="dur" />Seconds</td>
    </tr>
    <tr>
      <td>Mark : </td>
      <td><input name="mark" type="text" size="5" id="mark"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit"  class="testimonial-name" value="   Next     " onclick="return valid();"/>      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST['Submit']))
{
	$category=$_POST['category'];
	$question=$_POST['question'];
	$answer1=$_POST['answer1'];
	$answer2=$_POST['answer2'];
	$answer3=$_POST['answer3'];
	$answer4=$_POST['answer4'];
	$ans=$_POST['ans'];
	$dur=$_POST['dur'];
	$mark=$_POST['mark'];
	
//	echo "$category,$question, $answer1,$answer2,$answer3,$answer4,$ans,$dur,$mark,";
	$str="insert into questions(c_logid,category,questions,op_a,op_b,op_c,op_d,answer,mark,time_duration)values('$lid','$category','$question','$answer1','$answer2','$answer3','$answer4','$ans','$mark','$dur');";
	

	$i=mysqli_query($con,$str);
//	echo $str;
	if($i>0)
	{
		?>
		<script>
		alert(" Do you want to continue ? ")
		</script>
		<?php
	}
}
?>
<?php include("footer.html"); ?>

