<?
   if (strcmp($filename1, ""))      // ������ ������ �ִ��� ����
  {
      if (file_exists("product/$filename1_name")) exit("������ �����̸� ����.");
      if (!copy($filename1,"product/$filename1_name")) exit("���ε� ����.");

  }
  if (strcmp($filename2, ""))      // ������ ������ �ִ��� ����
  {
      if (file_exists("product/$filename2_name")) exit("������ �����̸� ����.");
      if (!copy($filename2,"product/$filename2_name")) exit("���ε� ����.");

  }
  if (strcmp($filename3, ""))      // ������ ������ �ִ��� ����
  {
      if (file_exists("product/$filename3_name")) exit("������ �����̸� ����.");
      if (!copy($filename3,"product/$filename3_name")) exit("���ε� ����.");

  }
?>
<script>location.href="upload.html"</script>