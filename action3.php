<?php
$serverName='localhost';
$dbname='id7775254_hearit';
$dbPassword='HEARITROOT';
$username='id7775254_root';

$conn = mysqli_connect($serverName,$username,$dbPassword,$dbname);

$artist=$_GET['artist'];
$songname=$_GET['songname'];
$url = $_GET['url'];

$repeat="select artist,songname,url from shuffledplaylist where url='$url'";
$result=mysqli_query($conn,$repeat);
if (mysqli_num_rows($result) >0){
  echo "This song is already in the list <br>";
  echo "<a href='playlists.php'>Go back to the main page</a>";
}
else{
$sql = "insert into shuffledplaylist(artist, songname, url) values ('$artist', '$songname', '$url')";
mysqli_query($conn,$sql);

echo $artist . "<br>";
echo $songname."<br>";
 echo $url. "<br>";
 echo "Added Successfully! Check at the bottom of the list for the song added. <br> <a href='playlists.php'>Go back to the main page</a> ";
}


mysqli_close($conn);
 ?>
