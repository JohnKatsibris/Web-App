<?php
	if(isset($_POST["Vessel"])){
		//get all post variable value
		$Vessel=$_POST['Vessel'];
		$Email=$_POST['Email'];
		$e_vessel=$_POST['e_vessel'];
		$Evonews=$_POST['Evonews'];
		$Outlook=$_POST['Outlook'];
		$PMS=$_POST['PMS'];
		$Findaport=$_POST['Findaport'];
		$Hydrus=$_POST['Hydrus'];
		$Voyager=$_POST['Voyager'];
		$Loading_pc=$_POST['Loading_pc'];
		$message=$_POST['message'];

        // connect to msql database
		$conx=mysqli_connect("localhost","root","","test");
        // create sql statement
		$sql="INSERT INTO `test2`(`Vessel`, `Email`, `e_vessel`, `Evonews`, `Outlook`, `PMS`, `Findaport`, `Hydrus`, `Voyager`, `Loading_pc`, `message`) VALUES ('$Vessel','$Email','$e_vessel','$Evonews','$Outlook','$PMS','$Findaport','$Hydrus','$Voyager','$Loading_pc','$message')";
        //execute sql statement
		$result=mysqli_query($conx,$sql);
        //check sql result
		if($result==TRUE){
			echo "success";
		}else{
			echo "failed";
		}
	}
?>