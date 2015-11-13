<?
	if(strcmp($filename,"none"))
	{
		$newfilename="new.txt";
		if(file_exists("product/$newfilename"))exit("동일한 파일이름 있음.");
		if(!copy($filename,"product/$newfilename"))exit("업로드 실패.");
		
		echo("파일이름 : $filename_name <br> 파일크기 : $filename_size");
	}
?>