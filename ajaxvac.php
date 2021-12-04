<?php
	    $con=mysqli_connect("localhost","root","","online_examination");
		session_start();
		$lid=$_SESSION['lid'];
	    $idd=$_GET['c'];
	    
		$str="select * from exam where vid=$idd and clid=$lid";
		$res=mysqli_query($con,$str);
		if(mysqli_num_rows($res))
		{
		$res1=mysqli_fetch_array($res);
		
		?>
		<input type="text" name="exid" id="exid" value="<?php echo $res1[0] ?>"/>
        <?php }else{ ?>
		<input type="text" name="exid" id="exid" value="0"/>
		<?php
		}
		?>