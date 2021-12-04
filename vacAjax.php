<select name="vacancy" id="vac">
	   <option value="-1">Select</option>
	   <?php 
	   $con=mysqli_connect("localhost","root","","online_examination");
	   $cid=$_GET['c'];
	   $str="select * from vacancies where clogid='$cid' and vdate>=curdate()";
	   $res=mysqli_query($con,$str);
	   while($res1=mysqli_fetch_array($res))
	  {
		?>
			<option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option>
		<?php } ?>
      </select>