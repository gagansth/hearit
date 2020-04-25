<html>
  <head>
    <title>Playlists</title>
    <style>
    
        input{
            padding:10px;
            margin:10px;
            border-radius:5%;
            width:auto;
            height:18px;
            background-color:rgba(197, 239, 247, 1);
            opacity:0.4;
        }
        input:hover{
            opacity:1;
        }
        
    .parallax{
      background-image: url("Pictures/1.png");
      height:150%;
      width:auto;
      background-attachment:fixed;
      background-repeat:no-repeat;
      background-size:cover;
      background-position:center;


    }
    body{
      margin:0px;
      background-image:url("Pictures/e.jpg");
      background-attachment:fixed;
      background-repeat:no-repeat;
      background-size:cover;
color:#aefe8e;


    }
    body a{
      color:#aefe8e;
    }

    table{
      text-align:center;
    }

    .picture{
      background-image:url("Pictures/m.jpg");
      background-attachment:fixed;
      background-size:cover;

    }
    #bottom-container{
      width:auto;
      height:auto;
      text-align:center;
      position:relative;
      text-align:bottom;
      background-image:url("Pictures/st.jpg");
      background-size:cover;
      background-attachment:fixed;
    }
    #old-hits{
      padding:10px;
      margin-bottom:20px;
      font-size:4em;
      font-weight:bold;
      color:cyan;
    }

    .container{
    width:95%; 
    /* width: 1000px;   */
    position: relative;
    display: flex;
    justify-content: space-between;
    margin-left: 15px;
}
.container .card {
    position:relative;
}
 .container .card .face{
    width:300px;
    height:200px;
    transition: 0.5s;
}
    .card .face.face1{
    position: relative;
    background: #333;
    display: flex;
    /* justify-content: center; */
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}
.card:hover .face.face1{
    transform: translateY(0px);
}
.face1 .content{
    opacity:0.5;
    transition: 1s;
    
}
.card:hover .face.face1 .content {
    opacity: 1;
}

.card .face.face2{
    position: relative;
    /* height:50px; */
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0,0,0,0.8);
    transform: translateY(-100px);
}
.card:hover .face.face2{
    transform: translateY(0px);
}
.card .face.face2 .content p{
    margin: 0;
    padding: 0; 
    color: #fff;  
    font-family: consolas;
}
.grid-container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 15px;
}
    </style>
  </head>

  <body bgcolor="#206040" link="white" alink="green">
<div class="parallax">
    <table width="100%" border="1">

      <tr height="200" >
        <td colspan="2" align="center"><h1> <font family="comics sans" color="yellow"> <a name="top">Welcome to HearIt!!!</a></font></h1></td>
      </tr>
      <tr>
        <td align="center" colspan="2" height="100">
          <font size="5">
            <a href="index.php" color="white">Home</a> &nbsp;|
            <a href="english.php">English</a> &nbsp;|
            <a href="hindi.php">Hindi</a> &nbsp;|
            <a href="nepali.php">Nepali</a> &nbsp;|
            <a href="playlists.php">Shuffled Playlist</a> &nbsp;|
            <a href="kpop.html">K-POP</a> &nbsp; |
            <a href="rock.php"><img src="Pictures/rockicon.png" alt="Rock" style="height:30px;position:absolute;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |
            <a href="edm.php"><img src="Pictures/edm.png" alt="EDM" style="height:40px;position:absolute;margin-top:-4px;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |
            <a href="aboutus.html">About Us</a>
          </font>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <form name='addForm' method='get' action="action3.php"/>
            <label>Enter Artist Name</label>
            <input type='text' name='artist' id='artist' required></br>
            <label>Enter Song Name</label>
            <input type='text' name='songname' id='songname' required><br>
            <label>Enter Youtube URL</label>
            <input type='text' name='url' id='url' required></input><br>
            <button type='submit' >Add</button> &nbsp; &nbsp; &nbsp;
            <a href="#bottom">Check below</a>
          </form>
        </td>
      </tr>

      <tr>
        <td>
          <a href="https://www.youtube.com/watch?v=rtOvBOTyX00" target="_blank">Christina Perri-A thousand years</a><br><br>
          <a href="https://www.youtube.com/watch?v=dG6-bU6esKo" target="_blank">Lifehouse ft Natasha Bedingfield-Between the raindrops</a><br><br>
          <a href="https://www.youtube.com/watch?v=mwZb1o9XOzU" target="_blank">Alvaro &amp; Joey Dale-Ready for action</a><br><br>
          <a href="https://www.youtube.com/watch?v=JRfuAukYTKg" target="_blank">David Guetta ft Sia-Titanium</a><br><br>
          <a href="https://www.youtube.com/watch?v=mk48xRzuNvA" target="_blank">The Script ft Will.i.am-Hall of fame</a><br><br>
          <a href="https://www.youtube.com/watch?v=T3E9Wjbq44E" target="_blank">Gym Class Heroes ft Adam Levine-Stereo heart</a><br><br>
          <a href="https://www.youtube.com/watch?v=C-dvTjK_07c" target="_blank">Usher ft Pitbull-Dj got us fallin' in love again</a><br><br>
          <a href="https://www.youtube.com/watch?v=985efUAJ2I8" target="_blank">Lady Gaga-Just dance</a><br><br>
          <a href="https://www.youtube.com/watch?v=D6DFLNa6MBA" target="_blank">Ellie Goulding-Love me like you do</a><br><br>
          <a href="https://www.youtube.com/watch?v=CGyEd0aKWZE" target="_blank">Ellie Goulding-Burn</a><br><br>
          <a href="https://www.youtube.com/watch?v=3O1_3zBUKM8" target="_blank">Naughty Boy ft Sam Smith-La la la</a><br><br>
          <a href="https://www.youtube.com/watch?v=U41KPUfOSFk" target="_blank">Justin Timberlake-Mirrors</a><br><br>
          <a href="https://www.youtube.com/watch?v=o8pAIO3CPBY" target="_blank">Bruno Mars-Count on me</a><br><br>
          <a href="https://www.youtube.com/watch?v=bltr_Dsk5EY" target="_blank">Afrojack ft Wrabel-Ten feet tall</a><br><br>
          <a href="https://www.youtube.com/watch?v=CFF0mV24WCY" target="_blank">Tiesto-Red Lights</a><br><br>

