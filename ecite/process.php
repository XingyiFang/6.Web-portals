<?php
	error_reporting(0);
	include 'mysql_con.php';
	session_start(); 
	
	$array= array();
	$array['result']= true;
	//include 'db_con.php';
	
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
		 $array['result']= false;
		 $array['msg']= "Incorrect verification code";
		 //array_push($array, "Incorrect verification code");
		 //echo  '<strong>Incorrect verification code.</strong>'; 
	} else { 
		 // add form data processing code here 
		 //upload pdf file
		$output_dir = "pdf/";
		date_default_timezone_set('US/Eastern');
		$newname = date('Y-m-d_H-i-s');
		//echo date('Y-m-d_H-i-s');

		if(isset($_FILES["myfile1"]))
		{
			//Filter the file types , if you want.
			if ($_FILES["myfile1"]["error"] > 0)
			{
			  echo "Error: " . $_FILES["myfile1"]["error"] . "<br>";
			}
			else
			{
				$pieces = explode(".", $_FILES["myfile1"]["name"]);
				switch ($_FILES["myfile1"]["type"]) {
					case 'application/pdf':
						$bUploaded = move_uploaded_file($_FILES["myfile1"]["tmp_name"],$output_dir.$pieces[0].$newname.".".$pieces[1]);
						if(!$bUploaded){
							$array['result']= false;
							$array['msg']= 'Failed to upload pdf, please contact us.';
						}else{
							$array['msg']= 'Uploaded pdf :'.$pieces[0].'-'.$newname.'.'.$pieces[1];
							//pdf then insert into db
							$pdf =$pieces[0].$newname.".".$pieces[1];
						}
						//echo '<br/><strong>Verification successful.</strong>';
					// Allowed
					break;
					default:
						$array['result']= false;
						$array['msg']= 'please upload pdf file';
					break;
				}
				//move the uploaded file to uploads folder;
			}
		}
		//print_r(); 
		//insert into db
		$proj_name =$_POST["pro_name"];
		$email =$_POST["email"];
		$contact_name=$_POST["contact_name"];
		$roles =$_POST["role"];
		$orgnizations =$_POST["organizations"];
		$description =$_POST["pro_description"];
		$platform =$_POST["platform"];
		$usage =$_POST["usage"];
							
		$ram =$_POST["ram"];
		//$disk =$_POST["disk"];
		$dataset =$_POST["dataset"];
		$nodes =$_POST["nodes"];
		//$pm =$_POST["pm"];
		$cpu =$_POST["cpu"];
							
		//$subnet =$_POST["subnet"];
		$themes =$_POST["data_type"];
		$format =$_POST["data_format"];
		$access =$_POST["access"];
		$public =$_POST["ip"];
		$cluster =$_POST["cluster"];
		$ports =$_POST["ports"];
		$os =$_POST["os"];
		$software =$_POST["software_list"];
		$modules =$_POST["modules_list"];
		$startdate =$_POST["startdate"];
		$enddate =$_POST["enddate"];
		//$period =$_POST["period"];
		$allday =$_POST["allday"];
							
		//$pm_description =$_POST["pm_description"];
		$data_feed =$_POST["data_feed"];
		$data_read =$_POST["data_read"];
		$aws =$_POST["aws"];
							
		$applyTime = date("Y-m-d h:i:sa");
							
		$startdate = str_replace('/', '-', $startdate);
		$startdate = date('Y-m-d', strtotime($startdate));
							
		$enddate = str_replace('/', '-', $enddate);
		$enddate = date('Y-m-d', strtotime($enddate));
		//var_dump($startdate);
		//$startdate = "2016-02-07";
							
		//check exists
		$query = "select id from form where proj_name = '{$proj_name}'" ;
		$selret = mysqli_query($conn, $query);
		$row = mysqli_fetch_row($selret);
		if($row == null){
			$query = "INSERT INTO ecite (proj_name, email,contact_name, roles, orgnizations, description, usagefor, platform, themes, format, access, ports, os, software, modules, startdate, enddate,  ram,  dataset, nodes, cpu,  public, cluster, allday, data_feed,data_read,aws,pdf, applytime) VALUES
			('$proj_name','$email','$contact_name','$roles', '$orgnizations', '$description','$usage', '$platform', '$themes','$format','$access','$ports','$os', '$software', '$modules', '$startdate', '$enddate', $ram, $dataset, $nodes, $cpu,  $public, $cluster, $allday, '$data_feed', '$data_read', $aws, '$pdf', '$applyTime');";
			mysqli_query($conn, $query);
			// insert into statement, SQL; 13 text, 6 int, 4 boolean
			$array['msg']= 'You have submitted successfully!';
		}else{
			$array['result']= false;
			$array['msg']= 'The project name has been used.';
		}
	};
	//header('Content-Type: application/json');
	echo json_encode($array); 
?>
