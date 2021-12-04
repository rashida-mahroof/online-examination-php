<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$idd=$_GET['id'];
include("company_menu.php");
?>
<body>

<form id="form1" name="form1" method="post" action="">
  <div align="center">
   
      <h1>Edit Question </h1>
    </div>
    <table width="507" border="0" align="center" cellpadding="20" cellspacing="10">
	<?php
	$str="select * from questions where qid='$idd'"; 
	//echo $str;
	$res=mysqli_query($con,$str);
	
	if($res1=mysqli_fetch_array($res))
	{
	?>
      <tr>
        <td width="198">Category </td>
        <td width="199"><select name="category" id="status">
            <option value="-1">Select</option>
			<option value="GK" <?php if($res1['category']=="GK") { echo "selected=selected"; } ?> >GK</option>
            <option value="Computer" <?php if($res1['category']=="Computer") { echo "selected=selected"; } ?> >Computer</option>
            <option value="English" <?php if($res1['category']=="English") { echo "selected=selected"; } ?>>English</option>
            <option value="Maths" <?php if($res1['category']=="Maths") { echo "selected=selected"; } ?>>Maths</option>
            <option value="Other" <?php if($res1['category']=="Other") { echo "selected=selected"; } ?>>Other</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">Enter Question :
          <textarea name="question" cols="100" rows="5" id="qstn" ><?php echo $res1['questions']?></textarea></td>
      </tr>
      <tr>
        <td><p>Choices : </p>
            <p>a
              <textarea name="answer1" cols="43" rows="3"  id="a"><?php echo $res1['op_a'] ?></textarea>
          </p></td>
        <td><p>&nbsp;</p>
            <p>b
              <textarea name="answer2" cols="43" rows="3" id="b"><?php echo $res1['op_b'] ?></textarea>
          </p></td>
      </tr>
      <tr>
        <td>c
          <textarea name="answer3" cols="43" rows="3" id="c"><?php echo $res1['op_c'] ?></textarea ></td>
        <td><p>d
          <textarea name="answer4" cols="43" rows="3" id="d"><?php echo $res1['op_d'] ?></textarea>
        </p></td>
      </tr>
      <tr>
        <td>Answer : </td>
        <td><select name="ans" id="ansr">
            <option value="-1">Select</option>
            <option value="a" <?php if($res1['answer']=="a") { echo "selected=selected"; } ?>>a</option>
            <option value="b" <?php if($res1['answer']=="b") { echo "selected=selected"; } ?>>b</option>
            <option value="c" <?php if($res1['answer']=="c") { echo "selected=selected"; } ?>>c</option>
            <option value="d" <?php if($res1['answer']=="d") { echo "selected=selected"; } ?>>d</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Duration : </td>
        <td><input name="dur" type="text" value="<?php echo $res1['time_duration']?>" size="5" maxlength="5" id="dur" />
          Seconds</td>
      </tr>
      <tr>
        <td>Mark : </td>
        <td><input name="mark" type="text" value="<?php echo $res1['mark']?>" size="5" id="mark"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Update" onclick="return valid();"/>
        </td>
      </tr>
    </table>
	<?php } ?>
  </div>
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
	
	//echo "$category,$question, $answer1,$answer2,$answer3,$answer4,$ans,$dur,$mark,";
	$str="update questions set category='$category',questions='$question',op_a='$answer1',op_b='$answer2',op_c='$answer3',op_d='$answer4',answer='$ans',mark='$mark',time_duration='$dur' where qid='$idd';";
	

	$i=mysqli_query($con,$str);
	//echo $str;
	if($i>0)
	{
		?>
		<script>
		alert(" Do you want to continue ? ")
		window.location="view_qstn.php?id=<?php echo $idd; ?>";
		</script>
		<?php
	}
}
?>
<?php include("footer.html"); ?>
