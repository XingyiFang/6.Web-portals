<?php
$output_dir = "C:/inetpub/wwwroot/GitHub/PHP/onlineform/";
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
				move_uploaded_file($_FILES["myfile1"]["tmp_name"],$output_dir.$pieces[0].$newname.".".$pieces[1]);
				echo "Uploaded pdf :".$pieces[0]."-".$newname.".".$pieces[1];
			// Allowed
			break;
			default:
				echo "please upload pdf file";// Not allowed
			break;
		}
		//move the uploaded file to uploads folder;

	}

}

?>