<div class="picture">
          <a href="https://www.youtube.com/watch?v=JMl8cQjBfqk" target="_blank">Angels and Airwaves-The adventure</a><br><br>
          <a href="https://www.youtube.com/watch?v=nW-lo1iUs7U" target="_blank">Angels and Airwaves-True Love</a><br><br>
          <a href="https://www.youtube.com/watch?v=Tr8uesBowS4" target="_blank">Limp Bibzkit-Behind blue eyes</a><br><br>
          <a href="https://www.youtube.com/watch?v=gS9o1FAszdk" target="_blank">The Script-The man who can't be moved</a><br><br>
          <a href="https://www.youtube.com/watch?v=8UVNT4wvIGY" target="_blank">Gotye ft Kimbra-Somebody that i used to know</a><br><br>
          <a href="https://www.youtube.com/watch?v=Kw2FVxSOhv4" target="_blank">Eagles-Love will keep us alive</a><br><br>
          <a href="https://www.youtube.com/watch?v=ctXeHc9_kr8" target="_blank">Eagles-Hotel california</a><br><br>
          <a href="https://www.youtube.com/watch?v=DelhLppPSxY" target="_blank">Avenged Sevenfold-Hail to the king</a><br><br>
          <a href="https://www.youtube.com/watch?v=sWqsgEYNii4" target="_blank">Polyphia-Crush</a><br><br>
          <a href="https://www.youtube.com/watch?v=0pngejHJW7Y" target="_blank">Zayion McCall ft Zay Hilfigerrr-JuJu on that beat</a><br><br>
          <a href="https://www.youtube.com/watch?v=4NJlUribp3c" target="_blank">Desiigner-Panda</a><br><br>
          <a href="https://www.youtube.com/watch?v=RYCj2MiVjAE" target="_blank">Manas Ghale-Yatri</a><br><br>
          <a href="https://www.youtube.com/watch?v=KagvExF-ijc" target="_blank">Avril Lavigne-Smile</a><br><br>
          <a href="https://www.youtube.com/watch?v=oWidxg_YCIU" target="_blank">Dabin ft Dia Frampton-Bloom</a><br><br>
          <a href="https://www.youtube.com/watch?v=j2GKIjrkZz0" target="_blank">NEFFEX-Myself</a><br><br>
          <a href="https://www.youtube.com/watch?v=cN4fNaUAMbA" target="_blank">50 Cent ft Adam Levine &amp; Eminem - My Life</a><br><br>
          <a href="" target="_blank"></a><br><br>
          <a href="" target="_blank"></a><br><br>
          <a href="" target="_blank"></a><br><br>


        </td>



      <td>
         
          <a href="https://www.youtube.com/watch?v=1y6smkh6c-0" target="_blank">Swedish House Mafia ft John Martin-Don't you worry child</a><br><br>
          <a href="https://www.youtube.com/watch?v=bpOR_HuHRNs" target="_blank">Flo-rida ft Sia-Wild Ones</a><br><br>
          <a href="https://www.youtube.com/watch?v=y6120QOlsfU" target="_blank">Darude-Sandstorm</a><br><br>
          <a href="https://www.youtube.com/watch?v=p-Z3YrHJ1sU" target="_blank">Edward Maya &amp; Vika Jigulina-Stereo love</a><br><br>
          <a href="https://www.youtube.com/watch?v=oASZG96v0Rk" target="_blank">Akcent-That's my name</a><br><br>
          <a href="https://www.youtube.com/watch?v=Ndpryp2OlUQ" target="_blank">Yelawolf-Till it's gone</a><br><br>
          <a href="https://www.youtube.com/watch?v=TZCXqL1ce4w" target="_blank">Travis Barker-Can a drummer get some</a><br><br>
          <a href="https://www.youtube.com/watch?v=kDo2SiW3JHU" target="_blank">Cash Cash ft Bebe Rexha-Take me home</a><br><br>
          <a href="https://www.youtube.com/watch?v=pUUGJD-JjGA" target="_blank">Bebe Rexha-I got you</a><br><br>
          <a href="https://www.youtube.com/watch?v=OwP6U0LRzQM" target="_blank">Conor Maynard ft Neyo-Turn around</a><br><br>
          <a href="https://www.youtube.com/watch?v=yCZuzbpVhHM" target="_blank">Cody Simpson-On my mind</a><br><br>
          <a href="https://www.youtube.com/watch?v=IeXrrP9JXLQ" target="_blank">Enrique Iglesias ft Sammy Adams-Finally found you</a><br><br>
          <a href="https://www.youtube.com/watch?v=yV8tm-ZPdpE" target="_blank">Deorro x Chris Brown-Five more hours</a><br><br>
          <a href="https://www.youtube.com/watch?v=ih2xubMaZWI" target="_blank">OMFG-Hello</a><br><br>
      <div class="picture">
          <a href="https://www.youtube.com/watch?v=hHGsHPzrfE4" target="_blank">Conrad Sewell-Hold me up</a><br><br>
          <a href="https://www.youtube.com/watch?v=BkyMHrnRD3o" target="_blank">Justin Bieber-What do you mean(Alison Wonderland remix)</a><br><br>
          <a href="https://www.youtube.com/watch?v=RHeHj_vSapA" target="_blank">How it was done:OST Sherlock </a><br><br>
          <a href="https://www.youtube.com/watch?v=7aDuXhEaPg0" target="_blank">The mute girl theme:OST Kung Fu Hustle</a><br><br>
          <a href="https://www.youtube.com/watch?v=vIT8FK_50Vs" target="_blank">Wreck it Ralph:OST Wreck It Ralph</a><br><br>
          <a href="https://www.youtube.com/watch?v=JE2m64CwQPQ" target="_blank">Kabaddi :OST Intro part </a><br><br>
          <a href="https://www.youtube.com/watch?v=WaBBcEvNdxE" target="_blank">Senya:OST Naruto Shippuuden</a><br><br>
          <a href="https://www.youtube.com/watch?v=daPo6q4FXDw" target="_blank">Naruto main theme:OST Naruto</a><br><br>
          <a href="https://www.youtube.com/watch?v=2SPt2B9IZM8" target="_blank">Daniel Veerapen-There were two</a><br><br>
          <a href="https://www.youtube.com/watch?v=awimSQD2Dyo" target="_blank">Mako-Our story</a><br><br>
          <a href="https://www.youtube.com/watch?v=qGRU3sRbaYw" target="_blank">Son Tung MTP-Chung ta khong thuoc ve nhau</a><br><br>
          <a href="https://www.youtube.com/watch?v=GdzUojuZG08" target="_blank">Hitmane-Over you(Chet Porter remix)</a><br><br>
          <a href="https://www.youtube.com/watch?v=VDASBTcHlZY" target="_blank">Whiiite-Shots go off</a><br><br>
          <a href="https://www.youtube.com/watch?v=xyqQ4iT4IeU" target="_blank">David Guetta ft Taped Rai-Just one last time</a><br><br>
          <a href="https://www.youtube.com/watch?v=KrVC5dm5fFc" target="_blank">Nicky Romero-Toulouse</a><br><br>
          <a href="https://www.youtube.com/watch?v=RSj0mPJsMy0" target="_blank">Chris Brown-Zero</a><br><br>
          <a href="https://www.youtube.com/watch?v=PWhMoGt0cs8" target="_blank">Gryffin ft Bipolar Sunshine-Whole heart</a><br><br>
          <a href="https://www.youtube.com/watch?v=Z4To6bfNZPU" target="_blank">KRNFX &amp; Leroy Sanchez-Party Monster/Fake love(Beatbox Mashup)</a><br><br>
          <a href="https://www.youtube.com/watch?v=eg3omyesStg" target="_blank">Clean Bandit ft Sean Paul &amp; Anne-Marie-Rockabye</a><br><br>
          <a href="" target="_blank"></a><br><br>
          <a href="" target="_blank"></a><br><br>
</td>
</div>
      </tr>
    </table>
      <div id='bottom-container'>
        <div id='old-hits'> Old Hits </div>
        <div class="container">
          <div class="grid-container">
            <?php
            $serverName = 'localhost';
            $dbname = 'hearit';
            $dbPassword = '';
            $username = 'root';

            $conn = mysqli_connect($serverName, $username, $dbPassword, $dbname);
            // $artist=$_GET['artist'];
            // $songname=$_GET['songname'];
            // $url = $_GET['url'];
            $last_id = mysqli_insert_id($conn);
            $sql = "select id,artist,songname,url from shuffledplaylist ";
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
      </div>
      <table border="1" width="100%">
      <tr>
        <td align="center">
          <a href="#top" name="bottom">Back to top</a>
        </td>
      </tr>
    </table>
    </div>
  </body>

</html>
