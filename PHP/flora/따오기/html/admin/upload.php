<?
	if(strcmp($filename,"none"))
	{
		$newfilename="new.txt";
		if(file_exists("product/$newfilename"))exit("������ �����̸� ����.");
		if(!copy($filename,"product/$newfilename"))exit("���ε� ����.");
		
		echo("�����̸� : $filename_name <br> ����ũ�� : $filename_size");
	}
?>