<?
   if (strcmp($filename1, ""))      // 선택한 파일이 있는지 조사
  {
      if (file_exists("product/$filename1_name")) exit("동일한 파일이름 있음.");
      if (!copy($filename1,"product/$filename1_name")) exit("업로드 실패.");

  }
  if (strcmp($filename2, ""))      // 선택한 파일이 있는지 조사
  {
      if (file_exists("product/$filename2_name")) exit("동일한 파일이름 있음.");
      if (!copy($filename2,"product/$filename2_name")) exit("업로드 실패.");

  }
  if (strcmp($filename3, ""))      // 선택한 파일이 있는지 조사
  {
      if (file_exists("product/$filename3_name")) exit("동일한 파일이름 있음.");
      if (!copy($filename3,"product/$filename3_name")) exit("업로드 실패.");

  }
?>
<script>location.href="upload.html"</script>