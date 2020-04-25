<?php
 $serverName = 'localhost';
 $dbname = 'hearit';
 $dbPassword = '';
 $username = 'root';

 $conn = mysqli_connect($serverName, $username, $dbPassword, $dbname);


?>

<html>

<head>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
  <title>EDM</title>
  <style>
    input {
      padding: 10px;
      margin: 10px;
      border-radius: 5%;
      width: auto;
      height: 18px;
      background-color: rgba(197, 239, 247, 1);
      opacity: 0.4;
    }

    input:hover {
      opacity: 1;
    }

    form label{
    color:#fff;
}
  </style>
  <link rel="stylesheet" href="css/style.css">
</head>

<body link="white" alink="green">
<table width="100%" border="1">
    <tr height="200">
      <td colspan="2" align="center">
        <h1>
          <font family="comic sans" color="yellow"><a name="top">Welcome to HearIt!!!</a></font>
        </h1>
      </td>
    </tr>
    <tr>
      <td align="center">
        <font size="5">
          <a href="index.php" color="white">Home</a> &nbsp;|
          <a href="english.php">English</a> &nbsp;|
          <a href="hindi.php">Hindi</a> &nbsp;|
          <a href="nepali.php">Nepali</a> &nbsp;|
          <a href="playlists.php">Shuffled Playlist</a> &nbsp;|
          <a href="kpop.html">K-POP</a> &nbsp; |
          <a href="rock.php"><img src="Pictures/rockicon.png" alt="Rock" style="height:30px;position:absolute;"/></a>&nbsp;&nbsp; |          <a href="aboutus.html">About Us</a>
        </font>
      </td>
    </tr>
  </table>
  <form name='addForm' method='get' action="action5edm.php">
    <label>Enter Artist Name</label>
    <input type='text' name='artist' id='artist' required></br>
    <label>Enter Song Name</label>
    <input type='text' name='songname' id='songname' required></br>
    <label>Enter Youtube URL</label>
    <input type='text' name='url' id='url' required></input></br>
    <label>Enter Channel Name(optional)</label> 
    <!-- <select name='channelselect' id="channelselect"> -->
      
    <?php

    $query =  "select channelid,channelname from channels";
    $channellist = mysqli_query($conn, $query);

    echo "<select name='channelid' id='channelselect'>";
while($cl = mysqli_fetch_assoc($channellist)){
  echo "<option value='" .$cl['channelid']. "'>" .$cl['channelname'] . "</option>";

} ?>
</select></br></br>
    <button type='submit'>Add</button>&nbsp;&nbsp;&nbsp;
    <a href="#bottom">Check Below</a>
  </form></br>

  <div class="container">
    <div class="grid-container">
      <?php
     
      // $artist=$_GET['artist'];
      // $songname=$_GET['songname'];
      // $url = $_GET['url'];
      $last_id = mysqli_insert_id($conn);
      $sql = "select id,artist,songname,url,channelname from edm where channelname = '' or channelname = 'null' order by artist";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      foreach ($result as $row) {
        $embedurl = str_replace("/watch?v=", "/embed/", $row['url']);
        ?>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <iframe src="<?php echo $embedurl; ?>" height="200" width="300" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p><?php echo $row['artist']; ?> - <?php echo $row['songname']; ?></p>
            </div>
          </div>
        </div>

      <?php   }   ?>
    </div>
    </div>

    <p align='center'><a href="#top" name="bottom">Back to top</p>
  
</body>

</html>