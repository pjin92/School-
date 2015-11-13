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
	$today = date("y-m-d");
	$title68 = addslashes($title);
	$content68 = addslashes($content);
	$pos1 = (int)$pos1;
	$query="insert into qa (pos1,pos2,title68,name68,email68,passwd68,writeday68,count68,ishtml68,content68) values('$pos1','$new_pos2','$title','$name','$email','$passwd','$today',0,'$yn_text','$content');";
	$result=mysql_query($query);
	if(!$result) exit("QnAInsertreplyE");
?>
<script>location.href="qa.php"</script>