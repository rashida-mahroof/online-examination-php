<select name="department" id="dep">
	   <option value="-1">Choose department</option>
	   <?php
	    $con=mysqli_connect("localhost","root","","online_examination");
	   $idd=$_GET['c'];
		$str="select * from department where c_logid='$idd'";
		$res=mysqli_query($con,$str);
		while($res1=mysqli_fetch_array($res))
		{
		?>
          <option value="<?php echo $res1[0] ?>"><?php echo $res1[1] ?></option>
        <?php }?>
		
      </select>