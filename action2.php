<?php
$serverName='localhost';
$dbname='hearit';
$dbPassword='';
$username='root';

$conn = mysqli_connect($serverName,$username,$dbPassword,$dbname);

$artist=$_GET['artist'];
$songname=$_GET['songname'];
$url = $_GET['url'];

if(($artist !=null && $artist !="") || ($songname !=null && $songname !="") || ($url !=null && $url !="")){
$repeat="select artist,songname,url from englishsongs where url='$url'";
$result=mysqli_query($conn,$repeat);
if (mysqli_num_rows($result) >0){
  echo "This song is already in the list <br>";
  echo "<a href='english.php'>Go back to the main page</a>";
}
else{
$sql = "insert into englishsongs(artist, songname, url) values ('$artist', '$songname', '$url')";
mysqli_query($conn,$sql);

echo $artist . "<br>";
echo $songname."<br>";
 echo $url. "<br>";
 echo "Added Successfully! Check at the bottom of the list for the song added. <br> <a href='english.php'>Go back to the main page</a> ";
}
}
else{
  echo "You must enter details to add new link!!";
}

mysqli_close($conn);
 ?>
