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
    <title>Channels</title>
    <style>
        #welcome {
            display: flex;
            justify-content: center;
        }

        #welcome>p {
            position: relative;
            font-family: sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            letter-spacing: 4px;
            overflow: hidden;
            background: linear-gradient(90deg, #000, #aefe8e, #000);
            background-repeat: no-repeat;
            background-size: 85%;
            animation: animate 3s linear infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: rgba(0, 0, 0, 0);
        }

        @keyframes animate {
            0% {
                background-position: -500%;
            }

            100% {
                background-position: 500%;
            }
        }

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

        form label {
            color: #fff;
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
                    <a href="rock.php"><img src="Pictures/rockicon.png" alt="Rock" style="height:30px;position:absolute;" /></a>&nbsp;&nbsp; | <a href="aboutus.html">About Us</a>
                </font>
            </td>
        </tr>
    </table>
    <?php
    $channel_id = intval($_GET['id']);
    $queryy = "select channelname from channels where channelid = " . $channel_id;
    $result = mysqli_query($conn, $queryy);
    $channelname = mysqli_fetch_row($result);

    ?>
    <div id="welcome">
        <p> <?php echo $channelname[0] ?> <p>
    </div>
    <hr>
    <div class="container">
        <div class="grid-container">
            <?php

            $last_id = mysqli_insert_id($conn);
            //   $channel_id =intval($_GET['id']);
            $sql = "select id,artist,songname,url,channelname from edm where channelid = " . $channel_id;
            $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row){
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

            <?php   }
            } else{ ?>
            <h2 style="color:white">No Songs yet!</h2>  

            <?php } ?>
        </div>
    </div>

    <p align='center'><a href="#top" name="bottom">Back to top</p>

</body>

</html>