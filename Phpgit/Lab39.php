<?php
$filename="file1.txt";
$file=fopen($filename,"w");
if($file==false){
    echo "Error in opening new file";
    exit();
}
fwrite($file,"This is a sample"."<br>" ."test hello");
fclose($file);

//reading in a file
$file=fopen($filename,"r");
if($file==false){
echo"Error in opening file";
exit();
}
$filesize=filesize($filename);
$filetext=fread($file,$filesize);
fclose($file);
//echo "File size",$filesize."<br>";
echo "$filetext"."<br>";
//echo "file name".$filename;
?>
