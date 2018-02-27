<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="videoplayer.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="player.css">
    <script type="text/javascript" src="click_next.js"></script>
    <script type="text/javascript" src="videoplayer.js"></script>
    <style>
        section {
            display: block;
        }
    </style>
        <style>
    video { 
    -webkit-transform: scaleY(1); 
    -webkit-transform: scaleX(1); 
    
    }
    </style>
    <title>Document</title>
</head>
<body>
        <header>
                <h1>MY ANIME COLLECTION</h1>
            </header>
            <nav style="position: sticky;top: -1px;">
                <ul class="list">
                    <li><a href="collection.html">Home</a></li>
                    <li>All Anime</li>
                    <li>Favorites</li>
                    <li>Genre</li>
                    <li>Dubbed</li>
                    <li>Now-Watching</li>
                    <li><input type="text" placeholder="search" name="search-text"></li>
                    <li><button value="submit">SEARCH</button></li>
                </ul>
            </nav>
            <!-- <aside>
                <div class="side-bar">
                <ul>
                    <li>Ongoing Series: </li>
                    <li>Black Clover</li>
                    <li>Attack on Titan</li>
                </ul>
                </div>
            </aside> -->
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "zainsainik556";
                $dbname = "anime_collection";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
            ?>
            <div class="nxt-prv">

                    <button title="naruto" id="naruto">Naruto</button>
                    <button title="one-piece" id="one-piece" onclick="one_piece_click" style="float:right;">One Piece</button>

                </div>

                <script>
                    
                </script>
                <?php 
                    

                    ?>
            <section>
                    <div class="video-player">
                            
                            <video id="video1">
                                <source id="vid" src="css.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support HTML5 video.
                                </video>
                                <!-- <div class="buttons">
                                    <button onclick="playPause()">Play/Pause</button>
                                    <button onclick="makeBig()">Big</button>
                                    <button onclick="makeSmall()">Small</button>
                                    <button onclick="makeNormal()">Normal</button>
                                </div> -->
                    
                                <div class="controls">
                                    <button id='btnPlayPause' class='button' title='play' onclick='playPauseVideo();'></button>
                                    <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
                                    <button id='btnReplay' class='button' title='replay' onclick='replayVideo();'></button>  
                                    <button id='btnStop' class='button' title='stop' onclick='stopVideo();'></button>
                                    <div class="volume">
                                        <button id='btnMute' class='button' title='mute'></button>
                                        <input id="seek" class="slider" type="range" value="0.5" max="1" step="0.1">
                                    </div>
                                </div>
                          </div>
                    
            </section>
            <div>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi incidunt vitae nesciunt 
                quas labore odio ex illum, laborum numquam iure dolorem nostrum deserunt dignissimos, nam 
                adipisci, tenetur esse? Quaerat, voluptas.

                
            </div>
            <div class="clearfix"></div>
            <footer>
                <h4>Copyright &copy; 2017 Productions</h4>
            </footer>
    <script src="videoplayer.js">
        $('#naruto').on("click", function(e) {
    $('#vid').attr("src", "movie1.mp4");
    console.log("ads");
});
    </script>
    
    
              
</body>
</html>