<?php
if(isset($_POST['submit'])){
	for($i=0; $i < count($_FILES['file']['tmp_name']);$i++)
        {
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"][$i]);
			$extension = end($temp);
			if ((($_FILES["file"]["type"][$i] == "image/gif")
			|| ($_FILES["file"]["type"][$i] == "image/jpeg")
			|| ($_FILES["file"]["type"][$i] == "image/jpg")
			|| ($_FILES["file"]["type"][$i] == "image/pjpeg")
			|| ($_FILES["file"]["type"][$i] == "image/x-png")
			|| ($_FILES["file"]["type"][$i] == "image/png")
			|| ($_FILES["file"]["type"][$i] == "application/pdf"))
			&& ($_FILES["file"]["size"][$i] < 20000000))
			{
				if ($_FILES["file"]["error"][$i] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br>";
				}
				else
				{
					echo "Upload: " . $_FILES["file"]["name"][$i] . "<br>";
					echo "Type: " . $_FILES["file"]["type"][$i] . "<br>";
					echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
					echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br>";

					if (file_exists("../upload/" . $_FILES["file"]["name"][$i]))
					{
						echo $_FILES["file"]["name"][$i] . " already exists. ";
					}
					else
					{
						$dirName = "../upload/".date("d.m.y")."/".$_POST['employee_no'];
						mkdir($dirName, 0777, true);
						move_uploaded_file($_FILES["file"]["tmp_name"][$i],
						$dirName."/" . $_FILES["file"]["name"][$i]);
						echo "Stored in: " . "../upload/" . $_FILES["file"]["name"][$i];
					}
				}
			}
			else
			{
			 	echo "Invalid file ".$_FILES["file"]["type"][$i].'--size--'.$_FILES["file"]["size"][$i].'--'.in_array($extension, $allowedExts).$extension;
			}
		}
}
?>