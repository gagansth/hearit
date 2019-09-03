<?php
$serverName = 'localhost';
$dbname = 'hearit';
$dbPassword = '';
$username = 'root';

$conn = mysqli_connect($serverName, $username, $dbPassword, $dbname);

$artist = $_GET['artist'];
$songname = $_GET['songname'];
$url = $_GET['url'];

if (($artist != null && $artist != "") || ($songname != null && $songname != "") || ($url != null && $url != "")) {
  if (strpos($url, 'youtube.com/watch') == false) {
    echo "The link you entered is not a valid youtube link. 
    Please enter a valid youtube link <br>";
    echo "<a href='nepali.php'>Go back to the main page</a>";
  } else {
    $repeat = "select artist,songname,url from shuffledplaylist where url='$url'";
    $result = mysqli_query($conn, $repeat);
    if (mysqli_num_rows($result) > 0) {
      echo "This song is already in the list <br>";
      echo "<a href='playlists.php'>Go back to the main page</a>";
    } else {
      $sql = "insert into shuffledplaylist(artist, songname, url) values ('$artist', '$songname', '$url')";
      mysqli_query($conn, $sql);

      echo $artist . "<br>";
      echo $songname . "<br>";
      echo $url . "<br>";
      echo "Added Successfully! Check at the bottom of the list for the song added. <br> <a href='playlists.php'>Go back to the main page</a> ";
    }
  }
} else {
  echo "You must enter details to add new link!!";
}

mysqli_close($conn);
