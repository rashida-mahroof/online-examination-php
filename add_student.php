<?php
$con=mysqli_connect("localhost","root","","online_examination");
session_start();
$lid=$_SESSION['lid'];
 include("college_menu.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script language="javascript" type="text/javascript">
            var xmlHttp;
            function showss(mid){
			//alert(mid)
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="vacAjax.php"
                url +="?c=" +mid
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("vac").innerHTML=xmlHttp.responseText 
					//alert(xmlHttp.responseText)
                    //document.getElementById("x").value=xmlHttp.responseText 
                }
            } 
			
			
			
			function showss2(mid){
			//alert(mid)
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajaxvac.php"
                url +="?c=" +mid
                xmlHttp.onreadystatechange = stateChange1;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            function stateChange1(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("ex").innerHTML=xmlHttp.responseText 
					//alert(xmlHttp.responseText)
                    //document.getElementById("x").value=xmlHttp.responseText 
                }
            } 
			
			
			
	function valid1()
	{
		if(document.getElementById("dpt").value=="-1")
		{
			alert("Select Department!");
			document.getElementById("dpt").focus();
			return false;
		}
		if(document.getElementById("sem").value=="-1")
		{
			alert("Select Semester!");
			document.getElementById("sem").focus();
			return false;
		}
		return true;
	}	
	function valid2()
	{
		if(document.getElementById("cmp").value=="-1")
		{
			alert("Select Company!");
			document.getElementById("cmp").focus();
			return false;
		}
		if(document.getElementById("vac").value=="-1")
		{
			alert("Select Vacancy!");
			document.getElementById("vac").focus();
			return false;
		}
		return true;
	}
	
			
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="grid">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h1>Add Student
    </h1>
  </div>
 Department :<select name="department" id="dpt">
        <option value="-1">Select</option>
		<?php
		$name="";
		$str="select * from department where c_logid='$lid'";
		$res=mysqli_query($con,$str);
	
		while($res1=mysqli_fetch_array($res))
		{
		?>
            <option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option><?php }?>
      </select>Semester : <select name="sem" id="sem">
        <option value="-1">Select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option> 
      </select>&nbsp;<input type="submit" name="Submit1" value="Submit" onclick="return valid1();"  />
	
	 <?php
		  if(isset($_POST['Submit1']))
{
	$department=$_POST['department'];
	$sem=$_POST['sem'];
	
		  $str="select * from students where d_id='$department' and semester='$sem'";
	$res=mysqli_query($con,$str);
	if(mysqli_num_rows($res)>0){
	?>
	 <table  align="center" width="400" border="1" cellspacing="2" cellpadding="10">
        <tr>
          <th> Name</td>
          <th>Select</td>
        </tr>
		 
	<?php
	while($res1=mysqli_fetch_array($res))
	{
		  ?>
        <tr>
		
          <td><?php echo $res1[1] ?> <?php echo $res1[2] ?></td>
		  
          <td><input type="checkbox" class="c1-5" width="100" height="100" checked="checked" name="name[]" value="<?php echo $res1['logid'] ?>" id="std" /></td>
        </tr><?php } }  ?>
      </table>
      <p>&nbsp;</p></td></tr>
	 
    
   Company
		<select name="company" id="cmp" onchange="showss(this.value)">
		 <option value="-1">Select company</option>
        <?php
		$a="select companies.* from companies,requests where companies.logid=requests.c_logid and requests.colid='$lid' and requests.status='accepted'";
		$res=mysqli_query($con,$a);
		
		while($res1=mysqli_fetch_array($res))
		{
		?>
		
			<option value="<?php echo $res1['logid'] ?>"><?php echo $res1[1] ?></option>
		<?php } ?>
      </select>     Vacancy:<p>
        <select name="vacancy" id="vac" onchange="showss2(this.value);">
          <option value="-1">Select</option>
        </select>
      </p>    
	  <div id="ex">
	  <input type="hidden" name="exid" />
	  </div>
	  
	   &nbsp;<input type="submit" name="Submit" value="   Submit  " onclick="return valid2();" /><?php } ?>
   
   <input type="hidden" id="nm" value="<?php echo $name?>" name="n[]"/>
</form>
</div>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['Submit']))
{
	$flag="";
	$stlid=$_POST['name'];
	
	$exid=$_POST['exid'];
	
	foreach($stlid as $sid)
	{
		$x="select selected_students.*,students.* from selected_students,students where examid='$exid' and s_logid='$sid'";
	$res5=mysqli_query($con,$x);
	if(mysqli_num_rows($res5)>0){
	if($res6=mysqli_fetch_array($res5)){
	$name=$res6['first_name'];
     
	$name1=$_POST['n'];
	foreach($name1 as $ee)
	{
	echo $ee;
	}

	}}else{
	$flag=1;
		$str="insert into selected_students(examid,s_logid)values('$exid','$sid')";
		$res=mysqli_query($con,$str);
		
	}
	
	if($flag==1)
{
?>
<script>alert("successfully inserted");</script>

<?php } 
}

	
	
}
?>
<?php include("footer.html"); ?>
