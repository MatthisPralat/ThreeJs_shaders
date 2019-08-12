<?php include('header.php'); ?>

<?php echo "<body>" ?>
<?php
$dir = "exemples";
echo "<h1>shader gallery</h1>";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false)
    {
      if($file != "." && $file !=  ".." )
        {
          echo "<section>";
          echo $file . "<br>";
          echo " <iframe src='exemples/".$file."' frameborder='0'  scrolling='no' ></iframe> ";
          echo "</section>";        
        }   
    }
    closedir($dh);
  }
}
?>
<?php echo "</body>" ?>
