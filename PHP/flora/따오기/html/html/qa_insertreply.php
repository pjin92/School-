<?
	include "common.php";

	$query = "select pos2, right(pos2,1) from qa where pos1=$pos1 and length(pos2)=length('$pos2')+1 and locate('$pos2',pos2)=1 order by pos2 desc limit 1";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if ($count > 0) 
	{
	$row=mysql_fetch_row($result);

	$a = "$row[1]";
    $b = ++$a;
	$new_pos2 = $pos2 . $b; 
	}
	else
	$new_pos2 = $pos2 . "A";
	$today = date("Y-m-d");
	$title39 = addslashes($title);
	$content39 = addslashes($content);
	$pos1 = (int)$pos1;
	$query="insert into qa (pos1,pos2,title39,name39,email39,passwd39,writeday39,count39,ishtml39,content39) values('$pos1','$new_pos2','$title39','$name','$email','$passwd','$today',0,'$yn_text','$content39');";
	$result=mysql_query($query);
	if(!$result) exit("큐에이인설트쿼리에러");
?>
<script>location.href="qa.php"</script>